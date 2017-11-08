<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lire les todos</title>
  </head>
  <body>
   <?php 
    
    ?>
    <h1><?php echo $todo['title']; ?></h1>
    <p><?php echo $todo['description']; ?></p>
    <?php
    ?>
    <ul>
      <?php
       
      ?>
      <li><a href="add.php?id=<?php echo $todo['id']; ?>">modifier...</a></li>
      <li><a href="delete.php?id=<?php echo $todo['id']; ?>">supprimer</a></li>
      <?php
       // }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>