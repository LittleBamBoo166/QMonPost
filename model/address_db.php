<?php
function get_provinces()
{
    global $db;
    $query = 'SELECT * FROM province
              ORDER BY proid';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_province_name($pro_id)
{
    global $db;
    $query = 'SELECT * FROM province
              WHERE proid = :pro_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':pro_id', $pro_id);
    $statement->execute();
    $province = $statement->fetch();
    $statement->closeCursor();
    $province_name = $province['proname'];
    return $province_name;
}
function get_districts_by_province($pro_id)
{
    global $db;
    $query = 'SELECT * FROM district
              WHERE district.proid = :pro_id
              ORDER BY disid';
    $statement = $db->prepare($query);
    $statement->bindValue(':pro_id', $pro_id);
    $statement->execute();
    $districts = $statement->fetchAll();
    $statement->closeCursor();
    return $districts;
}
function get_district_name($dis_id)
{
    global $db;
    $query = 'SELECT * FROM district
              WHERE disid = :dis_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':dis_id', $dis_id);
    $statement->execute();
    $district = $statement->fetch();
    $statement->closeCursor();
    $district_name = $district['disname'];
    return $district_name;
}
function get_towns_by_district($dis_id)
{
    global $db;
    $query = 'SELECT * FROM town
              WHERE disid = :dis_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':dis_id', $dis_id);
    $statement->execute();
    $towns = $statement->fetchAll();
    $statement->closeCursor();
    return $towns;
}
function get_town_name($town_id)
{
    global $db;
    $query = 'SELECT * FROM town
              WHERE townid = :town_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':town_id', $town_id);
    $statement->execute();
    $town = $statement->fetch();
    $statement->closeCursor();
    $town_name = $town['townname'];
    return $town_name;
}
