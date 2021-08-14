import React from 'react'


import Login from '../Login'

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom"

import { Grid, TextField, Paper, Avatar, Button } from '@material-ui/core';

const StudentRegistration = (props) => {

  var rootStyle= {
    position: 'absolute',
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: 'rgb(216, 219, 221)'
  }
   
    const paperStyle = {padding:"50px", width: 300, margin: "253px auto" }
    const headerStyle = { margin: '10px' }
    const margin = { margin: "10px auto"}

    return (
        <div style={rootStyle}>
        <Router >
        <div >
        <Paper elevation={10} style={paperStyle}>
            <Grid>
                <Grid align='center'>
                    <Avatar />     
                    <h2 style={headerStyle}>StudentRegistration</h2>
                </Grid>
                <form className="submit" noValidate autoComplete="off">
                    <TextField
                        // name="fullName"
                        required
                        // id="outlined-required"
                        label="Full Name"
                        variant="outlined"
                        style = {margin}
                    />
                    <br/>
                    <TextField
                        required
                        id="outlined-required"
                        label="Username"
                        variant="outlined"
                        style = {margin}
                    />
                    <br/>
                    <TextField
                        required
                        id="outlined-password-input"
                        label="Password"
                        type="password"
                        variant="outlined"
                        style = {margin}
                    />
                    <br/>
                    <TextField
                        required
                        id="outlined-password-input"
                        label="Confirm Password"
                        type="password"
                        variant="outlined"
                        style = {margin}
                    />
                        <br/>
                    <TextField
                        // name="fullName"
                        required
                        // id="outlined-required"
                        label="Email"
                        variant="outlined"
                        style = {margin}
                    />
                        <br/>
                    <TextField
                        // name="fullName"
                        required
                        // id="outlined-required"
                        label="Phone No."
                        variant="outlined"
                        style = {margin}
                    />
                        <br/>
                    <TextField
                        // name="fullName"
                        required
                        // id="outlined-required"
                        label="Address"
                        variant="outlined"
                        style = {margin}
                    />
                        <br/>
                    
                        <input type="file" required variant="contained" component="label"/>
                            {/* Image Upload */}
                        
                        <br/><br/>
                    <Button type='submit' variant='contained' color='primary' size="large">Register</Button>
                      
                </form>
                <br/>
                <Link to="/login" variant="body2">Already Have an account? Login</Link>
                <Switch>
                    <Route exact path="/login" component={Login}/>
                </Switch>
            </Grid>
            </Paper>
        </div>
        </Router>
        </div>
    );
};

export default StudentRegistration;

// import React from 'react'

// const StudentRegistration = () => {
//     return (
//         <div className='form-content-right'>
//         <form onSubmit="" className='form' noValidate>
      
//         <h1>
//           Get started with us today! Create your account by filling out the
//           information below.
//         </h1>
//         <div className='form-inputs'>
//           <label className='form-label'>Username</label>
//           <input
//             className='form-input'
//             type='text'
//             name='username'
//             placeholder='Enter your username'
//             // value={values.username}
//             // onChange={handleChange}
//           />
//           {/* {errors.username && <p>{errors.username}</p>} */}
//         </div>
//         <div className='form-inputs'>
//           <label className='form-label'>Email</label>
//           <input
//             className='form-input'
//             type='email'
//             name='email'
//             placeholder='Enter your email'
//             // value={values.email}
//             // onChange={handleChange}
//           />
//           {/* {errors.email && <p>{errors.email}</p>} */}
//         </div>
//         <div className='form-inputs'>
//           <label className='form-label'>Password</label>
//           <input
//             className='form-input'
//             type='password'
//             name='password'
//             placeholder='Enter your password'
//             // value={values.password}
//             // onChange={handleChange}
//           />
//           {/* {errors.password && <p>{errors.password}</p>} */}
//         </div>
//         <div className='form-inputs'>
//           <label className='form-label'>Confirm Password</label>
//           <input
//             className='form-input'
//             type='password'
//             name='password2'
//             placeholder='Confirm your password'
//             // value={values.password2}
//             // onChange={handleChange}
//           />
//           {/* {errors.password2 && <p>{errors.password2}</p>} */}
//         </div>
//         <button className='form-input-btn' type='submit'>
//           Sign up
//         </button>
//         <span className='form-input-login'>
//           Already have an account? Login <a href='#'>here</a>
//         </span>
//       </form>
//     </div>
//     )
// }

// export default StudentRegistration
