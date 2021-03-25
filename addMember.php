<?php
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "membership";

        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    if(isset($_POST['submit'])) {
        $error_msg = "";

        // get the first name
        if(!empty($_POST['first_name']))
        {
            $first = $_POST['first_name'];
            $char = preg_match("/[a-zA-Z]/", $first);
            $apo = preg_match("/[-']/", $first);
            $except = preg_match("/[\W]/", $first);
            $number = preg_match("/[\d]/", $first);
            if ($except) {
                if ($apo) {
                    $special = 1;
                }
                else {
                    $special = 0;
                }
            }
            else {
                $special = 1;
            }
            
            if ($char && $special && !$number) {
                echo "passed first name";
                //remove any unwanted characters
                $first = filter_var($first, FILTER_SANITIZE_STRING);
            }
            else
            {
                $error_msg .= "<p>The First Name only contains alphabetical characters, ', - and no spaces.</p>";
            }
        }
        else
        {
            $error_msg .= "<p>Please check First Name</p>";
        }
        // get the last name
        if(!empty($_POST['last_name']))
        {
            $last = $_POST['last_name'];
            $char = preg_match("/[a-zA-Z]/", $last);
            $apo = preg_match("/[-']/", $last);
            $except = preg_match("/[\W]/", $last);
            $number = preg_match("/[\d]/", $last);
            if ($except) {
                if ($apo) {
                    $special = 1;
                }
                else {
                    $special = 0;
                }
            }
            else {
                $special = 1;
            }
            if ($char && $special && !$number) { //(?=\S*['-])([a-zA-Z'-]+)
                echo "passed last name";
                //remove any unwanted characters
                $last = filter_var($last, FILTER_SANITIZE_STRING);
            }
            else
            {
                $error_msg .= "<p>The Last Name only contains alphabetical characters, ', - and no spaces.</p>";
            }
        }
        else
        {
            $error_msg .= "<p>Please check Last Name</p>";
        }
        // get the Email
        if(!empty($_POST['email']))
        {
            $email = $_POST['email'];
            //remove any unwanted characters
            $email = filter_var($email, FILTER_SANITIZE_STRING);
        }
        else
        {
            $error_msg .= "<p>Please check Email</p>";
        }
        // password
        if(!empty($_POST['password']) && !empty($_POST['password2']))
        {
            if ($_POST['password'] === $_POST['password2'])
            {
                $password = $_POST['password'];
                $uppercase = preg_match('#[A-Z]#', $password);
                $lowercase = preg_match('#[a-z]#', $password);
                $number    = preg_match('#[0-9]#', $password);
                $special   = preg_match('#[\W]#', $password); 
                $length    = strlen($password) >= 6;
                // echo $password . "<br>";
                // echo $uppercase . "<br>";
                // echo $lowercase . "<br>";
                // echo $number . "<br>";
                // echo $special . "<br>";
                // echo "length: " . $length;
                if ($uppercase && $lowercase && $number && $length) // && preg_match("[._-?!@#$%^&*~]", $password)) //^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$
                {
                    echo "passed password";
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                }
                else
                {
                    $error_msg .= "<p>The Password must contain at least 6 characters, at least one number and both lower and uppercase letters and special characters.</p>";
                }
                // $user_pw = $_POST['password'];
                // $user_pw = filter_var($user_pw, FILTER_SANITIZE_STRING);
            }
            else{
                $error_msg .= "<p>Verify password must be same.</p>";
            }
        }
        else
        {
            $error_msg .= "<p>Please check Password</p>";
        }

        if(!empty($error_msg))
        {
            echo "<p>Error: </p>" . $error_msg;
            echo "<p>Please go <a href='javascript:history.go(-1)'>back</a> and try again</p>";
        }
        else
        {
            $sql = "INSERT INTO members
                    (firstName, lastName, email, password)
                    VALUES
                    ('$first', '$last', '$email', '$password')";

            // $result = $conn->query($sql);
            
            if ($conn->query($sql)) {
                echo "<p>Success!!</p><br>
                <p>this page will be refreshed in 5 secconds</p>";
                header("refresh:5; url=activity6.php");
            }
        }
    }
    $conn = null;
?>