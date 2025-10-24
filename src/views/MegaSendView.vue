<template>
  <div class="megasend-view">
    <div class="space-background"></div>
    <div class="stars"></div>
    <div class="twinkling"></div>

    <!-- Breadcrumb Navigation -->
    <section class="breadcrumb-section">
      <div class="container">
        <nav class="breadcrumb">
          <router-link to="/projects" class="breadcrumb-link">
            <i class="fas fa-arrow-left"></i>
            Volver a Proyectos
          </router-link>
          <span class="breadcrumb-separator">/</span>
          <span class="breadcrumb-current">MegaSend</span>
        </nav>
      </div>
    </section>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-container">
        <div class="hero-content">
          <div class="hero-badge">
            <i class="fab fa-whatsapp"></i>
            <span>Sistema de Envíos Masivos</span>
          </div>
          <h1 class="hero-title">
            <span class="highlight">MegaSend</span>
            <br>Sistema de Envíos Masivos por WhatsApp
          </h1>
          <p class="hero-description">
            Sistema diseñado para enviar mensajes masivos por WhatsApp de forma automática y personalizada. 
            Funciona desde tu propio computador, utilizando tu sesión de WhatsApp Web.
          </p>
          <div class="hero-actions">
            <a href="#demo" class="btn-primary">
              <i class="fas fa-play"></i>
              Ver Video
            </a>
            <a href="#contact" class="btn-secondary">
              <i class="fas fa-calendar"></i>
              Agendar Demostración
            </a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="visual-container">
            <img src="/images/megasend.png" alt="MegaSend Dashboard" class="hero-image">
            <div class="floating-elements">
              <div class="floating-icon whatsapp">
                <i class="fab fa-whatsapp"></i>
              </div>
              <div class="floating-icon database">
                <i class="fas fa-database"></i>
              </div>
              <div class="floating-icon automation">
                <i class="fas fa-robot"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="section-number">// 01.</span>Características_Principales
          </h2>
          <p class="section-subtitle">
            Todo lo que necesitas para automatizar tus envíos masivos
          </p>
        </div>

        <div class="features-grid">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fab fa-whatsapp"></i>
            </div>
            <h3>WhatsApp Web</h3>
            <p>Funciona con tu sesión de WhatsApp Web, sin necesidad de API ni suscripciones externas</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-database"></i>
            </div>
            <h3>Base de Datos Excel</h3>
            <p>Carga tu base de datos en Excel y envía mensajes personalizados con el nombre de cada persona</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-image"></i>
            </div>
            <h3>Multimedia</h3>
            <p>Adjunta imágenes, documentos, enlaces o promociones a tus mensajes</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-robot"></i>
            </div>
            <h3>Automatización</h3>
            <p>Envía a cientos o miles de personas en pocos minutos de forma completamente automatizada</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Sin Contactos</h3>
            <p>No necesitas que los contactos te tengan guardado para enviarles mensajes</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Panel Intuitivo</h3>
            <p>Gestiona todo desde un panel simple e intuitivo con análisis de campañas</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Video Demo Section -->
    <section id="demo" class="video-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="section-number">// 02.</span>Demostración_En_Video
          </h2>
          <p class="section-subtitle">
            Ve cómo funciona MegaSend en acción
          </p>
        </div>

        <div class="video-container">
          <div class="video-wrapper">
            <!-- Video de demostración de MegaSend -->
            <iframe 
              src="https://www.youtube.com/embed/g5lFIH4jSaQ" 
              title="MegaSend Demo Video"
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
          <div class="video-info">
            <h3>¿Cómo funciona MegaSend?</h3>
            <ul class="demo-steps">
              <li><i class="fas fa-check"></i> Carga tu base de datos en Excel</li>
              <li><i class="fas fa-check"></i> Personaliza tu mensaje con variables</li>
              <li><i class="fas fa-check"></i> Adjunta imágenes o documentos</li>
              <li><i class="fas fa-check"></i> Programa o envía inmediatamente</li>
              <li><i class="fas fa-check"></i> Monitorea el progreso en tiempo real</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Use Cases Section -->
    <section class="use-cases-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="section-number">// 03.</span>Casos_de_Uso
          </h2>
          <p class="section-subtitle">
            Perfecto para diferentes tipos de negocios
          </p>
        </div>

        <div class="use-cases-grid">
          <div class="use-case-card">
            <div class="use-case-icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <h3>Marketing y Ventas</h3>
            <p>Envía promociones, ofertas especiales y catálogos de productos a tu base de clientes</p>
          </div>

          <div class="use-case-card">
            <div class="use-case-icon">
              <i class="fas fa-bell"></i>
            </div>
            <h3>Recordatorios</h3>
            <p>Notifica citas, vencimientos, pagos pendientes y eventos importantes</p>
          </div>

          <div class="use-case-card">
            <div class="use-case-icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <h3>Comunicación Masiva</h3>
            <p>Difunde novedades, cambios de horarios, políticas y comunicados oficiales</p>
          </div>

          <div class="use-case-card">
            <div class="use-case-icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <h3>Educación</h3>
            <p>Envía material educativo, recordatorios de clases y comunicados a estudiantes</p>
          </div>
        </div>
      </div>
    </section>


    <!-- CTA Section -->
    <section id="contact" class="cta-section">
      <div class="container">
        <div class="cta-content">
          <h2 class="cta-title">
            ¿Listo para Automatizar tus Envíos?
          </h2>
          <p class="cta-description">
            Agenda una demostración personalizada y descubre cómo MegaSend puede transformar tu comunicación
          </p>
          <div class="cta-actions">
            <a href="https://wa.me/573001234567?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20MegaSend" 
               target="_blank" 
               class="btn-primary large">
              <i class="fab fa-whatsapp"></i>
              Contactar por WhatsApp
            </a>
            <a href="mailto:contacto@softbot.com" class="btn-secondary large">
              <i class="fas fa-envelope"></i>
              Enviar Email
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
  // Animaciones al cargar la página
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
      }
    });
  }, observerOptions);

  // Observar elementos para animaciones
  document.querySelectorAll('.feature-card, .use-case-card').forEach(el => {
    observer.observe(el);
  });
});
</script>

