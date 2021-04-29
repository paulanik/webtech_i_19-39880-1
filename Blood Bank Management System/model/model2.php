<?php 

require_once 'db_connect2.php';
include_once 'dc2.php';

function loginSearch($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` WHERE username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function patient_db($data) {
    $conn = db_conn();
    $selectQuery = "INSERT into patient_db (name, email, username, password, address,blood)
VALUES (:$name, :$email, :$username, :$password,:$address,:$blood)";
//ajax implement


//...............//
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':$name' => $data['name'],
            ':$email' => $data['email'],
            ':$username' => $data['username'],
            ':$password' => $data['password'],
            ':$address' => $data['address'],
            ':$blood'=> $data['blood']
        ]);
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showPatient($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` where username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function donor($data) {
    $conn = db_conn();
    $selectQuery = "INSERT into donor (name, email, username, address,blood,display)
VALUES (:name, :email, :username, :address, :blood, :display)";
//ajax implement


//...............//
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':address' => $data['address'],
            ':blood'=> $data['blood'],
            ':display' => $data['display'],
        ]);
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function showAllData($tableName){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM '.$tableName.'';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showData($tableName, $columnName){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM ".$tableName." where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function addpatient($tableName, $data){
    $conn = db_conn();
    $selectQuery = "INSERT into ".$tableName." (name,email,username,address,blood,display)
VALUES (:name, :email, :username, :address, :blood, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':address' => $data['address'],
            ':blood' => $data['blood'],
            ':display' => $data['display'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function updateDonor($tableName, $id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE ".$tableName." set Name = ?, Email = ?, Username = ?, Address = ?,Blood =?, display = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['Name'], $data['Email'], $data['Username'], $data['Address'],$data['Blood'],$data['display'] ,$id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function Apply($data) {
    $conn = db_conn();
    $selectQuery = "INSERT into applyform (name, email, phone, address, gender)
VALUES (:name, :email, :phone, :address, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
        ]);
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function showApplyData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `applyform` where name = 'name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function searchDonor($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `donor` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function deleteDonor($tableName, $id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `".$tableName."` WHERE id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
    
