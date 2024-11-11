import React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import HomeScreen from '../screens/HomeScreen';
import MatchesScreen from '../screens/MatchesScreen';
import TeamsScreen from '../screens/TeamsScreen';

const Stack = createNativeStackNavigator();

export default function AppNavigator() {
  return (
    <Stack.Navigator 
      initialRouteName="Home"
      screenOptions={{
        headerShown: true,
        animation: 'slide_from_right' // Esto funciona bien en web
      }}
    >
      <Stack.Screen 
        name="Home" 
        component={HomeScreen} 
        options={{ title: 'Inicio' }} 
      />
      <Stack.Screen 
        name="Matches" 
        component={MatchesScreen} 
        options={{ title: 'Partidos' }} 
      />
      <Stack.Screen 
        name="Teams" 
        component={TeamsScreen} 
        options={{ title: 'Equipos' }} 
      />
    </Stack.Navigator>
  );
}