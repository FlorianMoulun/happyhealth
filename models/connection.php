<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=world_happiness', 'phpmyadmin', '1234');
        // echo 'toto';
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $sql1 = 'INSERT INTO regions(region) VALUES (:region)';
    $sql2 = 'INSERT INTO `values`(`value`) VALUES (:happy)';
    $sql = 'INSERT INTO years(year) VALUES (:year)';
    $sql3 = 'SELECT id FROM regions WHERE region = :region';
    $sql4 = 'INSERT INTO countries(country, regions_id) VALUES (:country, :regions_id)';
      
$row = 1;
$tab_country = [];
$tab_region = [];
$tab_year = [];
$tab_value = [];
if (($handle = fopen("world_happiness.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){
            $row++;
            continue;
        }
        $num = count($data);
        $row++;
        $sth = $bdd->prepare($sql3);
        $sth->bindValue(':region', $data[3], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        // var_dump($result);
        array_push($tab_country, $data[2]);
        // array_push($tab_region, $data[3]);
        // array_push($tab_year, $data[11]);
        // array_push($tab_value, $data[1]); 
        // array_push($tab_value, $data[4]); 
        // array_push($tab_value, $data[7]);    
    }
    fclose($handle);
}
$tab_country = array_unique($tab_country);
$tab_region = array_unique($tab_region);
$tab_year = array_unique($tab_year);
$tab_value = array_unique($tab_value);
// print_r($tab_country);
// print_r($tab_region);
// print_r($tab_year);
// print_r($tab_value);

// for($i=0; $i < count($tab_year); $i++){
//     $sth = $bdd->prepare($sql);
//     $sth->bindParam(':year', $tab_year[$i], PDO::PARAM_STR);
//     $sth->execute();
// }

// for($i=0; $i < count($tab_region); $i++){
//     $sth = $bdd->prepare($sql1);
//     $sth->bindParam(':region', $tab_region[$i], PDO::PARAM_STR);
//     $sth->execute();
// }

// for($i=0; $i < count($tab_value); $i++){
//     $sth = $bdd->prepare($sql2);
//     $sth->bindParam(':happy', $tab_value[$i], PDO::PARAM_STR);
//     $sth->execute();
// }
$tab_country = array_values($tab_country);

for($i=0; $i < count($tab_country); $i++){
    $query_country = $bdd->prepare($sql4);
    $query_country->bindValue(':country', $tab_country[$i], PDO::PARAM_STR);
    $query_country->bindValue(':regions_id', $result["id"], PDO::PARAM_INT);
    $query_country->execute();
 }


?>
