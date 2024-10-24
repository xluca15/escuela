import React from 'react';
import './TarjetaPresentacion.css';

function TarjetaPresentacion({ nombre, apellido, profesion, imagenUrl }) {
  return (
    <div className="tarjeta-presentacion">
      <img src="/mi-foto.jpg" alt={`${nombre} ${apellido}`} className="avatar" />
      <h2>{nombre} {apellido}</h2>
      <p>{profesion}</p>
    </div>
  );
}

export default TarjetaPresentacion;