var formulario = document.getElementById('contact-form');
var respuesta = document.getElementById('respuesta');


// VALIDACION DE CAMPOS A TERMINAR
// const inputs = document.querySelectorAll('#contact-form input, #contact-form textarea');

// const expresiones = {
//     nombre: /^[a-zA-ZáéíóúüÁÉÍÓÚÜ ]{2,50}$/,  
//     email: /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/,  
//     mensaje: /^[a-zA-ZáéíóúüÁÉÍÓÚÜ0-9\s.,!?¿¡-]{2,500}$/  
// }

// const validacionCampos = {
//     email: false,
//     nombre: false,
//     mensaje: false
// }

// const validarFormulario = (e) => {
//     switch (e.target.name) {
//         case "nombre":
//             validarCampo(expresiones.nombre, e.target, 'nombre');
//             break;
//         case "email":
//             validarCampo(expresiones.email, e.target, 'email');
//             break;
//         case "mensaje":
//             validarCampo(expresiones.mensaje, e.target, 'mensaje');
//             break;
//     }
// }

// const validarCampo = (expresion, input, campo) => {
//     if (expresion.test(input.value)) {
//         document.getElementById(`${campo}`).classList.remove('incorrecto');
//         document.getElementById(`${campo}`).classList.add('correcto');
//         document.querySelector(`#${campo} .incorrecto`).classList.remove('incorrecto');
//         validacionCampos[campo] = true;
//     } else {
//         document.getElementById(`${campo}`).classList.add('incorrecto');
//         document.getElementById(`${campo}`).classList.remove('correcto');
//         validacionCampos[campo] = false;
//     }
// }

// inputs.forEach((input) => {
//     input.addEventListener('keyup', validarFormulario);
//     input.addEventListener('blur', validarFormulario);
// });

formulario.addEventListener('submit', function (e) {
    e.preventDefault();
        var datos = new FormData(formulario);
        let url = 'backphp/envio-correo.php';  

        fetch(url, {
            method: 'POST',
            body: datos
        }).then(function (res) {
            return res.json();
        }).then(function (data) {
            if (data.success) {
                respuesta.innerHTML = 'Mensaje enviado correctamente';
            } 
        });
});
