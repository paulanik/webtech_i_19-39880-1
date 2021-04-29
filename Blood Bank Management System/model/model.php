<?php 

require_once 'db_connect.php';

function userLogin($uname, $password){
	$conn = db_conn();
	$selectQuery = "SELECT COUNT(*) FROM `hospital_info` where uname = '$uname' and password = '$password'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getAllUname(){
    $conn = db_conn();
    $selectQuery = "SELECT Uname FROM `hospital_info` ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getBloodInfo(){
    $conn = db_conn();
    $selectQuery = "SELECT ID, BloodGroup, Price, Hname, Phone, Address from blood_info, hospital_info WHERE blood_info.HospitalUsername = hospital_info.Uname and Available = 1 and ExpireDate > (SELECT NOW())";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getAllDonorUname(){
    $conn = db_conn();
    $selectQuery = "SELECT DonorUsername FROM `donor_info` ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getHimage($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Image FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHname($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Hname FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHphone($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Phone FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHemail($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Email FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHaddress($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Address FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getOldPass($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Password FROM hospital_info where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldPass = $stmt->fetchColumn();

    return $oldPass;
}

function getDonorUname($uname){
    $conn = db_conn();
    $selectQuery = "SELECT COUNT(*) FROM `donor_info` where DonorUsername = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}


function insertData($data){
	$conn = db_conn();
    $selectQuery = "INSERT into hospital_info (Hname, Phone, Email, Address, Uname, Password)
VALUES (:hname, :phone, :email, :address, :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':hname' => $data['hname'],
        	':phone' => $data['phone'],
        	':email' => $data['email'],
        	':address' => $data['address'],
        	':uname' => $data['uname'],
            ':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function insertDonor($data){
    $conn = db_conn();
    $selectQuery = "INSERT into donor_info (DonorName, Gender, Phone, Email, Address, DonorUsername)
VALUES (:dname, :gender, :phone, :email, :address, :dUname)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':dname' => $data['dname'],
            ':gender' => $data['gender'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':address' => $data['address'],
            ':dUname' => $data['dUname'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function insertBlood($data){
    $conn = db_conn();
    $selectQuery = "INSERT into blood_info (BloodGroup, Price, AddedDate, ExpireDate, DonorUsername, HospitalUsername, Available)
VALUES (:bloodGroup, :price, :addedDate, :expireDate, :dUname, :hUname, :available)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':bloodGroup' => $data['bloodGroup'],
            ':price' => $data['price'],
            ':addedDate' => $data['addedDate'],
            ':expireDate' => $data['expireDate'],
            ':dUname' => $data['dUname'],
            ':hUname' => $data['hUname'],
            ':available' => 1 ,
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function setBloodAvailable($ID){
    $conn = db_conn();
    $selectQuery = "UPDATE blood_info set Available = 0 where ID = '$ID' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateHimage($uname, $image){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Image = '$image' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePass($uname, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Password = '$password' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateHinfo($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Hname = ?, Phone = ?, Email = ?, Address = ? where Uname = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['hname'], $data['phone'], $data['email'], $data['address'], $uname
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
?>