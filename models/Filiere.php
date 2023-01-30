<?php

function getAllFilieres() : array {
    $req = DB->query('SELECT * FROM filiere');
    $filieres = [];
    while ($row = $req->fetch()) {
        $filieres[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'color' => $row['color'],
        ];
    }
    return $filieres;
}
