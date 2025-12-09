<?php
  // ファイルの読み取り
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

  // ファイルの書き込み
  // a : 追記モード
  $written_file = fopen('example.txt', "a");
  fwrite($written_file, "New Data\n");
  fclose($written_file);
  echo file_get_contents("example.txt");
?>
