<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-7.php"

method ="post">



�@���O :<input type="text" name="name"/>

 �N��:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


����ɂ���<?php

$filename='mission1-7.txt';

//echo $filename;

$fp=fopen($filename,'a');

fwrite($fp,$_POST['name']);

fclose($fp);


$ret_array=file($filename);

for($i=0;$i<count($ret_array);++$i) {

echo($ret_array[$i]."<br/>\n");

}

?>

</body>

</html>