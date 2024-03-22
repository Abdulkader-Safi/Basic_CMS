<?php

include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');
secure();

include('includes/header.php');

?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <h1 class="display-1">Posts</h1>
    <div class="col-md-6">
      <a href="users.php">Users Management</a> |
      <a href="posts.php">Posts Management</a>
    </div>
  </div>
</div>

<?php
include('includes/footer.php');
