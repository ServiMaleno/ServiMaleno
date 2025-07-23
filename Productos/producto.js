
  document.addEventListener("DOMContentLoaded", function () {
    const botones = document.querySelectorAll('.btn-comprar');

    botones.forEach(boton => {
      boton.addEventListener('click', () => {
        boton.classList.add('animado');

        // Quita la clase después de 500ms para poder repetir la animación
        setTimeout(() => {
          boton.classList.remove('animado');
        }, 500);
      });
    });
  });

  
