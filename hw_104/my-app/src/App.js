import React, { Component } from 'react';

import './App.css';

class App  extends Component {
   
    
  
  render()  {
    const marks = this.props.marks;
    const listItems = marks.map((mark) =>
    <li>{mark}</li>
  );
    return (
      <div className="App">
         
        <h1>Name:{this.props.name}</h1>
        <ul>
          {listItems} </ul>
      </div>
    );
  } 
}
   <App name="Dovid" marks={[99,98]}/>;
   <App  name="Boruch" marks={[97,96]}/>;
  
export default App;
