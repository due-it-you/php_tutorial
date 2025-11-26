<?php
class Message {
  // クラスプロパティもしくはメソッドを static として宣言することで、 
  // クラスのインスタンス化の必要なしにアクセスすることができます。
  static function hello() {
    return "こんにちは";
  }

  static function bye() {
    return "さようなら";
  }
}

// ::(スコープ演算子)でアクセス
$hello_message = Message::hello();
$bye_message = Message::bye();

echo $hello_message;
echo $bye_message;
?>