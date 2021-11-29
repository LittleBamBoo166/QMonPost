<?php
function get_shops() {
    global $db;
    $query = 'SELECT * FROM shopinfo
              ORDER BY shopid';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}
function add_shop($shop_name, $shop_address, $shop_pass, $shop_phonenum, $town_id) {
    global $db;
    $query = 'INSERT INTO shopinfo
                (shopname, shopaddress, shoppass, shopphonenum, townid)
              VALUES
                (:shop_name, :shop_address, :shop_pass, :shop_phonenum, :town_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':shop_name', $shop_name);
    $statement->bindValue(':shop_address', $shop_address);
    $statement->bindValue(':shop_pass', $shop_pass);
    $statement->bindValue(':shop_phonenum', $shop_phonenum);
    $statement->bindValue(':town_id', $town_id);
    $statement->execute();
    $statement->closeCursor();
}
function shop_login($phone_num, $pass) {
    global $db;
    $query = 'SELECT * FROM shopinfo
              WHERE shopphonenum = :phone';
    $statement = $db->prepare($query);
    $statement->bindValue(":phone", $phone_num);
    $statement->execute();
    $shop = $statement->fetch();
    $statement->closeCursor();
    $shop_pass = $shop['shoppass'];
    if (strcmp($shop_pass, $pass) == 0) {
        return true;
    }
    return false;
}