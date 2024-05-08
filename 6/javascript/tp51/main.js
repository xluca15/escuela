const $ = el => document.querySelector(el);
const btn = $("#btn");
const input = $("#inp");
const output = $("#res");

// N es igual a una nueva linea
// El contenido se inserta así:
// D <float>
// A <float>
// ...

// Se procesan los datos 
const process = () => {
  const content = input.value.trim();
  const lines = content.split("\n");
  let fres = [];
  let res = [];
  lines.forEach(line => {
    const values = line.split(" ");
    if (values[0] !== "N") {
      res.push(values[0]);
      res.push(parseFloat(values[1]))
    } else {
      fres.push(res);
      res = [];
    }
  });
  return fres;
}
// Se asignan las categorias que tengan algun valor, las que no van con 0 en valor
const categories = [
  ["D", "Desayunos"],
  ["A", "Comidas"],
  ["M", "Meriendas"],
  ["I", "Cenas"],
  ["C", "Copas"]
]
const assignValues = (data) => {
  const res = [];
  categories.forEach(cat => {
    // Por cada categoría, econtrar si esta está en data y asignar el segundo elemento, si no, asignar 0
    const index = data.findIndex(d => d[0] === cat[0]);
    (index !== -1) ? res.push([cat[1], data[index + 1]]) : res.push([cat[1], 0]);
  });
  return res;
}

// Obtener el nro mas alto, de haber dos iguales, el resultado es "Empate"
const getHighest = (data) => {
  let max = 0;
  let res = "";
  data.forEach(d => {
    if (d[1] === max) res = "Empate";
    if (d[1] > max) {
      max = d[1];
      res = d[0];
    }
  });
  return res;
}
// Obtener el nro mas bajo, de haber dos iguales, el resultado es "Empate"
const getLowest = (data) => {
  let min = data[0][1];
  let res = "";
  data.forEach(d => {
    if (d[1] === min) res = "Empate";
    if (d[1] < min) {
      min = d[1];
      res = d[0];
    }
  });
  return res;
}

// Si la media entre todo menos comidas, es mayor a comidas, resultado es "Si"
const getAverage = (data) => {
  let sum = 0;
  data.forEach(d => {
    if (d[0] !== "Comidas") sum += d[1];
  });
  let avg = sum / (data.length - 1);
  return (avg < data[1][1]) ? "Si" : "No";
}

// Obtiene y procesa cada día
const getEachResult = (data) => {
  let res = [];
  for (let i = 0; i < data.length; i++) {
    let nd = assignValues(data[i]);
    res.push([getHighest(nd), getLowest(nd), getAverage(nd)]);
  }
  return res;
}

const showResult = (res) => {
  let html = document.createElement("p");
  res.forEach(r => {
    html.insertAdjacentHTML("beforeend", r.join("#") + "<br>");
  })
  output.appendChild(html);
}

btn.addEventListener("click", () => {
  let data = process(); // Retorna data con los valores en un vector
  let res = getEachResult(data); // Retorna un vector con los resultados de cada dia
  showResult(res);
});
