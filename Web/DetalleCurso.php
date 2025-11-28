<!-- DETALLECURSO.PHP ESTILO UDEMY (VERSIÓN COMPLETA) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#fff; font-family:Arial, sans-serif; }
        .course-header { background:#0f0f0f; color:white; padding:50px 30px; }
        .course-title { font-size:45px; font-weight:700; line-height:1.2; }
        .breadcrumb a { color:#ccc; text-decoration:none; }
        .rating i { color:#f4c150; }

        /* PANEL LATERAL DERECHO */
        .side-panel { background:white; border:1px solid #ddd; border-radius:10px; padding:20px; }
        .price { font-size:35px; font-weight:bold; }
        .old-price { text-decoration:line-through; color:#1E88E5; }
        .btn-purple { background:#1E88E5; color:white; font-size:18px; width:100%; padding:12px; border-radius:8px; }
        .btn-purple:hover { background:#1E88E5; }
        .btn-outline { border:2px solid #1E88E5; color:#1E88E5; width:100%; padding:12px; border-radius:8px; }

        /* SECCIÓN CONTENIDO */
        .section-title { font-size:25px; font-weight:bold; margin-top:30px; }
        .content-box { border:1px solid #ddd; padding:25px; border-radius:10px; background:#fafafa; }
    </style>
</head>
<body>

<?php session_start(); ?>

<div class="course-header">
    <div class="container">

        <!-- MIGAS -->
        <div class="breadcrumb mb-3">
            <a href="#">Desarrollo</a> › <a href="#">Curso</a> › Detalle
        </div>

        <!-- TITULO -->
        <div class="course-title" id="tituloCurso">Título del Curso</div>

        <!-- SUBTITULO -->
        <p class="mt-3" id="descripcionCurso" style="font-size:20px; color:#ddd;"></p>

        <!-- RATING -->
        <div class="rating mt-3">
            <span style="font-size:20px; color:#f4c150;">★★★★★</span>
            <span id="ratingCurso" style="font-size:18px; color:#ccc;"></span>
        </div>

        <p id="estudiantesCurso" class="mt-1" style="color:#ccc;"></p>

    </div>
</div>

<div class="container mt-5">
    <div class="row">

        <!-- COLUMNA IZQUIERDA -->
        <div class="col-md-8">

            <h3 class="section-title">Lo que aprenderás</h3>
            <div class="content-box" id="aprendizajeCurso"></div>

            <h3 class="section-title">Descripción</h3>
            <div class="content-box" id="contenidoCurso"></div>

        </div>

        <!-- PANEL DERECHO (PRECIO, COMPRA, CARRITO) -->
        <div class="col-md-4">
            <div class="side-panel">

                <img id="imagenCurso" src="" class="img-fluid rounded mb-3">

                <div class="price" id="precioCurso"></div>
                <div class="old-price mb-3" id="precioTachado"></div>

                <button class="btn-purple mb-2" id="btnCarrito">Añadir al carrito</button>
                <button class="btn-outline mb-2">Comprar ahora</button>
            </div>
        </div>

    </div>
</div>

<script>
// CURSOS
const cursos = {
    1: {
        titulo: "Desarrollo Web Completo 2025",
        descripcion: "Aprende a crear sitios web modernos con HTML, CSS, JavaScript, React y Node.js desde cero hasta avanzado.",
        rating: "4.8 · 12,000 reseñas",
        estudiantes: "18,500 estudiantes",
        precio: "$30,000 COP",
        precioAnterior: "$120,000 COP",
        imagen: "https://agenciawinners.com/wp-content/uploads/2020/07/desarrollo-web.png",
        aprendizaje: `
            • Crear sitios web responsivos<br>
            • Manejar HTML, CSS, JavaScript<br>
            • Construir proyectos reales con React y Node<br>
            • Conectar frontend y backend
        `,
        contenido: `
            Curso completo enfocado en desarrollo web moderno con proyectos reales, ejercicios prácticos
            y recursos descargables. Ideal para principiantes y niveles intermedios.
        `
    },

    2: {
        titulo: "Matemáticas Avanzadas 2025",
        descripcion: "Curso intensivo de álgebra, cálculo y estadística con ejercicios guiados para nivel intermedio-avanzado.",
        rating: "4.9 · 5,800 reseñas",
        estudiantes: "7,500 estudiantes",
        precio: "$25,000 COP",
        precioAnterior: "$100,000 COP",
        imagen: "https://www.uninorte.edu.co/documents/13400067/49125203/Dia+de+las+matematicas+2024.jpg/5dcf470a-88d9-e5e9-43dd-f78222f6c01f?t=1710733910211",
        aprendizaje: `
            • Álgebra, cálculo y estadística avanzada<br>
            • Probabilidad aplicada<br>
            • Resolución de ejercicios complejos<br>
            • Talleres y evaluaciones guiadas
        `,
        contenido: `
            Programa estructurado con clases claras, ejercicios guiados, talleres y retos matemáticos.
            Incluye recursos descargables y guías de estudio.
        `
    },

    3: {
        titulo: "Inglés Conversacional Intensivo 2025",
        descripcion: "Aprende inglés práctico para conversaciones reales: fluidez, pronunciación y vocabulario útil.",
        rating: "4.9 · 13,400 reseñas",
        estudiantes: "25,700 estudiantes",
        precio: "$27,000 COP",
        precioAnterior: "$120,000 COP",
        imagen: "https://futbolete.com/wp-content/uploads/2020/04/C%C3%B3mo-fortalecer-gratis-el-aprendizaje-del-ingl%C3%A9s-en-casa-e1587690545190.jpg",
        aprendizaje: `
            • Conversación fluida<br>
            • Mejorar pronunciación y listening<br>
            • Vocabulario para trabajo y viajes<br>
            • Expresiones útiles y roleplays
        `,
        contenido: `
            Incluye audios nativos, diálogos reales, prácticas de speaking, ejercicios grabados,
            evaluaciones y material descargable. Ideal para estudiantes y profesionales.
        `
    },

    4: {
        titulo: "Programación en Python Desde Cero",
        descripcion: "Domina Python paso a paso con ejercicios, proyectos y lógica de programación aplicada.",
        rating: "4.7 · 9,200 reseñas",
        estudiantes: "14,300 estudiantes",
        precio: "$22,000 COP",
        precioAnterior: "$90,000 COP",
        imagen: "https://cdn.educba.com/academy/wp-content/uploads/2019/11/Python-Programming-Language.png",
        aprendizaje: `
            • Fundamentos de programación<br>
            • Estructuras, funciones y módulos<br>
            • Manejo de archivos y datos<br>
            • Proyectos reales básicos
        `,
        contenido: `
            Curso práctico con explicaciones claras, ejercicios guiados y proyectos como automatización,
            lectura de archivos y aplicaciones simples.
        `
    },

    5: {
        titulo: "Diseño UX/UI Profesional",
        descripcion: "Aprende diseño de interfaces modernas con Figma, fundamentos visuales y prototipado.",
        rating: "4.8 · 8,900 reseñas",
        estudiantes: "11,200 estudiantes",
        precio: "$28,000 COP",
        precioAnterior: "$110,000 COP",
        imagen: "https://tse4.mm.bing.net/th/id/OIP.OQpL0-0bvfVfy1Ydqxf48QHaD0?rs=1&pid=ImgDetMain&o=7&rm=3",
        aprendizaje: `
            • Diseño visual moderno<br>
            • Prototipado en Figma<br>
            • Experiencia de usuario UX<br>
            • Diseño de apps y páginas reales
        `,
        contenido: `
            Curso práctico con casos reales, prototipos, guías visuales y ejercicios de diseño
            aplicados al mundo laboral.
        `
    },

    6: {
        titulo: "Excel Financiero",
        descripcion: "Domina Excel desde funciones básicas hasta herramientas avanzadas financieras.",
        rating: "4.8 · 15,100 reseñas",
        estudiantes: "30,000 estudiantes",
        precio: "$18,000 COP",
        precioAnterior: "$70,000 COP",
        imagen: "https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • Tablas dinámicas<br>
            • Fórmulas financieras<br>
            • Macros y automatización<br>
            • Análisis de datos
        `,
        contenido: `
            Ideal para estudiantes y profesionales que usan Excel para análisis, informes, finanzas
            y automatización de tareas.
        `
    },

    7: {
        titulo: "Fotografía Profesional",
        descripcion: "Aprende fotografía desde cero: composición, iluminación y edición profesional.",
        rating: "4.8 · 10,500 reseñas",
        estudiantes: "12,800 estudiantes",
        precio: "$22,000 COP",
        precioAnterior: "$95,000 COP",
        imagen: "https://www.mentedidactica.com/wp-content/uploads/2018/10/estudiar-fotografia3.jpg",
        aprendizaje: `
            • Configuración de cámara<br>
            • Uso profesional de luz<br>
            • Edición en Lightroom y Photoshop<br>
            • Técnicas de composición
        `,
        contenido: `
            Curso completo con prácticas fotográficas, análisis de proyectos, edición profesional y
            ejercicios guiados para mejorar tu estilo.
        `
    },

    8: {
        titulo: "Ciberseguridad Básica",
        descripcion: "Aprende fundamentos esenciales de seguridad informática y protección digital.",
        rating: "4.9 · 7,800 reseñas",
        estudiantes: "10,600 estudiantes",
        precio: "$32,000 COP",
        precioAnterior: "$130,000 COP",
        imagen: "https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • Seguridad de redes<br>
            • Amenazas comunes<br>
            • Técnicas de protección<br>
            • Ética y buenas prácticas
        `,
        contenido: `
            Curso completo con prácticas reales para proteger información, redes, contraseñas y
            detectar posibles vulnerabilidades.
        `
    },

    9: {
        titulo: "Inglés para Profesionales",
        descripcion: "Inglés avanzado para trabajo, negocios, entrevistas y comunicación laboral.",
        rating: "4.8 · 6,700 reseñas",
        estudiantes: "9,900 estudiantes",
        precio: "$24,000 COP",
        precioAnterior: "$115,000 COP",
        imagen: "https://images.unsplash.com/photo-1526378722484-bd91ca387e72?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • Inglés laboral<br>
            • Presentaciones y correos<br>
            • Reuniones y vocabulario técnico<br>
            • Speaking profesional
        `,
        contenido: `
            Incluye prácticas de negocios, roles profesionales, vocabulario real y ejercicios de
            speaking aplicados a empresas.
        `
    },

    10: {
        titulo: "Inteligencia Artificial Básica",
        descripcion: "Introducción a IA, machine learning, modelos básicos y aplicaciones reales.",
        rating: "4.9 · 9,100 reseñas",
        estudiantes: "13,400 estudiantes",
        precio: "$33,000 COP",
        precioAnterior: "$140,000 COP",
        imagen: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • Fundamentos de IA<br>
            • Machine learning básico<br>
            • Modelos supervisados<br>
            • Aplicaciones reales
        `,
        contenido: `
            Curso práctico para entender y aplicar IA en proyectos, con ejemplos sencillos y ejercicios
            guiados de aprendizaje automático.
        `
    },

    11: {
        titulo: "Fundamentos de Ciberseguridad",
        descripcion: "Aprende seguridad informática desde cero con ejemplos prácticos.",
        rating: "4.7 · 4,900 reseñas",
        estudiantes: "7,200 estudiantes",
        precio: "$28,900 COP",
        precioAnterior: "$95,000 COP",
        imagen: "https://images.unsplash.com/photo-1505685296765-3a2736de412f?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • Ataques comunes<br>
            • Protección de dispositivos<br>
            • Criptografía básica<br>
            • Seguridad personal digital
        `,
        contenido: `
            Ideal para personas que desean iniciar en ciberseguridad, con ejemplos simples,
            ejercicios prácticos y explicaciones claras.
        `
    },

    12: {
        titulo: "Desarrollo de Apps Mobile",
        descripcion: "Aprende a crear aplicaciones móviles con Flutter y React Native.",
        rating: "4.9 · 11,800 reseñas",
        estudiantes: "16,900 estudiantes",
        precio: "$45,000 COP",
        precioAnterior: "$180,000 COP",
        imagen: "https://scoreapps.com/blog/wp-content/uploads/Plataformas-para-crear-app-movil.jpg",
        aprendizaje: `
            • Desarrollo multiplataforma<br>
            • Interfaces responsivas<br>
            • Manejo de estados<br>
            • Apps completas desde cero
        `,
        contenido: `
            Incluye proyectos completos, interfaz móvil moderna, navegación, manejo de datos y
            despliegue funcional.
        `
    },

    13: {
        titulo: "Marketing Digital",
        descripcion: "Domina estrategias de redes sociales, SEO y publicidad digital.",
        rating: "4.8 · 10,200 reseñas",
        estudiantes: "19,500 estudiantes",
        precio: "$20,000 COP",
        precioAnterior: "$85,000 COP",
        imagen: "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=60",
        aprendizaje: `
            • SEO y posicionamiento<br>
            • Redes sociales profesionales<br>
            • Publicidad en Facebook & Google<br>
            • Gestión de campañas
        `,
        contenido: `
            Curso completo con estrategias modernas, campañas reales, herramientas profesionales
            y ejemplos prácticos de marketing.
        `
    }
    
};





// OBTENER ID
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get("id");
const curso = cursos[id];

// RELLENAR DATOS
if (curso) {
    document.getElementById("tituloCurso").innerText = curso.titulo;
    document.getElementById("descripcionCurso").innerText = curso.descripcion;
    document.getElementById("ratingCurso").innerText = curso.rating;
    document.getElementById("estudiantesCurso").innerText = curso.estudiantes;
    document.getElementById("precioCurso").innerText = curso.precio;
    document.getElementById("precioTachado").innerText = curso.precioAnterior;
    document.getElementById("imagenCurso").src = curso.imagen;
    document.getElementById("aprendizajeCurso").innerHTML = curso.aprendizaje;
    document.getElementById("contenidoCurso").innerHTML = curso.contenido;
}

// AÑADIR AL CARRITO
const btnCarrito = document.getElementById("btnCarrito");
btnCarrito.addEventListener("click", function() {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.push(curso);
    localStorage.setItem("carrito", JSON.stringify(carrito));
    alert("Curso añadido al carrito ");
});
</script>

</body>
</html>
