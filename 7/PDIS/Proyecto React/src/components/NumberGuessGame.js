import React, { useState } from 'react';
import './NumberGuessGame.css';

function NumberGuessGame() {
  const [targetNumber] = useState(Math.floor(Math.random() * 100) + 1);
  const [guess, setGuess] = useState('');
  const [message, setMessage] = useState('');
  const [attempts, setAttempts] = useState(0);
  
  const handleSubmit = (e) => {
    e.preventDefault();
    const userGuess = parseInt(guess);
    setAttempts(attempts + 1);
    //Para cuando el usuario adivina el número o no, si adivina muestra un mensaje con los intentos
    if (userGuess === targetNumber) {
      setMessage(`¡Correcto! Lo adivinaste en ${attempts + 1} intentos.`);
    } else if (userGuess < targetNumber) {
      setMessage('Más alto');
    } else {
      setMessage('Más bajo');
    }
    setGuess('');
  };

  return (
    <div className="number-guess-game">
      <h2>Adivina el Número</h2>
      <p>Adivina un número entre 1 y 100</p>
      <form onSubmit={handleSubmit}>
        <input
          type="number"
          value={guess}
          onChange={(e) => setGuess(e.target.value)}
          placeholder="Tu suposición"
          min="1"
          max="100"
          required
        />
        <button type="submit">Adivinar</button>
      </form>
      {message && <p className="message">{message}</p>}
    </div>
  );
}

export default NumberGuessGame;
