<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/Estilos/session.css">
  <link rel="stylesheet" href="./assets/Bootstrap/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  <div class="login-container">
    <!-- Icono de usuario -->
    <div class="login-icon">
      <i class="bi bi-person-circle"></i>
    </div>

    <!-- Formulario -->
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="">
      </div>
      <a href="../pages/registro.php" class="register-link">Registrate si aún no tienes cuenta</a>
      <div class="mt-3">
        <button type="submit" class="btn btn-login">Ingresar</button>
      </div>
    </form>
  </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <script src="../assets/Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
