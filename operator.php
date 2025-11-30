<?php
  $null_or_not = null;
  # null合体演算子
  # 左辺がnullなら、右辺を返す
  $word = $null_or_not ?? "単語"; 
  echo $word;
?>
