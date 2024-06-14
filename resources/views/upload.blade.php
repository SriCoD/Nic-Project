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
        <button type="submit">Upload</button>
    </form>
</body>
</html>
