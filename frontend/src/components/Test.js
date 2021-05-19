import React, { Component } from 'react';
import axios from 'axios';

export default class Test extends Component {
    state = {
        persons: []
    }
    
    componentDidMount() {
        axios.get(`http://localhost/Calendar/server/auth?user_id=2`).then(res => {
            const persons = res.data;
            this.setState({ persons });
        });
    }


    render() {
        if (this.state.persons.length > 0) {
            return (
                <div>
                    <ul>
                        { this.state.persons.map(user => <div>
                            <p>{ user.email }</p>
                            <p>{ user.name }</p>
                        </div>) }
                    </ul>
                </div>
            )
        } else {
            return (
                <div>
                    Waiting...
                </div>
            )
        }
    }
}
