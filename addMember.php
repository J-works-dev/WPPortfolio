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
            //remove any unwanted characters
            $first = filter_var($first, FILTER_SANITIZE_STRING);
        }
        else
        {
            $error_msg .= "<p>Please check First Name</p>";
        }
        // get the last name
        if(!empty($_POST['last_name']))
        {
            $last = $_POST['last_name'];
            //remove any unwanted characters
            $last = filter_var($last, FILTER_SANITIZE_STRING);
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
        if(!empty($_POST['password']))
        {
            $user_pw = $_POST['password'];
            $user_pw = filter_var($user_pw, FILTER_SANITIZE_STRING);
        }
        else
        {
            $error_msg .= "<p>Please check Password</p>";
        }



        $rnd = rand(1, 10);
        $sql = "SELECT quote
                FROM quote_table
                WHERE id = $rnd;";
        $result = $conn->query($sql);
        
        if ($result->rowcount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $quote = $row['quote'];
                echo "<h3>Today's Quote is<br><br>
                \"$quote\"</h3><br><br>
                <p>this page will be refreshed in 10 secconds</p>";
                header("refresh:10; url=activity4.php");
            }
        }
    }
    $conn = null;
?>