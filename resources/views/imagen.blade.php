<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nombre_columna">Nombre:</label>
            <input type="text" name="nombre_columna" id="nombre_columna" value="{{ old('nombre_columna') }}">
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
