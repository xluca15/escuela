import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Login from './src/screens/Login';
import Profile from './src/screens/Profile';

const Stack = createStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Login">
        <Stack.Screen name="Login" component={Login} options={{ title: 'rn2 Login' }} />
        <Stack.Screen name="Profile" component={Profile} options={{ title: 'rn2 Profile' }} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}