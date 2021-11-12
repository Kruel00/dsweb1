var imagenes = [
    'img/Crypto/Bitcoin.png',
    'img/Crypto/Binance.png',
    'img/Crypto/cardano.png',
    'img/Crypto/Dogecoin.png',
    'img/Crypto/Etherium.png',
    'img/Crypto/IOTA.png',
    'img/Crypto/LiteCoin.png',
    'img/Crypto/Tether.png',
    'img/Crypto/TRON.png',
    'img/Crypto/XRP.png'],
    cont = 0;

function carrousell(contenedor) {
    contenedor.addEventListener('click', e => {
        let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = e.target;


        if (tgt == atras) {
            if (cont > 0) {
                img.src = imagenes[count - 1];
                count--;
            } else {
                img.src = imagenes[imagenes.length - 1];
                cont = imagenes.length - 1;
            }


        } else if (tgt == adelante) {
            if (cont < imagenes.length - 1) {
                img.src = imagenes[cont + 1];
                cont++;
            } else {
                img.src = imagenes[0];
                cont = 0;
            }
        }  


    })
}

document.addEventListener("DOMContentLoaded", () =>{
    let contenedor = document.querySelector('.articulo-cuerpo');
    carrousell(contenedor);
} )