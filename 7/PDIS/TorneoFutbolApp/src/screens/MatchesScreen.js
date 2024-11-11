import React from 'react';
import { View, StyleSheet, FlatList } from 'react-native';
import { Text } from '../components/Themed';

const DUMMY_MATCHES = [
  { id: '1', homeTeam: 'Chacaritas fc', awayTeam: 'Sacachispas', date: '2023-05-15' },
  { id: '2', homeTeam: 'Pisadinha fc', awayTeam: 'Hacha y tiza', date: '2023-05-16' },
];

export default function MatchesScreen() {
  return (
    <View style={styles.container}>
      <FlatList
        data={DUMMY_MATCHES}
        keyExtractor={(item) => item.id}
        renderItem={({ item }) => (
          <View style={styles.matchItem}>
            <Text style={styles.matchText}>{item.homeTeam} vs {item.awayTeam}</Text>
            <Text style={styles.dateText}>{item.date}</Text>
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
  matchItem: {
    backgroundColor: '#f9f9f9',
    padding: 20,
    marginVertical: 8,
    borderRadius: 5,
  },
  matchText: {
    color: '#000000', 
    fontSize: 16,
    fontWeight: 'bold',
  },
  dateText: {
    fontSize: 14,
    color: '#666',
  },
});