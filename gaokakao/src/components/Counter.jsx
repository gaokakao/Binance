import React from 'react';
import 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.css';
class Counter extends React.Component
{
    state=
        {
            count: 0,
        };
    styles=
        {
            fontSize: 30,
            fontWeight: "bold",
            color: "blue"
        }

    render()
    {
        return (
            <div>
                <span className="badge badge-warning">
                    {this.formatCount()}
                </span>
                <button class="btn-primary btn-sm m-4">Increment </button>


            </div>

        );
    }

    formatCount()
    {
        return this.state.count===0? <h2> Zero</h2>:this.state.count;
    }

}


export default Counter;