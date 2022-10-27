/**
 * @function cloneElement
 *
 * berfungsi untuk membuat elemen react baru
 * dari elemen react yang telah didefinisikan
 */

import { cloneElement, useState } from "react";

const ToggleTodo = ({ isActive, ...rest }) => {
  return (
    <button style={{ fontWeight: isActive ? "bold" : "normal" }} {...rest}>
      Selesai
    </button>
  );
};

const myTodos = [
  {
    title: "Workout",
    isCompleted: false,
    // usually an icon, but I'll be rendering the toggle component
    toggle: <ToggleTodo />,
  },
  {
    title: "Bug fixed",
    isCompleted: false,
    toggle: <ToggleTodo />,
  },
  {
    title: "Meeting",
    isCompleted: false,
    toggle: <ToggleTodo />,
  },
];

const MyApp = () => {
  const [completedTodo, setCompletedTodo] = useState([]);

  return (
    <div>
      {myTodos.map((todo) => {
        const activeTodo = completedTodo.includes(todo.title);

        return (
          <div key={todo.title.toLowerCase()}>
            <p>{todo.title}</p>

            {cloneElement(el.icon, {
              isActive: activeTodo,
              onClick: () =>
                setCompletedTodo((prevCompleteTodo) => [
                  ...prevCompleteTodo,
                  todo.title,
                ]),
            })}
          </div>
        );
      })}
    </div>
  );
};

export default MyApp;
