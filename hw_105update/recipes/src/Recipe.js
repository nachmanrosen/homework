import React, { Component } from 'react';
import './Recipe.css';
export default class Recipe extends Component {
    //passing in the props from the recipe array from App.js whic was mapped to recipe, then can use this.props.resipe in render
    constructor(props) {
        super(props);
        this.state = {selected:false };
        
    }
     
    
    handleClickSEE = () => {
        this.setState({ selected:true});
            }
    handleClickHIDE = () => {
        this.setState({ selected:false});
            }
    
    
     render() {
         //if selected is true display the instructions, if false don't
         //define myingredients, button, and selected in render, then pass them in in return
        const myingredients=this.state.selected ?  <p> Instructions: {this.props.recipe.Instructions} </p> : null;
        let button=null;
        const selected=this.state.selected;

         if(!selected){
       button= <button onClick={this.handleClickSEE}> INSTRUCTIONS
         </button>}
         else{
        button=   <button onClick={this.handleClickHIDE}> HIDE  </button>
         } 
        return (
        <div>
        
        <p>Recipe Name: {this.props.recipe.Name} </p>
        {button}
       { myingredients}
         
      </div>
        );   
    }
}