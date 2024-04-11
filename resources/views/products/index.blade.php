@extends('layouts.app')

@section('content')
<div class="container">
 <h1>商品一覧画面</h1>
  <!-- 検索フォーム -->
   <!-- 検索テキスト部分 -->
  <div class="row">
      <!-- <form id="search-form"> -->
</br></br>
        <table>
          <thead></thead>
          <tbody>
            <tr>
              <th>
                <input type="text" class="form-control" name="keyword" id="name" placeholder="検索キーワード">
              </th>
              <th>
                <!-- 検索セレクトボックス -->
                <select name="companyId" class="form-control" id="company">
                  <option value="">メーカー名</option>
                  @foreach ($companies as $company)
                  <option value="{{ $company->id }}">{{ $company->name }}</option>
                  @endforeach
                </select>
              </th>
              <th>
                <button class="btn btn-primary" id="search-btn">検索</button>
              </th>
            </tr>
            <tr></tr>
          </tbody>
        <!-- </form> -->
    </div>
</div>
</br></br>

  <!-- 商品テーブル一覧 -->
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>商品画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>在庫数</th>
        <th>メーカー名</th>
        <th></th>
        <th> <!-- 新規登録ボタン -->
          <a href="{{ route('create') }}"><button class="btn btn-warning">新規登録</button></a>
        </th>
    </tr>
    </thead>
    <tbody id="search-result">
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <!--<td>{{ $product->image_path }}</td> -->
        <td><img src="{{ asset('storage'. mb_substr($product->image_path,6)) }}" class="imgsize"></td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->company->name }}</td>
        <td><a href="{{ route('show', $product->id) }}"><button class="btn btn-success">詳細</button></a></td>
        <td>
           <!-- <form action="{{ route('destroy', $product->id) }}" method="POST"> -->
            <!-- <form> -->
            @csrf
            @method('DELETE')
            <button data-product_id="{{ $product->id }}" type="submit" class="btn btn-secondary">削除</button>
           <!-- </form> -->
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection