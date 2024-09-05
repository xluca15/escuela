import React from 'react';
import ImageGallery from './components/ImageGallery';
import ValidatedForm from './components/ValidatedForm';
import NumberGuessGame from './components/NumberGuessGame';
import ClickButtons from './components/ClickButtons';
import AutoSaveNotes from './components/AutoSaveNotes';
import './App.css';

function App() {
  return (
    <div className="App">
      <h1>Proyecto React con múltiples componentes</h1>
      <ImageGallery />
      <ValidatedForm />
      <NumberGuessGame />
      <ClickButtons />
      <AutoSaveNotes />
    </div>
  );
}

export default App;