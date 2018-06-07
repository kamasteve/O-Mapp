
<?php
//$pfno=$_POST["pfno"];
$pfno = trim($_POST['email']);


// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('invoice', 'invoice', '10.22.26.65/erp');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn,"SELECT * FROM staff where PFNO='$pfno'");
oci_execute($stid);
/**$rows = array();
echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
**/
$rows = array();
while($r = oci_fetch_assoc($stid)) {
$rows[] = $r;
 }
$locations =(json_encode($rows));
print $locations;
?>


