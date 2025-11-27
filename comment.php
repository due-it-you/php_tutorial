<?php
// 一行のコメント

# 一行のコメント

/*
複数行のコメント
*/

/**
 * ドキュメンテーションコメント
 * メソッドやクラスが何をするのか、
 * どんな引数や返り値を持つのかなどを明記するためのコメント
 * 
 */

/**
 * ex)
 * 
 * ユーザーの年齢から利用料金を計算するメソッド
 *
 * @param age [Integer] ユーザーの年齢（0以上150以下）
 * @param student [Boolean] 学生かどうかのフラグ
 * @return [Integer] 計算された料金（円）
 * @raise [ArgumentError] 年齢が範囲外の場合
 *
 * @example 基本的な使用例
 *   calculate_fee(20, true)  #=> 500
 *   calculate_fee(30, false) #=> 1000
 */
// ここに上記のメソッド
?>