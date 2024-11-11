import React from 'react';
import { View, StyleSheet, FlatList } from 'react-native';
import { Text } from '../components/Themed';

const DUMMY_TEAMS = [
  { id: '1', name: 'Equipo A', players: 22 },
  { id: '2', name: 'Equipo B', players: 20 },
];

export default function TeamsScreen() {
  return (
    <View style={styles.container}>
      <FlatList
        data={DUMMY_TEAMS}
        keyExtractor={(item) => item.id}
        renderItem={({ item }) => (
          <View style={styles.teamItem}>
            <Text style={styles.teamName}>{item.name}</Text>
            <Text style={styles.playerCount}>Jugadores: {item.players}</Text>
          </View>
        )}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 10,
  },
  teamItem: {
    backgroundColor: '#f9f9f9',
    padding: 20,
    marginVertical: 8,
    borderRadius: 5,
  },
  teamName: {
    fontSize: 18,
    fontWeight: 'bold',
  },
  playerCount: {
    fontSize: 14,
    color: '#666',
  },
}); 