<?php
    $emptyFlag = false;
    $temp = "";
    $fname = $lname = $emailId = $password ="";

    if(empty($_GET["firstname"])){
      $emptyFlag= true;
    }else{
      $temp= testInput($_GET["firstname"]);
     if(preg_match("/^[a-zA-Z]*$/",$temp)){
       $fname = $temp;
     }
    }
        if(empty($_GET["lastname"])){
          $emptyFlag= true;
        }else{
          $temp= testInput($_GET["lastname"]);
         if(preg_match("/^[a-zA-Z]*$/",$temp)){
           $lname = $temp;
         }
        }

            if(empty($_GET["emailid"])){
              $emptyFlag= true;
            }else{
              $temp= testInput($_GET["emailid"]);
             if(filter_var($temp,FILTER_VALIDATE_EMAIL)){
               $emailId = $temp;
             }
            }
                if(empty($_GET["password"])){
                  $emptyFlag= true;
                }else{
                 $password = testInput($_GET["password"]);
                 }

      if(!$emptyFlag){
        $dbCon = establishDbConnection();
        executePreparedQuery($dbCon, $fname, $lname, $emailId, $password);
        closeDbConnection($dbCon);
      }

      function executePreparedQuery($dbCon, $fname, $lname, $emailId, $password){
        $stmt = mysqli_stmt_init($dbCon);
        if(mysqli_stmt_prepare($stmt, "INSERT INTO user_info(f_name, l_name, email_id, password) values (?, ?, ?, ?)")){
          mysqli_stmt_bind_param($stmt, 'ssss', $fname, $lname, $emailId, $password);
          mysqli_stmt_execute($stmt);
          echo"Successful";
          mysqli_stmt_close($stmt);
        }
      }

      function establishDbConnection(){
        $user='root';
        $pass='';
        $dbName='testDB';
        $conn= mysqli_connect('localhost', $user, $pass, $dbName);
        echo "Successful";

        if(!$conn){
          die("Connection Failed".mysqli_connect_error());
        }
        return $conn;

      }

      function testInput($temp){
          return $temp;
      }


       function closeDbConnection($conn){
         mysqli_close($conn);
       }



 ?>
