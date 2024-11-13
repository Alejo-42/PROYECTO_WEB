<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    </header>
    <main>
        <section class="ingresar">
            <h3>Ingresar usuario:</h3>
            <form action="/guardar" method="post">
                @csrf
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre"><br>
                
                <label for="apellido">Apellido:</label><br>
                <input type="text" name="apellido" id="apellido"><br>
                
                <label for="celular">Celular:</label><br>
                <input type="text" name="celular" id="celular"><br>

                <label for="cedula">Cedula:</label><br>
                <input type="text" name="cedula" id="cedula"><br><br>
                
                <button class="btn-ingresar" type="submit">Guardar Usuario</button>
            </form>
        </section>
        <section class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">CEDULA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getUsuario as $getUsuarios)
                    <tr>
                        <td scope="row">{{$getUsuarios->id}}</td>
                        <td>{{$getUsuarios->nombre}}</td>
                        <td>{{$getUsuarios->apellido}}</td>
                        <td>{{$getUsuarios->celular}}</td>
                        <td>{{$getUsuarios->cedula}}</td>
                        <td>
                            <a href="/editar/{{$getUsuarios->id}}"><button type="submit" class="btn btn-primary">Editar</button></a>
                            
                            <form action="/eliminar/{{$getUsuarios->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p class="derechos">Derechos de autor reservados &copy 2024</p>
    </footer>
    <style>
        *,
        *::after,
        *::before{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        body{
            background-color: white;
            display: flex;
            flex-direction:column;
            flex:1;
            min-height:100vh;
        }
        .ingresar{
            margin: 2%;
            text-align:center;
            form{
                text-align:center;
                .btn-ingresar{
                    color: white;
                    background-color: gray;
                    padding: 1vw;
                }
            }
        }
        .container{
            width: 100%;
            justify-content: end;
            margin: 1%;
            padding: 0;
            .table{
                width: 90vw;
            }
        }
        .derechos{
            color:white;
            background-color:black;
            padding: 1px;
            text-align:center;
            font-size:small;
        }
    </style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>