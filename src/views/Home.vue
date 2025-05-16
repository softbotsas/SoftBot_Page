<template>
  <div class="home-view">
    <section class="hero-section" ref="heroSectionRef">
      <div class="particles-background">
        <div v-for="i in 50" :key="`p-${i}`" class="particle" :style="getRandomParticleStyle()"></div>
      </div>
      <div class="hero-content">
        <div class="hero-text animate-on-scroll" data-animation="fadeInLeft">
          <div class="logo-title">
            <img src="/images/logo-softbot.png" alt="Softbot Logo" class="logo-img">
            <h1 class="hero-main-title modern-solid">SOFTBOT</h1>
          </div>
          <p class="hero-subtitle">CODE THE FUTURE. <span class="highlight">BUILD THE IMPOSSIBLE.</span></p>
          <div class="hero-buttons">
            <RouterLink to="/services" class="btn-primary"><i class="fas fa-cogs"></i> Explorar Soluciones</RouterLink>
            <RouterLink to="/contact" class="btn-outline"><i class="fas fa-headset"></i> Contáctanos</RouterLink>
          </div>
        </div>
        <div class="hero-image animate-on-scroll" data-animation="fadeInRight">
          <div class="code-terminal">
            <div class="terminal-header">
              <div class="terminal-buttons">
                <span class="terminal-btn red"></span>
                <span class="terminal-btn yellow"></span>
                <span class="terminal-btn green"></span>
              </div>
              <span class="terminal-title">softbot@kernel:~</span>
            </div>
            <div class="terminal-body">
              <div class="code-line" v-for="(line, index) in terminalLines" :key="index" :style="{ '--line-delay': `${index * 0.6 + 0.5}s`, '--chars': line.text.length }">
                <span class="prompt">$</span> {{ line.text }}
              </div>
              <div class="code-line" :style="{ '--line-delay': `${terminalLines.length * 0.6 + 0.5}s`, '--chars': 1 }">
                <span class="prompt">$</span> <span class="cursor">_</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#services" class="scroll-down-indicator" aria-label="Scroll to services">
        <i class="fas fa-chevron-down"></i>
      </a>
    </section>

    <section id="services" class="services-section section-padding">
      <div class="container">
        <h2 class="section-title animate-on-scroll" data-animation="fadeInUp">// Nuestras_Directivas <span class="accent-color">:Soluciones</span></h2>
        <p class="section-subtitle animate-on-scroll" data-animation="fadeInUp" data-delay="0.2">
          Desarrollamos software de vanguardia que redefine lo posible. Cada línea de código es un paso hacia la innovación.
        </p>
        <div class="services-grid">
          <div class="service-card animate-on-scroll" data-animation="zoomIn" data-delay="0.1">
            <div class="service-icon"><i class="fas fa-code-branch"></i></div>
            <h3>Desarrollo a Medida</h3>
            <p>Aplicaciones robustas y escalables, diseñadas para tus necesidades exactas.</p>
          </div>
          <div class="service-card animate-on-scroll" data-animation="zoomIn" data-delay="0.2">
            <div class="service-icon"><i class="fas fa-cubes"></i></div>
            <h3>Arquitectura de Microservicios</h3>
            <p>Sistemas flexibles y resilientes que evolucionan con tu negocio.</p>
          </div>
          <div class="service-card animate-on-scroll" data-animation="zoomIn" data-delay="0.3">
            <div class="service-icon"><i class="fas fa-robot"></i></div>
            <h3>IA & Automatización</h3>
            <p>Integramos inteligencia para optimizar procesos y desbloquear nuevas capacidades.</p>
          </div>
          <div class="service-card animate-on-scroll" data-animation="zoomIn" data-delay="0.4">
            <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
            <h3>Ciberseguridad Proactiva</h3>
            <p>Fortificamos tu infraestructura digital con estrategias de defensa de élite.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="philosophy-section section-padding bg-darker">
      <div class="container philosophy-grid">
        <div class="philosophy-text animate-on-scroll" data-animation="fadeInLeft">
          <h2 class="section-title light">// El_Ethos_Softbot <span class="accent-color">:Innovar</span></h2>
          <p>En Softbot, el espíritu "hacker" es nuestra brújula: curiosidad insaciable, ingenio para resolver lo irresoluble y una devoción por la excelencia técnica. No solo construimos software; diseñamos el mañana.</p>
          <ul>
            <li><i class="fas fa-lightbulb"></i><span>Creatividad Disruptiva</span></li>
            <li><i class="fas fa-terminal"></i><span>Maestría en Código</span></li>
            <li><i class="fas fa-user-secret"></i><span>Seguridad y Ética</span></li>
            <li><i class="fas fa-infinity"></i><span>Soluciones Evolutivas</span></li>
          </ul>
          <RouterLink to="/nosotros" class="btn-outline-accent">Descubre Nuestra Cultura</RouterLink>
        </div>
        <div class="philosophy-visual animate-on-scroll" data-animation="fadeInRight" data-delay="0.2">
          <div class="matrix-sphere">
             <i class="fas fa-brain"></i>
          </div>
        </div>
      </div>
    </section>

    <section class="tech-stack-section section-padding">
      <div class="container">
        <h2 class="section-title text-center animate-on-scroll" data-animation="fadeInUp">// Arsenal_Tecnológico <span class="accent-color">:Herramientas</span></h2>
        <div class="tech-icons-grid">
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.1" title="Vue.js"><i class="fab fa-vuejs"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.2" title="Node.js"><i class="fab fa-node-js"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.3" title="Python"><i class="fab fa-python"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.4" title="Laravel"><i class="fab fa-laravel"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.5" title="Docker"><i class="fab fa-docker"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.6" title="Amazon Web Services"><i class="fab fa-aws"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.7" title="JavaScript"><i class="fab fa-js-square"></i></div>
          <div class="tech-icon animate-on-scroll" data-animation="bounceIn" data-delay="0.8" title="Git"><i class="fab fa-git-alt"></i></div>
        </div>
      </div>
    </section>

    <section class="final-cta-section section-padding bg-primary-gradient">
      <div class="container text-center animate-on-scroll" data-animation="pulseAnimation">
        <h2>¿Listo para <span class="highlight-darkbg">Materializar</span> tu Visión Digital?</h2>
        <p>En Softbot, convertimos tus ideas más ambiciosas en software robusto y de alto impacto. Hablemos.</p>
        <RouterLink to="/contacto" class="btn-light">Solicita una Consultoría Estratégica</RouterLink>
      </div>
    </section>

  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { RouterLink } from 'vue-router';

