<?php
include "../includes/config.php";

$ResponseArray 	= 	array();
$ErrorResponse  =    "";
$Action			=	stripslashes(trim($_REQUEST["action"]));
$HtmlContent    =    "";

if(isset($Action) && $Action == "login"){
    try {

        $email		= addslashes((trim($_REQUEST['email'])));
        $password	= addslashes((trim($_REQUEST['password'])));

        $CheckUserQuery = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
        $CheckUserQueryResults = mysqli_query($conn,$CheckUserQuery);

        if (mysqli_num_rows($CheckUserQueryResults) > 0) 
        {
            while($record = mysqli_fetch_assoc($CheckUserQueryResults)) 
            {
                
                $_SESSION["logged_in"] = true;
                $_SESSION["uid"]       = $record["id"];
                $_SESSION["username"]  = $record["username"];
                $_SESSION["useremail"] = $record["email"];
      
                
            }

            $ResponseArray["status"]  = "200";
            $ResponseArray["message"] = "Login Successfull.";
        } else {
            $ResponseArray["status"]  = "300";
            $ResponseArray["message"] = "Incorrect username or password.";
        }

    } catch (Exception $ex) {
        $ResponseArray["status"]  = "500";
        $ResponseArray["message"] = $ex->getMessage();
        // echo $ex->getMessage();
    }
}else if(isset($Action) && $Action == "register"){

    try {

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}



        $username	= addslashes((trim($_REQUEST['regname'])));
        $email	    = addslashes((trim($_REQUEST['regemail'])));
        $mobile	    = addslashes((trim($_REQUEST['regmobile'])));
        $password	= addslashes((trim($_REQUEST['regpassword'])));
        $image      = addslashes((trim($_REQUEST['image'])));
    
        $LoginArray = array();
        $LoginArray["username"]      = $username;
        $LoginArray["email"]         = $email;
        $LoginArray["phone"] = $mobile;
        $LoginArray["password"]      = $password;
        $LoginArray["image"] = file_get_contents($_FILES['image']['tmp_name']);
    
        $columns = implode(", ",array_keys($LoginArray));
        $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($LoginArray));
        $values  = implode("', '", $escaped_values);
        $AddNewUserQuery = "INSERT INTO signup ($columns) VALUES ('$values')";
        $ExecuteAddNewUserQuery = mysqli_query($conn,$AddNewUserQuery) or die ("Error in query: $AddNewUserQuery. ".mysqli_error($conn));
        
       


        $AddNewUserQuery = $conn->prepare($AddNewUserQuery);
    
        if ($AddNewUserQuery->execute()) {
            // Move the uploaded file to the specified directory
            $uploadedFilePath = $uploadDirectory . $imagename;
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);
    
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $AddNewUserQuery->error;
        }
    


        $ResponseArray["status"]  = "200";
        $ResponseArray["message"] = "Registration Successfull.";

    } catch (Exception $ex) {
        $ResponseArray["status"]  = "500";
        $ResponseArray["message"] = $ex->getMessage();
        // echo $ex->getMessage();
    }
   
}else{
    $ResponseArray["status"]  = "404";
    $ResponseArray["message"] = "Invalid Action.";
}

$Response	=	json_encode($ResponseArray, true);

echo $Response;
exit;

?>
