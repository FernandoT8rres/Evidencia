<html>
<head>
    <title>cache list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
        nav {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
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
        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        button:hover {
            background-color: #c82333;
        }
        a.button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
        }
        a.button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('cache.index') }}">Start order</a>
        <a href="{{ route('cache.create') }}">Create order</a>
        <a href="{{ route('cache.index') }}">View all data</a>
    </nav>

    <h1>Cache list</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Client</th>
            <th>Description</th>
            <th>Accions</th>
        </tr>
        @if(isset($cache))
    @foreach($cache as $cache)
        <tr>
            <td>{{ $cache->id }}</td>
            <td>{{ $cache->cliente }}</td>
            <td>{{ $cache->descripcion }}</td>
            <td>
                <a class="button" href="{{ route('cache.edit', $cache->id) }}">Edit</a>
                <form action="{{ route('cache.destroy', $cache->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="4">No orders available</td>
    </tr>
@endif

    </table>
    <a href="{{ route('pedidos.index') }}">Start order</a>
</body>
</html>