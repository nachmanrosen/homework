import React, { Component } from 'react';
export default class Details extends Component {
    constructor(props) {
        super(props)
        this.state = { showDetails: false, hover:false };
    }

    toggleDetails = () => {
        this.setState({ showDetails: !this.state.showDetails });
    }
    hover=()=>{
        this.setState({hover: !this.state.hover})
    }

    render() {
        const details = this.state.showDetails ? <p> this is a delicious recipe</p> : null;
        const hoverStyle=this.state.hover ? {background:'yellow'} : null;
        return (
                
                <div 
                    style={hoverStyle}
                    onClick={this.toggleDetails}
                    onMouseEnter={this.hover}
                    onMouseLeave={this.hover}>
                    click {this.state.showDetails ? 'to hide' : 'for more details'}
                    {details}
                </div>
           
        );
    }
}