<?php
    require_once('connect.php');
    
    $selec_year = $_POST["select_year"];
    $sth = $bdd->prepare('SELECT country, ROUND(MAX(`value`), 2) AS val_max, `year` FROM countries_has_years
    INNER JOIN countries ON  countries.id = countries_has_years.countries_id
    INNER JOIN `values` ON  values.id = countries_has_years.health
    INNER JOIN years ON  years.id = countries_has_years.years_id 
    WHERE `year` = :year
    GROUP BY country
    ORDER BY val_max DESC
    LIMIT 1');

    $sth->bindValue(':year', $selec_year, PDO::PARAM_INT);
    $sth->execute();
    $res = $sth->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($res);

?>