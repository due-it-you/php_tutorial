<?php
  // 0から順に配列に代入
  $fruit[] = "リンゴ";
  $fruit[] = "ミカン";
  $fruit[] = "ブドウ";
  echo $fruit[0];
  echo $fruit[1];
  echo $fruit[2];

  // 番号を指定して配列に代入
  $fruit[2] = "リンゴ";
  $fruit[1] = "ミカン";
  $fruit[0] = "ブドウ";
  echo $fruit[0];
  echo $fruit[1];
  echo $fruit[2];

  // array関数
  $test = array('数学', '国語');
  echo $test[0];
  echo $test[1];

  // count関数
  $count = count($test);
  echo $count;

  // foreach制御文での配列の各要素の繰り返し処理
  foreach ($test as $name) {
    echo $name;
  }
?>