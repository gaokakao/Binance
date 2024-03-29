
import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import Counter from './components/Counter.jsx';
import 'bootstrap/dist/css/bootstrap.css';
import "bootstrap/dist/css/bootstrap.min.css";


ReactDOM.render(
  <React.StrictMode>
    <Counter />
  </React.StrictMode>,
  document.getElementById('root')
);