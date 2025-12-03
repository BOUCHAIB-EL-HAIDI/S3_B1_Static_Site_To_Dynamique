<?php 

require "functions.php";


$page = $_GET['page'] ?? 'home';

$allowedpages = ['home','services','contact','about'];


function Router($page , $allowedpages){

if(in_array($page , $allowedpages)) {

require __DIR__ . "/Controllers/{$page}.php";

}else {

require __DIR__ . "/Views/404.php";

}
};
Router($page , $allowedpages);