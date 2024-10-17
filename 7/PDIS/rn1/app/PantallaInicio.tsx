import React from 'react';
import { View, Text, Button } from 'react-native';
import { StackNavigationProp } from '@react-navigation/stack';

// Definimos los tipos para nuestros parámetros de ruta
type RootStackParamList = {
  Inicio: undefined;
  Detalles: undefined;
};

// Definimos el tipo para las props de navegación
type PantallaInicioNavigationProp = StackNavigationProp<RootStackParamList, 'Inicio'>;

// Definimos el tipo para las props del componente
type Props = {
  navigation: PantallaInicioNavigationProp;
};

const PantallaInicio: React.FC<Props> = ({ navigation }) => {
  return (
    <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
      <Text>Pantalla de Inicio</Text>
      <Button
        title="Ir a Detalles"
        onPress={() => navigation.navigate('Detalles')}
      />
    </View>
  );
};

export default PantallaInicio;