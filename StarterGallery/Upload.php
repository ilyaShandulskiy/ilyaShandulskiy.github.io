<?php
if($_POST['Upload']) $Data = $_POST['Upload']; //Принимаем пост
$pieces = explode("}{", $Data); //Пиццы :)
$Cname = $pieces[0]; //Имя 2
$Cdata = $pieces[1]; //Дата 2
echo $pieces[0]; //Имя
echo $pieces[1]; //Дата
$f = fopen("$Cname.txt", "w"); //Открываем
fwrite ($f , $Cdata); //Пишем
fclose ($f); //Закрываем
?>