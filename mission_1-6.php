<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-6.php"

method ="post">



�@���O :<input type="text" name="name"/>

 �N��:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


����ɂ���<?php

$filename='mission1-6.txt';

//echo $filename;

$fp=fopen($filename,'a');

fwrite($fp,$_POST["name"]);

fclose($fp);


 echo htmlspecialchars($_POST['name']); ?>����B
���Ȃ��́A<?php echo(int)$_POST['age']; ?> �΂ł��B

<body>

</html>