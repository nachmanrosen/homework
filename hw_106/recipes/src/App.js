import React, { Component } from 'react';
import Recipe from './Recipe.js';
import addRecipe from'./addRecipe.js';
import Details from './Details.js';
import Form from './Form';
import './App.css';

class App extends Component {
  recipes=[{ Name: 'chicken' ,Instructions:'clean and cut chicken,then add onions and ketchup', id:1 },
  {Name: 'noodles' , Instructions:'boil up noodles, then add cheese and  ketchup', id:2 }
  ]; 

  
  
  render() {
    const recipeComponents = this.recipes.map(recipe => <li key={recipe.id}><Recipe recipe={recipe} /></li>);
    

    return (
      <div>
    <ul>
      {recipeComponents}
     
        </ul>
        <Form/>
        <Details/>
        </div>
   
    );
  }
}

export default App;
