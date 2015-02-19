# Codeigniter-Reloaded
Codeigniter with eloquent ORM

# Installation
1. Clone the repository
2. composer install
3. edit datatabase configs at application/config

# Eloquent

All models are place in application/models. Everytime you create a new model you have to ~~composer update~~ in case it is not being autoloaded.

## Creating a model. 

Create a new file name it like User.php and place it to application/models
~~~
<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent { }
~~~


