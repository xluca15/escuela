import React from 'react';
import { StyleSheet, View, ViewProps } from 'react-native';
import { useThemeColor } from '../hooks/useThemeColor';

interface ThemedCardProps extends ViewProps {
  lightColor?: string;
  darkColor?: string;
}

export function ThemedCard({ 
  lightColor, 
  darkColor, 
  style, 
  ...props 
}: ThemedCardProps) {
  const backgroundColor = useThemeColor(
    { light: lightColor, dark: darkColor },
    'background'
  );

  return (
    <View
      style={[
        styles.card,
        { backgroundColor },
        style,
      ]}
      {...props}
    />
  );
}

const styles = StyleSheet.create({
  card: {
    borderRadius: 12,
    padding: 16,
    marginVertical: 8,
    marginHorizontal: 16,
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.25,
    shadowRadius: 3.84,
    elevation: 5,
  },
});