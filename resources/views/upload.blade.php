<!-- <!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <h1>Upload Excel File</h1>
    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" accept=".xlsx" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <h1>Upload Excel File</h1>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" accept=".xlsx" required>
        <button type="submit">Upload Excel File</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html> -->

<!-- resources/views/upload.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <h1>Upload Excel File</h1>
    
    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" accept=".xlsx" required>
        <button type="submit">Upload Excel File</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</body>
</html>

