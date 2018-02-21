import React, { Component } from 'react';
import Recipe from './Recipe.js';
import './App.css';

class App extends Component {
  recipes=[{ Name: 'chicken' ,Instructions:'clean and cut chicken,then add onions and ketchup', id:1 },
  {Name: 'noodles' , Instructions:'boil up noodles, then add cheese and  ketchup', id:2 }
  ]; 

  
  
  render() {
    const recipeComponents = this.recipes.map(recipe => <li key={recipe.id}><Recipe recipe={recipe}  /></li>);

    return (
      
    <ul>
      {recipeComponents}
        </ul>
    
    );
  }
}

export default App;
