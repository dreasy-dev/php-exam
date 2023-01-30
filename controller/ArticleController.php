<?php

require_once('./models/Article.php');

function articleController($id) {
	if($id == null || $id == 0 || !is_numeric($id) || getArticle($id) == null) {
		require('view/404.php');
		return;
	}
	$article = getArticle($id);
	require('view/article.php');
}

function articlesController() {
	$articles = getAllArticles();
	require('view/articles.php');
}