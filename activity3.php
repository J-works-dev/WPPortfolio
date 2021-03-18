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
            <h3>Portfolio Activity 3</h3>
            <h4>Assessment Specification </h4>
                <li>Design an application that uses a form that accepts a five-digit integer and processes this data;<br>
                    &emsp; o separate the number into its individual digits<br>
                    &emsp; o add the five digits </li><br>
                <li>Produce a simple prototype of the user interface, e.g. page layout with user input interface. </li><br>
                <li>Write the PHP/HTML code for the application so it will accept the 5 digit number then, print the digits<br>
                    &emsp; separated by spaces, follow by the sum of the 5 digits</li><br>
                
            <section>
                <h3>Enter 5 digits number</h3>
                <form action="numberSeparator.php" method="post">
                    <input type="text" name="number" value=>
                    <button type="submit" name="submit">Enter</button>
                </form>
            </section>
        </main>
    </body>
</html>