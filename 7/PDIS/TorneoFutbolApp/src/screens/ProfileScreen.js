import React, { useState, useEffect } from 'react';
import { View, StyleSheet, TextInput, TouchableOpacity, Image } from 'react-native';
import { Text } from '../components/Themed';
import * as ImagePicker from 'expo-image-picker';
import * as DocumentScanner from 'expo-document-scanner';
import * as Location from 'expo-location';

export default function ProfileScreen() {
  const [name, setName] = useState('');
  const [phone, setPhone] = useState('');
  const [address, setAddress] = useState('');
  const [image, setImage] = useState(null);
  const [document, setDocument] = useState(null);

  useEffect(() => {
    (async () => {
      const { status } = await ImagePicker.requestMediaLibraryPermissionsAsync();
      if (status !== 'granted') {
        alert('Se necesitan permisos para acceder a la galería');
      }
    })();
  }, []);

  const pickImage = async () => {
    let result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ImagePicker.MediaTypeOptions.Images,
      allowsEditing: true,
      aspect: [4, 3],
      quality: 1,
    });

    if (!result.canceled) {
      setImage(result.assets[0].uri);
    }
  };

  const scanDocument = async () => {
    const { status } = await DocumentScanner.requestCameraPermissionsAsync();
    if (status === 'granted') {
      const result = await DocumentScanner.scanDocumentAsync();
      if (result.type === 'success') {
        setDocument(result.uri);
      }
    } else {
      alert('Se necesitan permisos de cámara para escanear documentos');
    }
  };

  const getLocation = async () => {
    let { status } = await Location.requestForegroundPermissionsAsync();
    if (status !== 'granted') {
      alert('Se necesitan permisos para acceder a la ubicación');
      return;
    }

    let location = await Location.getCurrentPositionAsync({});
    setAddress(`Lat: ${location.coords.latitude}, Lon: ${location.coords.longitude}`);
  };

  const handleSave = () => {
    // Aquí implementarías la lógica para guardar los datos del perfil
    console.log('Guardando perfil:', { name, phone, address, image, document });
  };

  return (
    <View style={styles.container}>
      <TouchableOpacity onPress={pickImage}>
        {image ? (
          <Image source={{ uri: image }} style={styles.image} />
        ) : (
          <View style={styles.imagePlaceholder}>
            <Text>Toca para elegir una foto</Text>
          </View>
        )}
      </TouchableOpacity>
      <TextInput
        style={styles.input}
        placeholder="Nombre"
        value={name}
        onChangeText={setName}
      />
      <TextInput
        style={styles.input}
        placeholder="Teléfono"
        value={phone}
        onChangeText={setPhone}
        keyboardType="phone-pad"
      />
      <TextInput
        style={styles.input}
        placeholder="Dirección"
        value={address}
        onChangeText={setAddress}
      />
      <TouchableOpacity style={styles.button} onPress={getLocation}>
        <Text style={styles.buttonText}>Obtener Ubicación</Text>
      </TouchableOpacity>
      <TouchableOpacity style={styles.button} onPress={scanDocument}>
        <Text style={styles.buttonText}>Escanear Documento</Text>
      </TouchableOpacity>
      {document && <Text>Documento escaneado</Text>}
      <TouchableOpacity style={styles.button} onPress={handleSave}>
        <Text style={styles.buttonText}>Guardar Perfil</Text>
      </TouchableOpacity>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 20,
  },
  image: {
    width: 150,
    height: 150,
    borderRadius: 75,
    alignSelf: 'center',
    marginBottom: 20,
  },
  imagePlaceholder: {
    width: 150,
    height: 150,
    borderRadius: 75,
    backgroundColor: '#e1e1e1',
    justifyContent: 'center',
    alignItems: 'center',
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
});