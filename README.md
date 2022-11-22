# Basic Framework with PHP 7.4 and MySQL 10.4

## Installation on Windows

#### 1. Install xampp and run MySQL and Apache
#### 2. Open ~xampp/htdocs and execute in console:
  
* **git clone git@github.com:SKSteeve/Framework.git**
* **cd Framework**
* **composer dump-autoload**

#### 3. Now open http://localhost/Framework/Public/

#

## Documentation

#### 1. Routing
	You can register your routes inside Framework/Public/index.php
	
	The syntax is *$route->get('/', ['TestController', 'index']);* where:
	*get()* is the request method that accept route path as first argument and array with (string)controller name and (string)method name to handle the request

#### 2. Controllers
	You can define your controllers inside Framework/App/Controllers
	
	They should extend the BaseController to use:
	* $this->render();* method that will return the correct view

#### 3. Models
	You can define your models inside Framework/App/Models
	
#### 4. Views
	You can define your models inside Framework/Resources
	
	They should be .php files to use:
	* $data* array that will give you passed data