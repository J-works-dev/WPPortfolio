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
                        <div class="side-nav active">Membership List</div>
                        </a></li>
                    </ul>
                </div>
                <div class="main-section">
                    <h3>Add Member</h3>
                    <form action="addMember.php" method="post">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" name = "submit" class="btn btn-default">Add</button>
                    </form>
                </div>
            </section>
            <br>
            <br>
        </main>
    </body>
</html>