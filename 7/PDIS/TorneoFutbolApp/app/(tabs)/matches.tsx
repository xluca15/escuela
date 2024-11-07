import React from 'react';
import { StyleSheet, FlatList, View } from 'react-native';
import { ParallaxScrollView } from '../../components/ParallaxScrollView';
import { MatchCard } from '../../components/MatchCard';
import { ThemedText } from '../../components/ThemedText';
import { useThemeColor } from '../../hooks/useThemeColor';

const MATCHES_DATA = [
  {
    id: '1',
    homeTeam: {
      name: 'Team A',
      logo: 'https://via.placeholder.com/48',
      score: 2,
    },
    awayTeam: {
      name: 'Team B',
      logo: 'https://via.placeholder.com/48',
      score: 1,
    },
    date: new Date(),
    location: 'Stadium 1',
    isLive: true,
  },
  // Add more matches...
];

export default function MatchesScreen() {
  const backgroundColor = useThemeColor({}, 'background');

  return (
    <ParallaxScrollView
      backgroundColor={backgroundColor}
      parallaxHeaderHeight={200}
      renderBackground={() => (
        <View style={styles.header}>
          <ThemedText style={styles.headerTitle}>
            Matches
          </ThemedText>
        </View>
      )}
      stickyHeaderHeight={0}
    >
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
            />
          )}
          scrollEnabled={false}
        />
      </View>
    </ParallaxScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    paddingVertical: 16,
  },
  header: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: 'rgba(0,0,0,0.3)',
  },
  headerTitle: {
    fontSize: 32,
    fontWeight: 'bold',
    color: '#fff',
  },
});