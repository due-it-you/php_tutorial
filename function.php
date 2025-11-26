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
?>