const heroSectionRef = ref(null);

const terminalLines = ref([
  { text: "npm init softbot-app --future" },
  { text: "Booting quantum_core_services..." },
  { text: "Compiling polymorphic_code..." },
  { text: "Establishing secure_data_link..." },
  { text: "Deploying to decentralized_network..." },
  { text: "System.ready(): true" }
]);

// Simple CSS Particle generator
const getRandomParticleStyle = () => {
  const size = Math.random() * 3 + 1; // 1px to 4px
  const duration = Math.random() * 15 + 10; // 10s to 25s
  const delay = Math.random() * 5; // 0s to 5s
  const x = Math.random() * 100; // 0% to 100%
  const yStart = -5 - Math.random() * 10; // Start off-screen
  const yEnd = 105 + Math.random() * 10; // End off-screen

  return {
    width: `${size}px`,
    height: `${size}px`,
    left: `${x}vw`,
    top: `${yStart}%`, // Start off-screen
    animationDuration: `${duration}s`,
    animationDelay: `${delay}s`,
    '--y-end': `${yEnd}%` // Custom property for end Y position
  };
};


// Intersection Observer for scroll animations
let observers = [];
const setupIntersectionObserver = () => {
  const animatedElements = document.querySelectorAll('.animate-on-scroll');
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15 // Trigger when 15% of the element is visible
  };

  animatedElements.forEach(el => {
    const observer = new IntersectionObserver((entries, observerInstance) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const animationType = entry.target.dataset.animation || 'fadeInUp'; // Default a fadeInUp
          const delay = entry.target.dataset.delay || '0s';
          entry.target.style.animationDelay = delay;
          entry.target.classList.add('animated', animationType);
          observerInstance.unobserve(entry.target);
        }
      });
    }, options);
    observer.observe(el);
    observers.push(observer);
  });
};

