import React from 'react';
import './App.css';
import HolaMundo from './HolaMundo';
import TarjetaPresentacion from './TarjetaPresentacion';
import Contador from './Contador';
import ListaTareas from './ListaTareas';
import FormularioSimple from './Formulario';

function App() {
  return (
    <div className="app">
      <h1>Proyecto React</h1>
      <HolaMundo />
      <TarjetaPresentacion
        nombre="Luca"
        apellido="Lopez"
        profesion="Programador"
        imagenUrl="/placeholder.svg?height=100&width=100"
      />
      <Contador />
      <ListaTareas />
      <FormularioSimple />
    </div>
  );
}

export default App;