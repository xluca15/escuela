import React from 'react';
import { StyleSheet, View, Image, TouchableOpacity } from 'react-native';
import { ThemedText } from './ThemedText';

interface Team {
  name: string;
  logo: string;
  score?: number;
}

interface MatchCardProps {
  homeTeam: Team;
  awayTeam: Team;
  date: Date;
  location: string;
  isLive?: boolean;
  onPress?: () => void;
}

export function MatchCard({
  homeTeam,
  awayTeam,
  date,
  location,
  isLive,
  onPress,
}: MatchCardProps) {
  return (
    <TouchableOpacity 
      style={styles.container}
      onPress={onPress}
      disabled={!onPress}
    >
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
          {date.toLocaleDateString()}
        </ThemedText>
        <ThemedText style={styles.locationText}>
          {location}
        </ThemedText>
      </View>
    </TouchableOpacity>
  );
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#ffffff',
    borderRadius: 12,
    padding: 16,
    marginVertical: 8,
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.1,
    shadowRadius: 3.84,
    elevation: 5,
  },
  teamsContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 16,
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
  },
  dateText: {
    fontSize: 14,
  },
  locationText: {
    fontSize: 12,
    opacity: 0.7,
  },
});