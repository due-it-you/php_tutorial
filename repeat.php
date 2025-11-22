<?php 
// while文
  $count = 1;
  while ($count <= 5) {
    echo "現在の数字は{$count}";
    $count++;
  }

// do white制御文
// 条件を満たしているかに関わらず最低一回は実行される
  do {
    echo "今は{$count}";
    $count++;
  } while ($count <= 10);

// for制御文
  for ($i = 1; $i <= 10; $i++){
    echo "数字は{$i} <br />\n";
  }
?>
