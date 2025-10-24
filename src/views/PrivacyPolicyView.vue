<template>
  <div class="privacy-policy">
    <!-- Header -->
    <div class="privacy-header">
      <div class="container">
        <div class="header-content">
          <img src="/images/logo-softbot.png" alt="SoftBot Logo" class="header-logo">
          <div class="header-text">
            <h1>Política de Tratamiento de Datos Personales</h1>
            <p>SoftBot S.A.S. - Tu Privacidad es Nuestra Prioridad</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="privacy-content">
      <div class="container">
        <div class="privacy-body">
          
          <!-- Información General -->
          <section class="privacy-section">
            <h2><i class="fas fa-info-circle"></i> Información General y Objeto</h2>
            <p>Bienvenido a SoftBot S.A.S. ("SoftBot", "nosotros", "nuestro"). Estamos comprometidos con la protección de la privacidad y la seguridad de los datos personales. Esta Política de Tratamiento de Datos Personales (la "Política") describe cómo recopilamos, usamos, almacenamos y protegemos la información en cumplimiento con la **Ley 1581 de 2012** de Colombia y sus decretos reglamentarios.</p>
            <p>Esta Política se aplica a los datos de nuestros clientes directos (las empresas que contratan nuestros servicios) y a los datos personales que procesamos en nombre de nuestros clientes (los usuarios finales que interactúan con las soluciones que proveemos).</p>
            
            <div class="info-box">
              <p><strong>Última actualización:</strong> {{ lastUpdated }}</p>
              <p><strong>Versión:</strong> 1.1 (Adaptada a la normativa colombiana)</p>
              <p><strong>Responsable del Tratamiento:</strong> SoftBot S.A.S., con correo electrónico de contacto <a href="mailto:softbotsas@gmail.com">softbotsas@gmail.com</a>.</p>
            </div>
          </section>

          <!-- Datos que Recopilamos -->
          <section class="privacy-section">
            <h2><i class="fas fa-database"></i> Tipos de Datos que Tratamos</h2>
            <p>Como proveedor de tecnología, tratamos dos categorías principales de datos personales:</p>
            
            <div class="data-category">
              <h3>Datos de Nuestros Clientes (Empresas)</h3>
              <p>Recopilamos la información necesaria para establecer y mantener una relación comercial:</p>
              <ul>
                <li>Nombre completo, cargo y datos de contacto corporativo (email, teléfono).</li>
                <li>Información de la empresa o persona jurídica (NIT, razón social).</li>
                <li>Dirección de facturación y datos fiscales para la gestión de pagos.</li>
                <li>Historial de comunicaciones, soporte y preferencias de servicio.</li>
              </ul>
            </div>

            <div class="data-category">
              <h3>Datos Procesados en Nombre de Nuestros Clientes (Datos de Usuario Final)</h3>
              <p>Actuamos como **Encargados del Tratamiento** al procesar los datos de los usuarios finales que interactúan con los servicios de nuestros Clientes (por ejemplo, a través de un chatbot de WhatsApp). Nuestros Clientes son los **Responsables del Tratamiento** de estos datos. La información que procesamos incluye:</p>
              <ul>
                <li>Número de teléfono de WhatsApp y otros identificadores de mensajería.</li>
                <li>Contenido de las conversaciones y interacciones a través de los servicios.</li>
                <li>Datos técnicos asociados a los mensajes (metadatos, timestamps).</li>
                <li>Cualquier otra información que el usuario final comparta voluntariamente durante la interacción.</li>
              </ul>
            </div>
          </section>

          <!-- Propósito del Procesamiento -->
          <section class="privacy-section">
            <h2><i class="fas fa-cogs"></i> Finalidades del Tratamiento de Datos</h2>
            
            <div class="purpose-grid">
              <div class="purpose-card">
                <i class="fas fa-file-contract"></i>
                <h3>Prestación de Servicios</h3>
                <p>Para configurar, operar y mantener las soluciones contratadas por nuestros Clientes, como chatbots y automatizaciones.</p>
              </div>
              
              <div class="purpose-card">
                <i class="fas fa-headset"></i>
                <h3>Soporte Técnico</h3>
                <p>Para proporcionar asistencia técnica, resolver problemas y garantizar el correcto funcionamiento de nuestros servicios.</p>
              </div>
              
              <div class="purpose-card">
                <i class="fas fa-money-bill-wave"></i>
                <h3>Facturación y Gestión</h3>
                <p>Para gestionar la facturación, los pagos y la relación contractual con nuestros Clientes.</p>
              </div>
              
              <div class="purpose-card">
                <i class="fas fa-bullhorn"></i>
                <h3>Comunicaciones</h3>
                <p>Para enviar a nuestros Clientes información administrativa, actualizaciones del servicio y comunicaciones de marketing (con su consentimiento).</p>
              </div>
              
              <div class="purpose-card">
                <i class="fas fa-chart-line"></i>
                <h3>Análisis y Mejora</h3>
                <p>Para analizar el uso de nuestros servicios de forma agregada y anónima con el fin de mejorar nuestra plataforma.</p>
              </div>
              
              <div class="purpose-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Seguridad y Cumplimiento</h3>
                <p>Para proteger la seguridad de nuestra plataforma, prevenir fraudes y cumplir con nuestras obligaciones legales y regulatorias en Colombia.</p>
              </div>
            </div>
          </section>

          <!-- Base Legal -->
          <section class="privacy-section">
            <h2><i class="fas fa-balance-scale"></i> Base Legal para el Tratamiento</h2>
            <p>El tratamiento de datos personales se realiza conforme a las bases legales permitidas por la Ley 1581 de 2012:</p>
            
            <div class="legal-basis">
              <div class="basis-item">
                <h3><i class="fas fa-handshake"></i> Autorización del Titular</h3>
                <p>Cuando contamos con la autorización previa, explícita e informada del titular de los datos.</p>
              </div>
              <div class="basis-item">
                <h3><i class="fas fa-file-contract"></i> Relación Contractual</h3>
                <p>Para la ejecución de un contrato en el que el titular es parte (por ejemplo, nuestros Clientes).</p>
              </div>
              <div class="basis-item">
                <h3><i class="fas fa-gavel"></i> Obligación Legal</h3>
                <p>Para cumplir con las obligaciones legales que nos exigen tratar ciertos datos.</p>
              </div>
            </div>
          </section>
          
          <!-- Retención de Datos -->
          <section class="privacy-section">
            <h2><i class="fas fa-clock"></i> Periodo de Vigencia y Retención</h2>
            <p>Los datos personales se conservarán únicamente durante el tiempo razonable y necesario para cumplir con las finalidades para las cuales fueron recopilados, o para cumplir con requisitos legales, contables o de reporte.</p>
          </section>

          <!-- Compartir Información -->
          <section class="privacy-section">
            <h2><i class="fas fa-share-alt"></i> Comunicación y Transferencia de Datos</h2>
            <p>No vendemos ni alquilamos datos personales. Solo compartimos información con terceros bajo las siguientes circunstancias:</p>
            <div class="sharing-categories">
              <div class="sharing-item"><h3><i class="fas fa-users"></i> Proveedores de Servicios</h3><p>Con subcontratistas y proveedores (como servicios de hosting en la nube) que necesitan acceso a los datos para operar y que están contractualmente obligados a protegerlos.</p></div>
              <div class="sharing-item"><h3><i class="fas fa-gavel"></i> Autoridades Competentes</h3><p>Cuando sea requerido por una orden judicial o una obligación legal verificable.</p></div>
              <div class="sharing-item"><h3><i class="fas fa-handshake"></i> Autorización del Titular</h3><p>Con terceros, cuando contamos con la autorización expresa del titular de los datos.</p></div>
            </div>
          </section>

          <!-- Seguridad -->
          <section class="privacy-section">
            <h2><i class="fas fa-lock"></i> Medidas de Seguridad</h2>
            <p>Implementamos medidas de seguridad técnicas, administrativas y físicas robustas y apropiadas para proteger los datos personales contra el acceso no autorizado, la alteración, la divulgación o la destrucción.</p>
            <div class="security-measures">
              <div class="security-item"><i class="fas fa-key"></i><h3>Encriptación de Datos</h3><p>Ciframos los datos en tránsito y en reposo utilizando protocolos estándar de la industria.</p></div>
              <div class="security-item"><i class="fas fa-server"></i><h3>Infraestructura Segura</h3><p>Nuestra infraestructura se basa en proveedores de nube líderes que cumplen con altos estándares de seguridad.</p></div>
              <div class="security-item"><i class="fas fa-user-shield"></i><h3>Control de Acceso</h3><p>Aplicamos el principio de mínimo privilegio, restringiendo el acceso a los datos únicamente al personal autorizado.</p></div>
              <div class="security-item"><i class="fas fa-sync-alt"></i><h3>Monitoreo Continuo</h3><p>Supervisamos activamente nuestros sistemas para detectar y responder a posibles vulnerabilidades o incidentes de seguridad.</p></div>
            </div>
          </section>

          <!-- Derechos del Usuario -->
          <section class="privacy-section">
            <h2><i class="fas fa-user-check"></i> Derechos de los Titulares (Habeas Data)</h2>
            <p>Como titular de datos personales, tienes derecho a ejercer tus derechos de Habeas Data conforme a la ley colombiana:</p>
            <div class="rights-grid">
              <div class="right-item"><i class="fas fa-eye"></i><h3>Conocer</h3><p>Conocer los datos personales que han sido objeto de tratamiento por nuestra parte.</p></div>
              <div class="right-item"><i class="fas fa-edit"></i><h3>Actualizar y Rectificar</h3><p>Actualizar y corregir tus datos si son parciales, fraccionados, inexactos o inducen a error.</p></div>
              <div class="right-item"><i class="fas fa-trash"></i><h3>Suprimir</h3><p>Solicitar la eliminación de tus datos cuando el tratamiento no respete los principios, derechos y garantías legales.</p></div>
              <div class="right-item"><i class="fas fa-file-alt"></i><h3>Solicitar Prueba</h3><p>Solicitar prueba de la autorización otorgada para el tratamiento de tus datos.</p></div>
              <div class="right-item"><i class="fas fa-ban"></i><h3>Revocar Autorización</h3><p>Revocar la autorización y/o solicitar la supresión del dato, siempre que no exista un deber legal o contractual de permanecer en la base de datos.</p></div>
              <div class="right-item"><i class="fas fa-question-circle"></i><h3>Ser Informado</h3><p>Ser informado, previa solicitud, respecto del uso que se le ha dado a tus datos personales.</p></div>
            </div>
            
            <div class="rights-contact">
              <p><strong>Para ejercer cualquiera de estos derechos:</strong></p>
              <p>Por favor, envía tu Petición, Queja o Reclamo (PQR) al siguiente canal de contacto. Deberás acreditar tu identidad como titular de los datos.</p>
              <ul>
                <li><strong>Correo electrónico:</strong> <a :href="'mailto:softbotsas@gmail.com'">softbotsas@gmail.com</a></li>
                <li><strong>Teléfono de contacto:</strong> <a :href="'tel:+573017693004'">+57 301 769 3004</a></li>
              </ul>
              <p><strong>Nota para Usuarios Finales:</strong> Si eres un usuario final que interactúa con un servicio de uno de nuestros Clientes, por favor, dirige tu solicitud directamente a la empresa responsable (nuestro Cliente), ya que son ellos los Responsables del Tratamiento de tus datos.</p>
            </div>
          </section>
          
          <!-- Cambios en la Política -->
          <section class="privacy-section">
            <h2><i class="fas fa-sync-alt"></i> Modificaciones a la Política</h2>
            <p>Nos reservamos el derecho de modificar esta política en cualquier momento. Cualquier cambio será informado y comunicado a través de nuestro sitio web o por correo electrónico. La fecha de la última actualización al inicio de esta política reflejará su vigencia.</p>
          </section>

          <!-- Contacto y Autoridad -->
          <section class="privacy-section contact-section">
            <h2><i class="fas fa-envelope"></i> Contacto y Autoridad de Control</h2>
            <div class="contact-info">
              <div class="contact-item">
                <h3><i class="fas fa-building"></i> Responsable del Tratamiento</h3>
                <p><strong>SoftBot S.A.S.</strong><br>
                Correo: <a href="mailto:softbotsas@gmail.com">softbotsas@gmail.com</a><br>
                Teléfono: <a href="tel:+573017693004">+57 301 769 3004</a></p>
              </div>
              
              <div class="contact-item">
                <h3><i class="fas fa-gavel"></i> Autoridad Nacional de Protección de Datos</h3>
                <p>Si consideras que no hemos atendido debidamente tu solicitud, tienes derecho a presentar una queja ante la autoridad competente en Colombia:</p>
                <p><strong>Superintendencia de Industria y Comercio (SIC)</strong><br>
                Delegatura para la Protección de Datos Personales<br>
                <a href="https://www.sic.gov.co/proteccion-de-datos-personales" target="_blank" rel="noopener noreferrer">www.sic.gov.co</a></p>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="privacy-footer">
      <div class="container">
        <div class="footer-content">
          <p>&copy; {{ currentYear }} SoftBot S.A.S. Todos los derechos reservados.</p>
          <p>Esta política se rige por las leyes de la República de Colombia, en especial la Ley 1581 de 2012.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';

