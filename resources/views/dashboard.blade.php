<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Imported Excel Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Imported Excel Data</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if($importedData->isEmpty())
        <p>No data available</p>
    @else
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($importedData as $data)
                    <tr>
                        <td>{{ $data->column1 }}</td>
                        <td>{{ $data->column2 }}</td>
                        <td>{{ $data->column3 }}</td>
                        <td>{{ $data->column4 }}</td>
                        <td>{{ $data->column5 }}</td>
                        <td>{{ $data->column6 }}</td>
                        <td>{{ $data->column7 }}</td>
                        <td>{{ $data->column8 }}</td>
                        <td>{{ $data->column9 }}</td>
                        <td>{{ $data->column10 }}</td>
                        <td>{{ $data->column11 }}</td>
                        <td>{{ $data->column12}}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
