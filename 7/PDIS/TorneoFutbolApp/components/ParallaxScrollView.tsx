import React, { ReactNode } from 'react';
import {
  Animated,
  StyleSheet,
  View,
  ScrollView,
  NativeSyntheticEvent,
  NativeScrollEvent,
} from 'react-native';

interface ParallaxScrollViewProps {
  backgroundColor: string;
  contentBackgroundColor?: string;
  parallaxHeaderHeight: number;
  stickyHeaderHeight: number;
  renderBackground: () => ReactNode;
  renderForeground?: () => ReactNode;
  renderStickyHeader?: () => ReactNode;
  children: ReactNode;
}

export function ParallaxScrollView({
  backgroundColor,
  contentBackgroundColor,
  parallaxHeaderHeight,
  stickyHeaderHeight,
  renderBackground,
  renderForeground,
  renderStickyHeader,
  children,
}: ParallaxScrollViewProps) {
  const scrollY = new Animated.Value(0);

  const headerTranslate = scrollY.interpolate({
    inputRange: [0, parallaxHeaderHeight - stickyHeaderHeight],
    outputRange: [0, -(parallaxHeaderHeight - stickyHeaderHeight)],
    extrapolate: 'clamp',
  });

  const imageOpacity = scrollY.interpolate({
    inputRange: [0, parallaxHeaderHeight - stickyHeaderHeight],
    outputRange: [1, 0.3],
    extrapolate: 'clamp',
  });

  const handleScroll = Animated.event(
    [{ nativeEvent: { contentOffset: { y: scrollY } } }],
    { useNativeDriver: true }
  );

  return (
    <View style={styles.container}>
      <Animated.ScrollView
        scrollEventThrottle={16}
        onScroll={handleScroll}
        style={{ flex: 1 }}
      >
        <View style={{ backgroundColor }}>
          <Animated.View
            style={[
              styles.parallaxHeader,
              {
                height: parallaxHeaderHeight,
                transform: [{ translateY: headerTranslate }],
                opacity: imageOpacity,
              },
            ]}
          >
            {renderBackground()}
          </Animated.View>
          {renderForeground && (
            <Animated.View
              style={[
                styles.parallaxForeground,
                {
                  height: parallaxHeaderHeight,
                  opacity: imageOpacity,
                },
              ]}
            >
              {renderForeground()}
            </Animated.View>
          )}
        </View>
        <View
          style={[
            styles.content,
            {
              backgroundColor: contentBackgroundColor || backgroundColor,
              marginTop: -100,
            },
          ]}
        >
          {children}
        </View>
      </Animated.ScrollView>
      {renderStickyHeader && (
        <Animated.View
          style={[
            styles.stickyHeader,
            {
              height: stickyHeaderHeight,
            },
          ]}
        >
          {renderStickyHeader()}
        </Animated.View>
      )}
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  parallaxHeader: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    overflow: 'hidden',
  },
  parallaxForeground: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    overflow: 'hidden',
  },
  stickyHeader: {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    overflow: 'hidden',
    zIndex: 100,
  },
  content: {
    flex: 1,
    borderTopLeftRadius: 20,
    borderTopRightRadius: 20,
  },
});