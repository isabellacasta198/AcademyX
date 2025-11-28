 <?php
session_start();

// Si no hay sesión → vuelva al login
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION["usuario"];
// Cargar cursos desde archivo
include("cursos.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>AcademyX </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="cs/main.css">
</head>
<body>
  <!-- MAIN -->
  <main id="mainContent">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
          <a class="navbar-brand" href="#">🎓 AcademyX</a>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item"><a id="inicioLink" class="nav-link active">Inicio</a></li>
              <li class="nav-item"><a id="misCursosLink" class="nav-link">Mis Cursos</a></li>
              <li class="nav-item"><a id="carritoLink" class="nav-link">🛒 <span id="carritoCount" class="badge bg-primary">0</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- HERO -->
    <section class="hero" id="heroSection">
  <div class="hero-box text-center">
    <h1 style=" background-color:#1E88E5">Aprende sin límites</h1>
    <p>Accede a miles de cursos profesionales y desarrolla tus habilidades.</p>
  </div>
</section>


    <!-- CURSOS -->
    <section class="courses" id="coursesSection">
      <div class="container">
        <h2>Cursos populares</h2>
        <div class="row mt-4">

  <!-- CURSO 1 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://agenciawinners.com/wp-content/uploads/2020/07/desarrollo-web.png" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Todos los niveles</span>
        <h5 class="card-title mt-2">Desarrollo Web Completo 2025</h5>
        <p class="text-muted small mb-2">Aprende HTML, CSS, JavaScript, React y Node.js desde cero.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$30,000</h5>
          <div>
   <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=1'">Ver curso</button>

      <button class="btn btn-primary agregarCarritoBtn" data-id="1">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 2 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://www.uninorte.edu.co/documents/13400067/49125203/Dia+de+las+matematicas+2024.jpg/5dcf470a-88d9-e5e9-43dd-f78222f6c01f?t=1710733910211" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Intermedio</span>
        <h5 class="card-title mt-2">Matemáticas Avanzadas</h5>
        <p class="text-muted small mb-2">Álgebra, cálculo y estadística con ejercicios prácticos.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$25,000</h5>
        
    <div>
     <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=2'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="2">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 3 -->
 <!-- CURSO 13 - INGLÉS -->
<div class="col-md-4 mb-4">
  <div class="card">
    <img src="https://futbolete.com/wp-content/uploads/2020/04/C%C3%B3mo-fortalecer-gratis-el-aprendizaje-del-ingl%C3%A9s-en-casa-e1587690545190.jpg" class="card-img-top">
    <div class="card-body">
      <span class="badge-level">Todos los niveles</span>
      <h5 class="card-title mt-2">Inglés Conversacional Intensivo 2025</h5>
      <p class="text-muted small mb-2">Mejora tu fluidez, pronunciación y vocabulario real para trabajo, viajes y estudios.</p>

      <div class="d-flex justify-content-between align-items-center mt-3">
        <h5 class="text-primary fw-bold">$27,000</h5>
        <div>
          <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=3'">Ver curso</button>
          <button class="btn btn-primary agregarCarritoBtn" data-id="3">🛒</button>
        </div>
      </div>

    </div>
  </div>
</div>





  <!-- CURSO 4 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Anaconda_vs_Python_in_Software.jpg" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Principiante</span>
        <h5 class="card-title mt-2">Introducción a Python</h5>
        <p class="text-muted small mb-2">Aprende Python con ejercicios reales prácticos.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$15,000</h5>
         <div>
     <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=4'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="4">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 5 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://tse4.mm.bing.net/th/id/OIP.OQpL0-0bvfVfy1Ydqxf48QHaD0?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Intermedio</span>
        <h5 class="card-title mt-2">Diseño UX/UI Profesional</h5>
        <p class="text-muted small mb-2">Figma, diseño visual y prototipos profesionales.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$28,000</h5>
          <div>
    <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=5'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="5">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 6 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=60" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Todos los niveles</span>
        <h5 class="card-title mt-2">Excel Financiero</h5>
        <p class="text-muted small mb-2">Tablas dinámicas, análisis y macros.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$18,000</h5>
          <div>
       <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=6'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="6">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>



  <!-- CURSO 7 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://www.mentedidactica.com/wp-content/uploads/2018/10/estudiar-fotografia3.jpg" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Principiante</span>
        <h5 class="card-title mt-2">Fotografía Profesional</h5>
        <p class="text-muted small mb-2">Iluminación, cámara y edición.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$22,000</h5>
          <div>
       <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=7'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="7">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 8 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=800&q=60" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Intermedio</span>
        <h5 class="card-title mt-2">Ciberseguridad Básica</h5>
        <p class="text-muted small mb-2">Protección de redes y sistemas.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$32,000</h5>
          <div>
      <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=8'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="8">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CURSO 9 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1526378722484-bd91ca387e72?auto=format&fit=crop&w=800&q=60" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Todos los niveles</span>
        <h5 class="card-title mt-2">Inglés para Profesionales</h5>
        <p class="text-muted small mb-2">Speaking, writing y vocabulario útil.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$24,000</h5>
       <div>
       <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=9'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="9">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>



  <!-- CURSO 10 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=60" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Intermedio</span>
        <h5 class="card-title mt-2">Inteligencia Artificial Básica</h5>
        <p class="text-muted small mb-2">Machine learning e IA aplicada.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$33,000</h5>
          <div>
   <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=10'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="10">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>
<!-- CURSO 11 -->
<div class="col-md-4 mb-4">
  <div class="card">
    <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?auto=format&fit=crop&w=800&q=60" class="card-img-top">
    <div class="card-body">
      <span class="badge-level">Principiante</span>
      <h5 class="card-title mt-2">Fundamentos de Ciberseguridad</h5>
      <p class="text-muted small mb-2">Aprende seguridad informática desde cero.</p>
      <div class="d-flex justify-content-between align-items-center mt-3">
        <h5 class="text-primary fw-bold">$28,900</h5>
       <div>
       <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=11'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="11">🛒</button>
    </div>
      </div>
    </div>
  </div>
</div>
 <!-- CURSO 12 -->
<div class="col-md-4 mb-4">
  <div class="card">
    <img src="https://scoreapps.com/blog/wp-content/uploads/Plataformas-para-crear-app-movil.jpg" class="card-img-top">
    <div class="card-body">
      <span class="badge-level">Avanzado</span>
      <h5 class="card-title mt-2">Desarrollo de Apps Mobile</h5>
      <p class="text-muted small mb-2">Crea apps con Flutter y React Native.</p>
      <div class="d-flex justify-content-between align-items-center mt-3">
        <h5 class="text-primary fw-bold">$45,000</h5>
      <div>
     <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=12'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="12">🛒</button>
    </div>
      </div>
    </div>
  </div>
</div>
 <!-- CURSO1 3 -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=60" class="card-img-top">
      <div class="card-body">
        <span class="badge-level">Principiante</span>
        <h5 class="card-title mt-2">Marketing Digital</h5>
        <p class="text-muted small mb-2">SEO, redes sociales y estrategias comerciales.</p>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <h5 class="text-primary fw-bold">$20,000</h5>
          <div>
      <button class="btn btn-light border ver-curso-btn" onclick="window.location.href='DetalleCurso.php?id=13'">Ver curso</button>
      <button class="btn btn-primary agregarCarritoBtn" data-id="13">🛒</button>
    </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CURSO 14 - Cocina Internacional Profesional -->
<div class="col-md-4 mb-4">
  <div class="card" data-id="14">
    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="card-img-top">
    <div class="card-body">
      <span class="badge-level">Todos los niveles</span>
      <h5 class="card-title mt-2">Cocina Internacional Profesional</h5>
      <p class="text-muted small mb-2">Aprende técnicas gastronómicas y prepara platos internacionales.</p>

      <div class="d-flex justify-content-between align-items-center mt-3">
        <h5 class="text-primary fw-bold">$26,000</h5>
        <div>
          <button class="btn btn-light border ver-curso-btn">Ver curso</button>
          <button class="btn btn-primary agregar-carrito" data-id="14">🛒</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CURSO 15 - Fitness y Entrenamiento en Casa -->
<div class="col-md-4 mb-4">
  <div class="card" data-id="15">
    <img src="https://images.unsplash.com/photo-1554284126-aa88f22d8b74" class="card-img-top">
    <div class="card-body">
      <span class="badge-level">Principiante</span>
      <h5 class="card-title mt-2">Fitness y Entrenamiento en Casa</h5>
      <p class="text-muted small mb-2">Rutinas sin equipo, quema de grasa y fuerza básica.</p>

      <div class="d-flex justify-content-between align-items-center mt-3">
        <h5 class="text-primary fw-bold">$21,000</h5>
        <div>
          <button class="btn btn-light border ver-curso-btn">Ver curso</button>
          <button class="btn btn-primary agregar-carrito" data-id="15">🛒</button>
        </div>
      </div>
    </div>
  </div>
</div>


</div>

      </div>
    </section>


   <!-- CARRITO -->
    <section class="cart" id="carritoSection" style="display:none;">
      <div class="container text-center">
        <h1 class="fw-bold mb-1">Carrito de compras</h1>
        <p class="text-muted mb-4">0 cursos en tu carrito</p>
        <div class="cart-box mx-auto" style="max-width:600px;">
          <div class="cart-icon">🛍️</div>
          <h4 class="fw-bold">Tu carrito está vacío</h4>
          <p class="cart-empty-text mb-4">Explora nuestros cursos y encuentra el perfecto para ti</p>
          <a class="btn btn-explore" id="explorarBtn" href="index.php#">Explorar cursos</a>
        </div>
 
        <div class="mt-4 text-end">
          <h4>Total: <span id="carritoTotal" style="font-weight:700; color:#1E88E5;">$0</span></h4>
          <button class="btn btn-success mt-3" id="btnPagar" style="font-size:18px; padding:10px 25px; border-radius:10px;">
             Pagar ahora
          </button>
        </div>
      </div>
    </section>


        </div>
      </div>
    </section>

   
  <!-- SECCIÓN MIS CURSOS -->
    <section class="dashboard" id="misCursosSection">
      <div class="container">
        <h1 class="fw-bold mb-2">Mis cursos</h1>
        <p class="text-muted mb-4">Continúa aprendiendo donde lo dejaste</p>
 
        <div class="row g-4">
          <div class="col-md-3"><div class="stat-box"><h4>3</h4><p>Cursos activos</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>112</h4><p>Horas totales</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>1</h4><p>Certificados</p></div></div>
          <div class="col-md-3"><div class="stat-box"><h4>2</h4><p>En progreso</p></div></div>
        </div>
 
        
      </div>
    </section>

    

<!-- DETALLES DEL CURSO -->
<section id="cursoDetalleSection" style="display:none;">
  <div class="container py-5">
    <button class="btn btn-secondary mb-3" id="volverCursosBtn">← Volver</button>

    <div class="row">
      <div class="col-md-5">
        <img id="detalleImg" class="img-fluid rounded shadow">
      </div>

      <div class="col-md-7">
        <h2 id="detalleTitulo"></h2>
        <p class="text-muted" id="detalleNivel"></p>
        <p id="detalleDescripcion"></p>

        <h3 class="text-primary fw-bold mt-3" id="detallePrecio"></h3>

        <button class="btn btn-primary mt-3">Añadir al carrito 🛒</button>
      </div>
    </div>
  </div>
</section>


    

   <footer style="text-align:center">
  © 2025 GestorEstudio - Todos los derechos reservados.
</footer>

  </main>


<script type="text/javaScript" src="../Web/home.js"></script>



</body>
</html>  