onMounted(() => {
  // Pequeño delay para asegurar que el DOM esté listo para las animaciones
  setTimeout(setupIntersectionObserver, 100);
});

onUnmounted(() => {
  observers.forEach(observer => observer.disconnect());
});

</script>

<style lang="scss">
/* --- IMPORTACIONES GLOBALES (Asegúrate que Poppins y Font Awesome estén cargados, idealmente en index.html o main.js) --- */
// @import url('[https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap](https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap)');
// @import url('[https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&display=swap](https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&display=swap)');
// @import url('[https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css)');
// @import 'animate.css'; // Para las animaciones de scroll

/* --- VARIABLES GLOBALES SCSS (Igual que tu ejemplo) --- */
$primary: #6366f1; // Morado índigo
$secondary-accent: #ec4899; // Rosa fuerte
$accent-glow: #a855f7; // Púrpura brillante
$bg-dark: #1e293b; // Azul pizarra oscuro
$bg-darker: #0f172a; // Azul noche (más oscuro)
$text-light: #e2e8f0; // Gris claro azulado
$text-secondary: #94a3b8; // Gris azulado medio
$text-code: $primary; // Texto tipo código usa el primario

$font-main: 'Poppins', sans-serif;
$font-code: 'Fira Code', 'Courier New', monospace;

$spacing-xs: 0.25rem; $spacing-sm: 0.5rem; $spacing-md: 1rem;
$spacing-lg: 1.5rem; $spacing-xl: 2rem; $spacing-xxl: 3rem; $spacing-xxxl: 4rem;

$border-radius-sm: 0.375rem; $border-radius-md: 0.5rem; $border-radius-lg: 0.75rem;
$container-width: 1200px;
$breakpoint-xl: 1200px; $breakpoint-lg: 992px; $breakpoint-md: 768px; $breakpoint-sm: 576px;

// Mixin
@mixin flex-center { display: flex; align-items: center; justify-content: center; }

/* --- ESTILOS BASE --- */
.home-view {
  overflow-x: hidden;
  color: $text-light;
  background-color: $bg-darker; // Fondo más oscuro para toda la página
  font-family: $font-main;
}

.container {
  width: 100%;
  max-width: $container-width;
  margin: 0 auto;
  padding: 0 $spacing-lg;
}

.section-padding { padding: $spacing-xxxl 0; }
.bg-darker { background-color: $bg-darker; }
.text-center { text-align: center; }

.section-title {
  font-size: clamp(2.2rem, 5vw, 3rem);
  font-weight: 700;
  color: $text-light;
  margin-bottom: $spacing-sm;
  position: relative;
  display: inline-block; /* Para que ::after se ajuste al texto */
  padding-bottom: $spacing-sm;
  &::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60%; /* Más corto */
    height: 3px;
    background: linear-gradient(90deg, $primary, $secondary-accent);
    border-radius: 2px;
  }
  &.light::after { background: linear-gradient(90deg, $primary, $text-light); }
  &.text-center::after { left: 50%; transform: translateX(-50%); }
  .accent-color { color: $primary; }
}

