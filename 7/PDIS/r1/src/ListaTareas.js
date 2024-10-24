import React, { useState } from 'react';
import './ListaTareas.css';

function ListaTareas() {
  const [tareas, setTareas] = useState([]);
  const [nuevaTarea, setNuevaTarea] = useState('');

  const agregarTarea = () => {
    if (nuevaTarea.trim() !== '') {
      setTareas([...tareas, { id: Date.now(), texto: nuevaTarea, completada: false }]);
      setNuevaTarea('');
    }
  };

  const toggleCompletada = (id) => {
    setTareas(tareas.map(tarea => 
      tarea.id === id ? { ...tarea, completada: !tarea.completada } : tarea
    ));
  };

  return (
    <div className="lista-tareas">
      <h2>Lista de Tareas</h2>
      <div className="agregar-tarea">
        <input
          type="text"
          value={nuevaTarea}
          onChange={(e) => setNuevaTarea(e.target.value)}
          placeholder="Nueva tarea"
        />
        <button onClick={agregarTarea}>Agregar</button>
      </div>
      <ul>
        {tareas.map(tarea => (
          <li key={tarea.id}>
            <input
              type="checkbox"
              checked={tarea.completada}
              onChange={() => toggleCompletada(tarea.id)}
              id={`tarea-${tarea.id}`}
            />
            <label htmlFor={`tarea-${tarea.id}`} className={tarea.completada ? 'completada' : ''}>
              {tarea.texto}
            </label>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default ListaTareas;