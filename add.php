<?php

require __DIR__.'/Model/model.php';

$todo = addOne($_POST['title'], $_POST['description']);

require __DIR__.'/View/addview.php';