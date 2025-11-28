<?php
session_start();

// SI EL USUARIO YA INICIÓ SESIÓN → guardar info
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
}
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcademyX - Iniciar sesión</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
  

<?php if (isset($_GET["error"]) && $_GET["error"] == "login"): ?>
    <div class="alert alert-danger text-center">
        ❌ Correo o contraseña incorrectos
    </div>
<?php endif; ?>

<?php if (isset($_GET["login"]) && $_GET["login"] == "ok"): ?>
    <div class="alert alert-success text-center">
        ✅ Bienvenido, has iniciado sesión correctamente
    </div>
<?php endif; ?>


  <!-- LOGIN -->
  <div class="login-container" id="loginContainer">
    <div class="login-box" id="loginBox">
      <div class="login-icon">🎓</div>
      <h2>Inicia Sesión</h2>
      <p>Únete a miles de estudiantes en AcademyX</p>
    <form id="loginForm" method="POST" action="../Controller/CtrlLogin.php">

    <div class="mb-3 text-start">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" name="email" id="emailLogin" required>
    </div>

    <div class="mb-3 text-start">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="passwordLogin" required>
    </div>

    <button type="submit" class="btn btn-login">Iniciar sesión</button>
</form>

      <p class="mt-3">¿No tienes cuenta? <span class="link-toggle" id="mostrarRegistro">Regístrate</span></p>
    </div>

    <!-- REGISTRO -->
    <div class="login-box" id="registroBox" style="display:none;">
      <div class="login-icon">🎓</div>
      <h2>Crea tu cuenta</h2>
      <p>Comienza a aprender hoy mismo</p>
<form id="registroForm" method="POST" action="../Controller/CtrlRegistro.php">

  <div class="mb-3 text-start">
    <label class="form-label">Nombre completo</label>
    <input type="text" class="form-control" name="nombre" id="nombreRegistro" required>
  </div>

  <div class="mb-3 text-start">
    <label class="form-label">Correo electrónico</label>
    <input type="email" class="form-control" name="email" id="emailRegistro" required>
  </div>

  <div class="mb-3 text-start">
    <label class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="password" id="passwordRegistro" required>
  </div>

  <div class="mb-4 text-start">
    <label class="form-label">Tipo de cuenta</label>
    <select class="form-control" name="tipo" id="tipoRegistro" required>
      <option value="estudiante">Estudiante</option>
      <option value="instructor">Instructor</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary w-100">Registrarme</button>
</form>


      <p class="mt-3">¿Ya tienes cuenta? <span class="link-toggle" id="mostrarLogin">Inicia sesión</span></p>
    </div>
  </div>



 
  </main>

<script>
// Alternar pantallas
mostrarRegistro.addEventListener("click", () => {
  loginBox.style.display = "none";
  registroBox.style.display = "block";
});

mostrarLogin.addEventListener("click", () => {
  registroBox.style.display = "none";
  loginBox.style.display = "block";
});

// ❌ NO BLOQUEAR EL ENVÍO REAL DEL FORMULARIO
// loginForm y registroForm ya envían datos a PHP


  

  



</script>



</body>
</html>  
