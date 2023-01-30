<?php

function getArticle(int $id) : array|null {
    $req = DB->query('SELECT * FROM article WHERE id = ' . $id);
    $row = $req->fetch();
    if ($row === false) {
        return null;
    }

    $reqstock = DB->query('SELECT size, number FROM stock WHERE id_article = ' . $id);
    $stocks = [];
    while ($rowstock = $reqstock->fetch()) {
        $stocks[] = [
            'size' => $rowstock['size'],
            'number' => $rowstock['number'],
        ];
    }

    $article = [
        'name' => $row['name'],
        'price' => $row['price'],
        'picture' => $row['picture'],
        'publication' => $row['publication'],
        'description' => $row['description'],
        'stocks' => $stocks,
    ];

    return $article;
}

function getHomeArticles() : array {
    $req = DB->query('SELECT id, name, price, picture, publication, description FROM article ORDER BY id ASC LIMIT 3');
    
    $articlesWithoutStocks = [];
    while ($row = $req->fetch()) {
        $articlesWithoutStocks[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'picture' => $row['picture'],
            'publication' => $row['publication'],
            'description' => $row['description'],
        ];
    }

    $articles = [];
    foreach ($articlesWithoutStocks as $article) {
        $reqstock = DB->query('SELECT size, number FROM stock WHERE id_article = ' . $article['id']);
        $stocks = [];
        while ($rowstock = $reqstock->fetch()) {
            $stocks[] = [
                'size' => $rowstock['size'],
                'number' => $rowstock['number'],
            ];
        }
        $articles[] = [
            'id' => $article['id'],
            'name' => $article['name'],
            'price' => $article['price'],
            'picture' => $article['picture'],
            'publication' => $article['publication'],
            'description' => $article['description'],
            'stocks' => $stocks,
        ];
    }


    return $articles;
}

function getAllArticles() : array {
    $req = DB->query('SELECT id, name, price, picture, publication, description FROM article');
    
    $articlesWithoutStocks = [];
    while ($row = $req->fetch()) {
        $articlesWithoutStocks[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'picture' => $row['picture'],
            'publication' => $row['publication'],
            'description' => $row['description'],
        ];
    }

    $articles = [];
    foreach ($articlesWithoutStocks as $article) {
        $reqstock = DB->query('SELECT size, number FROM stock WHERE id_article = ' . $article['id']);
        $stocks = [];
        while ($rowstock = $reqstock->fetch()) {
            $stocks[] = [
                'size' => $rowstock['size'],
                'number' => $rowstock['number'],
            ];
        }
        $articles[] = [
            'id' => $article['id'],
            'name' => $article['name'],
            'price' => $article['price'],
            'picture' => $article['picture'],
            'publication' => $article['publication'],
            'description' => $article['description'],
            'stocks' => $stocks,
        ];
    }


    return $articles;
}