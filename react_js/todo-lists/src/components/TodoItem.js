import React from 'react'

const TodoItem = ({ todo, idx, toggleTodo, deleteTodo }) => {
    return (
      <div className="todo-item">
        <div style={{ textDecoration: todo.isCompleted ? "line-through" : "" }}>
          {todo.text}
        </div>
        <div className="todo-group-btn">
          <button type="button" className="todo-btn primary" onClick={() => toggleTodo(idx)}>
            toggle
          </button>
          {/* add delete button */}
          <button type="button" className="todo-btn secondary" onClick={() => deleteTodo(idx)}>
            delete
          </button>
        </div>
      </div>
    );
  };
  
  export default TodoItem;