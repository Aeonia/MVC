<?php

require __DIR__.'/Model/model.php';

$todo = getOne(isset($_GET['id']));

require __DIR__.'/View/readview.php';