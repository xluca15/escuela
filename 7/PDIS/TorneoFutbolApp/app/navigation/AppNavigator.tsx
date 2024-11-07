import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import HomeScreen from '../screens/HomeScreen';
import MatchesScreen from '../../app/screens/MatchesScreen';
import TeamsScreen from '../../app/screens/TeamsScreen';
import type { RootStackParamList } from './types';

const Stack = createNativeStackNavigator<RootStackParamList>();

export default function AppNavigator() {
  return (
    <NavigationContainer>
      <Stack.Navigator
        initialRouteName="Home"
        screenOptions={{
          headerStyle: {
            backgroundColor: '#f5f5f5',
          },
          headerTintColor: '#000',
          headerTitleStyle: {
            fontWeight: 'bold',
          },
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
    </NavigationContainer>
  );
}