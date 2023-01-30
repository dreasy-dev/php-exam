<?php

require_once('./models/Article.php');
require_once('./models/Filiere.php');

function homeController() {
	$articles = getHomeArticles();
	$filieres = getAllFilieres();
	require('view/home.php');
}