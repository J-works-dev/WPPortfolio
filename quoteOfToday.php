<!DOCTYPE html>
<html>
    <head>
        <title>Web Programing Portfolio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>Web Programming Portfolio</h2>
        <h3>Sang Joon Lee - 30024165</h3>
        <ul class="nav">
            <li class="nav-index"><a href="index.html">Home</a></li>
            <li class="nav-index"><a href="activity1.html">Activity 1</a></li>
            <li class="nav-index"><a href="activity2.php">Activity 2</a></li>
            <li class="nav-index"><a href="activity3.php">Activity 3</a></li>
            <li class="nav-index active"><a href="activity4.php">Activity 4</a></li>
            <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
            <li class="nav-index"><a href="activity6.php">Activity 6</a></li>
        </ul>
        <main>
        <h3>Portfolio Activity 4</h3>
            <h4>Assessment Specification </h4>
                <li>Create a table with 10 quotes in a MySQL database – name the database “quote_db” and name the table “quote_table”.</li><br>
                <li>Save or Export the SQL that creates your database and table in a text file, e.g. db.sql</li><br>
                <li>Test your program and validate the database structure and its elements against the requirements and provide a test document.<br>
                    &emsp; o Your program will randomly read a record (a quote) from the database table for the day and display on the web browser. </li><br>
                
            <section>
                <?php
                    try {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "quote_db";
    
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
            </section>
        </main>
    </body>
</html>