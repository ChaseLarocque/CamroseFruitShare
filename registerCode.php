
<?php
/*
registerCode.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 9, 2019


file contains code to register the user to the database and therefore the website.
contains checks to assure user doesn't create a new account if they already have one.
*/


//trim to remove white space on either side
//empty to check if empty 

//initialize variables

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    //If username is left empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                //if there exists a row in the table already
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    //if not, set $username to username
                    $username = trim($_POST["username"]);
                }//else
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }//else
        }//if
        // Close statement
        unset($stmt);
    }//else
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        //if password is left blank
        $password_err = "Please enter a password.";
        //password must be 8 characters at least     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have at least 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }//else

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }//else
    }//if
    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            //password_hash to hash/salt
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ettiquette.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }//else
        }//if
        // Close statement
        unset($stmt);
    }//if
    // Close connection
    unset($pdo);
}//if
?>
