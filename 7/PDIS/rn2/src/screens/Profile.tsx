import React, { useState, useEffect } from 'react';
import { View, StyleSheet, Button } from 'react-native';
import { getUserProfile, updateUserProfile } from '../services/api';
import ProfileForm from '../components/ProfileForm';
import { useNavigation } from '@react-navigation/native';
import { logout } from '../services/auth';

export default function Profile() {
  const [profile, setProfile] = useState(null);
  const navigation = useNavigation();

  useEffect(() => {
    fetchProfile();
  }, []);

  const fetchProfile = async () => {
    const userProfile = await getUserProfile();
    setProfile(userProfile);
  };

  const handleUpdateProfile = async (updatedProfile) => {
    await updateUserProfile(updatedProfile);
    fetchProfile();
  };

  const handleLogout = async () => {
    await logout();
    navigation.navigate('Login' as never);
  };

  return (
    <View style={styles.container}>
      {profile && (
        <ProfileForm profile={profile} onSubmit={handleUpdateProfile} />
      )}
      <Button title="Cerrar sesión" onPress={handleLogout} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 20,
  },
});