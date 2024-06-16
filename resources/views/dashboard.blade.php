<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Imported Excel Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e2e2e2; /* Slightly darker light gray background */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #28a745; /* Green color for header */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow for text */
            font-family: 'Arial Black', sans-serif; /* Font style for h1 */
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
            background-color: #ffffff; /* White background for the container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for the container */
            border-radius: 10px;
            padding: 20px;
        }
        .message {
            background-color: #d4edda; /* Light green for success message */
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .empty {
            text-align: center;
            margin-top: 20px;
            color: #6c757d; /* Muted color for empty message */
        }
        .empty p {
            background-color: #ffffff; /* White background for empty message card */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow for the card */
            border-radius: 5px;
            padding: 15px;
            display: inline-block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow for the table */
            background-color: #ffffff; /* White background for table */
        }
        table, th, td {
            border: 1px solid #dee2e6; /* Light gray border */
        }
        th, td {
            padding: 12px;
            text-align: left;
            font-family: 'Verdana', sans-serif; /* Font style for table content */
        }
        th {
            background-color: #28a745; /* Green header background */
            color: white;
            position: sticky;
            top: 0; /* Make header sticky */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow for header */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray background for even rows */
        }
    </style>
</head>
<body>
    <h1>Imported Excel Data</h1>

    <div class="container">
        @if (session('success'))
            <div class="message">
                {{ session('success') }}
            </div>
        @endif

        @if($importedData->isEmpty())
            <div class="empty">
                <p>No data available</p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>column1</th>
                        <th>column2</th>
                        <th>column3</th>
                        <th>column4</th>
                        <th>column5</th>
                        <th>column6</th>
                        <th>column7</th>
                        <th>column8</th>
                        <th>column9</th>
                        <th>column10</th>
                        <th>column11</th>
                        <th>column12</th>
                    
                        
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
                            <td>{{ $data->column12 }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
