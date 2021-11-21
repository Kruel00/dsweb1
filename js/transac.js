

Expcantidad = /\d$/
const formulario = document.getElementById('formu');
const cantidad_monedas = document.getElementById('Cant_divisas');

cantidad_monedas.addEventListener('keyup', () => {

})

formulario.addEventListener('submit', (e) => {

    if (!Expcantidad.test(cantidad_monedas.value)) {
        alert("cantidad invalida ")
        cantidad_monedas.value = null
        cantidad_monedas.focus()
        e.preventDefault()
    }
   
})

cantidad_monedas.addEventListener('blur', (e) => {

})

