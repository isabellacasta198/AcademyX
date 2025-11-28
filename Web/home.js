document.getElementById('misCursosSection').style.display = 'none';

document.addEventListener("DOMContentLoaded", () =>
   {

  // ===================
  // SECCIONES PRINCIPALES
  // ===================
 const cursos = [
  {
    id: 1,
    titulo: "Desarrollo Web Completo 2025",
    nivel: "Todos los niveles",
    descripcion: "Aprende HTML, CSS, JavaScript, React y Node.js desde cero.",
    precio: 30000,
    img: "https://agenciawinners.com/wp-content/uploads/2020/07/desarrollo-web.png"
  },

  {
    id: 2,
    titulo: "Matemáticas Avanzadas",
    nivel: "Intermedio",
    descripcion: "Álgebra, cálculo y estadística con ejercicios prácticos.",
    precio: 25000,
    img: "https://www.uninorte.edu.co/documents/13400067/49125203/Dia+de+las+matematicas+2024.jpg/5dcf470a-88d9-e5e9-43dd-f78222f6c01f?t=1710733910211"
  },

  {
    id: 3,
    titulo: "Inglés Conversacional Intensivo 2025",
    nivel: "Todos los niveles",
    descripcion: "Mejora tu fluidez, pronunciación y vocabulario real para trabajo, viajes y estudios.",
    precio: 27000,
    img: "https://futbolete.com/wp-content/uploads/2020/04/C%C3%B3mo-fortalecer-gratis-el-aprendizaje-del-ingl%C3%A9s-en-casa-e1587690545190.jpg"
  },

  {
    id: 4,
    titulo: "Introducción a Python",
    nivel: "Todos los niveles",
    descripcion: "Aprende Python con ejercicios reales y fundamentos de programación.",
    precio: 15000,
    img: "https://www.simplilearn.com/ice9/free_resources_article_thumb/Anaconda_vs_Python_in_Software.jpg"
  },

  {
    id: 5,
    titulo: "Diseño UX/UI Profesional",
    nivel: "Principiante",
    descripcion: "Crea interfaces modernas con Figma, prototipos y diseño visual.",
    precio: 28000,
    img: "https://tse4.mm.bing.net/th/id/OIP.OQpL0-0bvfVfy1Ydqxf48QHaD0"
  },

  {
    id: 6,
    titulo: "Excel Financiero",
    nivel: "Todos los niveles",
    descripcion: "Tablas dinámicas, dashboards y funciones profesionales.",
    precio: 18000,
    img: "https://images.unsplash.com/photo-1519389950473-47ba0277781c"
  },

  {
    id: 7,
    titulo: "Fotografía Profesional",
    nivel: "Principiante",
    descripcion: "Aprende iluminación, cámara profesional y edición.",
    precio: 22000,
    img: "https://www.mentedidactica.com/wp-content/uploads/2018/10/estudiar-fotografia3.jpg"
  },

  {
    id: 8,
    titulo: "Ciberseguridad Básica",
    nivel: "Intermedio",
    descripcion: "Protección de redes, hacking ético y vulnerabilidades.",
    precio: 32000,
    img: "https://images.unsplash.com/photo-1555949963-aa79dcee981c"
  },

  {
    id: 9,
    titulo: "Inglés para Profesionales",
    nivel: "Todos los niveles",
    descripcion: "Speaking, writing y vocabulario laboral real.",
    precio: 24000,
    img: "https://images.unsplash.com/photo-1526378722484-bd91ca387e72"
  },

  {
    id: 10,
    titulo: "Inteligencia Artificial Básica",
    nivel: "Avanzado",
    descripcion: "Modelos de machine learning e IA aplicada desde cero.",
    precio: 33000,
    img: "https://images.unsplash.com/photo-1498050108023-c5249f4df085"
  },

  {
    id: 11,
    titulo: "Fundamentos de Ciberseguridad",
    nivel: "Intermedio",
    descripcion: "Seguridad informática, redes y sistemas.",
    precio: 28900,
    img: "https://images.unsplash.com/photo-1505685296765-3a2736de412f"
  },

  {
    id: 12,
    titulo: "Desarrollo de Apps Mobile",
    nivel: "Todos los niveles",
    descripcion: "Crea apps para Android y iOS con Flutter y React Native.",
    precio: 45000,
    img: "https://scoreapps.com/blog/wp-content/uploads/Plataformas-para-crear-app-movil.jpg"
  },

  {
    id: 13,
    titulo: "Marketing Digital",
    nivel: "Principiante",
    descripcion: "SEO, redes sociales y estrategias comerciales modernas.",
    precio: 20000,
    img: "https://images.unsplash.com/photo-1556761175-5973dc0f32e7"
  },
  {
  id: 14,
  titulo: "Desarrollo de Videojuegos con Unity",
  nivel: "Intermedio",
  descripcion: "Aprende a crear videojuegos en 2D y 3D utilizando el motor Unity.",
  precio: 35000,
  img: "https://images.unsplash.com/photo-1605902711622-cfb43c44367f?auto=format&fit=crop&w=800&q=60",
  rating: "4.7 · 8,900 reseñas",
  estudiantes: "14,300 estudiantes",
  precioAnterior: "$95,000 COP",
  aprendizaje: `
      • Fundamentos de Unity<br>
      • Física y animaciones<br>
      • Programación en C# para juegos<br>
      • Publicación de videojuegos
  `,
  contenido: `
      Aprende a desarrollar videojuegos desde cero usando Unity. Incluye scripts en C#, animaciones,
      colisiones, físicas, interfaces y publicación en múltiples plataformas.
  `
},
{
  id: 15,
  titulo: "Inteligencia Artificial para Principiantes",
  nivel: "Principiante",
  descripcion: "Comprende los fundamentos de IA, Machine Learning y modelos modernos.",
  precio: 28000,
  img: "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=60",
  rating: "4.9 · 12,500 reseñas",
  estudiantes: "22,000 estudiantes",
  precioAnterior: "$110,000 COP",
  aprendizaje: `
      • Fundamentos de Inteligencia Artificial<br>
      • Algoritmos de Machine Learning<br>
      • Redes neuronales básicas<br>
      • Aplicaciones reales de IA
  `,
  contenido: `
      Curso práctico para comenzar en el mundo de la inteligencia artificial.
      Incluye ejercicios guiados, modelos reales, herramientas de IA y notebooks ejecutables.
  `
}


];




  // Estado del carrito
  let carrito = [];

  // Elementos del DOM
  const listaCursos = document.getElementById("listaCursos");
  const carritoCount = document.getElementById("carritoCount");
  const carritoSection = document.getElementById("carritoSection");
  const carritoBoxSelector = ".cart-box";
  const carritoTotalEl = document.getElementById("carritoTotal");
  const btnPagar = document.getElementById("btnPagar");

  const inicioLink = document.getElementById("inicioLink");
  const misCursosLink = document.getElementById("misCursosLink");
  const carritoLink = document.getElementById("carritoLink");

  // ===================
  // RENDER DE CURSOS
  // ===================
  function renderCursos() {
    listaCursos.innerHTML = "";
    cursos.forEach(curso => {
      const card = document.createElement("div");
      card.className = "col-md-4 mb-4";
      card.innerHTML = `
        <div class="card" data-id="${curso.id}">
          <img src="${curso.img}" class="card-img-top" alt="${curso.titulo}">
          <div class="card-body">
            <span class="badge-level">${curso.nivel}</span>
            <h5 class="card-title mt-2">${curso.titulo}</h5>
            <p class="text-muted small mb-2">${curso.descripcion}</p>
            <div class="d-flex align-items-center mb-2 text-muted" style="font-size: 14px;">
              <span class="me-2">⭐ 4.8</span>
              <span class="me-2">👥 12,450</span>
              <span>⏱️ 42 horas</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="mb-0 fw-bold text-primary">$${Number(curso.precio).toLocaleString()}</h5>
              <div>
                <button class="btn btn-light border me-2 ver-curso-btn" style="border-radius:10px;">Ver curso</button>
                <button class="btn btn-add agregar-carrito" data-id="${curso.id}" style="width:auto; padding:6px 15px;">🛒</button>
              </div>
            </div>
          </div>
        </div>`;
      listaCursos.appendChild(card);
    });
  }

  // ===================
  // FUNCIONES DE CARRITO
  // ===================
  function escapeHtml(text) {
    if (!text) return '';
    return String(text).replace(/[&<>"']/g, function(m){ return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[m]; });
  }

  function calcularTotal() {
    return carrito.reduce((sum, it) => sum + Number(it.precio), 0);
  }

  function construirCarritoHTML() {
    const box = carritoSection.querySelector(carritoBoxSelector);
    if (!box) return;
    box.innerHTML = "";

    if (carrito.length === 0) {
      box.innerHTML = `
        <div class="cart-icon">🛍️</div>
        <h4 class="fw-bold">Tu carrito está vacío</h4>
        <p class="cart-empty-text mb-4">Explora nuestros cursos y encuentra el perfecto para ti</p>
        <a class="btn btn-explore" id="explorarBtn" href="index.php#">Explorar cursos</a>
      `;
      actualizarTotalUI(0);
      return;
    }

    carrito.forEach(item => {
      const subtotal = Number(item.precio);
      const row = document.createElement("div");
      row.className = "d-flex justify-content-between align-items-center p-3 mb-3 border rounded bg-white text-dark carrito-item";
      row.innerHTML = `
        <div style="text-align:left">
          <h5 class="fw-bold mb-0">${escapeHtml(item.titulo)}</h5>
          <small class="text-primary fw-bold">Precio: $${Number(item.precio).toLocaleString()}</small><br>
          <small class="text-muted">${escapeHtml(item.descripcion || '')}</small><br>
          <small class="text-success fw-bold">Subtotal: $${subtotal.toLocaleString()}</small>
        </div>
        <div>
          <button class="btn btn-sm btn-outline-danger eliminar-item" data-id="${item.id}">Eliminar</button>
        </div>
      `;
      box.appendChild(row);
    });
  }

  function actualizarTotalUI(total) {
    if (carritoTotalEl) carritoTotalEl.textContent = "$" + Number(total).toLocaleString();
  }

  function actualizarCarritoUI() {
    if (carritoCount) carritoCount.textContent = carrito.length;
    const texto = carritoSection.querySelector("p.text-muted");
    if (texto) texto.innerHTML = `${carrito.length} cursos en tu carrito`;
    construirCarritoHTML();
    actualizarTotalUI(calcularTotal());
    guardarEstado();
  }

  function obtenerCursoDesdeBoton(btn) {
    const idAttr = btn.dataset && btn.dataset.id ? parseInt(btn.dataset.id) : null;
    if (idAttr) return cursos.find(c => c.id === idAttr);
    const card = btn.closest(".card");
    if (card) {
      const dataId = card.getAttribute("data-id");
      if (dataId) return cursos.find(c => c.id === parseInt(dataId));
      const tituloEl = card.querySelector(".card-title");
      if (tituloEl) return cursos.find(c => c.titulo === tituloEl.textContent.trim());
    }
    return null;
  }

  // ===================
  // EVENTOS
  // ===================
  document.addEventListener("click", (e) => {
    const btn = e.target.closest("button");
    if (!btn) return;

    // Agregar al carrito
    const isAdd = btn.classList.contains("agregar-carrito") || btn.classList.contains("btn-add") || btn.textContent.trim() === "🛒";
    if (isAdd) {
      e.preventDefault();
      const curso = obtenerCursoDesdeBoton(btn);
      if (!curso) { console.warn("No se pudo identificar el curso para agregar al carrito."); return; }
      if (!carrito.some(c => c.id === curso.id)) carrito.push(curso);

      const originalHTML = btn.innerHTML;
      btn.disabled = true;
      btn.classList.add("btn-success");
      btn.innerHTML = "✔ Agregado";
      setTimeout(() => { btn.disabled = false; btn.classList.remove("btn-success"); btn.innerHTML = originalHTML; }, 900);

      actualizarCarritoUI();
      return;
    }

    // Eliminar del carrito
    if (btn.classList.contains("eliminar-item")) {
      const id = parseInt(btn.dataset.id);
      if (!isNaN(id)) {
        carrito = carrito.filter(c => c.id !== id);
        actualizarCarritoUI();
      }
      return;
    }

    // Ver detalle de curso
    if (btn.classList.contains("ver-curso-btn")) {
      const card = btn.closest(".card");
      if (!card) return;
      const dataId = card.getAttribute("data-id");
      const curso = cursos.find(c => c.id === Number(dataId));
      if (!curso) return;
      document.getElementById("detalleTitulo").textContent = curso.titulo;
      document.getElementById("detalleDescripcion").textContent = curso.descripcion;
      const detalleImg = document.getElementById("detalleImg"); if (detalleImg) detalleImg.src = curso.img;
      const detalleNivel = document.getElementById("detalleNivel"); if (detalleNivel) detalleNivel.textContent = curso.nivel;
      const detallePrecio = document.getElementById("detallePrecio"); if (detallePrecio) detallePrecio.textContent = "$" + Number(curso.precio).toLocaleString();
      mostrarSeccion("detalle");
      return;
    }

    // Botón volver cursos
    if (btn.id === "volverCursosBtn") {
      mostrarSeccion("inicio");
      return;
    }
  });

  // Botón PAGAR
  if (btnPagar) {
    btnPagar.addEventListener("click", () => {
      if (carrito.length === 0) {
        alert("Tu carrito está vacío. Agrega cursos antes de pagar.");
        return;
      }
      const total = calcularTotal();
      if (confirm("Vas a pagar $" + Number(total).toLocaleString() + ". Confirmar pago?")) {
        alert("Pago simulado por $" + Number(total).toLocaleString() + " — Gracias!");
        carrito = [];
        actualizarCarritoUI();
        mostrarSeccion("inicio");
      }
    });
  }

  // ===================
  // DETALLE DEL CURSO - AGREGAR
  // ===================
  const btnDetalle = document.getElementById("agregarCarritoBtn");
  if (btnDetalle) {
    btnDetalle.addEventListener("click", () => {
      const titulo = document.getElementById("detalleTitulo").textContent.trim();
      const curso = cursos.find(c => c.titulo === titulo);
      if (!curso) { alert("Error: Curso no encontrado."); return; }
      if (carrito.find(item => item.id === curso.id)) { alert("⚠️ Este curso ya está en el carrito"); return; }
      carrito.push(curso);
      const original = btnDetalle.innerHTML;
      btnDetalle.disabled = true;
      btnDetalle.classList.add("btn-success");
      btnDetalle.innerHTML = "✔ Agregado";
      setTimeout(() => { btnDetalle.disabled = false; btnDetalle.classList.remove("btn-success"); btnDetalle.innerHTML = original; }, 1000);
      actualizarCarritoUI();
    });
  }

  // ===================
  // NAVEGACIÓN
  // ===================
 function mostrarSeccion(seccion) {
  const secciones = {
    inicio: ["heroSection", "coursesSection"],
    misCursos: ["misCursosSection"],
    carrito: ["carritoSection"],
    detalle: ["detalleCursoSection"]
  };

  // Ocultar todas las secciones
  document.querySelectorAll("section").forEach(sec => sec.style.display = "none");

  // Mostrar solo las correctas
  if (secciones[seccion]) {
    secciones[seccion].forEach(id => {
      const el = document.getElementById(id);
      if (el) el.style.display = "block";
    });
  }

  // Actualizar menú activo
  inicioLink.classList.toggle("active", seccion === "inicio");
  misCursosLink.classList.toggle("active", seccion === "misCursos");
  carritoLink.classList.toggle("active", seccion === "carrito");
}



  inicioLink.addEventListener("click", () => mostrarSeccion("inicio"));
  misCursosLink.addEventListener("click", () => mostrarSeccion("misCursos"));
  carritoLink.addEventListener("click", () => { actualizarCarritoUI(); mostrarSeccion("carrito"); });

  // ===================
  // LOCAL STORAGE
  // ===================
  function guardarEstado() {
    try { localStorage.setItem("mi_carrito", JSON.stringify(carrito)); } catch(e) {}
  }
  function cargarEstadoInicial() {
    try {
      const raw = localStorage.getItem("mi_carrito");
      if (raw) carrito = JSON.parse(raw);
    } catch(e) { carrito = []; }
    actualizarCarritoUI();
  }

  // ===================
  // INICIALIZACIÓN
  // ===================
  renderCursos();
  cargarEstadoInicial();

  // Mostrar solo secciones iniciales
  document.getElementById("heroSection").style.display = "block";
  document.getElementById("coursesSection").style.display = "block";
  document.getElementById("misCursosSection").style.display = "none";
  document.getElementById("carritoSection").style.display = "none";
  document.getElementById("detalleCursoSection").style.display = "none";

});
function agregarCarritoDesdeFuera(idCurso) {
    // Dispara un evento global que tu index escucha
    const evento = new CustomEvent("agregarCursoExterno", {
        detail: { id: idCurso }
    });
    window.dispatchEvent(evento);
}
function agregarCarritoDesdeFuera(idCurso) {
    const evento = new CustomEvent("agregarCursoExterno", {
        detail: { id: idCurso }
    });
    window.dispatchEvent(evento);
}

window.addEventListener("agregarCursoExterno", (e) => {
    const id = Number(e.detail.id);

    // Buscar el curso real
    const curso = cursos.find(c => c.id === id);
    if (!curso) {
        console.warn("Curso externo no encontrado:", id);
        return;
    }

    // Evitar duplicados
    if (!carrito.some(c => c.id === curso.id)) {
        carrito.push(curso);
        guardarEstado();
        actualizarCarritoUI();
    }

    alert("Curso agregado al carrito correctamente");
});



