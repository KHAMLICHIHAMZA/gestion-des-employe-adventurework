<?php 
if(isset($_POST['EmployeeID']))
{ 

$newEmploye = new EmployeController();


$exit=$newEmploye->getOnEmploye();


}


if(isset($_POST['submit']))
{ 

$newEmploye = new EmployeController();


$exit=$newEmploye->upadte2Employe();


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

<label for="Title">Tilte</label>
<input type="text" name="Title" class="form-control" placeholder="Tilte" value="<?php echo $exit->Title; ?>">
</div>

<div class="form-group">
<label for="NationalNumber">NationalIDNumber</label>
<input type="text" name="NationalIDNumber" class="form-control" placeholder="NationalNumber" value="<?php echo $exit->NationalIDNumber; ?>">
</div>


<div class="form-group">
<label for="BirthDate">BirthDate</label>
<input type="text" name="BirthDate" class="form-control" placeholder="BirthDate" value="<?php echo $exit->BirthDate; ?>">
<input type="hidden" name="EmployeeID" value="<?php echo $exit->EmployeeID;?>">
</div>

<div class="form-group">
<label for="Gender">Gender</label>
<input type="text" name="Gender" class="form-control" placeholder="Gender" value="<?php echo $exit->Gender; ?>">
</div>



<div class="form-group">


<button type="submit" class ="btn btn-primary" name="submit" > valider</button>

</div>


                
 