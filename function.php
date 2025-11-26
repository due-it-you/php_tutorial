<?php
  // 関数の定義
  function message(){
    echo "メッセージの表示をします。";
  }
  // 関数の呼び出し
  message();

  // 関数の引数
  function letter($inviter, $invitee){
    echo "{$inviter}が{$invitee}を招待しています。";
  }

  letter("たかし", "まひろ");

  // 関数の戻り値
  function average($x, $y){
    return ($x + $y) / 2;
  }

  $number = average(2, 4);
  echo "2と4の平均値は{$number}です。";

  // 変数のスコープ

  // グローバル変数
  $japanese = 100;

  function exam($english) {
    // global: 関数内からグローバル変数を扱えるようになる
    global $japanese;

    // ローカル変数
    $score = $japanese + $english;
    return $score;
  }

  echo exam(150);
?>