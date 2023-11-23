<?php
session_start();
require_once 'src/controller.php';
require_once 'src/template.php';

//if /else logic
$section =$_GET['section'] ?? $_POST['section'] ?? 'home';
$action =$_GET['action'] ?? $_POST['action'] ?? 'default';



if($section== 'about'){
include 'controller/about-us.php';
$aboutController =new AboutUsController();
$aboutController->runAction($action);
}else if($section == 'contact'){
    include 'controller/contactus.php';
    $contactController = new ContactController();
    $contactController->runAction($action);
}
else{
    include 'controller/homePage.php';
    $homePageController = New HomePageController();
    $homePageController->runAction($action);
}