# Basic Framework with PHP 7.4 and MySQL 10.4

## Installation on Windows

#### 1. Install xampp and run MySQL and Apache
#### 2. Open ~xampp/htdocs and execute in console:
  
* **git clone git@github.com:SKSteeve/Framework.git**
* **cd Framework**
* **composer dump-autoload**

#### 3. Change the db.ini variables to make connection with your Database
* You can execute the .example.sql to have example on the test Model User *

#### 4. Now open http://localhost/Framework/Public/

#

## Documentation

#### 1. Routing
	You can register your routes inside Framework/Public/index.php
	
	The syntax is *$route->get('/', ['TestController', 'index']);* where:
	*get()* is the request method that accept route path as first argument and array with (string)controller name and (string)method name to handle the request
	Currently available methods: *get()*, *post()*, *put()*, *delete*
#### 2. Controllers
	You can define your controllers inside Framework/App/Controllers
	
	They should extend the BaseController to use:
	*$this->render();* method that will return the correct view

#### 3. Models
	You can define your models inside Framework/App/Models
	
	Define protected $table for the model.
	They should extend BaseModel to use:
	*$instance->create([]);* method that accepts array with key => values representing column and value to be saved 
	*$instance->find($id)* method that finds the object
	
#### 4. Views
	You can define your views inside Framework/Resources/Views
	
	They should be .php files to use:
	*$data* array that will give you passed data key => value from the controller
	*$error* string giving you error message if there was any error passed form the controller
	*$success* string giving you success message if there was any success passed form the controller