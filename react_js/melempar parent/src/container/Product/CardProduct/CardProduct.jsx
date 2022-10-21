import React, { Component, Fragment } from "react";

class CardProduct extends Component {
  state = {
    order: 0,
    name: 'fikri'
  };

  handleCounterChange = (newValue) => {
      this.props.onCounterChange(newValue);
  }

  handleplus = () => {
    this.setState({
      order: this.state.order + 1,
    }, () => {
       this.handleCounterChange(this.state.order);
    })
  };

  handleminus = () => {
    if (this.state.order > 0) {
      this.setState({ 
        order: this.state.order - 1,
      }, () => {
          this.handleCounterChange(this.state.order);
      });
    }
  };
  render() {
    return (
      <Fragment>
        <div className="card">
          <div className="img-thumb-prod">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp6W64KBqFVwoSP-n0J1MXw8zf-n3yDa2bViyLfLdhlDhElCzgMLMX7rdtj9Rt6Ii8S8g&usqp=CAU"
              alt=""
            />
          </div>
          <p className="product-title">daging ayam segar murah bekualitas</p>
          <p className="product-price">Rp 410.000</p>
          <div className="counter">
            <button className="minus" onClick={this.handleminus}>
              -
            </button>
            <input type="text" value={this.state.order} />
            <button className="plus" onClick={this.handleplus}>
              +
            </button>
          </div>
        </div>
      </Fragment>
    );
  }
}

export default CardProduct;
