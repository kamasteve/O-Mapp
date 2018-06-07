<?php
 //$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.1.34)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))" ;
   $db_connection="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 10.22.26.65)(PORT = 1522)))(CONNECT_DATA=(SID=orcl)))" ;
    if($c = OCILogon("system", "invoice", $db))
    {
        echo “Successfully connected to Oracle.\n”;
        OCILogoff($c);
    }
    else
    {
        $err = OCIError();
        echo "Connection failed." . $err[text];
    }
?>