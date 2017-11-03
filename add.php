<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modifier...</title>
  </head>
  <body>
    <?php
      if (isset($_POST['title'], $_POST['description'])) {
        $sql = 
          'INSERT INTO todos (title, description)' .
          'VALUES (:title, :description)';

        require __DIR__.'/create-pdo.php';

        if (
          $pdo_statement &&
          $pdo_statement->bindParam(':title', $_POST['title']) &&
          $pdo_statement->bindParam(':description', $_POST['description']) &&
          $pdo_statement->execute()
        ) {
          header('Location:index.php');
          exit;
        }
      }
    ?>
    <form action="" method="post">
      <div>
        <label>
          titre :
          <input type="text" name="title" value="">
        </label>
      </div>
      <div>
        <label>
          description :
          <textarea name="description"></textarea>
        </label>
      </div>
      <div>
        <input type="submit" value="envoyer">
      </div>
    </form>
    <ul>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
