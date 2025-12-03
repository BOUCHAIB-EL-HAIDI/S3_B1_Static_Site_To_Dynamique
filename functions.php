<?php 

function dd($value){

echo "<pre>";

echo  var_dump($value);
echo "<pre>";
die();

};

$page = $_GET['page'] ?? 'home';

$allowedpages = ['home','services','contact','about'];


function Router($page , $allowedpages){

if(in_array($page , $allowedpages)) {

require __DIR__ . "/Controllers/{$page}.php";

}else {

require __DIR__ . "/Views/404.php";

}
};