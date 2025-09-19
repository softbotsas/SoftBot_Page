<template>
  <Transition name="loading-fade">
    <div v-if="isLoading" class="loading-screen">
      <div class="loading-container">
        <!-- Logo y título -->
        <div class="logo-container">
          <img src="/images/logo-softbot.png" alt="SoftBot Logo" class="loading-logo">
          <h1 class="loading-title">SOFTBOT</h1>
          <p class="loading-subtitle">Inicializando sistema...</p>
        </div>

        <!-- Terminal loader -->
        <div class="terminal-loader">
          <div class="terminal-header">
            <div class="terminal-buttons">
              <span class="terminal-btn red"></span>
              <span class="terminal-btn yellow"></span>
              <span class="terminal-btn green"></span>
            </div>
            <span class="terminal-title">softbot@system:~</span>
          </div>
        <div class="terminal-body">
          <div 
            v-for="(line, index) in loadingLines" 
            :key="index" 
            class="terminal-line"
            :style="{ '--delay': `${index * 1.2}s` }"
          >
            <span class="prompt">$</span> {{ line }}
          </div>
          <div class="terminal-line" :style="{ '--delay': `${loadingLines.length * 1.2}s` }">
            <span class="prompt">$</span> <span class="cursor-blink">_</span>
          </div>
        </div>
        </div>

        <!-- Barra de progreso -->
        <div class="progress-container">
          <div class="progress-bar">
            <div class="progress-fill" :style="{ width: `${progress}%` }"></div>
          </div>
          <span class="progress-text">{{ progress }}%</span>
        </div>

        <!-- Partículas flotantes -->
        <div class="loading-particles">
          <div 
            v-for="i in 20" 
            :key="`particle-${i}`" 
            class="particle"
            :style="getRandomParticleStyle()"
          ></div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
  isLoading: {
    type: Boolean,
    default: true
  }
});

const emit = defineEmits(['loading-complete']);

const progress = ref(0);
const loadingLines = ref([
  'Iniciando sistema SoftBot...',
  'Cargando módulos de IA...',
  'Conectando con servidores...',
  'Verificando conexiones...',
  'Preparando interfaz...',
  'Sistema listo.'
]);

const getRandomParticleStyle = () => {
  const size = Math.random() * 4 + 2;
  const duration = Math.random() * 10 + 5;
  const delay = Math.random() * 5;
  const x = Math.random() * 100;
  const y = Math.random() * 100;

  return {
    width: `${size}px`,
    height: `${size}px`,
    left: `${x}%`,
    top: `${y}%`,
    animationDuration: `${duration}s`,
    animationDelay: `${delay}s`
  };
};

let progressInterval;
let maxTimeout;

onMounted(() => {
  // Simular progreso de carga
  progressInterval = setInterval(() => {
    if (progress.value < 100) {
      progress.value += Math.random() * 12 + 4; // Más lento
      if (progress.value > 100) progress.value = 100;
    } else {
      clearInterval(progressInterval);
      // Completar carga después de un breve delay
      setTimeout(() => {
        emit('loading-complete');
      }, 500);
    }
  }, 150); // Intervalo más lento

  // Timeout de seguridad - máximo 6 segundos
  maxTimeout = setTimeout(() => {
    clearInterval(progressInterval);
    progress.value = 100;
    setTimeout(() => {
      emit('loading-complete');
    }, 500);
  }, 6000); // 6 segundos para ver toda la secuencia
});

onUnmounted(() => {
  if (progressInterval) {
    clearInterval(progressInterval);
  }
  if (maxTimeout) {
    clearTimeout(maxTimeout);
  }
});
</script>

<style lang="scss" scoped>
// Variables
$primary: #6366f1;
$secondary-accent: #ec4899;
$bg-dark: #1e293b;
$bg-darker: #0f172a;
$text-light: #e2e8f0;
$text-secondary: #94a3b8;
$terminal-green: #00ff00;

