

<?php

//require_once './Api.php';
require_once './autoload.php';
require_once './Controllers/HomeController.php ';
//require_once './Controllers/UsersController.php ';

require_once './Controllers/EmployeController.php ';


$home = new HomeController();


$pages = ['add','home','update','delete','update2'];


    include_once './Views/includes/header.php';
    include_once './Views/includes/navebar.php';
    include_once './Views/includes/sidebar.php' ;

    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages))
        {
        
            $page = $_GET['page'];
            $home->index($page);
        
        
        }else{
        
            include ('Views/includes/404.php');
        }
        
        
        }else
        {
        $home->index('home');
        }

         require_once './Views/includes/footer.php';



?>

    