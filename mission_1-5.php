<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-5.php"

method ="post">



�@���O :<input type="text" name="name"/>

 �N��:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


����ɂ���<?php

$filename='mission1-5.txt';

//echo $filename;

$fp=fopen($filename,'w');

fwrite($fp,'test');

fclose($fp);


 echo htmlspecialchars($_POST['name']); ?>����B
���Ȃ��́A<?php echo(int)$_POST['age']; ?> �΂ł��B

<body>

</html>