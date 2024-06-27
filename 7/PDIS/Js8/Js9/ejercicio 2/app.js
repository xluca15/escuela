// Importamos la clase Persona desde persona.js
import { Persona } from './persona.js';

// Creamos instancias de la clase Persona
const persona1 = new Persona("Juan", 30);
const persona2 = new Persona("María", 25);

// Ejecutamos el método mostrarInformacion() para cada instancia
console.log(persona1.mostrarInformacion());
console.log(persona2.mostrarInformacion());