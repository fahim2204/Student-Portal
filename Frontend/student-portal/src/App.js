import React from 'react';
import './App.css';

import {
    BrowserRouter as Router,
    Switch,
    Link,
    Route
} from "react-router-dom"

import Home from './Components/Home'
import Login from './Components/Login';
import Registration from './Components/Registration/Registration';

function App() {
    return (
        <>

            <div className="App">
                {/* <Home/> */}
                <Router>
                    <Switch>
                        <Route exact path="/"><Home /></Route>
                        <Route exact path="/login"><Login /></Route>
                        <Route exact path="/registration"><Registration /></Route>
                    </Switch>
                </Router>

            </div>
        </>
    );
}

export default App;
