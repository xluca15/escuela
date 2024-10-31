import axios from 'axios';
import { Platform } from 'react-native';

const getBaseUrl = () => {
  if (__DEV__) {
    // Para desarrollo local
    return Platform.select({
      ios: 'http://192.168.1.42/login.php',
      // Para emulador Android usa 10.0.2.2
      // Para dispositivo físico usa tu IP local (ej: 192.168.1.100)
      android: 'http://10.0.2.2/login-app',
    });
  }
  return 'https://tu-servidor-produccion.com';
};

const axiosInstance = axios.create({
  baseURL: getBaseUrl(),
  timeout: 5000,
  headers: {
    'Content-Type': 'application/json',
  },
});

// Interceptor para manejar errores
axiosInstance.interceptors.response.use(
  (response) => response,
  (error) => {
    console.error('Error en la petición:', error);
    return Promise.reject(error);
  }
);

export default axiosInstance;