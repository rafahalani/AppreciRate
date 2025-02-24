<?php
declare(strict_types=1);

if (!isset($_SESSION)) {
    session_start();
}

require 'Model/Employee.php';
require 'Model/Connection.php';
require 'Model/Company.php';
require 'Model/CompanyLoader.php';
require 'Model/Department.php';
require 'Model/DepartmentLoader.php';
require 'Controller/EmployeeController.php';
require 'Controller/CompanyDepartmentController.php';
require 'Controller/RatingController.php';
require 'Controller/EndPageController.php';
require "Controller/IdentificationController.php";
require "Controller/AboutController.php";
require "Controller/ReviewController.php";



if ($_POST["Name"]){
    $controller = new ReviewController();
    $controller->render();
}elseif($_POST["Comment"]){
    $controller = new RatingController();
    $controller->render();
}elseif($_POST["Comapnypostvalue"]){
    $controller = new CompanyDepartmentController();
    $controller->render();
}elseif($_POST["endpagevalue"]){
    $controller = new EndPageController();
    $controller->render();
}elseif($_POST["aboutbuttonvalue"]){
    $controller = new AboutController();
    $controller->render();
}
else{
$controller = new IdentificationController();
$controller->render();
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="Assets/Css/Reset.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Assets/Css/Style.css">

    <title>AppreciRate</title>
</head>
<body class="text-center">
</body>

</html>
