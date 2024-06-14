<!DOCTYPE html>
<html>
<head>
    <title>Preview Excel File</title>
</head>
<body>
    <h1>Preview Excel File</h1>
    <table >
        <thead>
            <tr>
                @if (isset($data[0]))
                    @foreach ($data[0] as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
