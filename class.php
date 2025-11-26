<?php 
  // クラスの定義
  class Math {
    // プロパティの定義
    public $number1;
    public $number2;

    // メソッドの定義
    function add() {
      // クラス内でプロパティやメソッドにアクセスする時は $this->xx とする
      return $this->number1 + $this->number2;
    }

    function minus() {
      return $this->number1 - $this->number2;
    }
  }

  // クラスのオブジェクトを作成
  $math = new Math;

  // プロパティに値を代入
  // アロー演算子(->)でプロパティやメソッドにアクセス
  $math->number1 = 7;
  $math->number2 = 5;

  // メソッドを実行して結果を取得
  $result1 = $math->add();
  $result2 = $math->minus();

  echo "足し算の結果は{$result1}で、引き算の結果は{$result2}です。"
?>