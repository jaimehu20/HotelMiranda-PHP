<?php
require_once('./setup.php');
dbConnection();
echo $blade->run("form", ["variable1" => "value1"]);

?>