import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { View, Text, Button } from 'react-native';
import { RootStackParamList } from '../types';

// Definimos los componentes de nuestras pantallas
const PantallaInicio = ({ navigation }) => (
  <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
    <Text>Pantalla de Inicio</Text>
    <Button
      title="Ir a Detalles"
      onPress={() => navigation.navigate('Detalles')}
    />
  </View>
);

const PantallaDetalles = () => (
  <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
    <Text>Pantalla de Detalles</Text>
  </View>
);

const Stack = createStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Inicio">
        <Stack.Screen name="Inicio" component={PantallaInicio} />
        <Stack.Screen name="Detalles" component={PantallaDetalles} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

export default App;