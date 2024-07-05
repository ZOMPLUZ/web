// Obtener el elemento de la barra de navegación mediante su ID y asignarlo a la variable 'bar'
const bar = document.getElementById('bar');

// Obtener el elemento de cierre de la barra de navegación mediante su ID y asignarlo a la variable 'close'
const close = document.getElementById('close');

// Obtener el elemento de la barra de navegación mediante su ID y asignarlo a la variable 'nav'
const nav = document.getElementById('navbar');

// Verificar si el elemento 'bar' existe en el DOM
if (bar) {
    // Si existe, agregar un event listener para el evento de clicK
    bar.addEventListener('click', () =>{
        // Cuando se hace clic en 'bar', agregar la clase 'active' al elemento 'nav'
        nav.classList.add('active');
    })
}

// Verificar si el elemento 'close' existe en el DOM
if (close) {
    // Si existe, agregar un event listener para el evento de clic
    close.addEventListener('click', () =>{
        // Cuando se hace clic en 'close', eliminar la clase 'active' del elemento 'nav'
        nav.classList.remove('active');
    })
}
