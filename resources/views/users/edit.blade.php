<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Cliente:</label>
        <input type="text" name="costumer" value="{{ $users->costumer }}" required>
        <label>Descripción:</label>
        <textarea name="description" required>{{ $users->descripcion }}</textarea>
        <button type="submit">update?</button>
    </form>
</body>
</html>
