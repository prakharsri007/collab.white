import React from 'react';
import './styleb.css';
class Board extends React.Component {
    constructor(props) {
        super(props);

    }
    render() {
        return (
            <canvas className="board" id="board"> </canvas>
        )
    }

}

export default Board