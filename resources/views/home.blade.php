<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toast/css/toastr.min.css')}}">
    <title>Home Page</title>
    <style>
        body {
            background: #6495ED;
            color: #98FB98;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 56px - 50px);
            flex-direction: column;
        }
        .card {
            background-color: #4169E1;
            border: none;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            color: #ecf0f1;
            margin-bottom: 20px;
        }
        .card h1, .card h2, .card h4 {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Georgia', serif;
        }
        .card form {
            display: flex;
            flex-direction: column;
        }
        .card form input[type="file"] {
            margin-bottom: 15px;
            background-color: #001f3f;
            border: none;
            padding: 10px;
            border-radius: 5px;
            color: #ecf0f1;
        }
        .card form button {
            background-color: #28a745;
            border: none;
            padding: 10px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card form button:hover {
            background-color: #218838;
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .navbar .nav-link {
            color: #ecf0f1 !important;
            margin: 0 5px;
            padding: 10px;
            border-radius: 10px;
            background: #4169E1;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .navbar .nav-link:hover {
            background-color: #6495ED;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        #filePreviewContainer {
            display: none;
            margin-top: 20px;
            width: 100%;
        }
        #filePreviewTable {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            color: #000000;
        }
        #filePreviewTable th, #filePreviewTable td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/srishti-jha-4808481ba?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/SriCoD" target="_blank">Github</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="{{ route('logout') }}" class="btn btn-danger" type="button">Logout</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <h1>Welcome to the Dashboard</h1>
            <h4>Upload your excel file</h4>
            <!-- Excel File Upload Form -->
            <form id="uploadForm" action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="excel_file" id="excel_file" accept=".xlsx" required onchange="previewFile()">
                <div id="filePreviewContainer">
                    <h2>File Preview</h2>
                    <table id="filePreviewTable">
                        <thead id="filePreviewHeader"></thead>
                        <tbody id="filePreviewBody"></tbody>
                    </table>
                </div>
                <button type="submit">Upload Excel File</button>
            </form>
            <!-- Display errors if there are any -->
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="footer">
        <p>@Srishti</p>
    </div>

    <script>
        function previewFile() {
            var file = document.getElementById('excel_file').files[0];
            
            if (!file || file.type !== "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
                alert('Please select a valid .xlsx file');
                return;
            }

            var reader = new FileReader();
            
            reader.onload = function(e) {
                var data = new Uint8Array(e.target.result);
                var workbook;
                
                try {
                    workbook = XLSX.read(data, {type: 'array'});
                } catch (error) {
                    console.error('Error reading the file:', error);
                    alert('Error reading the file');
                    return;
                }
                
                var firstSheetName = workbook.SheetNames[0];
                var worksheet = workbook.Sheets[firstSheetName];
                
                var json;
                try {
                    json = XLSX.utils.sheet_to_json(worksheet, {header: 1});
                } catch (error) {
                    console.error('Error converting sheet to JSON:', error);
                    alert('Error converting sheet to JSON');
                    return;
                }

                var tableHeader = document.getElementById('filePreviewHeader');
                var tableBody = document.getElementById('filePreviewBody');
                
                tableHeader.innerHTML = '';
                tableBody.innerHTML = '';
                
                // Add header row
                var headerRow = document.createElement('tr');
                json[0].forEach(function(cell) {
                    var th = document.createElement('th');
                    th.textContent = cell;
                    headerRow.appendChild(th);
                });
                tableHeader.appendChild(headerRow);
                
                // Add data rows
                json.slice(1).forEach(function(row) {
                    var tr = document.createElement('tr');
                    row.forEach(function(cell) {
                        var td = document.createElement('td');
                        td.textContent = cell;
                        tr.appendChild(td);
                    });
                    tableBody.appendChild(tr);
                });

                document.getElementById('filePreviewContainer').style.display = 'block';
            };

            reader.onerror = function(error) {
                console.error('Error reading file:', error);
                alert('Error reading file');
            };

            reader.readAsArrayBuffer(file);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('toast/js/toastr.min.js')}}"></script>
    <script type="text/javascript">
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>
</html>
