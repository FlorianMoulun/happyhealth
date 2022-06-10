<?php
    require_once('connect.php');
    
    $selec_year = $_POST["select_year"];
    $sth = $bdd->prepare('SELECT country,ROUND(MAX(`value`), 2) AS val_max, `year` FROM countries_has_years
    INNER JOIN countries ON countries_has_years.countries_id = countries.id
    INNER JOIN `values` ON  values.id = countries_has_years.happiness_score 
    INNER JOIN years ON  countries_has_years.years_id = years.id
    WHERE `year` = :year
    GROUP BY country
    ORDER BY val_max DESC');

    $sth->bindValue(':year', $selec_year, PDO::PARAM_INT);
    $sth->execute();
    $res = $sth->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($res);

?>