import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";
// install react router dom => "npm react-router-dom" or "yarn add react-router-dom"
import { BrowserRouter as Routes } from "react-router-dom";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <Routes>
      <App />
    </Routes>
  </React.StrictMode>
);
