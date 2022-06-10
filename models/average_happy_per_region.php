<?php

/* Connexion pdo */
require_once('connect.php');

$sth = $bdd->prepare('SELECT ROUND(AVG(value), 2), region, `year` FROM countries_has_years
                        INNER JOIN `values` ON happiness_score = values.id
                        INNER JOIN years ON years_id = years.id
                        INNER JOIN countries ON countries_id = countries.id
                        INNER JOIN regions ON regions_id = regions.id
                        WHERE `year` = :year
                        GROUP BY region
                        ');

$sth->bindValue(':year', 2019, PDO::PARAM_INT);
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);