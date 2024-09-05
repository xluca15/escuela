import React, { useState, useEffect } from 'react';
import './ImageGallery.css';

const images = [
  'https://images.unsplash.com/photo-1459949293702-2ec939154ddb?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  'https://images.unsplash.com/photo-1483394943446-89e4d5530d8c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFpc2FqZXMlMjBkZSUyMGFyZ2VudGluYXxlbnwwfHwwfHx8MA%3D%3D',
  'https://images.unsplash.com/photo-1711472364196-ca374f5d0c06?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHBhaXNhamVzJTIwZGUlMjBhcmdlbnRpbmF8ZW58MHx8MHx8fDA%3D',
  'https://images.unsplash.com/photo-1690993417448-aca53ec32da3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBhaXNhamVzJTIwZGUlMjBhcmdlbnRpbmF8ZW58MHx8MHx8fDA%3D',
  'https://images.unsplash.com/photo-1561815908-bb4926a2f4eb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHBhaXNhamVzJTIwZGUlMjBhcmdlbnRpbmF8ZW58MHx8MHx8fDA%3D',
];

function ImageGallery() {
  const [currentIndex, setCurrentIndex] = useState(0);
  //detecta las teclas de flecha izquierda y derecha
  useEffect(() => {
    const handleKeyDown = (event) => {
      if (event.key === 'ArrowLeft') {
        setCurrentIndex((prevIndex) => 
          prevIndex > 0 ? prevIndex - 1 : images.length - 1
        );
      } else if (event.key === 'ArrowRight') {
        setCurrentIndex((prevIndex) => 
          prevIndex < images.length - 1 ? prevIndex + 1 : 0
        );
      }
    };
    //agrega el evento al cargar el componente
    window.addEventListener('keydown', handleKeyDown);

    return () => {
      window.removeEventListener('keydown', handleKeyDown);
    };
  }, []);
  //muestra la imagen actual
  return (
    <div className="image-gallery">
      <h2>Galería de Imágenes</h2>
      <p>Usa las teclas de flecha izquierda y derecha para navegar</p>
      <img src={images[currentIndex]} alt={`Imagen ${currentIndex + 1}`} />
      <p>{currentIndex + 1} / {images.length}</p>
    </div>
  );
}

export default ImageGallery;