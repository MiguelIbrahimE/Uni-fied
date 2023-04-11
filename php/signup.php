<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else {
		$Creation=date('Y-m-d H:i:s');
		$mod=date('Y-m-d H:i:s');
		
    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(PASSWORD,CREATION_DATE,MODIFICATION_DATE,USERNAME) 
    	        VALUES(?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$pass,$Creation,$mod,$uname]);

    	header("Location: ../index.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../index.php?error=error");
	exit;
}
