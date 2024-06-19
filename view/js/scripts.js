function convertirAMayusculas(input) {
    input.value = input.value.toUpperCase();
}

function ocultarAlerta() {
    const alerta = document.querySelector('.alerta');
    if (alerta) {
        setTimeout(() => {
            alerta.classList.add('alerta__ocultar');
        }, 3000);
    }
}

document.addEventListener("DOMContentLoaded", ocultarAlerta);


