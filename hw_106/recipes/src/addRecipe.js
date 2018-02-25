import React from 'react';
import Form from './Form';
 export default class addRecipe extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      recipeName: "",
      Instructions: ""
    };
  }
    handleInput=(name,inst)=>{
        this.setState({recipeName: name, Instructions:inst });
    }

    

     render() {
         const name=this.state.recipeName;
         const inst=this.state.Instructions;
return (
      <div>
        <Form
        name={name}
        inst={inst}
        OnInputChange={this.handleInput} />
        </div>
        );
    }
  }
