import React, { useEffect, useRef } from 'react';
import { Text, Animated, View, StyleSheet } from 'react-native';
import { LinearGradient } from 'expo-linear-gradient';

export default function App() {
  const fadeAnim = useRef(new Animated.Value(0)).current; // Valor inicial de opacidad en 0

  useEffect(() => {
    Animated.loop(
      Animated.sequence([
        Animated.timing(fadeAnim, {
          toValue: 1,
          duration: 1000,
          useNativeDriver: true,
        }),
        Animated.timing(fadeAnim, {
          toValue: 0,
          duration: 2000,
          useNativeDriver: true,
        }),
      ])
    ).start();
  }, [fadeAnim]);

  return (
    <LinearGradient
      colors={['#00aae4', '#edbad1']}
      style={styles.container}
    >
      <Animated.Text style={[styles.text, { opacity: fadeAnim }]}>
        Hello World
      </Animated.Text>
    </LinearGradient>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  text: {
    fontSize: 32,
    fontWeight: 'bold',
    color: '#333',
  },
});
