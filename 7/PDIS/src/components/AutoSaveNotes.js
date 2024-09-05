import React, { useState, useEffect } from 'react';
import './AutoSaveNotes.css';

function AutoSaveNotes() {
  const [note, setNote] = useState('');
  const [lastSaved, setLastSaved] = useState(null);

  useEffect(() => {
    const timer = setTimeout(() => {
      if (note) {
        // Aquí simularíamos el guardado en una base de datos o localStorage
        console.log('Nota guardada:', note);
        setLastSaved(new Date().toLocaleTimeString());
      }
    }, 2000);

    return () => clearTimeout(timer);
  }, [note]);

  return (
    <div className="auto-save-notes">
      <h2>Notas con Autoguardado</h2>
      <textarea
        value={note}
        onChange={(e) => setNote(e.target.value)}
        placeholder="Escribe tu nota aquí..."
      />
      {lastSaved && <p>Último guardado: {lastSaved}</p>}
    </div>
  );
}

export default AutoSaveNotes;