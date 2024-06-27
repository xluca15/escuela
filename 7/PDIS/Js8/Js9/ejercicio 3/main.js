// Importa la clase Calculadora desde el archivo calculadora.js
import Calculadora from './calculadora.js';

// Crea una instancia de la clase Calculadora
const calculadora = new Calculadora();

// Usa la instancia para multiplicar y dividir números
const resultadoMultiplicacion = calculadora.multiplicar(6, 3);
const resultadoDivision = calculadora.dividir(10, 2);

// Imprime los resultados
console.log(`Resultado de la multiplicación: ${resultadoMultiplicacion}`);
console.log(`Resultado de la división: ${resultadoDivision}`);