<html>

<html lang="ja">

<head>


</head>

<body>

<form action="mission_1-4.php"

method ="post">



�@���O :<input type="text" name="name"/>

 �N��:<input type ="text" name="age"/>

 <input type ="submit"/>
 
</form>


����ɂ���<?php
 echo htmlspecialchars($_POST['name']); ?>����B
���Ȃ��́A<?php echo(int)$_POST['age']; ?> �΂ł��B

<body>

</html>