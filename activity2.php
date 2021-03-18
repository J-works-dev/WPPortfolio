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
            <li class="nav-index active"><a href="activity2.php">Activity 2</a></li>
            <li class="nav-index"><a href="activity3.php">Activity 3</a></li>
            <li class="nav-index"><a href="activity4.php">Activity 4</a></li>
            <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
            <li class="nav-index"><a href="activity6.php">Activity 6</a></li>
        </ul>
        <main>
            <h3>Portfolio Activity 2</h3>
            <h4>Assessment Specification </h4>
                <li>Write a web script (PHP) that declares variables and assigns your personal info</li><br>
                <li>One variable for your name, one for your student ID, one for your contact, and one for your hobby.<br>
                    &emsp; o Print each variable value in a well formatted manner.</li>

            <section>
                <?php include 'myInfo.php'; ?>
            </section>
        </main>
    </body>
</html>