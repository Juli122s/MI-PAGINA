
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="Cuenta.css">

  <style>
    *{
    margin: 0%;
    padding: 0%;
    list-style: none;
    box-sizing: border-box;/* para que los elemntos no se salgan del contenedor*/
    font-family: 'Montserrat',Arial,sans-serif;
}
    body {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background: rgb(88, 88, 98);
  }
   .cuenta {
    background: rgb(88, 88, 98);
    color: black;
    height: 100%;
    width: 22%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
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
    height: 65%;
    margin-left: 10%;
    margin-bottom: 4%;
    text-align: center;
}

  .cuenta .config h2 {/*AQUI TIENE QUE MOSTRAR EL NOMBRE*/
text-align: center;
}
.cuenta .config P {/*AQUI MUESTRA EL USUARIO*/
     text-align: center;
     margin-bottom: 2%;
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

.cuenta .pagar {/*PAGO ONLINE*/
    width: 100%;
    padding-top: 3%;
    padding-bottom: 2%;
    text-align: center;
    border-bottom: 1px solid gray;

}
.cuenta .pagar a {
    width: 100%;
    text-decoration: none;
    font-size: 18px;
    color: white;
}
.cuenta .pagar a:hover {
    color: gray;
}

.cuenta .contraseña {/* CAMBIAR CONTRASEÑA*/
    width: 100%;
    text-align: center;
    padding-top: 3%;
    padding-bottom: 2%;
    border-bottom: 1px solid gray;
}
.cuenta .contraseña a{
    width: 100%;
    text-decoration: none;
    color: white;
    font-size: 18px;
}

.cuenta .contraseña a:hover {
    color: gray;
}
.cuenta .ayuda {/*AYUDA CON LA PAGINA*/
    width: 100%;
    padding-top: 3%;
    padding-bottom: 2%;
    text-align: center;
    border-bottom: 1px solid gray;
}

.cuenta .ayuda a {
    width: 100%;
    text-decoration: none;
    color: white;
    font-size: 18px;
}
.cuenta .ayuda a:hover {
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
    background: rgb(204, 204, 204);

  }
</style>
</head>
<body>
 

  <div class="cuenta" >
   <div class="config">       
      <img src="img/avatar.png" alt="">
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
      <div class="pagar">
        <a href="#pagar">PAGO ONLINE</a>
      </div>
      <div class="contraseña">
        <a href=""> CAMBIAR CONTRASEÑA</a>
      </div>

      <div class="ayuda">
        <a href="">AYUDA</a>
      </div>

      <div class="cerrarS">
        <a href="index.html">CERRAR SESION</a>
      </div> 
  </div>
    
      <main  class="content_main"style="text-align:center;">
        <div id="edit" style="margin-left:5%; text-align: center; padding-top:30px;">
          <p style=" font-size:35px; margin-bottom:15px">EDITAR PERFIL</p>
          <form style="border-radius:10px; border:1px solid black; width:95%; height: 650px;padding-top:25px; padding:30px; margin-bottom: 25px;">
            <label style="float:left;">Nombre: </label><input type="text"name=new_name value="new_name">
            <label>Apellido: </label><input type="text"name=new_ap value="">
            <label>Usuario: </label><input type="text"name=new_user value=""><br>
            <label>Email: </label><input type="email"name=new_email value="">
            <label>Fecha Nacimiento: </label><input type="date" name=new_date value="">
          </form>
        </div>

        
       <div id="pagar" style="margin-bottom: 30px;padding-top:20px;">
         <div class="tabla" style="margin-left:5%;">
          <p style="margin-top:25px; font-size:35px; margin-bottom:15px">ABONOS</p>
           <table style="border-radius:10px; border:1px solid black; width:95%; height: 600px;padding-top:20px; padding:20px; margin-bottom: 60px;">
              <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
             <tr>
               <td colspan=""><h4 style="margin-left: 5px; text-size-adjust: 15px;"> ARANCEL MENSUAL  </h4></td>
               <td colspan=""><h4 style=" text-size-adjust: 15px;">  10/2023 </h4></td>
               <td><p style="margin-left: 100px; margin-right: 80px;">$4000</p></td>
               <td><a href="#" style="margin-left: 200px;">Pagar</a></td>
               <td><a href="#" style="color: rgb(35, 34, 34); margin-left: 20px;">ver</a></td>
             </tr>
                    
            </table>
                  
          </div>

        </div>
        <div id="ayuda">

        </div>

      </main>
    

    
</body>
</html>