<?php

session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{

$array_paths= array(
'Database/',
'Models/',
'Controllers/');
// ghankhjdem b anti salch machi salch
$parts= explode('\\',$class_name);
//recupere le nom li howa akhir part f l message
$name=array_pop($parts);

foreach($array_paths as $path)
{

$file=sprintf($path.'%s.php',$name);
if(is_file($file)){

    include_once $file;
}

}


}


