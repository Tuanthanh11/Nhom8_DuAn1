<?php
session_start();
include "../model/pdo.php";

include "header.php";
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
switch ($act) {
    case 'value':
        
        break;
    
    default:
        include "home.php";
        break;
}
}else{
    include "home.php";
}




include "footer.php";

?>