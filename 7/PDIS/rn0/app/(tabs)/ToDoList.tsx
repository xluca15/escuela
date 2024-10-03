import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, FlatList, StyleSheet } from 'react-native';

interface TaskItemProps {
    item: {
      id: string,
      text: string,
    },
    onDelete: (elementId: string) => void,
}

const TaskItem = ({ item, onDelete }: TaskItemProps) => (
  <View style={styles.taskItem}>
    <Text style={styles.taskText}>{item.text}</Text>
    <TouchableOpacity style={styles.deleteButton} onPress={() => onDelete(item.id)}>
      <Text style={styles.deleteButtonText}>Eliminar</Text>
    </TouchableOpacity>
  </View>
);

const TodoList = () => {
  const [task, setTask] = useState('');
  const [tasks, setTasks] = useState<{
    id: string,
    text: string,
  }[]>([]);

  const addTask = () => {
    if (task.trim() !== '') {
      setTasks((prevTasks) => [...prevTasks, { id: Date.now().toString(), text: task }]);
      setTask('');
    }
  };

  const deleteTask = (id: string) => {
    setTasks((prevTasks) => prevTasks.filter((item) => item.id !== id));
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Lista de Tareas</Text>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          value={task}
          onChangeText={setTask}
          placeholder="Nueva tarea"
          placeholderTextColor="#a0a0a0"
        />
        <TouchableOpacity style={styles.addButton} onPress={addTask}>
          <Text style={styles.addButtonText}>Añadir</Text>
        </TouchableOpacity>
      </View>
      <FlatList
        data={tasks}
        renderItem={({ item }) => <TaskItem item={item} onDelete={deleteTask} />}
        keyExtractor={(item) => item.id}
        style={styles.list}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 20,
    backgroundColor: '#f0f8ff', // Fondo azul claro
  },
  title: {
    fontSize: 28,
    fontWeight: 'bold',
    marginBottom: 20,
    textAlign: 'center',
    color: '#333',
    textShadowColor: 'rgba(0, 0, 0, 0.1)',
    textShadowOffset: { width: 1, height: 1 },
    textShadowRadius: 2,
  },
  inputContainer: {
    flexDirection: 'row',
    marginBottom: 20,
  },
  input: {
    flex: 1,
    height: 46,
    borderColor: '#ddd',
    borderWidth: 1,
    marginRight: 10,
    paddingHorizontal: 15,
    borderRadius: 23,
    backgroundColor: 'white',
    fontSize: 16,
  },
  addButton: {
    backgroundColor: '#4CAF50',
    padding: 12,
    borderRadius: 23,
    justifyContent: 'center',
    alignItems: 'center',
    elevation: 2,
  },
  addButtonText: {
    color: 'white',
    fontWeight: 'bold',
    fontSize: 16,
  },
  list: {
    flex: 1,
  },
  taskItem: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    padding: 15,
    marginBottom: 10,
    backgroundColor: 'white',
    borderRadius: 10,
    elevation: 1,
  },
  taskText: {
    fontSize: 16,
    color: '#333',
    flex: 1,
  },
  deleteButton: {
    backgroundColor: '#FF6347',
    padding: 8,
    borderRadius: 5,
  },
  deleteButtonText: {
    color: 'white',
    fontWeight: 'bold',
  },
});

export default TodoList;