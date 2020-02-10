<?php


require_once './Controllers/EmployeController.php ';



$employes= EmployeController::getAllEmploye();








?>

<div class="content-wrapper">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-end">
                <table class="table table-hover">
                  <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">NationalIDNumber</th>
                        <th scope="col">BirthDate</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>

                  </thead>
                  
                  <tbody>
                    <?php foreach($employes as $employe):?>


                  <tr>
                        <td scope="col"><?php echo $employe['Title'];  ?></td>
                        <td scope="col"><?php echo $employe['NationalIDNumber'] ; ?></td>
                        <td scope="col"><?php echo $employe['BirthDate']  ;?></td>
                        <td scope="col"><?php echo $employe['Gender']  ;?></td>
                        <td  class="d-flex flex-row" >
                        <form  class="mr-1" method="post" action="update2">
                          <input type="hidden" name="EmployeeID" ,;="<?php
                           echo $employe['EmployeeID'];?>">
                           <button class="btn btn-sm btn-warning"><i class="fa fa-edit" ></i></button>
                        </form>
                        <form  class="mr-1" method="post" action="delete">
                        <input type="hidden" name="id" value="<?php echo $employe['EmployeeID'];?>">
                        </form>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></button>

                        
                   <a href="http://localhost/tp1/add" class="btn btn-sm btn-primary">
                      <i class="fas fa-plus"></i>
                    </a>
                        </td>
                        
                    </tr>
                    <?php endforeach;?>

    
                  </tbody>
                </table>
