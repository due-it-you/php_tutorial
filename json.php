<?php
  // 配列の作成
  $data = array('クラス' => 2, '名前' => '山田太郎', '概要' => '課長');
  // 配列をJSON文字列に変換
  $json = json_encode($data, JSON_UNESCAPED_UNICODE);
  echo $json;

  // JSON文字列を配列に戻す
  $decoded = json_decode($json);
  print_r($decoded);
?>
