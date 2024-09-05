import React, { useState } from 'react';
import './ClickButtons.css';

function ClickButtons() {
  const [messages, setMessages] = useState({
    button1: '',
    button2: '',
    button3: ''
  });

  const handleClick = (button) => {
    setMessages(prev => ({
      ...prev,
      [button]: 'Click simple'
    }));
  };

  const handleDoubleClick = (button) => {
    setMessages(prev => ({
      ...prev,
      [button]: 'Doble click'
    }));
  };

  return (
    <div className="click-buttons">
      <h2>Botones con Clicks</h2>
      {[1, 2, 3].map(num => (
        <div key={num}>
          <button
            onClick={() => handleClick(`button${num}`)}
            onDoubleClick={() => handleDoubleClick(`button${num}`)}
          >
            Botón {num}
          </button>
          <span>{messages[`button${num}`]}</span>
        </div>
      ))}
    </div>
  );
}

export default ClickButtons;
