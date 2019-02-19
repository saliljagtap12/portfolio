<?php
	$emptyFlag = false;
	$emailId = $password = "";

		if (empty($_GET["emailid"])){
			$emptyFlag = true;

		}else{
			$emailId = testInput($_GET["emailid"]);
		}

		if (empty($_GET["password"])){
			$emptyFlag = true;
		}else{
			$password = testInput($_GET["password"]);
		}
		if (!$emptyFlag){

			$dbCon = establishDbConnection();

			if(executePreparedQuery($dbCon, $emailId, $password)){
        header('Location: welcome.html');

			}else{

        header('Location: signin.html');

			}

			closeDbConnection($dbCon);

		}else{

			$emptyFlag = false;
		}

	function executePreparedQuery($dbCon,  $emailId, $password){

			$stmt = mysqli_stmt_init($dbCon);

			if (mysqli_stmt_prepare($stmt, "SELECT password FROM user_info where email_id=?")) {


			    mysqli_stmt_bind_param($stmt, 's',$emailId);


			    mysqli_stmt_execute($stmt);


			    mysqli_stmt_bind_result($stmt, $storedPwd);


			    mysqli_stmt_fetch($stmt);


			    mysqli_stmt_close($stmt);

			    if($password == $storedPwd){
				    return true;
			    }else{
			    	return false;
			    }

			}
	}

  function establishDbConnection(){
    $user='root';
    $pass='';
    $dbName='testDB';
    $conn= mysqli_connect('localhost', $user, $pass, $dbName);

    if(!$conn){
      die("Connection Failed".mysqli_connect_error());
    }
    return $conn;

  }

	function closeDbConnection($conn){

		mysqli_close($conn);
	}


	function testInput($data) {

		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 return $data;
	}

?>
