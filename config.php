<?php

ini_set('session.use_only_cookies', 1); // 1st set param session id 2nd set value 1 = true
ini_set('session.use_strict_mode', 1);

session_set_cookies_params([ // set session cookie parameters
    'lifetime' => 1800, // set to 30mins in seconds or 30mins * 60sec = 1800sec 
    'domain' => 'localhost', // set cookie for a domain or example.com
    'path' => '/',
    'secure' => true,
    'httponly' => true
]); 

session_start(); // initiate session

//session_regenerate_id(true); // generate a new ID for current session ID

if (!isset($_SESSION['last_regeneration'])) { // check if the session variable created in session
    
    session_regenerate_id(true); // session ID should be stronger by regenerating it
    $_SESSION['last_regeneration'] = time(); // check for first time to go in and create session variable 
} else {                                     // in the future it will run the else statement

    $interval = 60 * 30;

    if (time() - $_SESSION['last_regeneration'] >= $interval) { // take current time and subtract the time inside session
                                                                // and check seconds if greater than equal to interval
        session_regenerate_id(true); // generate a new ID for current session ID
        $_SESSION['last_regeneration'] = time(); // reset my last regeneration
    }
}