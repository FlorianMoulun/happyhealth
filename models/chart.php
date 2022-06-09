<?php
	require_once('connect.php');


	$sth = $bdd->prepare('SELECT ROUND(AVG(`value`), 2) AS valuesAVG, `year` FROM countries_has_years
                        INNER JOIN `values` ON happiness_score = values.id
                        INNER JOIN years ON years_id = years.id
                        GROUP BY `year`
                        ORDER BY `year`');
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res);
?>