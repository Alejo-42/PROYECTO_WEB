<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/styleEU.css')}}">
    <title>Editar Usuario</title>
</head>
<body class="body">
    <header class="header">

    </header>
    <main class="main">
    <section class="editar">
            <h3>Editar usuario:</h3>
            <form action="/actualizar/{{$editUsuario->id}}" method="post">
                @csrf
                @method('put')
                <label for="nombre">Nombre:</label><br>
                <input value="{{$editUsuario->nombre}}" type="text" name="nombre" id="nombre"><br>
                
                <label for="apellido">Apellido:</label><br>
                <input value="{{$editUsuario->apellido}}" type="text" name="apellido" id="apellido"><br>
                
                <label for="celular">Celular:</label><br>
                <input value="{{$editUsuario->celular}}" type="text" name="celular" id="celular"><br>

                <label for="cedula">Cedula:</label><br>
                <input value="{{$editUsuario->cedula}}" type="text" name="cedula" id="cedula"><br><br>
                
                <button class="btn-ingresar" type="submit">Actualizar Usuario</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p class="derechos">Derechos de autor reservados &copy 2024</p>
    </footer>
</body>
</html>