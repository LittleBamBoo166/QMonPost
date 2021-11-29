<?php
require('model/database.php');
require('model/address_db.php');
require('model/shop_db.php');

$action = filter_input(INPUT_POST, 'action');
// if ($action == null) {
//     $action = filter_input(INPUT_GET, 'action');
//     if ($action == null) {
//         $action = 'show_home';
//     }
// }
include('home.php');
switch ($action) {
    case 'sign_up':
        $full_name = filter_input(INPUT_POST, 'fullname');
        $pro_id = filter_input(INPUT_POST, 'province');
        $dis_id = filter_input(INPUT_POST, 'district');
        $to_id = filter_input(INPUT_POST, 'town');
        $address = filter_input(INPUT_POST, 'address');
        $phone_number = filter_input(INPUT_POST, 'phonenumber');
        $pass = filter_input(INPUT_POST, 'pass');
        add_shop($full_name, $address, $pass, $phone_number, $to_id);
        break;
    case 'log_in':
        $log_phone = filter_input(INPUT_POST, 'log_number');
        $log_pass = filter_input(INPUT_POST, 'log_pass');
        if (shop_login($log_phone, $log_pass)) {
            ob_start();
            header('Location: ./controller/dashboard/dashboard.php');
            ob_end_flush();
            die();
        }
        break;
    default:
        # code...
        break;
}
