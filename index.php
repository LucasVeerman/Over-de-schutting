<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';
// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Edam-Volendam');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('navigation.tpl');



$action=isset($_GET['action'])?$_GET['action']:'home';
    $templateParser->display('header.tpl');
    
switch($action){
    case 'home':
        $templateParser->display('home.tpl');  
        
    break;
    case 'edam':
        $templateParser->display('locations.tpl');
    break;
    case 'agenda':
        
    break;
    case 'contact':
        $templateParser->display('contact.tpl');
        
    break;
    case 'admin':
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:"show";
        $templateParser->display('userPanel.tpl');
        
    
       
    break;
}

$templateParser->display('footer.tpl');

