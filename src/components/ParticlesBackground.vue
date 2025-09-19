<template>
    <div class="particles-container">
      <div id="tsparticles" class="particles-canvas"></div>
    </div>
  </template>
  
  <script setup>
  import { onMounted, onUnmounted } from 'vue';
  import { loadSlim } from '@tsparticles/slim';
  import { particlesConfig, heroParticlesConfig, spaceParticlesConfig } from '@/config/particlesConfig';
  
  const props = defineProps({
    type: {
      type: String,
      default: 'default', // 'default', 'hero', 'space'
      validator: (value) => ['default', 'hero', 'space'].includes(value)
    },
    visible: {
      type: Boolean,
      default: true
    }
  });
  
  let particlesInstance = null;
  
  const getConfig = () => {
    switch (props.type) {
      case 'hero':
        return heroParticlesConfig;
      case 'space':
        return spaceParticlesConfig;
      default:
        return particlesConfig;
    }
  };
  
  onMounted(async () => {
    if (!props.visible) return;
  
    try {
      particlesInstance = await loadSlim();
      await particlesInstance.init();
      await particlesInstance.load('tsparticles', getConfig());
    } catch (error) {
      console.error('Error loading particles:', error);
    }
  });
  
  onUnmounted(async () => {
    if (particlesInstance) {
      try {
        await particlesInstance.destroy();
      } catch (error) {
        console.error('Error destroying particles:', error);
      }
    }
  });
  </script>
  
  <style scoped>
  .particles-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
  }
  
  .particles-canvas {
    width: 100%;
    height: 100%;
  }
  
  /* Asegurar que las partículas estén detrás del contenido */
  .particles-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }
  </style>