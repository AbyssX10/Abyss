<?php

    date_default_timezone_set("America/Bogota");

    error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

    ini_set("ignore_repeated_errors", TRUE); // Always use TRUE
    ini_set("display_errors", FALSE); // Error/Exception display, use FALSE only in production
    ini_set("log_errors", TRUE); // Error/Exception file logging engine
    ini_set("error_log", "C:/xampp\htdocs/jose-luis-salinas/php-error.log");

    error_log("Run App");

    //! LIBRARY
    require 'libs/App.php';
    require 'libs/BaseController.php';
    require 'libs/View.php';

    require 'handlers/ErrorMessages.php';
    require 'handlers/SuccessMessages.php';

    require 'config/config.php';

    $app = new App();

?>