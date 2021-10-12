import React from 'react';
import 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.css';
class Counter extends React.Component
{
    state=
        {
            count: 0,
        };
    render()
    {
        return (
            <div>
                <span className={this.getBadgeClasses()}>{this.formatCount()}</span>
                <button className="btn-primary btn-sm m-4">Increment </button>


            </div>

        );
    }
    getBadgeClasses()
    {
        let classes="badge m2 bg-";
        classes+=this.state.count===0? "warning":"primary";
        return classes;
    }

    formatCount()
    {
        return this.state.count===0? <h3> Zero</h3>:this.state.count;
    }

}


export default Counter;