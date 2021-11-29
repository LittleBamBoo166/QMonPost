<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <title>QMonPost</title>
    <link href="styles/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/main.css">
    <link rel="stylesheet" href="styles/fontawesome/css/all.css">
    <link rel="stylesheet" href="styles/css/creative.css">
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <!-- Header -->
    <header class="p-3">
        <div class="container">
            <!-- Flex container -->
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <!-- Logo -->
                <a href="/" class="d-flex me-auto"><img src="images/logo3.png" alt="" width="300px"></a>
                <!-- Look up by order code -->
                <form action="POST" class="">
                    <input type="search" class="search-1" name="" id="" placeholder="Nhập mã đơn hàng ...">
                    <input type="submit" class="search-1" name="" value="Tra cứu">
                </form>
            </div>
        </div>
    </header>