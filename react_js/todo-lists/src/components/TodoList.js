import React from 'react'
import TodoItem from './TodoItem'

const TodoList = ({ todos, toggleTodo, deleteTodo }) => {
    return (
      <div className="todo-list">
        {todos.map((todo, i) => (
          <TodoItem
            key={i}
            todo={todo}
            idx={i}
            toggleTodo={toggleTodo}
            deleteTodo={deleteTodo}
          />
        ))}
      </div>
    );
  };
export default TodoList;