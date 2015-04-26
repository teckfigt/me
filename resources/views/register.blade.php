@extends('appmaster')

@section('title', '好き登録')

@section('content')
      <div class="container theme-showcase" role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">


          <div class="page-header">
            <h1>好きを登録</h1>
          </div>
          <form action="likelist" method="get">
            <div class="form-group">
              <label for="pass">すき</label>
              <input type="text" class="form-control" name="pass" placeholder="すきを入力">
            </div>
            <div class="form-group">
              <label for="memo">メモ</label>
              <textarea class="form-control" name="memo" rows="5" placeholder="メモを入力"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">登録する</button>
          </form>

        </div>
@stop