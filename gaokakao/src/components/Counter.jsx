import React from 'react';
import 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.css';
class Counter extends React.Component
{
    state =
        {
            count: 0,
            tags: [ 4, 8, 15, 16, 23, 42 ]
        };

    renderTags ()
    {
        if ( this.state.tags.length === 0 ) return <p> Tehere are no tags</p>;
        return <ul> { this.state.tags.map( tag => <li key={ tag }>{ tag }</li> ) } </ul>;
    }

    handleIncrement = () =>
    {
        this.setState( { count: this.state.count + 1 } );
    }
    render ()
    {
        return (
            <div>
                <img src="" />
                <span className={ this.getBadgeClasses() }>{ this.formatCount() }</span>
                <button onClick={ () => this.handleIncrement( 1 ) } className="btn-primary btn-sm m-5">Increment </button>

                { this.state.tags.length === 0 && 'Please Create a new tag' }
                { this.renderTags() }
            </div>

        );
    }
    getbadgeClasses ()
    {
        let classes = "badge m-2  bg-";
        classes += this.state.count === 0 ? "warning" : "primary";
        return classes;
    }

    getBadgeClasses ()
    {
        let classes = "badge m2 bg-";
        classes += this.state.count === 0 ? "warning" : "primary";
        return classes;
    }

    formatCount ()
    {
        return this.state.count === 0 ? <h3> Zero</h3> : this.state.count;
    }

}


export default Counter;