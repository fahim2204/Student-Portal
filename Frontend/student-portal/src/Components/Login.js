import React, { useState } from 'react'


import Registration from './Registration/Registration'

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom"

import { Grid, TextField, Paper, Avatar, Button } from '@material-ui/core';
// import { FormControl } from '@material-ui/core';


const Login = (props) => {

    const [email,setEmail] = useState("");
    const [password,setPassword] = useState("");

  var rootStyle= {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgb(216, 219, 221)'
  }
   
    // const backGround = { backgroundColor: 'rgb(216, 219, 221)' }
    const paperStyle = {padding:"50px", width: 300, margin: "253px auto" }
    const headerStyle = { margin: '10px' }
    // const avatarStyle = { backgroundColor: '#1bbd7e' }
    const margin = { margin: "10px auto"}

    const loginHandler=()=>{
        console.warn(email,password);
    }

    return (
        <div style={rootStyle}>
        <Router >
        <div >
        <Paper elevation={10} style={paperStyle}>
            <Grid>
                <Grid align='center'>
                    <Avatar />     
                    <h2 style={headerStyle}>Login</h2>
                </Grid>
                <form className="submit">
                    <TextField
                        required
                        id="outlined-required"
                        label="Username"
                        // defaultValue=""
                        variant="outlined"
                        style = {margin}
                        onChange = {(e)=>setEmail(e.target.value)}
                    />
                    <br/>
                    <TextField
                        required
                        id="outlined-password-input"
                        label="Password"
                        type="password"
                        // autoComplete="current-password"
                        variant="outlined"
                        style = {margin}
                        onChange = {(e)=>setPassword(e.target.value)}
                    />
                        <br/><br/>
                    <Button type='submit' onSubmit={loginHandler} variant='contained' color='primary' size="large">Login</Button>
                      
                </form>
                <br/>
                <Link to="/registration"> New here? Sign Up</Link>  

                <Switch >
                    <Route exact path="/registration" component={Registration}/>
                </Switch>  
            </Grid>
            </Paper>
        </div>
        </Router>
        </div>
    );
};

export default Login;