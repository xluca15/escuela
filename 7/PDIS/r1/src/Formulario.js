import React, { useState } from 'react';
import './Formulario.css';

function FormularioSimple() {
  const [nombre, setNombre] = useState('');
  const [apellido, setApellido] = useState('');
  const [mostrarBienvenida, setMostrarBienvenida] = useState(false);

  const manejarEnvio = (e) => {
    e.preventDefault();
    setMostrarBienvenida(true);
  };

  return (
    <div className="formulario-simple">
      <h2>Formulario</h2>
      <form onSubmit={manejarEnvio}>
        <div>
          <label htmlFor="nombre">Nombre:</label>
          <input
            id="nombre"
            type="text"
            value={nombre}
            onChange={(e) => setNombre(e.target.value)}
            required
          />
        </div>
        <div>
          <label htmlFor="apellido">Apellido:</label>
          <input
            id="apellido"
            type="text"
            value={apellido}
            onChange={(e) => setApellido(e.target.value)}
            required
          />
        </div>
        <button type="submit">Enviar</button>
      </form>
      {mostrarBienvenida && (
        <p className="bienvenida">¡Bienvenido, {nombre}!</p>
      )}
    </div>
  );
}

export default FormularioSimple;