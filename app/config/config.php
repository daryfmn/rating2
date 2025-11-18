<?php
// Docker environment - Updated for Docker
define('BASE_URL', 'http://localhost'); // No subdirectories
define('BASE_URL_IMG', 'http://localhost/resource/'); // Direct to resource

// Docker container paths
define('PROFILE_PATH', '/var/www/myphpapp/app/resource/profile/');
define('MOVIE_PATH', '/var/www/myphpapp/app/resource/movie/');
define('ACTOR_PATH', '/var/www/myphpapp/app/resource/actor/');

// Docker database
define('DB_HOST', 'mysql'); // Changed from localhost
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'ratingfilm');