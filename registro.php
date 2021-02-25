<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->


<?php
    session_start();

    if (isset($_POST['validar'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['picture'] = $_POST['picture'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>

<!DOCTYPE>
<head>
<title>Login</title>

  <meta charset="utf-8">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/menucss.css">

</head>


<body>
<br>
<center>
    <div class="container-formulario">
    <img src="https://cftpucv.cl/wp-content/uploads/2020/10/logo-CFT-PUCV-con-catolica.png" alt="" class="img-reg-log">
    <br> <br> <br>
               <h1>Regístro CFT PUCV</h1>
<br> <br> <br>
                <form action="registrar.php" method="post">
                    
                    <div class="form-group">
                       
                
                         <div class="col-xs-10 col-xs-offset-1">
                          <input type="text" name="realname" class="formInput" required placeholder="NOMBRE">
                        
                        </div>
                    </div>




                    <div class="form-group">
                       
                     
                           <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" name="nick" class="formInput" required placeholder="Rut">

                        </div>
                    </div>


                    <div class="form-group">
                      
              
                           <div class="col-xs-10 col-xs-offset-1">
                            <input type="password" name="pass" class="formInput" required placeholder="Contraseña">

                        </div>
                    </div>

                    
                

                    <div class="form-group">
                        <button type="submit" class="btn-registro">Registrar</button>
                    </div>
                 


                </form>
          </div>
</center>
<?php
    if(isset($_POST['submit'])){
      require("registrar.php");
    }
  ?>


</body>
</html>




