
   


document.addEventListener("DOMContentLoaded", () =>{

        carrusel(imagenes, numImage);

} )


console.log('antes de las var');
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

var textoCriptomonedas = [
    "<b> <h2> ¿Qué es el bitcoin y cómo funciona? </h2> El bitcoin es una moneda virtual que ha adquirido un gran valor en los últimos años. Descubre cómo funciona, cómo comprarlo, cuánto cuesta y por qué su precio se mueve tanto en los mercados. El bitcoin tiene revolucionado al mundo financiero. No solo a las empresas y los inversionistas, sino incluso a los países. Algunos, como El Salvador, están a su favor y lo piensan usar como moneda de curso legal. Otros, como China, están en su contra y aplican regulaciones estrictas para limitar su uso. El hecho es que la palabra. Bitcoin está de moda y es imposible no haberla escuchado. ¿Dónde nació este activo? ¿Qué es? ¿Cómo funciona? ¿Por qué su precio ha subido tanto? Aquí te lo decimos.",
    "<h2><b> Binance: la exchange más grande y que más cosas nos permite hacer con Bitcoin</h2> Binance lanzo su ICO el 3 de julio, poniendo en venta un total de 100 millones de tokens ERC20 de nombre BNB (Binance Coin). La venta de los tokens duro apenas 3 minutos y consiguió recaudar los 15 millones de dólares previstos. El 14 de julio, tan solo 11 días después de lanzar la ICO, se puso a disposición de los usuarios la exchange. Tuvo un registro masivo de usuarios tras el lanzamiento, generando algunos problemas de acceso debido al gran volumen de usuarios. Actualmente Binance está valorada en más de 2.000 millones de dólares, que es la que tiene mayor valoración de mercado.</b>",
    "Cardano",
    "Dogecoin",
    "Etherium",
    "Iota",
    "Litecoin",
    "Tether",
    "Tron",
    "XRP"]

function carrusel(){

    document.carrusel.src = imagenes[numImage];
    document.getElementById('texto_top').innerHTML = textoCriptomonedas[numImage];

    if(numImage <9 ){
        numImage++;
    }else{
        numImage = 0;
    }
}

setInterval(carrusel,5000);