.section-subtitle {
  font-size: clamp(1rem, 2.5vw, 1.2rem);
  color: $text-secondary;
  max-width: 700px;
  margin: 0 auto $spacing-xl auto; /* Centrado si es text-center */
  line-height: 1.7;
  font-weight: 300;
}


/* --- HERO SECTION ESTILOS (Tu código base adaptado) --- */
.hero-section {
  position: relative; height: 100vh; min-height: 700px; // Altura mínima para contenido
  display: flex; align-items: center;
  background: $bg-darker; // Fondo base para hero
  // background: linear-gradient(135deg, $bg-dark 0%, $bg-darker 100%); // Tu gradiente
  overflow: hidden;
}

// Partículas CSS Mejoradas
.particles-background {
  position: absolute; top: 0; left: 0; width: 100%; height: 100%;
  pointer-events: none; z-index: 0; // Detrás del contenido
}
.particle {
  position: absolute;
  background-color: rgba($primary, 0.6); // Color primario semi-transparente
  border-radius: 50%;
  opacity: 0;
  animation: particle-float var(--duration) var(--delay) linear infinite;
  box-shadow: 0 0 5px rgba($primary, 0.5), 0 0 10px rgba($primary, 0.3);
}
@keyframes particle-float {
  0% { transform: translateY(var(--y-start)); opacity: 0; }
  20% { opacity: 1; }
  80% { opacity: 1; }
  100% { transform: translateY(var(--y-end)); opacity: 0; }
}


