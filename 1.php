<?php

$abc="Hiii My Name is Abhinav";

$xyz=142512;

$qyw=12.12;

$flag=true;

echo"$abc,<br/> $xyz,<br/>$qyw,<br/> $flag ------------------------------------<br/> ";
 

$data=print $abc; echo"--------------------<br/>";
print $data;echo"-------------------------<br/>";

$Information=array(12,232.343,"Hi This is Samkit",True);
print_r($Information);echo"------------------------------------<br/>";

for($i=0;$i<count($Information);$i++)
{
	print $Information[$i];echo "-------------------------------<br/>";
}

$MyPersonalInfo=array("Name" => "Abhinav", "Age" => 26.4, "College" => "BIT", "Degree" => "B.Tech", "Roll Number"=> 12312313);

print_r($MyPersonalInfo);echo"--------------------------------<br/>";

foreach($Information as $data)
{
	print $data;echo"<br/>";
}






?>