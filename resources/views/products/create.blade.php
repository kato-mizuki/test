@extends('layouts.app')

@section('content')

<div class="container">
  
    <h1>商品新規登録画面</h1>
    
      </br></br>
    <table>
    <form action="{{ route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <thead></tahead>
        <tbody>
          
            <tr>
              <td>
              <div class="form-group-sm clearfix">
                  <label for="formGroupExampleInput2" class="required">商品名</label>
                  <div class="product-info width-control">
              </td>
              <td>
                <input type="text" name="product_name" class="content-half-width form-control-sm d-inline">
                        @if ($errors->has('product_name'))
                            <div class="row justify-content-center">
                                <div class="cal-xs-4">
                                    <span style="color:red">{{ $errors->first('product_name') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="product-company">メーカー名</label>
              </td>
              <td>
                    <input class="form-select" id="company_id" name="company_name">
                      @foreach ($companies as $company)
                      <option value="{{ $company->id }}">{{ $company->name }}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('company_id'))
                    <p class="errors">{{ $errors->first('company_id') }}</p>
                    @endif  
                  </input>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                    <label for="product-price">価格</label>
              </td>
              <td>
                <input type="number" name="price" id="price" class="form-control">
                    @if ($errors->has('price'))
                      <p class="errors">{{ $errors->first('price') }}</p>
                    @endif
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="product-stock">在庫数</label>
              </td>
              <td>
                  <input type="number" name="stock" id="stock" class="form-control">
                    @if ($errors->has('stock'))
                    <p class="errors">{{ $errors->first('stock') }}</p>
                    @endif
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="product-comment">コメント</label>
              </td>
              <td>
                  <textarea name="comment" id="Comment" class="form-contorl"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="product-image_path">商品画像</label>
              </td>
              <td>
                  <input type="file" name="image_path" id="image_path" class="form-contorl">
                    @if ($errors->has('image_path'))
                      <p class="errors">{{ $errors->first('image_path') }}</p>
                    @endif
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-warning">新規登録</button>
              </td>
              <td>
                <button class="btn btn-info">
                  <a href="{{ route('list') }}">戻る</a>
                </button>
              </td>
            </tr>
        </tbody>
    </table>
  </form>
</div>
@endsection