import React, { useState } from 'react';
import { View, TextInput, Button, StyleSheet, Alert } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { loginWithEmail, loginWithGoogle, loginWithFacebook, loginWithApple } from '../services/auth';
import SocialLoginButtons from '../components/SocialLoginButtons';

export default function Login() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const navigation = useNavigation();

  const handleEmailLogin = async () => {
    try {
      await loginWithEmail(email, password);
      navigation.navigate('Profile' as never);
    } catch (error) {
      Alert.alert('Error', 'Inicio de sesión fallido');
    }
  };

  const handleSocialLogin = async (provider: 'google' | 'facebook' | 'apple') => {
    try {
      switch (provider) {
        case 'google':
          await loginWithGoogle();
          break;
        case 'facebook':
          await loginWithFacebook();
          break;
        case 'apple':
          await loginWithApple();
          break;
      }
      navigation.navigate('Profile' as never);
    } catch (error) {
      Alert.alert('Error', `Inicio de sesión con ${provider} fallido`);
    }
  };

  return (
    <View style={styles.container}>
      <TextInput
        style={styles.input}
        placeholder="Email"
        value={email}
        onChangeText={setEmail}
        keyboardType="email-address"
      />
      <TextInput
        style={styles.input}
        placeholder="Contraseña"
        value={password}
        onChangeText={setPassword}
        secureTextEntry
      />
      <Button title="Iniciar Sesión" onPress={handleEmailLogin} />
      <SocialLoginButtons onPress={handleSocialLogin} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    padding: 20,
  },
  input: {
    height: 40,
    borderColor: 'gray',
    borderWidth: 1,
    marginBottom: 10,
    paddingHorizontal: 10,
  },
});