<?php
  // Load libraries
  require_once 'config/config.php';

  require_once 'helpers/url_helper.php';

  require_once 'libraries/Controller.php';
  require_once 'libraries/Core.php';
  require_once 'libraries/DB.php';

  // Autoload
  spl_autoload_register(function($nameClass) {
    require_once 'libraries/' . $nameClass . '.php';
  });
