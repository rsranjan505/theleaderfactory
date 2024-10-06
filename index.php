<?php 

include "app/config.php";

$userBrowser = $_SERVER['HTTP_ACCEPT']; 
$browser_t = "public";


//Define Global Variable
$domain="http://theleaderfactory.com";
$contact_number="+91 834-045-7431";
$whatsapp="+918340457431";
$address="H NO-13/66/3,NORTH ANANDPURI WEST BORING CANAL ROAD,NEAR JAL PARISHAD OFFICE PATNA Patna BR 800001 IN";
$email="info@theleaderfactory.com";
$contact_email="contact@theleaderfactory.com";
$facebook="";
$instagram="";
$twitter="";
$author="theleaderfactory.COM";




//defina main index file below from variables

include $browser_t.'/index.php';


?>

