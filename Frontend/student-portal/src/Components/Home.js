import React from 'react'

import Login from './Login'
import Registration from './Registration/Registration'

import {
    BrowserRouter as Router,
    Switch,
    Link,
    Route
  } from "react-router-dom"

import { Button } from '@material-ui/core';


const Home = (props) => {

    return (
        <div>
        <Router >
            <h1>Home page to login route</h1>
            <Link to="/login" style={{ textDecoration: 'none' }}><Button variant='contained' color='primary' size="large">Login</Button></Link>

            <Link to="/registration" style={{ textDecoration: 'none' }}><Button variant='contained' color='primary' size="large">Sign up</Button></Link>




            {/* <Switch>
                <Route exact path="/login" component={Login}/>
                <Route path="/registration" component={Registration}/>
            </Switch> */}
        </Router>
        </div>
    );
};

export default Home;
