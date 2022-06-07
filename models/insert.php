<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
require_once('connect.php');

 // requetes SQL
 $req_insert_region = 'INSERT INTO regions(region) VALUES (:region)';
 $req_insert_values = 'INSERT INTO `values`(`value`) VALUES (:happy)';
 $req_insert_year = 'INSERT INTO years(year) VALUES (:year)';

 // insertion clé etrangère pour table countries
 $req_select_idregion = 'SELECT id FROM regions WHERE region = :region';
 $req_insert_country = "INSERT INTO countries (country, regions_id)
 SELECT * FROM (SELECT :country AS country, :reg AS regions_id) AS temp
 WHERE NOT EXISTS (SELECT country FROM countries WHERE country = :country)";

 // requetes pour values score rank et health
 $req_select_countries = "SELECT id FROM countries WHERE country = :country";
 $req_select_years = "SELECT id FROM years WHERE year = :years";
 $req_select_happiness_rank = "SELECT id FROM `values` WHERE `value` = :happiness_rank";
 $req_select_happiness_score = "SELECT id FROM `values` WHERE `value` = :happiness_score";
 $req_select_health_score = "SELECT id FROM `values` WHERE `value` = :health";

 $insert = "INSERT INTO countries_has_years (countries_id, years_id, happiness_rank, happiness_score, health) VALUES (:countries_id, :years_id, :happiness_rank, :happiness_score, :health)";

 $row = 1;
 $tab_country = [];
 $tab_region = [];
 $tab_year = [];
 $tab_value = [];
// lecture csv
if (($handle = fopen("world_happiness.csv", "r")) !== FALSE) {
 while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
     if($row == 1){
         $row++;
         continue;
     }
     $num = count($data);
     $row++;
     // clé etrangère 
     $sth = $bdd->prepare($req_select_idregion);
     $sth->bindValue(':region', $data[3], PDO::PARAM_STR);
     $sth->execute();
     $result_region = $sth->fetch(PDO::FETCH_ASSOC);
     $query_country = $bdd->prepare($req_insert_country);
     $query_country->bindValue(':country', $data[2], PDO::PARAM_STR);
     $query_country->bindValue(':reg', $result_region["id"], PDO::PARAM_INT);              
     $query_country->execute();
//table countries_has_years
     $req_sel_countries = $bdd->prepare($req_select_countries);
     $req_sel_years = $bdd->prepare($req_select_years);
     $req_sel_happiness_rank = $bdd->prepare($req_select_happiness_rank);
     $req_sel_happiness_score = $bdd->prepare($req_select_happiness_score);
     $req_sel_health = $bdd->prepare($req_select_health_score);
     $req_insert = $bdd->prepare($insert);

     $req_sel_years->bindValue(':years', $data[11], PDO::PARAM_INT);
     $req_sel_years->execute();
     $res_years = $req_sel_years->fetch(PDO::FETCH_ASSOC);

     $req_sel_countries->bindValue(':country', $data[2], PDO::PARAM_STR);
     $req_sel_countries->execute();
     $res_countries = $req_sel_countries->fetch(PDO::FETCH_ASSOC);

     $req_sel_happiness_rank->bindValue(':happiness_rank', $data[1], PDO::PARAM_STR);
     $req_sel_happiness_rank->execute();
     $result_happy_rank = $req_sel_happiness_rank->fetch(PDO::FETCH_ASSOC);

     $req_sel_happiness_score->bindValue(':happiness_score', $data[4], PDO::PARAM_STR);
     $req_sel_happiness_score->execute();
     $result_happy_score = $req_sel_happiness_score->fetch(PDO::FETCH_ASSOC);

     $req_sel_health->bindValue(':health', $data[7], PDO::PARAM_STR);
     $req_sel_health->execute();
     $result_health_score = $req_sel_health->fetch(PDO::FETCH_ASSOC);

     $req_insert->bindValue(':countries_id', $res_countries['id'], PDO::PARAM_STR);
     $req_insert->bindValue(':years_id', $res_years['id'], PDO::PARAM_STR);
     $req_insert->bindValue(':happiness_rank', $result_happy_rank['id'], PDO::PARAM_STR);
     $req_insert->bindValue(':happiness_score', $result_happy_score['id'], PDO::PARAM_STR);
     $req_insert->bindValue(':health', $result_health_score['id'], PDO::PARAM_STR);
     $req_insert->execute();
 
     array_push($tab_country, $data[2]);
     array_push($tab_region, $data[3]);
     array_push($tab_year, $data[11]);
     array_push($tab_value, $data[1]); 
     array_push($tab_value, $data[4]); 
     array_push($tab_value, $data[7]);    
 }
 fclose($handle);
}

$tab_region = array_unique($tab_region);
$tab_year = array_unique($tab_year);
$tab_value = array_unique($tab_value);

// PDO pour table years
for($i=0; $i < count($tab_year); $i++){
    $sth = $bdd->prepare($req_insert_year);
    $sth->bindParam(':year', $tab_year[$i], PDO::PARAM_STR);
    $sth->execute();
}

// PDO pour table region
for($i=0; $i < count($tab_region); $i++){
    $sth = $bdd->prepare($req_insert_region);
    $sth->bindParam(':region', $tab_region[$i], PDO::PARAM_STR);
    $sth->execute();
}

// PDO pour table values
for($i=0; $i < count($tab_value); $i++){
    $sth = $bdd->prepare($req_insert_values);
    $sth->bindParam(':happy', $tab_value[$i], PDO::PARAM_STR);
    $sth->execute();
}

