<?php
  $null_or_not = null;
  # null合体演算子
  # 左辺がnullなら、右辺を返す
  $word = $null_or_not ?? "単語"; 
  echo $word;

  # nullsafe演算子
  # アクセスする時に元のオブジェクトがnullの場合、そのままnullを返す。
  # nullではないならそのままアクセスできる。
  # 従来のようなnullチェックの処理を前に挟む必要が減る。
  class person
  {
    public string $name = "初期の名前";
  }
  $person = new person;
  # ?-> nullsafe演算子
  echo $person?->name;
?>
