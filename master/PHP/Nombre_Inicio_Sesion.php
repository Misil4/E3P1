<?php

if( isset($_SESSION['Usuario']) )
{
    echo $_SESSION['Usuario'];
}
else
{
    echo $lang['login'];
}

?>