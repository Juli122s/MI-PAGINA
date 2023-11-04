<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="cuenta" >
   <div class="config">       
      <img src="img/avatar1.png" alt="">
      <h2>NOMBRE</h2>
      <P>@user</P> 
      

      <form>
        <p>CAMBIAR FOTO DE PERFIL</p>
          
        <input type="file" name="" value="">
        <button>Actualizar</button>         
      </form>  
    </div>
      <div class="edit">
       <a  href="#edit">EDITAR PERFIL</a>
      </div>
      <div class="inscrip">
        <a href="#pagar">INSCRIPCIONES</a>
      </div>
      <div class="alum">
        <a href=""> ALUMNOS </a>
      </div>

    

      <div class="cerrarS">
        <a href="logout.php">CERRAR SESION</a>
      </div> 
  </div>
  <main class="content_main">
  <h1>VISTA DEL ADMINISTRADOR</h1>
  </main>




</body>
<head>
    <style>
         .cuenta {
    height: 100%;
    width: 22%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(56, 56, 56);
    overflow-x: hidden;
    padding-top: 20px;
  }
 .cuenta a {
    padding: 16px;
    text-decoration: none;
    font-size: 20px;
    color: white;
  }

  .cuenta .config {/*div donde va la foto y btn para cambair*/
    width: 100%;
    height: 410px;
    display: flex;
    flex-direction: column;
    margin-top: 15px;
    color: white;

}

.cuenta .config img {
    border-radius: 50%;
    width: 80%;
    height: 60%;
    margin-left: 10%;
    margin-bottom: 4%;
    text-align: center;
}

  .cuenta .config h2 {/*AQUI TIENE QUE MOSTRAR EL NOMBRE*/
  text-align: center;
}
.cuenta .config P {/*AQUI MUESTRA EL USUARIO*/
     text-align: center;
     margin-bottom: 1%;
}
.cuenta .config form {
    border-top: 1px solid gray;
    border-bottom: 1px solid gray;
    padding-bottom: 2%;
    padding-top: 2%;
    margin-top: 3%;

}
.cuenta .config form p {    
    text-align: center;
    font-size: 18px;
    margin-bottom: 1%;
}


.cuenta .config form input {/*para poner la foto */
    float: left;
    width: 60%;
    margin-left: 10%;
}

.cuenta .config form button {
    float: left;
}

.cuenta .edit {/*EDITAR PERFIL*/
    width: 100%;
    padding-top: 2%;
    padding-bottom: 2%;
    text-align: center;
    border-bottom: 1px solid gray;

}
.cuenta .edit a {
    width: 100%;
    text-decoration: none;
    font-size: 18px;
    color: white;

}
.cuenta .edit a:hover {
    color: gray;
}

.cuenta .inscrip {/*PAGO ONLINE*/
    width: 100%;
    padding-top: 3%;
    padding-bottom: 2%;
    text-align: center;
    border-bottom: 1px solid gray;

}
.cuenta .inscrip a {
    width: 100%;
    text-decoration: none;
    font-size: 18px;
    color: white;
}
.cuenta .inscrip a:hover {
    color: gray;
}

.cuenta .alum {/* CAMBIAR CONTRASEÑA*/
    width: 100%;
    text-align: center;
    padding-top: 3%;
    padding-bottom: 2%;
    border-bottom: 1px solid gray;
}
.cuenta .alum a{
    width: 100%;
    text-decoration: none;
    color: white;
    font-size: 18px;
}

.cuenta .alum a:hover {
    color: gray;
}

.cuenta .cerrarS {/*CERRAR SESION*/
    width: 100%;
    text-align: center;
    padding-top: 3%;
    padding-bottom: 2%;
    border-bottom: 1px solid gray;
}
.cuenta .cerrarS a{
    width: 100%;
    text-decoration: none;
    color: white;
    font-size: 18px;
}

.cuenta .cerrarS a:hover {
    color: gray;
}

.content_main {
    margin-left: 22%;
    background-color: gray;
  }
    </style>
</head>
</html>