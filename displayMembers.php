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
            <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
            <li class="nav-index active"><a href="activity6.php">Activity 6</a></li>
        </ul>
        <main>
            <h3>Portfolio Activity 6</h3>
            <h4>Assessment Specification </h4>
                <li>You are required to develop a simple PHP website for membership management.</li><br>
            
            <section>
                <div class="sidebar">
                    <ul class="sidebar-nav">
                        <li><a href="activity6.php">
                            <div class="side-nav">Add Membership</div>
                        </a></li>
                        <li><a href="displayMembers.php">
                        <div class="side-nav active2">Membership List</div>
                        </a></li>
                    </ul>
                </div>
                <div class="main-section">
                    <article id="home"class="col-lg-12">
                        <h3>Member List</h3>
                        <?php include 'listMember_scr.php'; ?>
                    </article>
                </div>
            </section>
            <br>
            <br>
        </main>
    </body>
</html>