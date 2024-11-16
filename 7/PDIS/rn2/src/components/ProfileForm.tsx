import React, { useState } from 'react';
import { View, TextInput, Button, StyleSheet, Image } from 'react-native';
import * as ImagePicker from 'expo-image-picker';
import * as Location from 'expo-location';

interface Profile {
  name: string;
  photo: string;
  address: string;
  phone: string;
}

interface ProfileFormProps {
  profile: Profile;
  onSubmit: (profile: Profile) => void;
}

export default function ProfileForm({ profile, onSubmit }: ProfileFormProps) {
  const [name, setName] = useState(profile.name);
  const [photo, setPhoto] = useState(profile.photo);
  const [address, setAddress] = useState(profile.address);
  const [phone, setPhone] = useState(profile.phone);

  const handleSubmit = () => {
    onSubmit({ name, photo, address, phone });
  };

  const pickImage = async () => {
    const result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ImagePicker.MediaTypeOptions.Images,
      allowsEditing: true,
      aspect: [4, 3],
      quality: 1,
    });

    if (!result.canceled) {
      setPhoto(result.assets[0].uri);
    }
  };

  const getLocation = async () => {
    let { status } = await Location.requestForegroundPermissionsAsync();
    if (status !== 'granted') {
      alert('Permission to access location was denied');
      return;
    }

    let location = await Location.getCurrentPositionAsync({});
    setAddress(`Lat: ${location.coords.latitude}, Lon: ${location.coords.longitude}`);
  };

  return (
    <View style={styles.container}>
      <Image source={{ uri: photo }} style={styles.photo} />
      <Button title="Cambiar foto" onPress={pickImage} />
      <TextInput
        style={styles.input}
        placeholder="Nombre"
        value={name}
        onChangeText={setName}
      />
      <TextInput
        style={styles.input}
        placeholder="Dirección"
        value={address}
        onChangeText={setAddress}
      />
      <Button title="Obtener ubicación actual" onPress={getLocation} />
      <TextInput
        style={styles.input}
        placeholder="Teléfono"
        value={phone}
        onChangeText={setPhone}
        keyboardType="phone-pad"
      />
      <Button title="Actualizar perfil" onPress={handleSubmit} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  photo: {
    width: 100,
    height: 100,
    borderRadius: 50,
    alignSelf: 'center',
    marginBottom: 20,
  },
  input: {
    height: 40,
    borderColor: 'gray',
    borderWidth: 1,
    marginBottom: 10,
    paddingHorizontal: 10,
  },
});