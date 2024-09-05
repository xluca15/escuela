import React, { useState } from 'react';
import './ValidatedForm.css';

function ValidatedForm() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    password: ''
  });
  const [errors, setErrors] = useState({});
  //valida los campos del formulario tanto el nombre, el email y la contraseña
  const validateField = (name, value) => {
    let error = '';
    switch (name) {
      //Verifica que el nombre tenga al menos 3 caracteres
      case 'name':
        if (value.length < 3) error = 'El nombre debe tener al menos 3 caracteres';
        break;
      //Verifica que sea un email válido
      case 'email':
        if (!/\S+@\S+\.\S+/.test(value)) error = 'Email inválido';
        break;
      //Verifica que la contraseña tenga 8 caracteres, una mayúscula y un número
      case 'password':
        if (!/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/.test(value)) {
          error = 'La contraseña debe tener al menos 8 caracteres, una mayúscula y un número';
        }
        break;
      default:
        break;
    }
    return error;
  };

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
    setErrors(prev => ({ ...prev, [name]: validateField(name, value) }));
  };

  return (
    <div className="validated-form">
      <h2>Formulario Validado</h2>
      <form>
        <div>
          <input
            type="text"
            name="name"
            value={formData.name}
            onChange={handleChange}
            placeholder="Nombre"
          />
          {errors.name && <span className="error">{errors.name}</span>}
        </div>
        <div>
          <input
            type="email"
            name="email"
            value={formData.email}
            onChange={handleChange}
            placeholder="Email"
          />
          {errors.email && <span className="error">{errors.email}</span>}
        </div>
        <div>
          <input
            type="password"
            name="password"
            value={formData.password}
            onChange={handleChange}
            placeholder="Contraseña"
          />
          {errors.password && <span className="error">{errors.password}</span>}
        </div>
      </form>
    </div>
  );
}

export default ValidatedForm;