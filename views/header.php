<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>BodyBuild: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>BodyBuild</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="Pushup" src="/img/pushup.png"/></a>
                    <h1>BODY BUILD</h1>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>

                <div class="menu-wrap">
                    <nav class="menu">
                        <ul class="clearfix">
                            <li>
                                <a href="build.php">Build<span class="arrow"> &#9660;</span></a>
                                <ul class="sub-menu">
                                    <li><a href = "build.php">Create a Workout</a></li>
                                    <li><a href = "search.php">Search</a></li>
                                    <li><a href = "add.php">Add to a workout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="share.php">Share<span class="arrow"> &#9660;</span></a>
                                <ul class="sub-menu">
                                    <li><a href = "share.php"> Share your Exercises</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="workoutview.php">View<span class="arrow"> &#9660;</span></a>
                                <ul class="sub-menu">
                                    <li><a href = "workoutview.php">See all your workouts</a></li>
                                    <li><a href ="workoutsearch.php">See one workout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php">Account<span class="arrow"> &#9660;</span></a>
                                <ul class="sub-menu">
                                    <li><a href = "password.php">Change your password</a></li>
                                    <li><a href = "logout.php">Log out</a></li>
                                </ul>
                            </li>
                    </nav>
                </div>
                <?php endif ?>
            </div>

            <div id="middle">
