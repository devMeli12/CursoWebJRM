<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovatech Academy - Cursos Tecnológicos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body style="background-color: #1e0031; color: #fff;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#inicio">Innovatech Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#cursos">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="#planes">Planes</a></li>
                <li class="nav-item"><a class="nav-link" href="#paquetes">Paquete</a></li>
                <li class="nav-item"><a class="nav-link" href="#programacion">Programacion</a></li>
                <li class="nav-item"><a class="nav-link" href="#preguntasFrecuentes">Preguntas Frecuentes</a></li>
                <li class="nav-item"><a class="nav-link" href="#sobreNosotros">Sobre Nosotros</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sección Inicio -->
    <section id="inicio" class="container-fluid text-white text-left d-flex align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <!-- Texto y botón -->
                <div class="col-md-6">
                    <img src="assets/images/desarrollo_web.jpg" alt="Innovatech Academy" style="width: 150px;">
                    <h1 class="display-3 font-weight-bold">CURSOS TECNOLÓGICOS</h1>
                    <p class="lead text-highlight">TRANSFORMA TU FUTURO</p>
                    <a href="#" class="btn btn-primary-custom mt-3">INGRESA!</a>
                </div>
                <!-- Gráficos -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="graphics">
                        <img src="assets/images/desarrollo_web.jpg" alt="Graphic 1" class="graphic-icon">
                        <img src="assets/images/desarrollo_web.jpg" alt="Graphic 2" class="graphic-icon">
                        <img src="assets/images/desarrollo_web.jpg" alt="Graphic 3" class="graphic-icon">
                        <img src="assets/images/desarrollo_web.jpg" alt="Graphic 4" class="graphic-icon">
                        <img src="assets/images/desarrollo_web.jpg" alt="Graphic 5" class="graphic-icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Cursos -->
    <section id="cursos" class="container my-5">
        <h2 class="font-weight-bold display-4 text-left">CURSOS</h2>
        <div class="row mt-4">
            <!-- Curso 1 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Desarrollo Web y Aplicaciones">
                    <div class="card-img-overlay d-flex flex-column justify-content-end text-center">
                        <h5 class="card-title font-weight-bold">DESARROLLO WEB Y APLICACIONES</h5>
                        <a href="#" class="btn btn-custom mt-3">DESCUBRE MÁS</a>
                    </div>
                </div>
            </div>
            <!-- Curso 2 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Programación y Tecnologías Emergentes">
                    <div class="card-img-overlay d-flex flex-column justify-content-end text-center">
                        <h5 class="card-title font-weight-bold">PROGRAMACIÓN Y TECNOLOGÍAS EMERGENTES</h5>
                        <a href="#" class="btn btn-custom mt-3">DESCUBRE MÁS</a>
                    </div>
                </div>
            </div>
            <!-- Curso 3 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Gestión de Proyectos y Seguridad">
                    <div class="card-img-overlay d-flex flex-column justify-content-end text-center">
                        <h5 class="card-title font-weight-bold">GESTIÓN DE PROYECTOS Y SEGURIDAD</h5>
                        <a href="#" class="btn btn-custom mt-3">DESCUBRE MÁS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Planes de Cursos -->
    <section id="planes" class="container my-5">
        <h2 class="font-weight-bold display-4 text-left">PLANES DE CURSOS</h2>
        <div class="row mt-4">
            <!-- Imagen -->
            <div class="col-md-6">
                <img src="assets/images/desarrollo_web.jpg" alt="Plan de Cursos" class="img-fluid rounded-card">
            </div>
            <!-- Descripción de los planes -->
            <div class="col-md-6 text-white">
                <h5 class="font-weight-bold text-uppercase text-custom">Plan Básico</h5>
                <p>Accede a los fundamentos esenciales en tecnología. Ideal para principiantes que desean dar sus primeros pasos en programación, diseño y más. Personaliza tu aprendizaje y comienza a construir tus habilidades.</p>
                
                <h5 class="font-weight-bold text-uppercase text-custom">Plan Premium</h5>
                <p>Obtén acceso a cursos avanzados y recursos exclusivos. Perfecto para quienes buscan profundizar en sus conocimientos y obtener certificaciones reconocidas. Desbloquea todo el potencial de tu educación tecnológica.</p>
                
                <h5 class="font-weight-bold text-uppercase text-custom">Plan Grupal</h5>
                <p>Diseñado para equipos y grupos. Ofrece descuentos y acceso a cursos personalizados. Perfecto para empresas o instituciones que desean capacitar a sus miembros en tecnología de manera efectiva.</p>

                <a href="#" class="btn btn-custom mt-3">Compra</a>
            </div>
        </div>
    </section>

    <!-- Sección Paquetes -->
    <section id="paquetes" class="container my-5">
        <h2 class="font-weight-bold display-4 text-left">PAQUETES</h2>
        <div class="row mt-4">
            <!-- Paquete 1 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Paquete de Inicio">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-end">
                        <h6 class="text-uppercase font-weight-bold">Para aquellos que empiezan</h6>
                        <h5 class="font-weight-bold text-custom">Paquete de inicio</h5>
                        <p>$123</p>
                    </div>
                </div>
            </div>
            <!-- Paquete 2 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Paquete Familiar">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-end">
                        <h6 class="text-uppercase font-weight-bold">Para aquellos con niños</h6>
                        <h5 class="font-weight-bold text-custom">Paquete Familiar</h5>
                        <p>$123</p>
                    </div>
                </div>
            </div>
            <!-- Paquete 3 -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Paquete Corporativo">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-end">
                        <h6 class="text-uppercase font-weight-bold">Para aquellos en equipos</h6>
                        <h5 class="font-weight-bold text-custom">Paquete Corporativo</h5>
                        <p>$123</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Sección Programación y Tecnologías Emergentes -->
    <section id="programacion" class="container my-5">
        <h2 class="font-weight-bold display-4 text-left">PROGRAMACIÓN Y TECNOLOGÍAS EMERGENTES</h2>
        <div class="row mt-4">
            <!-- Curso 1 -->
            <div class="col-md-6 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Introducción a Machine Learning">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-end">
                        <h5 class="font-weight-bold text-custom">Introducción a Machine Learning</h5>
                        <p>$123</p>
                    </div>
                </div>
            </div>
            <!-- Curso 2 -->
            <div class="col-md-6 mb-4">
                <div class="card bg-dark text-white rounded-card">
                    <img src="assets/images/desarrollo_web.jpg" class="card-img rounded-card" alt="Desarrollo de Videojuegos con Unity">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-end">
                        <h5 class="font-weight-bold text-custom">Desarrollo de Videojuegos con Unity</h5>
                        <p>$123</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Preguntas Frecuentes -->
    <section id="preguntasFrecuentes" class="container my-5 text-white">
        <h2 class="font-weight-bold display-4 text-left">PREGUNTAS FRECUENTES</h2>
        <div class="row mt-4">
            <!-- Pregunta 1 -->
            <div class="col-md-4 mb-4 text-center">
                <img src="assets/images/desarrollo_web.jpg" alt="Icono 1" class="mb-3" style="width: 50px;">
                <h5 class="font-weight-bold">¿Necesito tener experiencia previa para inscribirme en un curso?</h5>
                <p>La mayoría de nuestros cursos están diseñados para principiantes, aunque algunos cursos más avanzados pueden requerir conocimientos previos los cuales te indicaremos.</p>
            </div>
            <!-- Pregunta 2 -->
            <div class="col-md-4 mb-4 text-center">
                <img src="assets/images/desarrollo_web.jpg" alt="Icono 2" class="mb-3" style="width: 50px;">
                <h5 class="font-weight-bold">¿Los cursos incluyen certificación?</h5>
                <p>Sí, al completar un curso recibirás un certificado digital que podrás añadir a tu currículum o perfil de LinkedIn; adicionalmente avalado por el ministerio de educación.</p>
            </div>
            <!-- Pregunta 3 -->
            <div class="col-md-4 mb-4 text-center">
                <img src="assets/images/desarrollo_web.jpg" alt="Icono 3" class="mb-3" style="width: 50px;">
                <h5 class="font-weight-bold">¿Se actualizan los cursos con regularidad?</h5>
                <p>Sí, nuestros cursos se actualizan periódicamente para asegurar que el contenido esté al día con las últimas tendencias y tecnologías.</p>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section id="sobreNosotros" class="container my-5 text-white">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h2 class="font-weight-bold display-4">SOBRE NOSOTROS</h2>
                <p>En InnovaTech Academy, creemos que la educación tecnológica debe ser accesible y transformadora. Nuestra misión es ofrecer cursos que empoderen a nuestros estudiantes y les proporcionen habilidades esenciales para el futuro.</p>
                <p>Con un equipo de expertos, brindamos contenido de alta calidad en programación, diseño y marketing digital, asegurando que cada curso te prepare para los desafíos del mundo digital.</p>
                <a href="#" class="btn btn-primary-custom">EXPLORAR CURSOS</a>
                <a href="#" class="btn btn-outline-custom ml-2">UNIRSE A LA COMUNIDAD</a>
            </div>
            <!-- Imagen -->
            <div class="col-md-6">
                <img src="assets/images/desarrollo_web.jpg" alt="Sobre nosotros" class="img-fluid rounded-card">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 Innovatech Academy | Todos los derechos reservados</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
</body>
</html>
