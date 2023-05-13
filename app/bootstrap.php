// app/bootstrap.php

<?php

// Load the Composer autoloader.
require_once 'vendor/autoload.php';

// Create a new instance of the App class.
$app = new App();

// Run the application.
$app->run();

?>
