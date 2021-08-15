import React from 'react'

import Login from '../Login'
import StudentRegistration from './StudentRegistration'
import InstructorRegistration from './InstructorRegistration'
import ModeratorRegistration from './ModeratorRegistration'
// import PersonAddIcon from '@material-ui/icons/PersonAdd';
// import AccessAlarmIcon from '@material-ui/icons/AccessAlarm';

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom"

import { Grid, Paper, Avatar, Button } from '@material-ui/core';
// import styled from '@emotion/styled'
// import { FormControl } from '@material-ui/core';


const Registration = (props) => {

  var rootStyle= {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgb(216, 219, 221)'
  }
   
    // const backGround = { backgroundColor: 'rgb(216, 219, 221)' }
    const paperStyle = {padding:"50px", width: 300, margin: "150px auto" }
    const headerStyle = { margin: '10px' }
    // const avatarStyle = { backgroundColor: '#1bbd7e' }
    // const margin = { margin: "10px auto"}

    return (
        <div style={rootStyle}>
        <Router >
        <div >
        <Paper elevation={10} style={paperStyle}>
            <Grid>
                <Grid align='center'>
                    <Avatar />    
                    <h2 style={headerStyle}>Registration</h2>
                    <br/>
                </Grid>
                    <Link to="/student/Registration" style={{ textDecoration: 'none' }}><Button variant='contained' color='primary' size="large">Register as a <br/> Student</Button></Link>    
                    
                    <p>-OR-</p> 
                    <Link to="/instructor/Registration" style={{ textDecoration: 'none' }}><Button variant='contained' color='inherit' size="large">Register as a <br/>Instructor</Button></Link>    
                    
                    <p>-OR-</p>
                    <Link to="/moderator/Registration" style={{ textDecoration: 'none' }}><Button variant='contained' color='secondary' size="large">Register as a <br/>Moderator</Button></Link>    
                    
                    <br />
 
                <br/>
                <Link to="/login" variant="body2">Already Have an account? Login</Link>
                <Switch>
                    <Route exact path="/login" component={Login}/>
                    <Route path="/student/Registration" component={StudentRegistration}/>
                    <Route path="/instructor/Registration" component={InstructorRegistration}/>
                    <Route path="/moderator/Registration" component={ModeratorRegistration}/>
                </Switch>
            </Grid>
            </Paper>
        </div>
        </Router>
        </div>
    );
};

export default Registration;