<style scoped>
/* Variables de Color Softbot */
:root {
  --primary-color: #00ffcc;
  --secondary-color: #9c27b0;
  --accent-color: #ff00ff;
  --background-dark: #0a0f1e;
  --background-darker: #060a14;
  --background-card: rgba(18, 28, 58, 0.7);
  --text-light: #e0e0e0;
  --text-dark-accent: #43D9AD;
  --text-muted: #8892b0;
  --border-color: rgba(0, 255, 204, 0.2);
  --border-highlight: rgba(0, 255, 204, 0.5);
  --font-primary: 'Poppins', sans-serif;
  --font-code: 'Fira Code', 'Courier New', monospace;
  --card-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
}

/* Estilos base de la vista */
.megasend-view {
  background-color: var(--background-dark);
  min-height: 100vh;
  padding-top: 80px;
  overflow-x: hidden;
  position: relative;
  color: var(--text-light);
  font-family: var(--font-primary);
}

/* Fondos espaciales */
.space-background, .stars, .twinkling { 
  position: fixed; 
  top: 0; 
  left: 0; 
  width: 100%; 
  height: 100%; 
  z-index: 1; 
}

.space-background { 
  background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%); 
}

.stars { 
  background: transparent url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="white" opacity="0.4"/></svg>') repeat; 
  background-size: 250px 250px; 
  animation: stars-move 220s linear infinite; 
  opacity: 0.6; 
}

.twinkling { 
  background: transparent url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="20" cy="20" r="0.3" fill="white" opacity="0.2"/><circle cx="70" cy="70" r="0.2" fill="white" opacity="0.15"/></svg>') repeat; 
  background-size: 350px 350px; 
  animation: twinkling-move 180s linear infinite; 
  opacity: 0.5; 
}

@keyframes stars-move { 
  from { background-position: 0 0; } 
  to { background-position: -2000px 2000px; } 
}

@keyframes twinkling-move { 
  from { background-position: 0 0; } 
  to { background-position: -1500px 1500px; } 
}

/* Contenedor general */
.container {
  position: relative;
  z-index: 3;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Breadcrumb Section */
.breadcrumb-section {
  padding: 1rem 0;
  background: rgba(0, 0, 0, 0.3);
  border-bottom: 1px solid var(--border-color);
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9rem;
}

.breadcrumb-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: var(--text-muted);
  text-decoration: none;
  transition: color 0.3s ease;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  border: 1px solid transparent;
}

.breadcrumb-link:hover {
  color: var(--primary-color);
  border-color: var(--border-color);
  background: rgba(0, 255, 204, 0.05);
}

.breadcrumb-separator {
  color: var(--text-muted);
  font-weight: 500;
}

