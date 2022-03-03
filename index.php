<?php

require_once 'routing.php';

// define routes
route('/', static function () {
    echo "Home Page";
});

route('/login', static function ($params) {
    echo "Login Page";
});

route('/about-us', static function ($params) {
    echo "About Us";
});

route('/404', static function ($params) {
    echo "Page not found";
});

// launch routes logic
run();
