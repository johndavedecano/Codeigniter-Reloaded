<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| ELOQUENT ORM SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
*/

try {

    $capsule = new \Illuminate\Database\Capsule\Manager;

    $path = __DIR__.'/'.ENVIRONMENT.'/database.php';

    $settings = require_once($path);

    $capsule->addConnection($settings);

    $capsule->setAsGlobal();

    $capsule->bootEloquent();

} catch(Exception $e) {

}
