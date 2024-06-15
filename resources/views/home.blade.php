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
            background: #001f3f; /* Navy blue background */
            color: #ecf0f1;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 56px - 50px); /* Adjust height for navbar and footer */
        }
        .card {
            background-color: #013a63; /* Complementary dark color */
            border: none;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Darker shadow for better contrast */
            color: #ecf0f1;
        }
        .card h1, .card h2, .card h4 {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Georgia', serif; /* New font style for h2 and h3 */
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
            background-color: #28a745; /* Green color for upload button */
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
            background-color: #000; /* Match footer color with navbar */
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .navbar .nav-link {
            color: #ecf0f1 !important;
            margin: 0 5px;
            padding: 10px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .navbar .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
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
            <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="excel_file" accept=".xlsx" required>
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
