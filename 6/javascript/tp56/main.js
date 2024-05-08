let palabra = prompt('Ingrese una palabra: ');
let caracter = prompt('Ingrese un caracter: ');
let res = "";
function SepararPalabra(){
    for(let i = 0; i < palabra.length; i++){
        res += palabra.charAt(i) + caracter;
}
    res = res.substring(0, res.length - 1);
    document.getElementById("res").innerHTML = res;
}
SepararPalabra();