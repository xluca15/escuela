import React, { useState } from 'react';
import './Contador.css';

function Contador() {
  const [contador, setContador] = useState(0);

  return (
    <div className="contador">
      <h2>Contador</h2>
      <p className="valor">{contador}</p>
      <div className="botones">
        <button onClick={() => setContador(prevContador => prevContador - 1)}>Decrementar</button>
        <button onClick={() => setContador(prevContador => prevContador + 1)}>Incrementar</button>
      </div>
    </div>
  );
}

export default Contador;