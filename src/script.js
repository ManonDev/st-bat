var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
});


const toggleNavButton = document.getElementById('toggleNavButton');
const navLinks = document.getElementById('navLinks');

toggleNavButton.addEventListener('click', () => {
  navLinks.classList.toggle('open');
});