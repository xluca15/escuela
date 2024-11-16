import * as Google from 'expo-auth-session/providers/google';
import * as Facebook from 'expo-auth-session/providers/facebook';
import * as AppleAuthentication from 'expo-apple-authentication';
import { setItem, removeItem } from '../utils/storage';

export const loginWithEmail = async (email: string, password: string) => {
    try {
      // Realiza la petición al backend para autenticar
      const response = await axios.post(`${API_URL}/auth/login`, {
        email,
        password
      });
  
      // Extrae el token de la respuesta
      const { token } = response.data;
  
      // Guarda el token en el almacenamiento seguro
      await setItem('userToken', token);
  
      return token;
    } catch (error) {
      console.error('Error en inicio de sesión:', error);
      throw new Error('Error en la autenticación');
    }
  };

export const loginWithGoogle = async () => {
  const [request, response, promptAsync] = Google.useAuthRequest({
    expoClientId: 'TU_EXPO_CLIENT_ID',
    iosClientId: 'TU_IOS_CLIENT_ID',
    androidClientId: 'TU_ANDROID_CLIENT_ID',
  });

  if (response?.type === 'success') {
    const { authentication } = response;
    // Usa el token para autenticar al usuario en tu backend
    await setItem('userToken', authentication.accessToken);
  }
};

export const loginWithFacebook = async () => {
  const [request, response, promptAsync] = Facebook.useAuthRequest({
    clientId: 'TU_FACEBOOK_APP_ID',
  });

  if (response?.type === 'success') {
    const { token } = response.authentication;
    // Usa el token para autenticar al usuario en tu backend
    await setItem('userToken', token);
  }
};

export const loginWithApple = async () => {
  try {
    const credential = await AppleAuthentication.signInAsync({
      requestedScopes: [
        AppleAuthentication.AppleAuthenticationScope.FULL_NAME,
        AppleAuthentication.AppleAuthenticationScope.EMAIL,
      ],
    });
    // Usa el identityToken para autenticar al usuario en tu backend
    await setItem('userToken', credential.identityToken);
  } catch (e) {
    if (e.code === 'ERR_CANCELED') {
      // El usuario canceló el inicio de sesión
    } else {
      // Ocurrió un error
    }
  }
};

export const logout = async () => {
  await removeItem('userToken');
};