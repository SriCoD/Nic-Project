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
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
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
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
