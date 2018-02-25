import React from 'react';

export default class Form extends React.Component {
  
constructor(props) {
    super(props);
    this.handleInputChange = this.handleInputChange.bind(this);
  }


  handleInputChange=(event)=> {
    const target = event.target;
    this.props.OnInputChange(target.name, target.value);

  }

  render() {
      const name=this.props.recipeName;
      const instructions=this.props.Instructions;
    return (
      <form>
        <label>
          Recipe Name:
          <input
            name="recipeName"
            type="string"
            value={name}
            onChange={this.handleInputChange} />
        </label>
        <br />
        <label>
          Instructions:
          <input
            name="Instructions"
            type="string"
            value={instructions}
            onChange={this.handleInputChange} />
        </label>
      </form>
    );
  }
}