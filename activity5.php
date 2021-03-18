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
            <li class="nav-index"><a href="activity4.php">Activity 4</a></li>
            <li class="nav-index active"><a href="activity5.php">Activity 5</a></li>
            <li class="nav-index"><a href="activity6.php">Activity 6</a></li>
        </ul>
        <main>
            <h3>Portfolio Activity 5</h3>
            <h4>Assessment Specification </h4>
                <li>Write a PHP program that generates 100 integer random numbers between 1 and 10, and represents<br>
                &emsp; the occurrence of each number (e.g. five 1s, four 2s, six 3s, etc….) with a bar chart.<br>
                &emsp; &emsp; o Create the chart image using PHP GD. (or similar)<br>
                &emsp; &emsp; o Create a test documentation with multiple examples.<br>
                &emsp; &emsp; o Provide a table of the results to see if the program works correctly against the requirements.<br>
                &emsp; &emsp; o A new chart must be generated each time the page is refreshed.<br>
                &emsp; &emsp; o Test your program in various browsers and provide a test documentation</li><br>

            <section>
                <?php include 'randomIntegerReport.php' ?>
            </section>
            <br>
            <br>
        </main>
    </body>
</html>