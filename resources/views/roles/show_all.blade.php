<html>
<head>
    <title>View all Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h1>View All Information</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Client</th>
            <th>Description</th>
        </tr>
        @foreach($roles as $roles)
        <tr>
            <td>{{ $roles->id }}</td>
            <td>{{ $roles->cliente }}</td>
            <td>{{ $roles->descripcion }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>