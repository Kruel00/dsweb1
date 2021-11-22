
expNumeros = /\d$/
expLetras = /^[A-Za-z]+$/

const formulario = document.getElementById('formu');
const cantidad_monedas = document.getElementById('Cant_divisas');


formulario.addEventListener('submit', (e) => {

    if (!expNumeros.test(cantidad_monedas.value)) {
        alert("cantidad invalida ")
        cantidad_monedas.value = null
        cantidad_monedas.focus()
        e.preventDefault()
    }
})


document.getElementById('txt_divisa').addEventListener('blur', () =>{
    if(expLetras.test(document.getElementById('txt_divisa').value)){
        console.log("algo salio mal")
    }
    else{
        console.log("algo salio bien")
    }
    console.log("aasasuwu")
})
