<?php

// CONFIGURATION
require_once './config/config.php';

// ROUTING SYSTEM
require_once './controller/router/Request.php';
require_once './controller/router/Router.php';
$router = new Router(new Request);

// CONTROLLERS
require_once './controller/HomeController.php';
require_once './controller/ArticleController.php';

//ROUTES
$router->get('/', function() {
  homeController();
});

$router->get('/article', function($request) {
  if(array_key_exists('id', $request->getBody())) {
    articleController($request->getBody()["id"]);
  } else {
    require('view/404.php');
  }
});

$router->get('/filiere', function($request) {
  if(array_key_exists('id', $request->getBody())) {
    filiereController($request->getBody()["id"]);
  } else {
    require('view/404.php');
  }
});


$router->get('/articles', function($request) {
  articlesController();
});





//require_once('./models/Article.php');
//var_dump(Article::read(1));