<?php
require_once './Database/connexion.php ';
class Employe

{

    private $EmployeeID ;
    private $Title ;
    private $BirthDate  ;
    private $Gender  ;
    private $NationalIdNumber ;
    public static function getAll()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM employee');
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    
    public static function getEmploye($data)
    {
        $id =$data['EmployeeID'];
        try {
            $query='SELECT * FROM employee WHERE EmployeeID=:EmployeeID';
            $stmt= DB::connect()->prepare($query);
            $stmt->execute(array(":EmployeeID" => $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        } catch (PDOException $ex) {
            echo'erer' . $ex->getMessage();
        }
    }
    
    public static function add($data)
    {
        $query=('INSERT INTO employee (Title,NationalIDNumber,BirthDate,Gender) VALUES (:Title, :NationalIDNumber, :BirthDate, :Gender)');
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':Title', $data['Title']);
        $stmt->bindParam(':NationalIDNumber', $data['NationalIDNumber']);
        $stmt->bindParam(':BirthDate', $data['BirthDate']);
        $stmt->bindParam(':Gender', $data['Gender']);

        if($stmt->execute()){
            return 'ok';


        }else{

            return 'error';
        }
        $stmt->close;
        $stmt = null;

 

    }


    public static function update($data)
    {
      

        $query=('UPDATE  employee  
        SET Title=:Title,
        NationalIDNumber=:NationalIDNumber,
        BirthDate=:BirthDate,
        Gender=:Gender
        where 
        EmployeeID=:EmployeeID'
        );

        $stmt=DB::connect()->prepare($query);
   
        $stmt->bindParam(':EmployeeID', $data['EmployeeID']); 
        $stmt->bindParam(':Title', $data['Title']);
        $stmt->bindParam(':NationalIDNumber', $data['NationalIDNumber']);
        $stmt->bindParam(':BirthDate', $data['BirthDate']);
        $stmt->bindParam(':Gender', $data['Gender']);
        $stmt->bindParam(':EmployeeID', $data['EmployeeID']);


        if($stmt->execute()){
            return 'ok';


        }else{

            return 'error';
            die(print_r($data));
        }
        $stmt->close;
        $stmt = null;

 

    }



    public static function delete($data)
    {

        die(print_r($data));

        $query=('DELETE FROM  employee  
         where EmployeeID=:EmployeeID'
        );
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':EmployeeID', $data['EmployeeID']);
        if($stmt->execute()){
            return 'ok';


        }else{

            return 'error';
        }
        $stmt->close;
        $stmt = null;


        
    } 


    
    public static function update2($data)
    {
        $query=('UPDATE  employee  
        SET Title=:Title,
        NationalIDNumber=:NationalIDNumber,
        BirthDate=:BirthDate,
        Gender=:Gender
        where 
        EmployeeID=:EmployeeID'
        );        
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':EmployeeID', $data['EmployeeID']);

        $stmt->bindParam(':Title', $data['Title']);
        $stmt->bindParam(':NationalIDNumber', $data['NationalIDNumber']);
        $stmt->bindParam(':BirthDate', $data['BirthDate']);
        $stmt->bindParam(':Gender', $data['Gender']);

        if($stmt->execute()){
            return 'ok';


        }else{

            return 'error';
        }
        $stmt->close;
        $stmt = null;

 

    }
}
?>