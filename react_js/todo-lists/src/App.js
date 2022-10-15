import './App.css';
import React, {useState} from "react"
import TodoList from './components/TodoList';
import TodoForm from './components/TodoForm';
import Header from './components/Header';
const App = () => {
  const [todos, setTodos] = useState([
    { text: "Buy Food", isCompleted: false },
    { text: "Learn React", isCompleted: false },
    { text: "Build todo app", isCompleted: false }
  ]);

  const addTodo = (value) => {
    const newTodos = [...todos, {text: value}];
    setTodos(newTodos);
  };

  const toggleTodo = (idx) => {
    const newTodos = [...todos];
    newTodos[idx].isCompleted = !newTodos[idx].isCompleted;
    setTodos(newTodos);
  };

  const deleteTodo = (idx) => {
    const newTodos = [...todos];
    newTodos.splice(idx, 1);
    setTodos(newTodos);
  };

  return (
    <div className="app">
      <Header/>
      <TodoList 
      todos={todos}
      toggleTodo={toggleTodo}
      deleteTodo={deleteTodo} /> {/* pass deleteTodo */}
      <br/>
      <TodoForm addTodo={addTodo}
      />
    </div>
  );
};


export default App;