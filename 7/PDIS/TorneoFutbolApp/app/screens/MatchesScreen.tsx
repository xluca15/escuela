import React from 'react';
import { View, FlatList, StyleSheet } from 'react-native';
import { ThemedText } from '../../components/ThemedText';
import { MatchCard } from '../../components/MatchCard';
import type { RootStackScreenProps } from '../navigation/types';

// Datos de ejemplo - En una implementación real, estos vendrían de una API
const MATCHES_DATA = [
  {
    id: '1',
    homeTeam: {
      name: 'River Plate',
      logo: 'https://via.placeholder.com/48',
      score: 2,
    },
    awayTeam: {
      name: 'Boca Juniors',
      logo: 'https://via.placeholder.com/48',
      score: 1,
    },
    date: new Date(),
    location: 'Estadio Monumental',
    isLive: true,
  },
  {
    id: '2',
    homeTeam: {
      name: 'Racing',
      logo: 'https://via.placeholder.com/48',
      score: 0,
    },
    awayTeam: {
      name: 'Independiente',
      logo: 'https://via.placeholder.com/48',
      score: 0,
    },
    date: new Date(Date.now() + 86400000), // Mañana
    location: 'Estadio Presidente Perón',
    isLive: false,
  },
];

export default function MatchesScreen({ navigation }: RootStackScreenProps<'Matches'>) {
  return (
    <View style={styles.container}>
      <FlatList
        data={MATCHES_DATA}
        keyExtractor={(item) => item.id}
        renderItem={({ item }) => (
          <MatchCard
            homeTeam={item.homeTeam}
            awayTeam={item.awayTeam}
            date={item.date}
            location={item.location}
            isLive={item.isLive}
            onPress={() => navigation.navigate('MatchDetail', { matchId: item.id })}
          />
        )}
        ListHeaderComponent={
          <ThemedText style={styles.sectionTitle}>
            Próximos Partidos
          </ThemedText>
        }
        contentContainerStyle={styles.listContent}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f5f5',
  },
  listContent: {
    padding: 16,
  },
  sectionTitle: {
    fontSize: 20,
    fontWeight: 'bold',
    marginBottom: 16,
  },
});