.hero-content {
  position: relative; z-index: 1; display: flex; align-items: center;
  justify-content: space-between; width: 100%; max-width: $container-width;
  margin: 0 auto; padding: 0 $spacing-lg; gap: $spacing-xl;
}
.hero-text { flex: 1.2; max-width: 650px; } // Dar más espacio al texto
.logo-title { display: flex; align-items: center; gap: $spacing-md; margin-bottom: $spacing-md; }
.logo-img { height: 70px; width: auto; filter: drop-shadow(0 0 10px rgba($primary, 0.5)); }
.hero-main-title { // Renombrado de .hero-title para evitar conflicto con .section-title
  font-size: clamp(3rem, 7vw, 5rem); font-weight: 800; color: $primary;
  line-height: 1.1; margin: 0; text-shadow: 0 0 15px rgba($primary, 0.4);
}
.modern-solid { // Mantenido tu estilo
  font-size: inherit; font-weight: inherit; color: $primary; margin: 0;
  line-height: inherit; position: relative; display: inline-block;
  &::after { content: ''; position: absolute; bottom: -8px; left: 0; width: 100%; height: 3px; background: $secondary-accent; transform: scaleX(0); transform-origin: right; transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
  &:hover::after { transform: scaleX(1); transform-origin: left; }
}
.hero-subtitle {
  font-size: clamp(1.2rem, 3vw, 1.6rem); color: $text-light; // Más claro para contraste
  margin: $spacing-md 0 $spacing-xl 0; font-weight: 300; line-height: 1.7; opacity: 0.9;
  .highlight { color: $primary; font-weight: 500;}
}
.hero-buttons { display: flex; gap: $spacing-md; }

// Botones CTA Globales
.btn-primary, .btn-outline, .btn-outline-accent, .btn-light {
  padding: $spacing-sm $spacing-xl; border-radius: $border-radius-sm; font-size: 1rem;
  font-weight: 600; cursor: pointer; transition: all 0.3s ease;
  border: 2px solid transparent; text-decoration: none;
  display: inline-flex; align-items: center; justify-content: center; gap: $spacing-sm;
  i { margin-right: $spacing-xs; }
}
.btn-primary {
  background: $primary; color: $bg-darker; border-color: $primary;
  &:hover { background: lighten($primary, 10%); border-color: lighten($primary, 10%); transform: translateY(-3px); box-shadow: 0 5px 15px rgba($primary, 0.3); }
}
.btn-outline {
  background: transparent; color: $text-light; border-color: $primary;
  &:hover { background: rgba($primary, 0.15); color: $primary; transform: translateY(-3px); }
}
.btn-outline-accent { // Nuevo botón
  background: transparent; color: $secondary-accent; border-color: $secondary-accent;
  &:hover { background: rgba($secondary-accent, 0.15); color: lighten($secondary-accent, 10%); transform: translateY(-3px); }
}
.btn-light { // Nuevo botón para fondos oscuros/primarios
  background: $text-light; color: $bg-darker; border-color: $text-light;
  &:hover { background: darken($text-light, 10%); border-color: darken($text-light, 10%); transform: translateY(-3px); box-shadow: 0 5px 15px rgba($text-light, 0.2); }
}


.hero-image { flex: 1; max-width: 550px; perspective: 1000px; }
.code-terminal {
  background: lighten($bg-darker, 5%);
  border-radius: $border-radius-md;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 15px rgba($primary, 0.2);
  border: 1px solid rgba($primary, 0.2);
  font-family: $font-code;
  transform: rotateY(-10deg) rotateX(5deg); // Efecto 3D sutil
  transition: transform 0.5s ease-out;
  &:hover { transform: rotateY(0deg) rotateX(0deg); }
}
.terminal-header { background: lighten($bg-darker, 10%); padding: $spacing-sm $spacing-md; display: flex; align-items: center; border-bottom: 1px solid rgba($primary, 0.1); }
.terminal-buttons { display: flex; gap: $spacing-xs; margin-right: $spacing-md; }
.terminal-btn { width: 12px; height: 12px; border-radius: 50%; &.red { background: #ff5f56; } &.yellow { background: #ffbd2e; } &.green { background: #27c93f; } }
.terminal-title { color: $text-secondary; font-size: 0.875rem; }
.terminal-body { padding: $spacing-lg; color: $text-light; min-height: 180px; } /* Altura mínima para efecto typing */
.code-line {
  margin-bottom: $spacing-sm; font-size: 0.95rem; line-height: 1.6; white-space: nowrap;
  overflow: hidden; border-right: 2px solid transparent; /* Para cursor */
  width: 0; /* Inicialmente oculto */
  opacity: 0;
  animation: typing-animation var(--chars) steps(var(--chars), end) forwards,
             blink-cursor .75s step-end infinite;
  animation-delay: var(--line-delay); /* Aplicar delay a ambas animaciones */
  &:last-child { margin-bottom: 0; }
}
@keyframes typing-animation {
  0% { width: 0; opacity: 0; }
  1% { opacity: 1; border-right-color: $text-light; } /* Mostrar cursor al empezar */
  99.9% { border-right-color: $text-light; }
  100% { width: calc(var(--chars) * 1ch); opacity: 1; border-right-color: transparent; } /* Ocultar cursor al final */
}
@keyframes blink-cursor {
  from, to { border-right-color: transparent; }
  50% { border-right-color: $text-light; }
}
.prompt { color: $primary; margin-right: $spacing-sm; }
.cursor { display: inline-block; background: $text-light; width: 8px; height: 1.2em; margin-left: 2px; animation: blink 1s infinite; vertical-align: middle; }
@keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

.scroll-down-indicator {
    position: absolute;
    bottom: $spacing-xl;
    left: 50%;
    transform: translateX(-50%);
    color: rgba($text-light, 0.5);
    font-size: 1.8rem;
    animation: bounce-vertical 2s infinite;
    cursor: pointer;
    transition: color 0.3s ease;
    &:hover { color: $primary; }
}
@keyframes bounce-vertical { 0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); } 40% { transform: translateX(-50%) translateY(-10px); } 60% { transform: translateX(-50%) translateY(-5px); } }


/* --- SERVICES SECTION --- */
.services-section { background-color: $bg-dark; }
.services-grid {
  display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: $spacing-lg; margin-top: $spacing-xl;
}
.service-card {
  background: lighten($bg-darker, 3%);
  padding: $spacing-xl $spacing-lg;
  border-radius: $border-radius-md;
  border: 1px solid rgba($primary, 0.15);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  &:hover {
    transform: translateY(-10px);
    border-color: rgba($primary, 0.5);
    box-shadow: 0 10px 30px rgba($primary, 0.1);
  }
  .service-icon {
    font-size: 3rem; color: $primary; margin-bottom: $spacing-md;
    display: inline-block;
  }
  h3 { font-size: 1.5rem; font-weight: 600; color: $text-light; margin-bottom: $spacing-sm; }
  p { font-size: 0.95rem; color: $text-secondary; line-height: 1.6; }
}

/* --- PHILOSOPHY SECTION --- */
.philosophy-grid {
  display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: $spacing-xxl; align-items: center; margin-top: $spacing-xl;
}
.philosophy-text {
  ul {
    list-style: none; padding: 0; margin: $spacing-lg 0;
    li {
      display: flex; align-items: center; gap: $spacing-sm; margin-bottom: $spacing-sm;
      font-size: 1.05rem; color: $text-light;
      i { color: $primary; font-size: 1.2em; width: 25px; text-align: center; }
    }
  }
}
.philosophy-visual {
  @include flex-center;
  .matrix-sphere { // Placeholder - ideal para un canvas o SVG animado
    width: 300px; height: 300px; border-radius: 50%;
    background: radial-gradient(circle, rgba($primary,0.2) 0%, transparent 70%);
    border: 2px dashed rgba($primary,0.3);
    @include flex-center;
    i { font-size: 5rem; color: rgba($primary,0.7); animation: pulse-icon 3s infinite ease-in-out;}
  }
}
@keyframes pulse-icon { 0%, 100% { transform: scale(1); opacity: 0.7; } 50% { transform: scale(1.1); opacity: 1;} }


/* --- TECH STACK SECTION --- */
.tech-stack-section { background-color: $bg-dark; }
.tech-icons-grid {
  display: flex; flex-wrap: wrap; justify-content: center; align-items: center;
  gap: $spacing-xl; margin-top: $spacing-xl;
  .tech-icon {
    font-size: 4rem; color: $text-secondary; transition: color 0.3s ease, transform 0.3s ease;
    &:hover { color: $primary; transform: scale(1.2) rotate(-5deg); }
  }
}

/* --- FINAL CTA SECTION --- */
.final-cta-section {
  // background: $bg-primary-gradient; (definida abajo)
  background: linear-gradient(135deg, $primary 0%, $secondary-accent 100%);
  padding: $spacing-xxxl 0;
  h2 {
    font-size: clamp(2rem, 5vw, 2.8rem); color: $bg-darker; // Texto oscuro sobre fondo claro/brillante
    font-weight: 700; margin-bottom: $spacing-md; text-shadow: none;
    &::after { display: none; } // Sin línea debajo en este CTA
  }
  p { font-size: 1.2rem; color: lighten($bg-darker, 15%); max-width: 600px; margin: 0 auto $spacing-xl auto; }
  .highlight-darkbg { color: darken($bg-darker, 5%); font-weight: 800; } // Destacado para fondos claros
}


/* --- ANIMACIONES DE SCROLL (Clases de Animate.css adaptadas) --- */
.animate-on-scroll {
  opacity: 0;
  visibility: hidden; /* Evita que ocupe espacio antes de animar */
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  will-change: opacity, transform; /* Optimización */
}

.animated.fadeInUp {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  animation: fadeInUpKeyframes 0.8s ease-out forwards;
}
@keyframes fadeInUpKeyframes { from { opacity:0; transform:translate3d(0,40px,0); } to { opacity:1; transform:translate3d(0,0,0); } }

.animated.fadeInLeft {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  animation: fadeInLeftKeyframes 0.8s ease-out forwards;
}
@keyframes fadeInLeftKeyframes { from { opacity:0; transform:translate3d(-40px,0,0); } to { opacity:1; transform:translate3d(0,0,0); } }

.animated.fadeInRight {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  animation: fadeInRightKeyframes 0.8s ease-out forwards;
}
@keyframes fadeInRightKeyframes { from { opacity:0; transform:translate3d(40px,0,0); } to { opacity:1; transform:translate3d(0,0,0); } }

.animated.zoomIn {
  opacity: 1;
  visibility: visible;
  transform: scale(1);
  animation: zoomInKeyframes 0.6s ease-out forwards;
}
@keyframes zoomInKeyframes { from { opacity:0; transform:scale3d(.3,.3,.3); } to { opacity:1; transform:scale3d(1,1,1); } }

.animated.bounceIn {
  opacity: 1;
  visibility: visible;
  transform: scale(1);
  animation: bounceInKeyframes 0.75s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}
@keyframes bounceInKeyframes {
  from, 60%, 75%, 90%, to { animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% { opacity: 0; transform: scale3d(0.3, 0.3, 0.3); }
  60% { opacity: 1; transform: scale3d(1.03, 1.03, 1.03); }
  75% { transform: scale3d(0.9, 0.9, 0.9); }
  90% { transform: scale3d(1.01, 1.01, 1.01); }
  to { transform: scale3d(1, 1, 1); }
}
.animated.pulseAnimation {
    opacity: 1; visibility: visible;
    animation: pulseKeyframes 1.5s ease-in-out infinite;
}
@keyframes pulseKeyframes {
    0% { transform: scale(1); }
    50% { transform: scale(1.03); }
    100% { transform: scale(1); }
}


/* --- RESPONSIVE BREAKPOINTS --- */
@media (max-width: $breakpoint-lg) {
  .hero-content { flex-direction: column; text-align: center; padding-top: $spacing-xxxl; gap: $spacing-xl; }
  .hero-text { order: 2; }
  .hero-image { order: 1; width: 100%; max-width: 500px; margin-bottom: $spacing-lg;} // Terminal más pequeño en tablet
  .logo-title { justify-content: center; }
  .hero-buttons { justify-content: center; }
  .philosophy-grid { text-align: center; }
  .philosophy-text ul { justify-content: center; li { justify-content: center; } }
}

@media (max-width: $breakpoint-md) {
  .section-padding { padding: $spacing-xxl 0; }
  .hero-section { min-height: auto; padding-bottom: $spacing-xxl; } // Altura automática en móvil
  .logo-img { height: 50px; }
  .hero-main-title { font-size: clamp(2.5rem, 10vw, 3.5rem); }
  .hero-subtitle { font-size: clamp(1.1rem, 4vw, 1.25rem); }
  .hero-buttons { flex-direction: column; align-items: center; .btn-primary, .btn-outline { width: 100%; max-width: 300px;} }
  .code-terminal { transform: none; &:hover { transform: none; } } // Sin efecto 3D en móvil
  .terminal-body { min-height: 150px; padding: $spacing-md;}
  .code-line { font-size: 0.85rem; }
  .services-grid { grid-template-columns: 1fr; }
  .philosophy-visual .matrix-sphere { width: 250px; height: 250px; i { font-size: 4rem;} }
  .tech-icons-grid { gap: $spacing-lg; .tech-icon {font-size: 3rem;} }
  .final-cta-section { h2 {font-size: clamp(1.8rem, 6vw, 2.2rem); } p {font-size: 1.1rem;} .btn-light{width: 90%; max-width: 350px;}}
}

@media (max-width: $breakpoint-sm) {
   .section-padding { padding: $spacing-xl 0; }
   .container { padding: 0 $spacing-md; }
   .hero-subtitle { margin-bottom: $spacing-lg; }
   .scroll-down-indicator { font-size: 1.5rem; bottom: $spacing-lg;}
}

</style>