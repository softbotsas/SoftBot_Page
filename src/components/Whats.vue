<template>
  <div class="softbot-whatsapp-widget">
    <transition name="chat-panel-fade">
      <div
        class="chat-panel-overlay"
        v-if="isChatPanelOpen"
        @click="closeChatPanel"
      ></div>
    </transition>

    <transition name="chat-panel-slide-up">
      <div class="softbot-chat-panel" v-if="isChatPanelOpen">
        <div class="chat-panel-header">
          <img :src="profilePictureSrc" alt="Softbot Support" class="chat-profile-pic">
          <div class="chat-header-info">
            <span class="chat-support-name">{{ supportName }}</span>
            <span class="chat-support-status">{{ supportStatus }}</span>
          </div>
          <button class="chat-close-button" @click="closeChatPanel" aria-label="Cerrar chat">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="chat-panel-body">
          <div class="message-group received">
            <div class="message-bubble">
              <p>{{ defaultMessageToUser }}</p>
              <span class="message-timestamp">{{ currentTime }}</span>
            </div>
          </div>
        </div>
        <div class="chat-panel-footer">
          <button class="chat-action-button" @click="openActualWhatsApp">
            <svg class="whatsapp-logo-svg inline-svg" viewBox="0 0 90 90" fill="currentColor" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
              <path d="M90,43.841c0,24.213-19.782,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.218,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.343   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.923,66,60.801,66.903c2.715,1.286,5.104,1.074,6.987,0.626c2.118-0.514,6.409-2.615,7.312-5.105   C75.5,59.977,75.5,58.543,75.229,58.097C74.957,57.651,74.186,57.482,73.465,56.944C72.744,56.406,70.229,55.151,68.129,53.938   z"/>
            </svg>
            Continuar en WhatsApp
          </button>
        </div>
      </div>
    </transition>

    <button
      class="softbot-whatsapp-fab animate-fab-entry"
      @click="toggleChatPanel"
      aria-label="Abrir chat de soporte Softbot"
      title="Contactar Soporte Softbot"
    >
      <span class="fab-scanner-line"></span>
      <span class="fab-border-glow"></span>
      <svg class="whatsapp-logo-svg" viewBox="0 0 90 90" fill="currentColor" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
        <path d="M90,43.841c0,24.213-19.782,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.218,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.343   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.923,66,60.801,66.903c2.715,1.286,5.104,1.074,6.987,0.626c2.118-0.514,6.409-2.615,7.312-5.105   C75.5,59.977,75.5,58.543,75.229,58.097C74.957,57.651,74.186,57.482,73.465,56.944C72.744,56.406,70.229,55.151,68.129,53.938   z"/>
      </svg>
      <div class="fab-particles">
        <span class="particle p1"></span>
        <span class="particle p2"></span>
        <span class="particle p3"></span>
      </div>
    </button>
  </div>
</template>

