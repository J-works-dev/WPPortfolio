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
            <li class="nav-index active"><a href="activity3.php">Activity 3</a></li>
            <li class="nav-index"><a href="activity4.php">Activity 4</a></li>
            <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
            <li class="nav-index"><a href="activity6.php">Activity 6</a></li>
        </ul>
        <main>
            <?php
                if(!empty($_POST['number']))
                    {
                        $num = $_POST['number'];
                        $num0 = substr($num, 0, 1);
                        $num1 = substr($num, 1, 1);
                        $num2 = substr($num, 2, 1);
                        $num3 = substr($num, 3, 1);
                        $num4 = substr($num, 4, 1);
                        $sum = $num0 + $num1 + $num2 + $num3 + $num4;
                        $num = preg_replace('/[^0-9]/', '', $num);
                        echo "<br><h4> You entered $num and it has these numbers: $num0, $num1, $num2, $num3, $num4<br>" .
                                    "and Sum of the numbers is $sum.<br><br>" .
                                    "7 seconds later the page will be refreshed.<br></h4>";
                        header("refresh:7; url=activity3.php");
                    }
            ?>
        </main>
    </body>
</html>