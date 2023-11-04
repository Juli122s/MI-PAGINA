
<!DOCTYPE html>
<html>
    
  <body>
        <div class="espacio"></div>
        
        <div class="form"><a class="inicio" href="inscripciones.html" style="margin-left:10px; color:white;">INICIO</a>
            <h2>Formulario de Registro a Nivel Incial</h2>
            <form style="margin-bottom:15px; "  method="post">
            <label>Nombre: </label><input type="text" name="nombre" value="">
            <label>Apellido: </label><input type="text" name="apellido" value="">
           <label>DNI: </label> <input type="number" name="dni">
           <label>Fecha de Nacimiento: </label><input type="date" name="fecha_Nac">
           <label>Email: </label><input type="email" name="email">
           <label>Celular: </label> <input type="number" name="celular">

           <input class="btn" type="submit" name="registro" placeholder="Enviar">
        </form>
        
            
        </div>
       
      <?php
        include("registrarI.php");
        ?>
    </body>
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Club de Patinaje Artistico</title>
        <link rel="stylesheet" href="inicial.css">
        <link rel="icon" href="img/loggo.png">

    <style>
       *{
      padding: 0;
        margin: 0;
     text-decoration: none;/*para sacar todos los subrayados*/
     list-style: none;/*borra los estilos de las listas*/
     box-sizing: border-box;/* para que los elemntos no se salgan del contenedor*/
     font-family: 'Montserrat',Arial,sans-serif;
      }

          .espacio {
          width: 100%;
         height: 70px;
         background: rgb(7, 7, 7);
          }
   
          body .inicio {
            
          }
         .btn {
         background-color: rgb(25, 92, 193);
         color: #fff;
         width: calc(80% - 20px);
         margin: 0 10%;
          margin-top: 22px;
         border: none;
         }
        .ok {
         text-align: center;
         width: 100%;
         padding: 12px;
         background-color: rgb(19, 251, 69);
         color: #fff;
         }
         .bad {
         text-align: center;
         width: 100%;
         padding: 12px;
         background-color: #a22;
           color: #fff;
         }
        </style>
    </head>
</html>