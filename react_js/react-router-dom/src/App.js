import "./App.css";
import { Routes, Route, Link } from "react-router-dom";
import Home from "./pages/Home";
import Page2 from "./pages/Page2";
import Page3 from "./pages/Page3";

function App() {
  return (
    <div className="App">
      <nav>
        <Link to="/">Home</Link>
        <Link to="/page2">Page 2</Link>
        <Link to="/page3">Page 3</Link>
      </nav>

      <Routes>
        <Route exact path="/" element={<Home />} />
        <Route path="page2" element={<Page2 />} />
        <Route path="page3" element={<Page3 />} />
      </Routes>
    </div>
  );
}

export default App;
