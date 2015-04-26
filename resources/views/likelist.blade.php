@extends('appmaster')

@section('title', 'すきリスト')

@section('content')
<div class="container theme-showcase" role="main">
<ul class="list-group"  ondragover="f_dragover(event)" ondrop="f_drop(event)">
    <a href="#"><li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item1">商品1</li></a>
    <li class="list-group-item">商品2</li>
    <li class="list-group-item">商品3</li>
</ul>
<div class="jumbotron drop-destination" id="dropbox" ondragover="f_dragover(event)" ondrop="f_drop(event)">
	</div>
</div>

<script>
/***** ドラッグ開始時の処理 *****/
function f_dragstart(event){
  //ドラッグするデータのid名をDataTransferオブジェクトにセット
  event.dataTransfer.setData("text", event.target.id);
}

/***** ドラッグ要素がドロップ要素に重なっている間の処理 *****/
function f_dragover(event){
  //dragoverイベントをキャンセルして、ドロップ先の要素がドロップを受け付けるようにする
  event.preventDefault();
}

/***** ドロップ時の処理 *****/
function f_drop(event){
  //ドラッグされたデータのid名をDataTransferオブジェクトから取得
  var id_name = event.dataTransfer.getData("text");
  //id名からドラッグされた要素を取得
  var drag_elm =document.getElementById(id_name);
  //ドロップ先にドラッグされた要素を追加
  event.currentTarget.appendChild(drag_elm);
  //エラー回避のため、ドロップ処理の最後にdropイベントをキャンセルしておく
  event.preventDefault();
}
</script>
@stop