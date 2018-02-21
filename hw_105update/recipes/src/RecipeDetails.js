import React, { Component } from 'react';
import RecipeList from 'RecipeList.js';

export default class RecipeDetails extends Component {
recipes=[{ Name: 'chicken' ,Instructions:['clean and cut chicken',' add onions', ' add ketchup'], id:1 },
  {Name: 'noodles' , Instructions:['boil up noodles',' add cheese', ' add ketchup'], id:2 }
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