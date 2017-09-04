<nav class="collapse navbar-collapse navbar-right" role="Navigation">
    <ul id="nav" class="nav navbar-nav" data-toggle="collapse" data-target="#navbar-menu">
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'view.php' ? 'current':'dead' ?>"><a href="/admin/view.php" data-toggle="collapse" data-target=".navbar-collapse.in">All Guests</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'new.php' ? 'current':'dead' ?>"><a href="/admin/new.php" data-toggle="collapse" data-target=".navbar-collapse.in">New Guest</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'access.php' ? 'current':'dead' ?>"><a href="/admin/access.php" data-toggle="collapse" data-target=".navbar-collapse.in">Activity</a></li>
        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current':'dead' ?>"><a href="/admin/tasks/index.php" data-toggle="collapse" data-target=".navbar-collapse.in">Tasks</a></li>
        <li><a href="/logout.php?logout" data-toggle="collapse" data-target=".navbar-collapse.in">Logout</a></li>
    </ul>
</nav>