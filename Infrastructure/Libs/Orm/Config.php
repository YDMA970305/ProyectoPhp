<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "ProyectoPhp/Infrastructure/Libs/Orm/Record/ActiveRecord.php";


ActiveRecord\Config::initialize(function ($cfg) {
  $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"] . "ProyectoPhp/Infrastructure/Databases/Entities");
  $cfg->set_connections(
    [
      'development' => 'mysql://root:123456@localhost/ejemplocrudjsp',

    ]
  );
});
