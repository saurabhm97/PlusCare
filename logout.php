<?php
session_start();
if($_GET['var']==2)
{session_unset();
session_destroy();
header("location:/login/staff_login.php?var=2");
}
else
{session_unset();
session_destroy();
header("location:/login/staff_login.php?var=1");
}
?>
