<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-4.php"

method ="post">



　名前 :<input type="text" name="name"/>

 年齢:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


こんにちは<?php
 echo htmlspecialchars($_POST['name']); ?>さん。
あなたは、<?php echo(int)$_POST['age']; ?> 歳です。

<body>

</html>