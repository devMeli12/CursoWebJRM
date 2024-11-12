function validateForm() {
  // Obtener los campos
  const nombre = document.getElementById('texto');
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  let isValid = true;

  // Validación de nombre con regex (solo letras y mínimo 3 caracteres)
  const nombreRegex = /^[A-Za-z\s]{3,}$/;
  if (!nombreRegex.test(nombre.value)) {
    nombre.classList.add('is-invalid');
    isValid = false;
  } else {
    nombre.classList.remove('is-invalid');
  }

  // Validación de correo
  if (!email.value || !email.checkValidity()) {
    email.classList.add('is-invalid');
    isValid = false;
  } else {
    email.classList.remove('is-invalid');
  }

  // Validación de contraseña
  if (password.value.length < 8) {
    password.classList.add('is-invalid');
    isValid = false;
  } else {
    password.classList.remove('is-invalid');
  }

  /* return isValid; */

  if(isValid){
    window.location.href = "/CursoWebJRM/public/pages/cursos.php";
  }

  return false;

}