import React, { Component } from "react";

import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import PrimeHeader from "./Header/PrimeHeader";
import SecondHeader from "./Header/SecondHeader";
import HomePage from "./Content/HomePage";
import Veg from "./Content/Veg";
import Login from "./Auth/Login";
import Register from "./Auth/Register";
import Logout from "./Auth/Logout";

const Main = () => (
    <Router>
        <div className="wrapper">
            <SecondHeader />
            <PrimeHeader />
            <Switch>
                <Route path="/" component={HomePage} exact={true} />
                <Route path="/products/veg" component={Veg} />
                <Route path="/login" component={Login} />
                {/* <Route path="/register" component={Register} exact={true} /> */}
                <Route path="/logout" component={Logout} />
                {/* <Route path="/about" component={AboutPage} exact={true} />
       
        <Route path="/products/fruit" component={Fruit} exact={true} />
        <Route path="/products/meat" component={Meat} exact={true} /> */}
            </Switch>
        </div>
    </Router>
);

export default Main;