const currentYear = computed(() => new Date().getFullYear());
const lastUpdated = computed(() => {
  const date = new Date();
  return date.toLocaleDateString('es-ES', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
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
$success: #10b981;
$warning: #f59e0b;
$error: #ef4444;

a {
  color: $primary;
  text-decoration: none;
  
  &:hover {
    text-decoration: underline;
  }
}

.privacy-policy {
  min-height: 100vh;
  background: linear-gradient(135deg, $bg-darker 0%, $bg-dark 100%);
  color: $text-light;
  font-family: 'Poppins', sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

// Header
.privacy-header {
  background: linear-gradient(135deg, $primary 0%, $secondary-accent 100%);
  padding: 4rem 0;
  text-align: center;
  
  .header-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    
    .header-logo {
      height: 80px;
      width: auto;
      filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
    }
    
    .header-text {
      h1 {
        font-size: 3rem;
        font-weight: 800;
        margin: 0 0 0.5rem 0;
        color: white;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      }
      
      p {
        font-size: 1.2rem;
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
      }
    }
  }
}

// Content
.privacy-content {
  padding: 4rem 0;
}

.privacy-body {
  max-width: 900px;
  margin: 0 auto;
}

.privacy-section {
  margin-bottom: 3rem;
  padding: 2rem;
  background: rgba($bg-dark, 0.5);
  border-radius: 12px;
  border: 1px solid rgba($primary, 0.2);
  
  h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: $primary;
    margin: 0 0 1.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    
    i {
      color: $secondary-accent;
    }
  }
  
  h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: $text-light;
    margin: 1.5rem 0 1rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    
    i {
      color: $primary;
      font-size: 1.1rem;
    }
  }
  
  p {
    line-height: 1.7;
    margin-bottom: 1rem;
    color: $text-secondary;
  }
  
  ul {
    padding-left: 1.5rem;
    margin-bottom: 1rem;
    
    li {
      margin-bottom: 0.5rem;
      color: $text-secondary;
      line-height: 1.6;
    }
  }
}

// Info Box
.info-box {
  background: rgba($primary, 0.1);
  border: 1px solid rgba($primary, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  margin: 1.5rem 0;
  
  p {
    margin: 0.5rem 0;
    color: $text-light;
    
    strong {
      color: $primary;
    }
  }
}

// Data Categories
.data-category {
  background: rgba($bg-darker, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  margin: 1rem 0;
  border-left: 4px solid $primary;
  
  h3 {
    margin-top: 0;
    color: $primary;
  }
}

// Purpose Grid
.purpose-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.purpose-card {
  background: rgba($bg-darker, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  text-align: center;
  border: 1px solid rgba($primary, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  
  &:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba($primary, 0.2);
  }
  
  i {
    font-size: 2.5rem;
    color: $primary;
    margin-bottom: 1rem;
  }
  
  h3 {
    font-size: 1.2rem;
    margin: 0 0 1rem 0;
    color: $text-light;
  }
  
  p {
    font-size: 0.95rem;
    color: $text-secondary;
    margin: 0;
  }
}

// Legal Basis
.legal-basis {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.basis-item {
  background: rgba($bg-darker, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  border-left: 4px solid $secondary-accent;
  
  h3 {
    margin-top: 0;
    color: $secondary-accent;
    font-size: 1.1rem;
  }
  
  p {
    margin: 0;
    font-size: 0.95rem;
  }
}

// Retention Info
.retention-info {
  background: rgba($warning, 0.1);
  border: 1px solid rgba($warning, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  
  p {
    color: $text-light;
    margin-bottom: 1rem;
  }
  
  ul li strong {
    color: $warning;
  }
}

// Sharing Categories
.sharing-categories {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.sharing-item {
  background: rgba($bg-darker, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  border-top: 3px solid $primary;
  
  h3 {
    margin-top: 0;
    font-size: 1.1rem;
  }
  
  p {
    margin: 0;
    font-size: 0.95rem;
  }
}

// Security Measures
.security-measures {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.security-item {
  background: rgba($success, 0.1);
  border: 1px solid rgba($success, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  text-align: center;
  
  i {
    font-size: 2.5rem;
    color: $success;
    margin-bottom: 1rem;
  }
  
  h3 {
    margin: 0 0 1rem 0;
    color: $text-light;
    font-size: 1.2rem;
  }
  
  p {
    margin: 0;
    font-size: 0.95rem;
  }
}

// Rights Grid
.rights-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin: 2rem 0;
}

.right-item {
  background: rgba($bg-darker, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  text-align: center;
  border: 1px solid rgba($primary, 0.2);
  transition: transform 0.3s ease;
  
  &:hover {
    transform: translateY(-3px);
  }
  
  i {
    font-size: 2.5rem;
    color: $primary;
    margin-bottom: 1rem;
  }
  
  h3 {
    margin: 0 0 1rem 0;
    color: $text-light;
    font-size: 1.2rem;
  }
  
  p {
    margin: 0;
    font-size: 0.95rem;
  }
}

.rights-contact {
  background: rgba($primary, 0.1);
  border: 1px solid rgba($primary, 0.3);
  border-radius: 8px;
  padding: 1.5rem;
  margin-top: 2rem;
  
  p {
    color: $text-light;
    margin-bottom: 1rem;
  }
}

// Contact Section
.contact-section {
  background: linear-gradient(135deg, rgba($primary, 0.1) 0%, rgba($secondary-accent, 0.1) 100%);
  border: 2px solid rgba($primary, 0.3);
}

.contact-info {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 2rem 0;
}

.contact-item {
  background: rgba($bg-darker, 0.5);
  border-radius: 8px;
  padding: 1.5rem;
  border-left: 4px solid $primary;
  
  h3 {
    margin-top: 0;
    color: $primary;
    font-size: 1.2rem;
  }
  
  p {
    margin: 0.5rem 0;
    color: $text-light;
  }
}

// Footer
.privacy-footer {
  background: rgba($bg-darker, 0.8);
  border-top: 1px solid rgba($primary, 0.2);
  padding: 2rem 0;
  text-align: center;
  
  .footer-content {
    p {
      margin: 0.5rem 0;
      color: $text-secondary;
      font-size: 0.95rem;
    }
  }
}

// Responsive
@media (max-width: 768px) {
  .container {
    padding: 0 1rem;
  }
  
  .privacy-header {
    padding: 2rem 0;
    
    .header-content {
      flex-direction: column;
      gap: 1rem;
      
      .header-logo {
        height: 60px;
      }
      
      .header-text h1 {
        font-size: 2rem;
      }
    }
  }
  
  .privacy-content {
    padding: 2rem 0;
  }
  
  .privacy-section {
    padding: 1.5rem;
    margin-bottom: 2rem;
    
    h2 {
      font-size: 1.5rem;
    }
  }
  
  .purpose-grid,
  .legal-basis,
  .security-measures,
  .rights-grid,
  .contact-info {
    grid-template-columns: 1fr;
  }
  
}
</style>

