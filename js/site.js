
// el evento on load en ocaciones no se cargaba se opto por usar loas del DOM.
document.addEventListener("DOMContentLoaded", () => {
    carruselAuto(imagenes, numImage);
    let contenedor = document.querySelector('.articulo-cuerpo');
    carrusel(contenedor);
})

//variable con la ruta de las imagenes del carrusel
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
    numImage = 0;

    //variable con el texto que acompaña a las imagenes del carrusel.
var textoCriptomonedas = [
    "<b> <h2> Bitcoin </h2> El bitcoin es una moneda virtual que ha adquirido un gran valor en los últimos años. Descubre cómo funciona, cómo comprarlo, cuánto cuesta y por qué su precio se mueve tanto en los mercados. El bitcoin tiene revolucionado al mundo financiero. No solo a las empresas y los inversionistas, sino incluso a los países. Algunos, como El Salvador, están a su favor y lo piensan usar como moneda de curso legal. Otros, como China, están en su contra y aplican regulaciones estrictas para limitar su uso. El hecho es que la palabra. Bitcoin está de moda y es imposible no haberla escuchado. </b>",
    "<b> <h2> Binance </h2> La exchange más grande y que más cosas nos permite hacer con Bitcoin</h2> Binance lanzo su ICO el 3 de julio, poniendo en venta un total de 100 millones de tokens ERC20 de nombre BNB (Binance Coin). La venta de los tokens duro apenas 3 minutos y consiguió recaudar los 15 millones de dólares previstos. El 14 de julio, tan solo 11 días después de lanzar la ICO, se puso a disposición de los usuarios la exchange. Tuvo un registro masivo de usuarios tras el lanzamiento, generando algunos problemas de acceso debido al gran volumen de usuarios. Actualmente Binance está valorada en más de 2.000 millones de dólares, que es la que tiene mayor valoración de mercado. </b>",
    "<b> <h2> Cardano </h2> A diferencia de otras tecnologías similares, Cardano no cuenta con un whitepaper, su diseño se basa eso sí en los principios de escalabilidad, interoperabilidad y cumplimiento de regulaciones. blockchain de naturaleza descentralizada. Está desarrollada como Open Source, por lo que una amplia comunidad le da respaldo. Utiliza la prueba de participación (Proof of Stake) como protocolo de consenso. Facilita las transacciones entre particulares y tiene definido un potente sistema de contratos inteligentes. Su criptomoneda se llama ADA en honor a Ada Lovelace, una de las pioneras de la programación. </b>",
    "<b> <h2> Dogecoin </h2> El Dogecoin es un tipo de criptomoneda que nació como un divertimento basado en un meme. El meme es el de Doge, que se hizo popular en 2013, y consiste en la foto de un perro de raza Shiba Inu, a la que se le añaden frases gramaticalmente incorrectas. Con el tiempo, el meme ha ido evolucionando, pero sigue siendo un perro Shiba Inu con frases graciosas. Arriba tienes una captura del perro del meme, y si llevas tiempo en el mundillo de los memes seguro que lo has visto. </b>",
    "<b> <h2> Etherium </h2> La plataforma Ethereum fue creada en 2015 por el programador Vitalik Buterin, con la perspectiva de crear un instrumento para aplicaciones descentralizadas y colaborativas. Ether (ETH), su criptomoneda nativa, es un token que puede ser utilizado en transacciones que usen este software. Como bitcoin, ether existe como parte de un sistema financiero autónomo de pares, libre de intervención gubernamental. También como bitcoin, el valor de ether se disparó en un corto periodo de tiempo. </b>",
    "<b> <h2> IOTA </h2> La idea de crear una criptomoneda adaptada a las necesidades de Internet of Things (IoT) nace en 2015. El proyecto despertó gran interés rápidamente y obtuvo un enorme apoyo financiero de miles de millones de dólares. ¿Por qué? Si las criptomonedas se caracterizan generalmente por la complejidad de los supuestos y la implementación, IOTA (MIOTA) fue a contracorriente, ya que propusieron lo contrario: un enfoque ligero que puede volverse universal para todas las aplicaciones que requieren micropagos, especialmente IoT. </b>",
    "<b> <h2> Litecoin </h2> Litecoin se diseñó para emplearse en transacciones de menor valor y para ser más eficiente en la vida cotidiana. En términos comparativos, bitcoin se estaba empleando más como depósito de valor a largo plazo en el mercado de criptomonedas . El límite de unidades de litecoin es mucho más elevado que el de bitcoin y el proceso de minar litecoin es mucho más rápido. Esto significa que las transacciones son más rápidas y baratas, aunque suelen ser de menor tamaño y la cotización de litecoin es más baja. </b>",
    "<b> <h2> Tether (USDT) </h2>  Es una criptomoneda de moneda estable. La naturaleza de una criptomoneda estable es el hecho de que, en teoría, no debería estar sujeta a fluctuaciones de precios. Tether se basa en el dólar estadounidense (USD), por lo que el valor de una moneda de Tether también corresponderá al tipo de cambio de un dólar. La volatilidad de los precios está presente, pero la fluctuación es leve. Hay muchas monedas estables en la industria de las criptomonedas, pero es esta la que supera a todos. </b>",
    "<b> <h2> Tron </h2> Establecida en 2017, su criptomoneda nativa Tronix (TRX) es una de las que se encuentra ubicada actualmente entre las 20 primeras más grandes de capitalización del mercado. Justin Sun, director ejecutivo de la Fundación TRON, fundó la plataforma con el objetivo de proporcionar a las personas un lugar donde el contenido se pueda distribuir de forma gratuita, sin que ningún intermediario cobre ninguna tarifa. </b>",
    "<b> <h2> XRP </h2> Es un activo digital que obtiene liquidez para proveedores de pago, creadores de mercado y bancos. Creada por Ripple como un producto de código abierto. Ripple es una reconocida empresa privada que tiene como objetivo crear y establecer una red global de instituciones financieras y bancos. Con este objetivo, utiliza la cadena de bloques Ripple.net para reducir los costos de pago internacionales. Ripple se refiere a la red global que utiliza este software como la Internet de valor. </b>"]


//Funcion que cambia las imagenes del carrusel.
function carruselAuto() {
    document.carrusel.src = imagenes[numImage];
    document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];

    if (numImage < 9) {
        numImage++;
    } else {
        numImage = 0;
    }
}
//definicion del intervalo de ejecucion de la funcion de cambiar imagen
setInterval(carruselAuto, 4000);

function carrusel(contenedor) {
    contenedor.addEventListener('click', e => {
        let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = e.target;

        if (tgt == atras) {
            if (numImage > 0) {
                img.src = imagenes[numImage];
                document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];
                numImage--;
            } else {
                img.src = imagenes[imagenes.length - 1];
                document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];
                numImage = imagenes.length - 1;
            }
        } else if (tgt == adelante) {
            console.log(numImage);
            if (numImage < imagenes.length - 1) {
                img.src = imagenes[numImage];
                document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];
                numImage++;
            } else {
                img.src = imagenes[0];
                document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];
                numImage = 0;
            }
        }
    })
}
    
