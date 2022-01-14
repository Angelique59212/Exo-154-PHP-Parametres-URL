<?php
$name = $_GET['iteration'] ?? "10";
    for ($i =0; $i < (int)$name; $i++) {
        echo "Hello World". "<br>";
    }