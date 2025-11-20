<?php 
  $sample = 10;
// 条件分岐
  if ($sample > 5) {
    echo "sampleは5より大きいです";
  } else {
    echo "sampleは5以下です";
  }

// 複数の条件分岐
  if ($sample == 10) {
    echo "sampleは10です";
  } elseif ($sample >= 5) {
    echo "sampleは5以上です。";
  } elseif ($sample <= 5) {
    echo "sampleは5以下です。";
  }

// 真偽値の判定
  $boolean = TRUE;
  if ($boolean) {
    echo "booleanはTRUEです。";
  } else {
    echo "booleanはFALSEです。";
  }

// switch文
  $color = "red";

  switch ($color) {
    case "red":
      echo "色は赤です。";
      break;
    case "blue":
      echo "色は青です。";
      break;
    case "green":
      echo "色は緑です。";
      break;
    default:
      echo "色は不明です。";
      break;
  }
?>