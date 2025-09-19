import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Registrar el plugin de ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

export function useAnimations() {
  
  // Animación de entrada para elementos
  const fadeInUp = (element, delay = 0) => {
    return gsap.fromTo(element, 
      { 
        opacity: 0, 
        y: 50,
        scale: 0.95
      },
      { 
        opacity: 1, 
        y: 0,
        scale: 1,
        duration: 1,
        delay: delay,
        ease: "power2.out"
      }
    );
  };

  // Animación de entrada desde la izquierda
  const fadeInLeft = (element, delay = 0) => {
    return gsap.fromTo(element,
      {
        opacity: 0,
        x: -100
      },
      {
        opacity: 1,
        x: 0,
        duration: 1,
        delay: delay,
        ease: "power2.out"
      }
    );
  };

  // Animación de entrada desde la derecha
  const fadeInRight = (element, delay = 0) => {
    return gsap.fromTo(element,
      {
        opacity: 0,
        x: 100
      },
      {
        opacity: 1,
        x: 0,
        duration: 1,
        delay: delay,
        ease: "power2.out"
      }
    );
  };

  // Animación de escala
  const scaleIn = (element, delay = 0) => {
    return gsap.fromTo(element,
      {
        opacity: 0,
        scale: 0.3
      },
      {
        opacity: 1,
        scale: 1,
        duration: 0.8,
        delay: delay,
        ease: "back.out(1.7)"
      }
    );
  };

  // Animación de rotación
  const rotateIn = (element, delay = 0) => {
    return gsap.fromTo(element,
      {
        opacity: 0,
        rotation: -180,
        scale: 0.5
      },
      {
        opacity: 1,
        rotation: 0,
        scale: 1,
        duration: 1.2,
        delay: delay,
        ease: "elastic.out(1, 0.5)"
      }
    );
  };

  // Animación de typing para texto
  const typeWriter = (element, text, speed = 50) => {
    element.textContent = '';
    return gsap.to(element, {
      text: text,
      duration: text.length * speed / 1000,
      ease: "none"
    });
  };

  // Animación de partículas flotantes
  const floatingParticles = (elements) => {
    elements.forEach((element, index) => {
      gsap.to(element, {
        y: "random(-20, 20)",
        x: "random(-10, 10)",
        rotation: "random(-5, 5)",
        duration: "random(2, 4)",
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        delay: index * 0.1
      });
    });
  };

  // Animación de hover para botones
  const buttonHover = (element) => {
    const tl = gsap.timeline({ paused: true });
    
    tl.to(element, {
      scale: 1.05,
      boxShadow: "0 10px 30px rgba(0, 255, 204, 0.3)",
      duration: 0.3,
      ease: "power2.out"
    });

    element.addEventListener('mouseenter', () => tl.play());
    element.addEventListener('mouseleave', () => tl.reverse());
  };

  // Animación de scroll reveal
  const scrollReveal = (elements, animation = 'fadeInUp') => {
    elements.forEach((element, index) => {
      const animFunction = {
        'fadeInUp': fadeInUp,
        'fadeInLeft': fadeInLeft,
        'fadeInRight': fadeInRight,
        'scaleIn': scaleIn,
        'rotateIn': rotateIn
      }[animation] || fadeInUp;

      ScrollTrigger.create({
        trigger: element,
        start: "top 80%",
        end: "bottom 20%",
        onEnter: () => animFunction(element, index * 0.1),
        once: true
      });
    });
  };

  // Animación de cursor personalizado
  const customCursor = () => {
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    cursor.innerHTML = '<div class="cursor-dot"></div><div class="cursor-outline"></div>';
    document.body.appendChild(cursor);

    const cursorDot = cursor.querySelector('.cursor-dot');
    const cursorOutline = cursor.querySelector('.cursor-outline');

    // Estilos del cursor
    Object.assign(cursor.style, {
      position: 'fixed',
      top: 0,
      left: 0,
      width: '20px',
      height: '20px',
      pointerEvents: 'none',
      zIndex: '9999',
      mixBlendMode: 'difference'
    });

    Object.assign(cursorDot.style, {
      width: '8px',
      height: '8px',
      backgroundColor: '#00ffcc',
      borderRadius: '50%',
      position: 'absolute',
      top: '50%',
      left: '50%',
      transform: 'translate(-50%, -50%)'
    });

    Object.assign(cursorOutline.style, {
      width: '40px',
      height: '40px',
      border: '2px solid #00ffcc',
      borderRadius: '50%',
      position: 'absolute',
      top: '50%',
      left: '50%',
      transform: 'translate(-50%, -50%)',
      opacity: 0.3
    });

    // Seguir el mouse
    document.addEventListener('mousemove', (e) => {
      gsap.to(cursor, {
        x: e.clientX,
        y: e.clientY,
        duration: 0.1,
        ease: "power2.out"
      });
    });

    // Efectos hover
    const hoverElements = document.querySelectorAll('a, button, .clickable');
    hoverElements.forEach(element => {
      element.addEventListener('mouseenter', () => {
        gsap.to(cursorOutline, {
          scale: 1.5,
          duration: 0.3,
          ease: "power2.out"
        });
        gsap.to(cursorDot, {
          scale: 0.5,
          duration: 0.3,
          ease: "power2.out"
        });
      });

      element.addEventListener('mouseleave', () => {
        gsap.to(cursorOutline, {
          scale: 1,
          duration: 0.3,
          ease: "power2.out"
        });
        gsap.to(cursorDot, {
          scale: 1,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    });
  };

  // Loading screen animado
  const loadingScreen = (element) => {
    const tl = gsap.timeline();

    // Animación de carga
    tl.fromTo(element, 
      { opacity: 1 },
      { opacity: 0, duration: 0.5, delay: 2 }
    );

    return tl;
  };

  // Animación de terminal typing
  const terminalTyping = (element, lines, speed = 100) => {
    const tl = gsap.timeline();
    
    lines.forEach((line, index) => {
      tl.to(element, {
        text: line,
        duration: line.length * speed / 1000,
        ease: "none"
      });
    });

    return tl;
  };

  return {
    fadeInUp,
    fadeInLeft,
    fadeInRight,
    scaleIn,
    rotateIn,
    typeWriter,
    floatingParticles,
    buttonHover,
    scrollReveal,
    customCursor,
    loadingScreen,
    terminalTyping
  };
}