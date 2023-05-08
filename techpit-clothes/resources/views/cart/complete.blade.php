@extends('layouts.app')

@section('title')
完了画面
@endsection

@section('content')
<div class="container">
    <div class="comple_message">
        お支払いが完了しました<div class=""></div>
    </div>

    <button onClick="location.href='{{ route('product.index') }}'" class="btn btn-outline-secondary">
        トップページへ戻る
    </button>
</div>
@endsection