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

  // 引数のデフォルト値
  function greet($name = "Danny") 
  {
    echo "{$name}が挨拶しています。";
  }

  greet();
  greet("Ceroly");


  function change($price, $payment)
  {
    $change = $price - $payment;
    echo "支払いは{$change}です。";
  }

  // 名前付き引数
  change(price: 1000, payment: 200);

  // 無名関数 / クロージャ
  $greet = function($name)
  {
    echo "{$name}さんからの挨拶です。";
  };

  $greet('タケシ');

  // 再帰関数
  function countDown($count)
  {
    echo $count;
    if ($count > 0)
    {
      // 自分自身を呼び出している
      countDown($count - 1);
    }
  }

  countDown(5);
?>
