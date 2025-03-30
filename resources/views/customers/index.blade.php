<html>
<head>
    <title>costumers list</title>
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
            color: black;
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
            color: black;
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
            color: black;
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
    <a href="{{ route('customers.index') }}">Start Customer</a>

<div class="container">
    <h2>Customer List</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Agregar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
            @foreach ($customers as $customer)
    <tr>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->cliente }}</td>
        <td>{{ $customer->descripcion }}</td>
        <td>{{ $customer->number }}</td>
    </tr>
@endforeach

                <td>
                    <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
<a href="{{ route('pedidos.index') }}">Menu</a>
</body>
</html>