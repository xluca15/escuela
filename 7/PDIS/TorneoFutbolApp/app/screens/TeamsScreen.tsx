import React from 'react';
import { View, FlatList, Image, TouchableOpacity, StyleSheet } from 'react-native';
import { ThemedText } from '../../components/ThemedText';
import type { RootStackScreenProps } from '../navigation/types';

// Datos de ejemplo - En una implementación real, estos vendrían de una API
const TEAMS_DATA = [
  {
    id: '1',
    name: 'River Plate',
    logo: 'https://via.placeholder.com/64',
    stats: {
      played: 10,
      won: 7,
      drawn: 2,
      lost: 1,
      goalsFor: 22,
      goalsAgainst: 8,
    },
  },
  {
    id: '2',
    name: 'Boca Juniors',
    logo: 'https://via.placeholder.com/64',
    stats: {
      played: 10,
      won: 6,
      drawn: 3,
      lost: 1,
      goalsFor: 18,
      goalsAgainst: 7,
    },
  },
];

export default function TeamsScreen({ navigation }: RootStackScreenProps<'Teams'>) {
  return (
    <View style={styles.container}>
      <FlatList
        data={TEAMS_DATA}
        keyExtractor={(item) => item.id}
        renderItem={({ item }) => (
          <TouchableOpacity
            style={styles.teamCard}
            onPress={() => navigation.navigate('TeamDetail', { teamId: item.id })}
          >
            <Image source={{ uri: item.logo }} style={styles.teamLogo} />
            <View style={styles.teamInfo}>
              <ThemedText style={styles.teamName}>{item.name}</ThemedText>
              <View style={styles.statsContainer}>
                <ThemedText style={styles.statsText}>
                  PJ: {item.stats.played}
                </ThemedText>
                <ThemedText style={styles.statsText}>
                  G: {item.stats.won}
                </ThemedText>
                <ThemedText style={styles.statsText}>
                  E: {item.stats.drawn}
                </ThemedText>
                <ThemedText style={styles.statsText}>
                  P: {item.stats.lost}
                </ThemedText>
              </View>
              <ThemedText style={styles.goalsText}>
                Goles: {item.stats.goalsFor} - {item.stats.goalsAgainst}
              </ThemedText>
            </View>
          </TouchableOpacity>
        )}
        ListHeaderComponent={
          <ThemedText style={styles.sectionTitle}>
            Tabla de Posiciones
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
  teamCard: {
    flexDirection: 'row',
    backgroundColor: '#ffffff',
    borderRadius: 12,
    padding: 16,
    marginBottom: 12,
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.1,
    shadowRadius: 3.84,
    elevation: 5,
  },
  teamLogo: {
    width: 64,
    height: 64,
    borderRadius: 32,
  },
  teamInfo: {
    flex: 1,
    marginLeft: 16,
  },
  teamName: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 8,
  },
  statsContainer: {
    flexDirection: 'row',
    gap: 12,
    marginBottom: 4,
  },
  statsText: {
    fontSize: 14,
    opacity: 0.8,
  },
  goalsText: {
    fontSize: 14,
    opacity: 0.8,
  },
});