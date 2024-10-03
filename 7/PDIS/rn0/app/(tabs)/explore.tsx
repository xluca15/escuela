import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet } from 'react-native';

const CalculadoraBasica = () => {
  const [numero1, setNumero1] = useState('');
  const [numero2, setNumero2] = useState('');
  const [resultado, setResultado] = useState('');
  const [operacion, setOperacion] = useState('');

  const calcular = () => {
    const num1 = parseFloat(numero1);
    const num2 = parseFloat(numero2);

    if (isNaN(num1) || isNaN(num2)) {
      setResultado('Error: Ingrese números válidos');
      return;
    }

    switch (operacion) {
      case '+':
        setResultado((num1 + num2).toString());
        break;
      case '-':
        setResultado((num1 - num2).toString());
        break;
      case '*':
        setResultado((num1 * num2).toString());
        break;
      case '/':
        if (num2 === 0) {
          setResultado('Error: División por cero');
        } else {
          setResultado((num1 / num2).toString());
        }
        break;
      default:
        setResultado('Seleccione una operación');
    }
  };

  return (
    <View style={styles.contenedor}>
      <Text style={styles.titulo}>Calculadora Básica</Text>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          onChangeText={setNumero1}
          value={numero1}
          keyboardType="numeric"
          placeholder="Primer número"
          placeholderTextColor="#999"
        />
        <TextInput
          style={styles.input}
          onChangeText={setNumero2}
          value={numero2}
          keyboardType="numeric"
          placeholder="Segundo número"
          placeholderTextColor="#999"
        />
      </View>
      <View style={styles.botonesOperacion}>
        {['+', '-', '*', '/'].map((op) => (
          <TouchableOpacity
            key={op}
            style={[styles.boton, operacion === op && styles.botonSeleccionado]}
            onPress={() => setOperacion(op)}
          >
            <Text style={styles.botonTexto}>{op}</Text>
          </TouchableOpacity>
        ))}
      </View>
      <TouchableOpacity style={styles.botonCalcular} onPress={calcular}>
        <Text style={styles.botonCalcularTexto}>Calcular</Text>
      </TouchableOpacity>
      <View style={styles.resultadoContainer}>
        <Text style={styles.resultadoTexto}>
          {resultado ? `Resultado: ${resultado}` : 'Esperando cálculo...'}
        </Text>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  contenedor: {
    flex: 1,
    padding: 20,
    justifyContent: 'center',
    backgroundColor: '#f0f0f0',
  },
  titulo: {
    fontSize: 24,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 20,
    color: '#333',
  },
  inputContainer: {
    marginBottom: 20,
  },
  input: {
    height: 50,
    borderColor: '#ddd',
    borderWidth: 1,
    marginBottom: 10,
    paddingHorizontal: 15,
    backgroundColor: 'white',
    borderRadius: 25,
    fontSize: 16,
    color: '#333',
  },
  botonesOperacion: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginBottom: 20,
  },
  boton: {
    backgroundColor: '#3498db',
    padding: 15,
    borderRadius: 25,
    width: 60,
    alignItems: 'center',
    elevation: 3,
  },
  botonSeleccionado: {
    backgroundColor: '#2980b9',
  },
  botonTexto: {
    color: 'white',
    fontSize: 20,
    fontWeight: 'bold',
  },
  botonCalcular: {
    backgroundColor: '#2ecc71',
    padding: 15,
    borderRadius: 25,
    alignItems: 'center',
    marginBottom: 20,
    elevation: 3,
  },
  botonCalcularTexto: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
  },
  resultadoContainer: {
    backgroundColor: 'white',
    padding: 20,
    borderRadius: 10,
    elevation: 3,
  },
  resultadoTexto: {
    fontSize: 18,
    fontWeight: 'bold',
    textAlign: 'center',
    color: '#333',
  },
});

export default CalculadoraBasica; 