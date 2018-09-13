<?php
session_start();
if($_SESSION['students'] !=""){
    session_destroy();
    header('Location:index');
}

elseif($_SESSION['admin']){
    session_destroy();
    header('Location:index');
}
elseif($_SESSION['sec_elections']){
    session_destroy();
    header('Location:index');
}

?>