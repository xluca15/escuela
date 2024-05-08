let frase = prompt("Introduce una frase");
let caracter = prompt("Introduce un caracter");
function CambiarEspacio(frase, caracter) {
    var operacion = frase.replace ( / /g , caracter);
    return operacion;
}
document.write(CambiarEspacio(frase, caracter));