.breadcrumb-current {
  color: var(--primary-color);
  font-weight: 600;
}

/* Hero Section */
.hero-section {
  padding: 4rem 0 1.5rem 0;
  position: relative;
}

.hero-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  min-height: 70vh;
  justify-content: center;
  width: 100%;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(0, 255, 204, 0.1);
  border: 1px solid var(--border-color);
  padding: 0.5rem 1rem;
  border-radius: 25px;
  color: var(--primary-color);
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 1.5rem;
}

.hero-title {
  font-size: clamp(1.8rem, 4vw, 4rem);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1.5rem;
  color: var(--text-light);
  word-wrap: break-word;
  hyphens: auto;
}

.highlight {
  color: var(--primary-color);
  background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-description {
  font-size: 1.2rem;
  color: var(--text-muted);
  line-height: 1.6;
  margin-bottom: 2rem;
  max-width: 800px;
  width: 100%;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.btn-primary, .btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
}

.btn-primary {
  background: var(--primary-color);
  color: var(--background-dark);
}

.btn-primary:hover {
  background: transparent;
  color: var(--primary-color);
  border: 1px solid var(--primary-color);
  transform: translateY(-2px);
}

.btn-secondary {
  background: transparent;
  color: var(--text-light);
  border: 1px solid var(--border-color);
}

.btn-secondary:hover {
  border-color: var(--primary-color);
  color: var(--primary-color);
  transform: translateY(-2px);
}

.btn-primary.large, .btn-secondary.large {
  padding: 1rem 2rem;
  font-size: 1.1rem;
}

/* Hero Visual */
.hero-visual {
  position: relative;
  margin-top: 2rem;
  max-width: 600px;
  width: 100%;
}

.visual-container {
  position: relative;
  background: linear-gradient(145deg, rgba(0, 255, 204, 0.1), rgba(156, 39, 176, 0.1));
  border-radius: 20px;
  padding: 2rem;
  border: 1px solid var(--border-color);
}

.hero-image {
  width: 100%;
  height: auto;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.floating-elements {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.floating-icon {
  position: absolute;
  width: 60px;
  height: 60px;
  background: var(--background-card);
  border: 1px solid var(--border-color);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  animation: float 3s ease-in-out infinite;
}

.floating-icon.whatsapp {
  top: 10%;
  right: 10%;
  color: #25D366;
  animation-delay: 0s;
}

.floating-icon.database {
  bottom: 20%;
  left: 5%;
  color: var(--primary-color);
  animation-delay: 1s;
}

.floating-icon.automation {
  top: 50%;
  right: 5%;
  color: var(--accent-color);
  animation-delay: 2s;
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

/* Section Headers */
.section-header {
  text-align: center;
  margin-bottom: 2rem;
}

.section-title {
  font-size: clamp(1.5rem, 3.5vw, 2.5rem);
  color: var(--primary-color);
  margin-bottom: 1rem;
  font-weight: 700;
  word-wrap: break-word;
  hyphens: auto;
  line-height: 1.3;
}

.section-number {
  color: var(--accent-color);
  font-family: var(--font-code);
  font-size: 0.8em;
}

.section-subtitle {
  color: var(--text-muted);
  font-size: 1.1rem;
  max-width: 600px;
  margin: 0 auto;
}

/* Features Section */
.features-section {
  padding: 2rem 0 4rem 0;
  background: rgba(0, 0, 0, 0.2);
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.feature-card {
  background: var(--background-card);
  border: 1px solid var(--border-color);
  border-radius: 12px;
  padding: 2rem;
  text-align: center;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.feature-card:hover {
  transform: translateY(-5px);
  border-color: var(--border-highlight);
  box-shadow: 0 15px 35px rgba(0, 255, 204, 0.1);
}

.feature-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.5rem auto;
  font-size: 2rem;
  color: var(--background-dark);
}

.feature-card h3 {
  font-size: clamp(1.1rem, 2.5vw, 1.3rem);
  color: var(--text-light);
  margin-bottom: 1rem;
  font-weight: 600;
  word-wrap: break-word;
  line-height: 1.3;
}

.feature-card p {
  color: var(--text-muted);
  line-height: 1.6;
}

/* Video Section */
.video-section {
  padding: 6rem 0;
}

.video-container {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 3rem;
  align-items: start;
}

.video-wrapper {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
  border-radius: 15px;
  overflow: hidden;
  border: 1px solid var(--border-color);
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 15px;
}

.video-info h3 {
  color: var(--primary-color);
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
}

.demo-steps {
  list-style: none;
  padding: 0;
}

.demo-steps li {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 0.75rem 0;
  color: var(--text-muted);
  border-bottom: 1px solid var(--border-color);
}

.demo-steps li:last-child {
  border-bottom: none;
}

.demo-steps li i {
  color: var(--primary-color);
  font-size: 1.2rem;
}

/* Use Cases Section */
.use-cases-section {
  padding: 6rem 0;
  background: rgba(0, 0, 0, 0.2);
}

.use-cases-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.use-case-card {
  background: var(--background-card);
  border: 1px solid var(--border-color);
  border-radius: 12px;
  padding: 2rem;
  text-align: center;
  transition: all 0.3s ease;
}

.use-case-card:hover {
  transform: translateY(-5px);
  border-color: var(--border-highlight);
}

.use-case-icon {
  width: 70px;
  height: 70px;
  background: var(--accent-color);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.5rem auto;
  font-size: 1.8rem;
  color: var(--background-dark);
}

.use-case-card h3 {
  font-size: clamp(1.1rem, 2.5vw, 1.3rem);
  color: var(--text-light);
  margin-bottom: 1rem;
  font-weight: 600;
  word-wrap: break-word;
  line-height: 1.3;
}

.use-case-card p {
  color: var(--text-muted);
  line-height: 1.6;
}


/* CTA Section */
.cta-section {
  padding: 6rem 0;
  background: linear-gradient(135deg, rgba(0, 255, 204, 0.1), rgba(156, 39, 176, 0.1));
  border-top: 1px solid var(--border-color);
}

.cta-content {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

.cta-title {
  font-size: clamp(1.5rem, 3.5vw, 2.5rem);
  color: var(--text-light);
  margin-bottom: 1.5rem;
  word-wrap: break-word;
  hyphens: auto;
  line-height: 1.3;
}

.cta-description {
  font-size: 1.2rem;
  color: var(--text-muted);
  margin-bottom: 2.5rem;
  line-height: 1.6;
}

.cta-actions {
  display: flex;
  gap: 1.5rem;
  justify-content: center;
  flex-wrap: wrap;
}

/* Animaciones */
.animate-in {
  animation: slideInUp 0.6s ease-out;
}

@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive Design */
@media (max-width: 1200px) {
  .hero-description {
    max-width: 700px;
  }
  
  .hero-visual {
    max-width: 550px;
  }
}

@media (max-width: 1024px) {
  .video-container {
    grid-template-columns: 1fr;
  }
  
  .hero-description {
    max-width: 600px;
  }
  
  .hero-visual {
    max-width: 500px;
  }
}

@media (max-width: 900px) {
  .hero-container {
    padding: 0 2rem;
  }
  
  .hero-description {
    max-width: 100%;
  }
  
  .hero-visual {
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .megasend-view {
    padding-top: 60px;
  }
  
  .hero-section {
    padding: 2rem 0 1rem 0;
  }
  
  .container {
    padding: 0 15px;
  }
  
  .hero-container {
    min-height: 50vh;
    padding: 0 1rem;
  }
  
  .section-header {
    margin-bottom: 1.5rem;
  }
  
  .hero-title {
    font-size: clamp(1.5rem, 5vw, 2.5rem);
    line-height: 1.1;
  }
  
  .hero-description {
    font-size: 1rem;
    max-width: 100%;
  }
  
  .hero-visual {
    max-width: 100%;
    margin-top: 1.5rem;
  }
  
  .features-grid,
  .use-cases-grid {
    grid-template-columns: 1fr;
  }
  
  .hero-actions,
  .cta-actions {
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
  }
  
  .btn-primary,
  .btn-secondary {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }
  
  .floating-elements {
    display: none;
  }
}

@media (max-width: 480px) {
  .hero-title {
    font-size: clamp(1.3rem, 4vw, 1.8rem);
    line-height: 1.1;
  }
  
  .section-title {
    font-size: clamp(1.2rem, 3vw, 1.5rem);
  }
  
  .feature-card h3,
  .use-case-card h3 {
    font-size: clamp(1rem, 2vw, 1.2rem);
  }
  
  .cta-title {
    font-size: clamp(1.2rem, 3vw, 1.8rem);
  }
  
  .feature-card,
  .use-case-card {
    padding: 1.5rem;
  }
}
</style>