<script setup>
// --- Script sin cambios respecto a la versión anterior que ya tiene el SVG ---
import { ref, computed, watch, onMounted } from 'vue';
const phoneNumber = '573001234567';
const defaultMessageToUser = '¡Hola! Soy el asistente virtual de Softbot. ¿Listo para iniciar una conversación sobre tu próximo proyecto?';
const prefilledMessageForWhatsApp = 'Hola Softbot, estoy interesado en sus servicios y me gustaría recibir más información.';
const profilePictureSrc = '/images/logo-softbot-avatar.png'; // Asegúrate que esta imagen exista
const supportName = 'Softbot Asistente';
const supportStatus = 'En línea | Responde al instante';
const isChatPanelOpen = ref(false);
const currentTime = ref('');
const updateCurrentTime = () => { const now = new Date(); currentTime.value = now.toLocaleTimeString('es-CO', { hour: 'numeric', minute: '2-digit', hour12: true }); };
const toggleChatPanel = () => { isChatPanelOpen.value = !isChatPanelOpen.value; if (isChatPanelOpen.value) { updateCurrentTime(); } };
const closeChatPanel = () => { isChatPanelOpen.value = false; };
const openActualWhatsApp = () => { const encodedMessage = encodeURIComponent(prefilledMessageForWhatsApp); const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`; window.open(whatsappUrl, '_blank', 'noopener,noreferrer'); closeChatPanel(); };
watch(isChatPanelOpen, (isOpen) => { if (isOpen) { document.body.style.overflow = 'hidden'; } else { document.body.style.overflow = ''; } });
onMounted(() => { updateCurrentTime(); });
// --- Fin Script sin cambios ---
</script>

<style lang="scss" scoped>
/* Variables de Estilo Softbot */
$primary-color: #00ffcc;
$accent-color: #ff00ff;
$background-dark: #0a0f1e;
$background-panel: #10182c;   /* Fondo oscuro para el FAB y el panel de chat */
$background-header-panel: lighten($background-panel, 5%);
$background-footer-panel: darken($background-panel, 3%);
$border-color: rgba(0, 255, 204, 0.3); /* Borde neón del FAB */
$text-light: #e0e0e0;
$text-muted: #8892b0;
$fab-icon-color: #fff; /* Color blanco para el logo SVG de WhatsApp */
$fab-shadow-color: rgba(0, 255, 204, 0.4);
$fab-dark-shadow-color: rgba(0, 0, 0, 0.3);
$fab-pulse-color: rgba(0, 255, 204, 0.3);

$font-ui: 'Poppins', sans-serif;

.softbot-whatsapp-widget { /* ... estilos sin cambios ... */ font-family: $font-ui; position: relative; }

/* === Botón Flotante (FAB) con FONDO OSCURO y LOGO SVG === */
.softbot-whatsapp-fab {
  position: fixed; bottom: 30px; right: 30px; width: 68px; height: 68px;
  background: $background-panel; /* <<-- CAMBIO: Fondo oscuro del panel */
  border: 2px solid $border-color; /* <<-- CAMBIO: Borde neón */
  border-radius: 50%; display: flex; align-items: center; justify-content: center;
  cursor: pointer;
  box-shadow: 0 0 20px $fab-shadow-color, 0 8px 20px $fab-dark-shadow-color;
  z-index: 1010;
  transition: transform 0.3s cubic-bezier(0.18, 0.89, 0.32, 1.28), box-shadow 0.3s ease, background-color 0.3s ease; /* Añadido background-color a la transición */
  outline: none; overflow: hidden;
}

.whatsapp-logo-svg {
  width: 36px;
  height: 36px;
  fill: $fab-icon-color; /* Blanco, para contraste con fondo oscuro */
  position: relative;
  z-index: 2;
  transition: transform 0.3s ease;
}

.softbot-whatsapp-fab:hover {
  transform: scale(1.12) rotate(10deg);
  background: lighten($background-panel, 5%); /* <<-- CAMBIO: Aclarar ligeramente el fondo oscuro */
  border-color: lighten($border-color, 20%); /* <<-- CAMBIO: Borde neón más brillante */
  box-shadow: 0 0 30px $fab-shadow-color, 0 10px 25px $fab-dark-shadow-color;
}
.softbot-whatsapp-fab:hover .whatsapp-logo-svg {
  transform: scale(1.05);
}
.softbot-whatsapp-fab:active { transform: scale(0.98) rotate(0deg); }

/* Efectos de Pulso y Luz (igual que antes, usando $fab-pulse-color y $primary-color para consistencia) */
.fab-scanner-line { position: absolute; top: 0; left: 50%; width: 2px; height: 100%; background: linear-gradient(transparent, rgba($primary-color,0.7), transparent); transform: translateX(-50%); animation: scanLineAnim 3s linear infinite; opacity: 0.7; z-index: 1; }
@keyframes scanLineAnim { 0% { top: -100%; } 50% { top: 0; } 100% { top: 100%; } }

.fab-border-glow { position: absolute; width: 100%; height: 100%; border-radius: 50%; box-shadow: 0 0 0 0 $fab-pulse-color; animation: borderGlow 2.2s infinite ease-out; z-index: 0; }
@keyframes borderGlow { 0% { transform: scale(0.9); box-shadow: 0 0 0 0 $fab-pulse-color; opacity: 0.7; } 70% { transform: scale(1.3); box-shadow: 0 0 15px 20px rgba($primary-color, 0); opacity: 0; } 100% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba($primary-color, 0); opacity: 0;} }

.fab-particles { position: absolute; width: 100%; height: 100%; z-index: 0;}
.particle { position: absolute; background-color: $primary-color; border-radius: 50%; opacity: 0; animation: fabParticleFloat 3s infinite ease-in-out; }
.particle.p1 { width: 3px; height: 3px; top: 20%; left: 15%; animation-delay: 0s; }
.particle.p2 { width: 2px; height: 2px; top: 70%; left: 80%; animation-delay: 1s; }
.particle.p3 { width: 4px; height: 4px; top: 50%; left: 50%; animation-delay: 2s; }
@keyframes fabParticleFloat { 0%, 100% { transform: translateY(0) scale(0.5); opacity: 0; } 50% { transform: translateY(-10px) scale(1); opacity: 0.5; } }

.animate-fab-entry { animation: fabEntryZoomRotate 0.7s 0.3s cubic-bezier(0.18, 0.89, 0.32, 1.28) backwards; }
@keyframes fabEntryZoomRotate { from { transform: scale(0.3) rotate(-180deg); opacity: 0; } to { transform: scale(1) rotate(0deg); opacity: 1; } }


/* === Overlay (sin cambios) === */
.chat-panel-overlay { position: fixed; inset: 0; background-color: rgba(10, 15, 30, 0.6); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); z-index: 1019; }

/* === Panel de Chat Simulado (sin cambios estructurales, solo colores si es necesario) === */
/* Los estilos del panel de chat, header, body, footer, message bubble, etc., se mantienen como en la versión anterior, ya que el cambio principal era el FAB */
.softbot-chat-panel {
  position: fixed; bottom: 105px; right: 30px; width: 90%; max-width: 380px;
  background-color: $background-panel; border: 1px solid $border-color;
  border-radius: 12px; box-shadow: 0 0 35px rgba($primary-color, 0.15), 0 10px 30px rgba(0,0,0,0.5);
  display: flex; flex-direction: column; z-index: 1020; overflow: hidden;
  max-height: calc(80vh - 105px);
}
.chat-panel-header {
  background-color: $background-header-panel; color: $text-light; padding: 12px 15px;
  display: flex; align-items: center; gap: 12px; border-bottom: 1px solid $border-color;
  flex-shrink: 0;
}
.chat-profile-pic { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid $primary-color; }
.chat-header-info { flex-grow: 1; }
.chat-support-name { display: block; font-weight: 600; font-size: 1rem; }
.chat-support-status { display: block; font-size: 0.8rem; color: $text-muted; }
.chat-close-button { background: none; border: none; color: $text-muted; font-size: 1.3rem; cursor: pointer; padding: 5px; transition: color 0.2s, transform 0.2s; &:hover { color: $primary-color; transform: rotate(90deg); } }

.chat-panel-body {
  flex-grow: 1; padding: 15px; overflow-y: auto;
  background-image: linear-gradient(rgba($primary-color, 0.02) 1px, transparent 1px), linear-gradient(90deg, rgba($primary-color, 0.02) 1px, transparent 1px);
  background-size: 20px 20px;
}
.chat-panel-body::-webkit-scrollbar { width: 6px; }
.chat-panel-body::-webkit-scrollbar-track { background: transparent; }
.chat-panel-body::-webkit-scrollbar-thumb { background-color: rgba($primary-color, 0.4); border-radius: 3px; }
.chat-panel-body::-webkit-scrollbar-thumb:hover { background-color: rgba($primary-color, 0.6); }

.message-group.received { display: flex; justify-content: flex-start; margin-bottom: 12px; }
.message-bubble {
  background-color: lighten($background-panel, 7%); color: $text-light; padding: 10px 14px;
  border-radius: 15px; max-width: 80%; line-height: 1.5; font-size: 0.95rem;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); border: 1px solid rgba($border-color, 0.5);
  p { margin: 0 0 5px 0; }
}
.message-group.received .message-bubble { border-top-left-radius: 4px; }
.message-timestamp { display: block; text-align: right; font-size: 0.7rem; color: $text-muted; opacity: 0.8; }

.chat-panel-footer {
  padding: 15px; background-color: $background-footer-panel;
  border-top: 1px solid $border-color; text-align: center; flex-shrink: 0;
}
.chat-action-button {
  background: $primary-color; color: $background-dark; border: none;
  padding: 12px 25px; border-radius: 25px; font-weight: 600; font-size: 1rem;
  cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center;
  gap: 10px;
  .inline-svg { width: 1.2em; height: 1.2em; vertical-align: middle; margin-right: 0.3em; fill: $background-dark; } /* Color del SVG en el botón */
  &:hover { background-color: lighten($primary-color, 10%); transform: translateY(-2px) scale(1.02); box-shadow: 0 5px 15px rgba($primary-color, 0.3); }
}

/* === Transiciones (sin cambios) === */
.chat-panel-fade-enter-active, .chat-panel-fade-leave-active { transition: opacity 0.3s ease-in-out; }
.chat-panel-fade-enter-from, .chat-panel-fade-leave-to { opacity: 0; }
.chat-panel-slide-up-enter-active, .chat-panel-slide-up-leave-active { transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.3s ease-in-out; }
.chat-panel-slide-up-enter-from, .chat-panel-slide-up-leave-to { opacity: 0; transform: translateY(60px) scale(0.9); }
.chat-panel-slide-up-enter-to, .chat-panel-slide-up-leave-from { opacity: 1; transform: translateY(0) scale(1); }

/* === Responsividad (sin cambios) === */
@media (max-width: 768px) {
  .softbot-whatsapp-fab { bottom: 20px; right: 20px; width: 60px; height: 60px; }
  .whatsapp-logo-svg { width: 32px; height: 32px; }
  .softbot-chat-panel { bottom: 90px; right: 20px; left: 20px; width: auto; max-width: none; max-height: calc(100vh - 40px - 70px); }
}
@media (max-width: 480px) {
  .softbot-whatsapp-fab { width: 55px; height: 55px; }
  .whatsapp-logo-svg { width: 28px; height: 28px; }
  .softbot-chat-panel { max-height: calc(100vh - 30px - 65px); bottom: 80px; border-radius: 10px; }
  .chat-support-name { font-size: 0.9rem; }
  .chat-support-status { font-size: 0.75rem; }
  .message-bubble { font-size: 0.9rem; padding: 8px 12px; }
  .chat-action-button { font-size: 0.9rem; padding: 10px 20px; .inline-svg { width: 1.1em; height: 1.1em; } }
}

</style>