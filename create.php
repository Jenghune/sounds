<?php
  require_once('lib/print.php')
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        print_list();
       ?>
    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title"placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    <?php
      require_once('view/bottom.php');
     ?>
