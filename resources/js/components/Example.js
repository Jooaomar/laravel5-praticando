import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import axios from 'axios';


export default class Example extends Component {

    constructor(props) {
        super(props);

        this.state = {
            data: null
        };
    }

    componentDidMount() {
        // Faz a solicitação para buscar os dados do servidor
        axios.get('/home/api')
            .then(response => {
                this.setState({ data: response.data });
            })
            .catch(error => {
                console.error('Erro ao buscar os dados:', error);
            });
    }

    render() {
        const { data } = this.state;

        if (!data) {
            return null; // Renderiza nada enquanto os dados estiverem sendo buscados
        }

        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>

                            <div className="card-body">I'm an example component!</div>
                            <div className='card-body'>
                                <ul>
                                    {Object.entries(data).map(([key, value]) => (
                                            <li key={key}>{key}: {value}</li>
                                        ))}
                                </ul>
                            </div>

                            <button type="button" className="btn btn-info">Botão React</button>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example/>, document.getElementById('example'));
}
