<nav>
    <ul>
        <?php
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="home.php">Home</a></li>';
        }
        if ($path_parts['filename'] == "about") {
            print '<li class="activePage">What it means to be a Fiend</li>';
        } else {
            print '<li><a href="form.php">What it means to be a Fiend</a></li>';
        }
        if ($path_parts['filename'] == "register") {
            print '<li class="activePage">Become a member!</li>';
        } else {
            print '<li><a href="register.php">Become a member!</a></li>';
        }
        if ($path_parts['filename'] == "search") {
            print '<li class="activePage">Search</li>';
        } else {
            print '<li><a href="search.php">Search</a></li>';
        }
        if ($path_parts['filename'] == "Profile") {
            print '<li class="activePage">Profile</li>';
        } else {
            print '<li><a href="profile.php">Profile</a></li>';
        }
        if ($path_parts['filename'] == "fun") {
            print '<li class="activePage">Fun</li>';
        } else {
            print '<li><a href="fun.php">Fun/a></li>';
        }
        ?>
    </ul>
</nav>

