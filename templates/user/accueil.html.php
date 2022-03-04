<?php
require_once(PATH_VIEWS.'include'.DIRECTORY_SEPARATOR.'header.html.php');
require_once(PATH_VIEWS.'include'.DIRECTORY_SEPARATOR.'menu.html.php');

if(isset($content_for_views)){
    echo $content_for_views;
}

require_once(PATH_VIEWS.'include'.DIRECTORY_SEPARATOR.'footer.html.php');



?>
