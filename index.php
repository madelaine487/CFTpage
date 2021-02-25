<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->

<html>
<head>
<title>Iniciar sesión</title>

  <meta charset="utf-8">
<link rel="stylesheet" href="css/Iniciosession.css">


</head>


<body>

                
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="img/Bannerlogin.png" alt="" /></div>
        <div class="formBx">
         
          <form action="validar.php" method="post">
            <h2>Iniciar sesión</h2>
            <input type="text" name="mail" placeholder="Usuario" />
            <input type="password" name="pass" placeholder="Contraseña" />
            <input type="submit" name="submit" value="Entrar" />
            
            
            <p class="signup">
              No tengo una cuenta ?
              <a href="#" onclick="toggleForm();">Registro.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2>Create an account</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="email" name="" placeholder="Email Address" />
            <input type="password" name="" placeholder="Create Password" />
            <input type="password" name="" placeholder="Confirm Password" />
            <input type="submit" name="" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg" alt="" /></div>
      </div>
    </div>
  </section>




</body>
</html>