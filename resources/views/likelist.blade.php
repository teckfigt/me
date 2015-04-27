@extends('appmaster')

@section('title', 'すきリスト')

@section('content')

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>
<script>$('#widget').draggable();</script>

<div class="container theme-showcase" role="main">
<ul class="list-group"  ondragover="f_dragover(event)" ondrop="f_drop(event)">
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item1">家族</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item2">写真</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item3">お金</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item4">聞かれること</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item5">頼りにされること</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item6">ライブにいくこと</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item7">話をすること</li>
    <li class="list-group-item" draggable="true" ondragstart="f_dragstart(event)" id="item8">電話すること</li>
</ul>
<div class="jumbotron drop-destination" id="dropbox" ondragover="f_dragover(event)" ondrop="f_drop(event)">
	</div>
  <div class="jumbotron drop-destination" id="dropbox" ondragover="f_dragover(event)" ondrop="f_drop(event)">
  </div>
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