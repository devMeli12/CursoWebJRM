<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/Estilos/session.css">
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
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
    <form onsubmit="return validateForm()">
      <div class="mb-3">
        <label for="texto" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="texto" placeholder="" required minlength="3">
        <div class="invalid-feedback">El nombre debe tener al menos 3 letras y solo debe contener letras.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="" required>
        <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="" required minlength="8">
        <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres.</div>
      </div>
      <div class="mt-3">
      <button type="button" class="btn btn-login" onclick="location.href='../pages/cursos.php'">Ingresar</button>

      </div>
    </form>
  </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <!-- <script src="../assets/Scripts/registro.js"></script> -->
  <script src="../assets/Bootstrap/js/bootstrap.bundle.js"></script>
</html>