<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <header>

    </header>
    <main>
    <section class="editar">
            <h3>Editar usuario:</h3>
            <br><br>
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
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            margin:0;
            color:white;
            background-color: cadetblue;
            display: flex;
            flex-direction:column;
            min-height:100vh;
        }
        header, main, footer{
            flex:1;
        }
        .editar{
            margin: 2%;
            text-align:center;
            form{
                align-items: center;
                justify-content: center;
                text-align:center;
                input{
                    width: 50vw;
                    padding: 1vh;
                }
                .btn-ingresar{
                    color: white;  
                    background-color: gray;
                    width: 20%;
                    padding: 1vh;
                    font-size: large;
                }
            }
        }
        .derechos{
            color:white;
            background-color:black;
            padding: 1px;
            text-align:center;
            font-size:small;
        }
        @media (max-width:600px){
            .editar{
                margin:1%;
                width: 100vw;
                form{
                    input{
                        width: 100vw;
                    }
                }
            }   
        }
</body>
</html>