<?php

/* Connexion pdo */
require_once('connect.php');

$sth = $bdd->prepare('SELECT ROUND(AVG(value), 2), country, `year` FROM countries_has_years
                        INNER JOIN `values` ON health = values.id
                        INNER JOIN years ON years_id = years.id
                        INNER JOIN countries ON countries_id = countries.id
                        WHERE country = :name_country
                        GROUP BY `year`
                        ');

$sth->bindValue(':name_country', "Iceland", PDO::PARAM_INT);
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);