<?php

require __DIR__.'/Model/model.php';

$todos = fetchData();

require __DIR__.'/View/view.php';