// header branco ao scrollar
window.addEventListener('scroll', () => {
  const header = document.querySelector('#header');
  if (window.scrollY > 50) {
    header.style.backgroundColor = 'white';
    header.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
  } else {
    header.style.backgroundColor = 'transparent';
    header.style.boxShadow = 'none';
  }
});

// hamburguer
document.addEventListener('DOMContentLoaded', () => {
  const hamburguer = document.getElementById('hamburguer');
  const navCentro = document.querySelector('.nav-centro');

  hamburguer.addEventListener('click', () => {
    navCentro.classList.toggle('active');
  });
})