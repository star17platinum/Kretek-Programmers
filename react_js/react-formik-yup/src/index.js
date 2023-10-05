import React, { useState, useEffect } from "react";
import { render } from "react-dom";
import "./style.css";
import Title from './Title';
import Registration from "./Registration";

function App() {
  const [name, setName] = useState('');

  useEffect(()=>{
     setName('React + Formik - Form Validation Example');
     document.title = name;
  });

  return (
    <div className="jumbotron">
      <div className="container">
        <div className="row" />
        <div className="col-md-6 offset-md-3">
          <Title title={name} />
          <Registration />
        </div>
      </div>
    </div>
  );
}

render(<App />, document.getElementById("root"));
