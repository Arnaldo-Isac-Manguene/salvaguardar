import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Aciona o botão que chama a modal
var modalId = document.getElementById('modalId');

modalId.addEventListener('show.bs.modal', function(event) {
    // Button that triggered the modal
    let button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    let recipient = button.getAttribute('data-bs-whatever');

    // Use above variables to manipulate the DOM
});
//Fim do Botão

// Modal


// Fim do script responsávl pela modal


// Gráficos

