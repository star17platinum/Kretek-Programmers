import React from "react";
import "./formstyle.css";

const Form = (props) => {
  return (
    <div>
      <form>
        <h3> {props.title} </h3>
        <div className="input-wrapper">
          <input type="text" />
        </div>
        <div className="input-wrapper">
          <input type="text" />
        </div>

        <div className="input-wrapper">
          <input type="text" />
        </div>
        <button className="submit">Submit</button>
      </form>
    </div>
  );
};

export default Form;
