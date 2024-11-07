import React from 'react';
import { Text, TextProps } from 'react-native';
import { useThemeColor } from '../hooks/useThemeColor';

interface ThemedTextProps extends TextProps {
  lightColor?: string;
  darkColor?: string;
}

export function ThemedText({ 
  style, 
  lightColor, 
  darkColor, 
  ...props 
}: ThemedTextProps) {
  const color = useThemeColor(
    { light: lightColor, dark: darkColor },
    'text'
  );

  return <Text style={[{ color }, style]} {...props} />;
}