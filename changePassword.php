<?php
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 8){
        $new_password_err = "Password must have atleast 8 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }//else
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }//if
    }//else
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            $param_id = $_SESSION["id"];
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);


            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                header("location: userPage.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }//else
        }//if
        
        // Close statement
        unset($stmt);
    }//if
    
    // Close connection
    unset($pdo);
}//if
?>