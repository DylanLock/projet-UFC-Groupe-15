<?php

$sql = mysql_connect("localhost","root","root");
if(!$sql)
{
echo "Connection Not Created";
}
$con = mysql_select_db("graphs");
if(!$sql)
{
echo "Database Not Connected";
}
$data[] = array('','Markes');
$sql = "select * from courses";
$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
$data[] = array($result['subject'],(int)$result['number']);

}
echo json_encode($data);

?>