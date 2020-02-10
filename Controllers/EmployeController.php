<?php
require_once './Models/Employe.php ';

class EmployeController
{


    public  $employe=null;

static public function getAllEmploye()
{
    
$employes=Employe::getAll();

return $employes;

}

static public function getOnEmploye(){

    $employeid=$_POST['EmployeeID'];
    if(isset($_POST['EmployeeID']))
    {
    $data =array(
    'EmployeeID'=> $_POST['EmployeeID']);
    $employe= Employe::getEmploye($data);
    return $employe;
    }

}

static public function addEmploye()
{


if(isset($_POST['submit']))
{
$data= array
(

'Title' => $_POST['Title'],
'NationalIDNumber' => $_POST['NationalIDNumber'],
'BirthDate' => $_POST['BirthDate'],
'Gender' => $_POST['Gender']

);

$result =Employe::add($data);



if($result === 'ok')
{

    echo "<script type='text/javascript'>window.top.location='http://localhost/tp1/';</script>"; exit;


}else {
    echo $result;
}

}




}




static public function updateEmploye()
{

if(isset($_POST['submit']))
{
$data= array
(
'Title' => $_POST['Title'],
'NationalIDNumber' => $_POST['NationalIDNumber'],
'BirthDate' => $_POST['BirthDate'],
'Gender' => $_POST['Gender'],
'EmployeeID'=> $employe->$EmployeeID,
'BirthDate' => $_POST['BirthDate']
);

$result =Employe::update($data);

if($result === 'ok')
{

    echo "<script type='text/javascript'>window.top.location='http://localhost/tp1/';</script>"; exit;
}
else
{
    echo $result;



}
}




}



static public function upadte2Employe()
{


if(isset($_POST['submit']))
{
$data= array
(
'EmployeeID' => $_POST['EmployeeID'],
'Title' => $_POST['Title'],
'NationalIDNumber' => $_POST['NationalIDNumber'],
'BirthDate' => $_POST['BirthDate'],
'Gender' => $_POST['Gender']

);

$result =Employe::update2($data);



if($result === 'ok')
{

    echo "<script type='text/javascript'>window.top.location='http://localhost/tp1/';</script>"; exit;


}else {
    echo $result;
}

}




}


static public function deleteEmplopye()
{
    if (isset($_POST['submit'])) 
    {
        $data=array('EmployeeID' => $_POST['EmployeeID']);
    
        $employes=Employe::delete($data);
    

        return $employes;

        if($result === 'ok')
 {

echo "<script type='text/javascript'>window.top.location='http://localhost/tp1/';</script>"; 
exit;

}
else
 {

    echo $result;

} 
    }
}
}
?>