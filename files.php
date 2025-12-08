<?php
  $file = fopen("example.txt", "r");
  if ($file) {
    // 一行分の文字列を取得
    while (($line = fgets($file)) !== false) {
      echo $line; 
    }
    // ファイルを閉じる
    // ※開いたファイルがメモリを消費してしまうため
    fclose($file);
  } else {
    echo 'Error opening file';
  }
?>
