@extends('appmaster')

@section('title', 'すき登録')

@section('content')
<div class="container theme-showcase" role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">


    <div class="page-header">
      <h2>すきを登録</h2>
      <p>あなたの好きを入力してください、もの、こと、何でも大丈夫です</p>
    </div>

    <div class="form-group">
      <label for="like">すき</label>
      <input type="text" class="form-control" name="like" id="likeword" placeholder="すきを入力">
    </div>
    <div class="form-group">
      <label for="memo">メモ</label>
      <textarea class="form-control" name="memo" rows="5" id="memotext" placeholder="メモを入力"></textarea>
    </div>
    <button class="btn btn-primary" id="btn_register" onclick="register()">登録する</button>
    <a href="likelist" class="btn btn-primary btn-large">リストを見る</a>

      <script>
      function register() {
        var like_text = document.getElementById("likeword").value;
        /* メモは使わない */
        // var memo_text = document.getElementById("memotext").value;

        /*var data = {}*/
        localStorage.setItem(like_text, "uncategorized");
        window.alert(like_text + "を登録しました。");
      }
      </script>
      @stop