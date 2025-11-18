<?php 
$purpose = "運動";

// <<<がヒアドキュメントの開始の合図
// 囲む文字列は何でも良いが、EOMなどが一般的
$message = <<< EOM
  私の今日のやることは{$purpose}です。
EOM;
echo $message;
?>