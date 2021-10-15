import React from "react";
import ReactDOM from 'react-dom';

/* Main Component */
class Main extends React.Component {

    constructor(props) {
        super(props);
        //Initialize the state in the constructor
        this.state = {
            products: [],
        }
    }
    /*componentDidMount() is a lifecycle method
     * that gets called after the component is rendered
     */
    componentDidMount() {

        $.get('/api/products', products => {
            this.setState({ products });
        });
    }

    renderProducts() {
        return this.state.products.map(product => {
            return (
                /* When using list you need to specify a key
                 * attribute that is unique for each list item
                */
                <li key={product.id} >
                    { product.title }
                </li>
            );
        })
    }

    render() {
        /* Some css code has been removed for brevity */
        return (
            <div>
                <ul>
                    { this.renderProducts() }
                </ul>
            </div>

        );
    }
}

export default Main;

/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";
*/

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}
