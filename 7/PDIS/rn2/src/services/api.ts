import axios from 'axios';
import { getItem } from '../utils/storage';

const api = axios.create({
  baseURL: 'https://tu-api.com',
});

api.interceptors.request.use(async (config) => {
  const token = await getItem('userToken');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

export const getUserProfile = async () => {
  const response = await api.get('/profile');
  return response.data;
};

export const updateUserProfile = async (profile) => {
  const response = await api.put('/profile', profile);
  return response.data;
};