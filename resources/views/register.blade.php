@extends('appmaster')

@section('title', 'すき登録')

@section('content')
<div class="container theme-showcase" role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">


    <div class="page-header">
      <h2>すきを登録</h2>
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

      <script>
      function register() {
        like_text = document.getElementById("likeword").value;
        memo_text = document.getElementById("memotext").value;
        window.alert(like_text + "\n" + memo_text);
      }
      </script>
      @stop