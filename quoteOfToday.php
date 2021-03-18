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
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quote_db";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    if(!isset($_POST['submit'])) {
                        
                        
                        $sql = "CREATE DATABASE quote_db;

                                USE quote_db;
                                
                                CREATE TABLE IF NOT EXISTS quote_table (
                                    id int NOT NULL AUTO_INCREMENT,
                                    quote char(200) NOT NULL,
                                    PRIMARY KEY (id)
                                );

                                INSERT INTO `quote_table` (`id`, `quote`) 
                                VALUES 
                                (NULL,'Be yourself. everyone else is already taken. -Oscar Wilde'),
                                (NULL,'So many books, so little time. -Frank Zappa'),
                                (NULL,'A room without books is like a body without a soul. -Marcus Tullius Cicero'),
                                (NULL,'You only live once, but if you do it right, once is enough. -Mae West'),
                                (NULL,'Be the change that you wish to see in the world. -Mahatma Gandhi'),
                                (NULL,'In three words I can sum up everything I\'ve learned about life. it goes on. -Robert Frost'),
                                (NULL,'If you tell the truth, you don\'t have to remember anything. -Mark Twain'),
                                (NULL,'A friend is someone who knows all about you and still loves you. -Elbert Hubbard'),
                                (NULL,'Always forgive your enemies; nothing annoys them so much. -Oscar Wilde'),
                                (NULL,'Without music, life would be a mistake. -Friedrich Nietzsche, Twilight of the Idols');";
                        
                        
                    } else {
                        $rnd = rand(1, 10);
                        $sql = "SELECT quote
                                FROM quote_table
                                WHERE id = $rnd;";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $quote = $row['quote'];
                            echo "<h3>Today's Quote is<br><br>
                            \"$quote\"</h3><br><br>
                            <p>this page will be refreshed in 10 secconds</p>";
                        }
                        header("refresh:10; url=QuoteOfToday.php");
                    }
                    $conn->close();
                ?>
            </section>
        </main>
    </body>
</html>