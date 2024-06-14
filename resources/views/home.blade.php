<!-- @extends('layouts.master_layout')
@section('title')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Welcome</h3>
        </div>

    </div>
@endsection -->

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>

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
</body>
</html>
