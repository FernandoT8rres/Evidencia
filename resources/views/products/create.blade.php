<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
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
    <h1>Create New product</h1>
    <form action="{{ route('product.store') }}" method="POST">
    @csrf
    <!-- Otros campos del formulario -->
    <label>Cliente:</label>
    <input type="text" name="cliente" required>
    <input type="text" name="Name" value="{{ old('Name') }}" required>
    <input type="number" name="Price" value="{{ old('Price') }}" required>
    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea>
    <button type="submit">Guardar</button>
</form>

</body>
</html>