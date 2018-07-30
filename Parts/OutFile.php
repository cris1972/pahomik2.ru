<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
  // Папка с изображениями $dir = 'bombs/';
  $cols = 5; // Количество столбцов в будущей таблице с картинками
  $files = scandir($dir); // Берём всё содержимое директории

echo "<div class='contener'>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
 
      $path = $dir.$files[$i]; // Получаем путь к картинке
       if(getimagesize($path)){
      echo "<a href='$path'>"; // Делаем ссылку на картинку
      echo "<div class='col-4'><img src='$path'  alt='img $i$k ' title='img $i$k'  /></div >"; // Вывод превью 
      echo "</a>"; // Закрываем ссылку
    }
  }}
  echo "</div >"; // Закрываем таблицу
?>