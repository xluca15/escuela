class CAnimales {
    constructor() {
        this.animals = [];
    }
    // agregar los animales(id, name, cageNumber, idTypeAnimal, weight)
    addAnimal(idAnimal, name, cageNumber, idTypeAnimal, weight) {
        this.animals.push({
            idAnimal,
            name,
            cageNumber,
            idTypeAnimal,
            weight
        });
    }
    // Genera la tabla de los animales
    generateAnimalTable() {
        const tableBody = document.querySelector('#animalTable tbody');
        tableBody.innerHTML = '';

        for (const animals of this.animals) {
            const fila = document.createElement('tr');
            fila.innerHTML = `
            <td>${animals.idAnimal}</td>
            <td>${animals.name}</td>
            <td>${animals.cageNumber}</td>
            <td>${animals.idTypeAnimal}</td>
            <td>${animals.weight}</td>
          `;
            tableBody.appendChild(fila);
        }
    }
    //obtiene los animales en la jaula 5 con el peso menor a 3kg
    getAnimalsCage5() {
        const animalsCage5 = this.animals.filter(animal => animal.cageNumber === 5 && animal.weight < 3);

        return animalsCage5.map(animal => animal.name);
    }
    //obtiene los animales de tipo felinos en las jaulas 2 a 5
    getAnimalsTypeFelinos() {
        const animalsTypeFelinos = this.animals.filter(animal => animal.idTypeAnimal === 1 && animal.cageNumber >= 2 && animal.cageNumber <= 5);

        return animalsTypeFelinos.map(animal => animal.name);
    }
    //obtiene el animal en la jaula 4 con un peso menor a 120kg
    getAnimalCage4() {
        const animalCage4 = this.animals.filter(animal => animal.cageNumber === 4 && animal.weight < 120);

        return animalCage4.map(animal => animal.name);
    }

}
const animals = new CAnimales();

// Genera un id con un math.random 
const generateId = () => Math.floor(Math.random() * 1000);

// agregar los animales(id, name, cageNumber, idTypeAnimal, weight)
animals.addAnimal(generateId(), 'Tigre', 5, 1, 150);
animals.addAnimal(generateId(), 'Leon', 2, 1, 180);
animals.addAnimal(generateId(), 'Aguila', 3, 2, 2);
animals.addAnimal(generateId(), 'Serpiente', 4, 3, 80); 
animals.addAnimal(generateId(), 'Pantera', 5, 1, 100);
animals.addAnimal(generateId(), 'Vibora', 5, 3, 2); 


animals.generateAnimalTable();

function removeBracketsAndQuotes(str) {
    return str.replace(/[\[\]"]/g, '');
}

document.getElementById("resultado1").textContent = "Animales en la jaula 5 con un peso menor a 3kg: " + removeBracketsAndQuotes(JSON.stringify(animals.getAnimalsCage5()));
document.getElementById("resultado2").textContent = "Animales de tipo felinos en jaulas 2 a 5: " + removeBracketsAndQuotes(JSON.stringify(animals.getAnimalsTypeFelinos()));
document.getElementById("resultado3").textContent = "Animal en jaula 4 con un peso menor a 120kg: " + removeBracketsAndQuotes(JSON.stringify(animals.getAnimalCage4()));