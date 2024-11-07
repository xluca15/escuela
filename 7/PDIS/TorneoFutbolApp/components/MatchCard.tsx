import React from 'react';
import { StyleSheet, View, Image } from 'react-native';
import { ThemedText } from './ThemedText';
import { ThemedCard } from './ThemedCards';
import { format } from 'date-fns';

interface MatchCardProps {
  homeTeam: {
    name: string;
    logo: string;
    score?: number;
  };
  awayTeam: {
    name: string;
    logo: string;
    score?: number;
  };
  date: Date;
  location: string;
  isLive?: boolean;
}

export function MatchCard({
  homeTeam,
  awayTeam,
  date,
  location,
  isLive,
}: MatchCardProps) {
  return (
    <ThemedCard>
      <View style={styles.container}>
        <View style={styles.teamsContainer}>
          <View style={styles.teamInfo}>
            <Image 
              source={{ uri: homeTeam.logo }} 
              style={styles.teamLogo} 
            />
            <ThemedText style={styles.teamName}>
              {homeTeam.name}
            </ThemedText>
          </View>
          
          <View style={styles.scoreContainer}>
            {isLive && (
              <ThemedText style={styles.liveIndicator}>
                LIVE
              </ThemedText>
            )}
            <ThemedText style={styles.score}>
              {homeTeam.score ?? '-'} - {awayTeam.score ?? '-'}
            </ThemedText>
          </View>
          
          <View style={styles.teamInfo}>
            <Image 
              source={{ uri: awayTeam.logo }} 
              style={styles.teamLogo} 
            />
            <ThemedText style={styles.teamName}>
              {awayTeam.name}
            </ThemedText>
          </View>
        </View>
        
        <View style={styles.matchInfo}>
          <ThemedText style={styles.dateText}>
            {format(date, 'PPP')}
          </ThemedText>
          <ThemedText style={styles.locationText}>
            {location}
          </ThemedText>
        </View>
      </View>
    </ThemedCard>
  );
}

const styles = StyleSheet.create({
  container: {
    gap: 16,
  },
  teamsContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
  },
  teamInfo: {
    alignItems: 'center',
    flex: 1,
  },
  teamLogo: {
    width: 48,
    height: 48,
    borderRadius: 24,
  },
  teamName: {
    marginTop: 8,
    fontSize: 14,
    fontWeight: '600',
    textAlign: 'center',
  },
  scoreContainer: {
    alignItems: 'center',
    flex: 1,
  },
  score: {
    fontSize: 24,
    fontWeight: 'bold',
  },
  liveIndicator: {
    color: '#ff0000',
    fontSize: 12,
    fontWeight: 'bold',
    marginBottom: 4,
  },
  matchInfo: {
    alignItems: 'center',
    gap: 4,
  },
  dateText: {
    fontSize: 14,
  },
  locationText: {
    fontSize: 12,
    opacity: 0.7,
  },
});