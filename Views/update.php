<?php

$employe=null;
$e=null;
if(isset($_POST['EmployeeID']))
{
$empl= new EmployeController();
$employe= $empl->getOnEmploye();
$dd=$empl->updateEmploye();


}

if(isset($_POST['submit']))
{
$empl= new EmployeController();
$upd= $empl->updateEmploye();


}



else{


}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-start">
                <!--de la -->
             

<form  method="post" action="">

<div class="form-group">

<label for="Nom">Title</label>
<input type="text" name="Title" class="form-control" placeholder="Title"
value="<?php echo $employe->Title ;?>">
</div>

<div class="form-group">
<label for="Nom">NationalIDNumber</label>
<input type="text" name="NationalIDNumber" class="form-control" placeholder="NationalIDNumber" value="<?php echo $employe->NationalIDNumber;?>">
</div>


<div class="form-group">
<label for="Nom">BirthDate</label>
<input type="text" name="BirthDate" class="form-control" placeholder="BirthDate" value="<?php echo $employe->BirthDate;?>">
</div>

<div class="form-group">
<label for="Nom">Gender</label>
<input type="text" name="Gender" class="form-control" placeholder="Grade" value="<?php echo $employe->Gender;?>">
</div>


<form class="mr-1" method="post" action="home">
<div class="form-group">

<button type="submit" class ="btn btn-primary" name="submit"> valider</button>
</div>
</form>

</form> 
                 <!--jusque la qui doit changer-->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>