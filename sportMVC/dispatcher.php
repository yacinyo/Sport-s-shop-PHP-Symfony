<?php
switch ($_GET['articles']) {
    case 'list':
       
        require_once 'controllers/articleList.php';

        break;
    case '20250':
        require_once ('controllers/runningTshirt.php');
        break;
        }

        ?>