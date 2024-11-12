import React, { useState } from 'react';
import { View, StyleSheet, TextInput, TouchableOpacity, Alert } from 'react-native';
import { signInWithEmailAndPassword } from 'firebase/auth';
import { auth } from '../firebaseConfig';
import { Text } from '../components/Themed';
import * as Google from 'expo-auth-session/providers/google';
import * as Facebook from 'expo-auth-session/providers/facebook';
import * as AppleAuthentication from 'expo-apple-authentication';

export default function LoginScreen({ navigation }) {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const [request, response, promptAsync] = Google.useIdTokenAuthRequest({
    clientId: 'TU_GOOGLE_CLIENT_ID',
  });

  const [requestFB, responseFB, promptAsyncFB] = Facebook.useAuthRequest({
    clientId: 'TU_FACEBOOK_APP_ID',
  });

  const handleLogin = async () => {
    try {
      await signInWithEmailAndPassword(auth, email, password);
      navigation.navigate('Home');
    } catch (error) {
      Alert.alert('Error de inicio de sesión', error.message);
    }
  };

  const handleGoogleLogin = async () => {
    const response = await promptAsync();
    if (response?.type === 'success') {
      // Aquí manejarías el token de Google con Firebase
      console.log(response.params.id_token);
    }
  };

  const handleFacebookLogin = async () => {
    const response = await promptAsyncFB();
    if (response?.type === 'success') {
      // Aquí manejarías el token de Facebook con Firebase
      console.log(response.params.access_token);
    }
  };

  const handleAppleLogin = async () => {
    try {
      const credential = await AppleAuthentication.signInAsync({
        requestedScopes: [
          AppleAuthentication.AppleAuthenticationScope.FULL_NAME,
          AppleAuthentication.AppleAuthenticationScope.EMAIL,
        ],
      });
      // Aquí manejarías el credential con Firebase
      console.log(credential);
    } catch (e) {
      if (e.code === 'ERR_CANCELED') {
        // El usuario canceló el inicio de sesión de Apple
      } else {
        // Otro error
      }
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
      <TouchableOpacity style={styles.button} onPress={handleLogin}>
        <Text style={styles.buttonText}>Iniciar Sesión</Text>
      </TouchableOpacity>
      <TouchableOpacity style={styles.button} onPress={handleGoogleLogin}>
        <Text style={styles.buttonText}>Iniciar con Google</Text>
      </TouchableOpacity>
      <TouchableOpacity style={styles.button} onPress={handleFacebookLogin}>
        <Text style={styles.buttonText}>Iniciar con Facebook</Text>
      </TouchableOpacity>
      <AppleAuthentication.AppleAuthenticationButton
        buttonType={AppleAuthentication.AppleAuthenticationButtonType.SIGN_IN}
        buttonStyle={AppleAuthentication.AppleAuthenticationButtonStyle.BLACK}
        cornerRadius={5}
        style={styles.button}
        onPress={handleAppleLogin}
      />
      <TouchableOpacity onPress={() => navigation.navigate('Register')}>
        <Text style={styles.link}>¿No tienes cuenta? Regístrate</Text>
      </TouchableOpacity>
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
  button: {
    backgroundColor: '#007AFF',
    padding: 10,
    alignItems: 'center',
    marginBottom: 10,
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
  },
  link: {
    color: '#007AFF',
    textAlign: 'center',
    marginTop: 20,
  },
});