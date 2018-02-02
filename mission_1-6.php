<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-6.php"

method ="post">



　名前 :<input type="text" name="name"/>

 年齢:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


こんにちは<?php

$filename='mission1-6.txt';

//echo $filename;

$fp=fopen($filename,'a');

fwrite($fp,$_POST["name"]);

fclose($fp);


 echo htmlspecialchars($_POST['name']); ?>さん。
あなたは、<?php echo(int)$_POST['age']; ?> 歳です。

<body>

</html>