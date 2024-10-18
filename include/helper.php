
<?php
declare(strict_types = 1);
// echo " HELPER ";

function ERROR_MSG(string $msg)
{
    $html = "<div class='alert alert-danger' role='alert'>
    {$msg}
 </div>";

    echo $html;
}

function SUCCESS_MSG(string $msg){
    $html = "<div class='alert alert-success' role='alert'>
    {$msg}
 </div>";

    echo $html;
}

?>