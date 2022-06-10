<?php

/* Connexion pdo */
require_once('connect.php');

$sth = $bdd->prepare('SELECT country, `year`, value FROM countries_has_years
                        INNER JOIN countries ON countries_id = countries.id
                        INNER JOIN years ON years_id = years.id
                        INNER JOIN `values` ON happiness_rank = values.id
                        WHERE `year` = :year
                        ORDER BY happiness_rank
                        LIMIT 3');

$sth->bindValue(':year', 2019, PDO::PARAM_INT);
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);