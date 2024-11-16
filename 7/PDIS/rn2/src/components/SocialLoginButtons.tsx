import React from 'react';
import { View, Button, StyleSheet } from 'react-native';

interface SocialLoginButtonsProps {
  onPress: (provider: 'google' | 'facebook' | 'apple') => void;
}

export default function SocialLoginButtons({ onPress }: SocialLoginButtonsProps) {
  return (
    <View style={styles.container}>
      <Button title="Iniciar sesión con Google" onPress={() => onPress('google')} />
      <Button title="Iniciar sesión con Facebook" onPress={() => onPress('facebook')} />
      <Button title="Iniciar sesión con Apple" onPress={() => onPress('apple')} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    marginTop: 20,
  },
});