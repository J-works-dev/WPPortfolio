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

    $sql = "SELECT firstName, lastName, email
            FROM members";

    $result = $conn->query($sql);
                            
    if ($result->rowcount() > 0) {
        echo '<table class="table">
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            </tr>';
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $firstName = $row["firstName"];
            $lastName = $row["lastName"];
            $email = $row["email"];
            echo "<tr>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$email</td>
                </tr>";
            // header("refresh:10; url=activity4.php");
        }
        echo "</table>";
    }
    else{
        echo "0 results";
    }

?>