// Transiciones de la pantalla de carga
.loading-fade-enter-active,
.loading-fade-leave-active {
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.loading-fade-enter-from,
.loading-fade-leave-to {
  opacity: 0;
  transform: scale(0.95);
}

.loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: linear-gradient(135deg, $bg-darker 0%, $bg-dark 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  overflow: hidden;
}

.loading-container {
  text-align: center;
  position: relative;
  z-index: 2;
  max-width: 450px;
  width: 100%;
  padding: 2rem;
}

.logo-container {
  margin-bottom: 3rem;
  
  .loading-logo {
    height: 80px;
    width: auto;
    filter: drop-shadow(0 0 20px rgba($primary, 0.6));
    margin-bottom: 1rem;
    animation: logoGlow 2s ease-in-out infinite alternate;
  }
  
  .loading-title {
    font-size: 3rem;
    font-weight: 800;
    color: $primary;
    margin: 0 0 0.5rem 0;
    text-shadow: 0 0 20px rgba($primary, 0.5);
    font-family: 'Courier New', monospace;
    letter-spacing: 2px;
  }
  
  .loading-subtitle {
    font-size: 1.1rem;
    color: $text-secondary;
    margin: 0;
    font-family: 'Courier New', monospace;
  }
}

.terminal-loader {
  background: rgba($bg-darker, 0.9);
  border-radius: 8px;
  border: 1px solid rgba($primary, 0.3);
  box-shadow: 0 0 30px rgba($primary, 0.2);
  margin-bottom: 2rem;
  font-family: 'Courier New', monospace;
  max-width: 400px;
  margin-left: auto;
  margin-right: auto;
  
  .terminal-header {
    background: rgba($bg-dark, 0.8);
    padding: 0.75rem 1rem;
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba($primary, 0.2);
    
    .terminal-buttons {
      display: flex;
      gap: 0.5rem;
      margin-right: 1rem;
      
      .terminal-btn {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        
        &.red { background: #ff5f56; }
        &.yellow { background: #ffbd2e; }
        &.green { background: #27c93f; }
      }
    }
    
    .terminal-title {
      color: $text-secondary;
      font-size: 0.875rem;
    }
  }
  
  .terminal-body {
    padding: 1.5rem;
    color: $text-light;
    
    .terminal-line {
      margin-bottom: 0.5rem;
      opacity: 0;
      animation: typeIn 1.2s ease-out forwards;
      animation-delay: var(--delay);
      
      .prompt {
        color: $terminal-green;
        margin-right: 0.5rem;
      }
      
      .cursor-blink {
        animation: blink 1s infinite;
        color: $terminal-green;
      }
    }
  }
}

.progress-container {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  
  .progress-bar {
    width: 250px;
    height: 6px;
    background: rgba($text-secondary, 0.2);
    border-radius: 3px;
    overflow: hidden;
    border: 1px solid rgba($primary, 0.3);
    
    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, $primary, $secondary-accent);
      border-radius: 4px;
      transition: width 0.3s ease;
      box-shadow: 0 0 10px rgba($primary, 0.5);
    }
  }
  
  .progress-text {
    color: $text-light;
    font-family: 'Courier New', monospace;
    font-weight: bold;
    min-width: 40px;
  }
}

.loading-particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
  
  .particle {
    position: absolute;
    background: rgba($primary, 0.6);
    border-radius: 50%;
    animation: float 10s linear infinite;
    box-shadow: 0 0 10px rgba($primary, 0.4);
  }
}

// Animaciones
@keyframes logoGlow {
  0% { filter: drop-shadow(0 0 20px rgba($primary, 0.6)); }
  100% { filter: drop-shadow(0 0 30px rgba($primary, 0.8)); }
}

@keyframes typeIn {
  0% { opacity: 0; transform: translateX(-20px); }
  100% { opacity: 1; transform: translateX(0); }
}

@keyframes blink {
  0%, 50% { opacity: 1; }
  51%, 100% { opacity: 0; }
}

@keyframes float {
  0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
  10% { opacity: 1; }
  90% { opacity: 1; }
  100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
}

// Responsive
@media (max-width: 768px) {
  .loading-container {
    padding: 1rem;
    max-width: 350px;
  }
  
  .logo-container {
    margin-bottom: 2rem;
    
    .loading-logo {
      height: 60px;
    }
    
    .loading-title {
      font-size: 2.5rem;
    }
  }
  
  .terminal-loader {
    max-width: 320px;
    
    .terminal-body {
      padding: 1rem;
      
      .terminal-line {
        font-size: 0.875rem;
      }
    }
  }
  
  .progress-container {
    .progress-bar {
      width: 180px;
    }
  }
}
</style>