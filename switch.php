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
?>