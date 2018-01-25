@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $title }}</h2>
    <form class="form-horizontal" action="{{ route('product.store')}}" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">New Product Name :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Product Name" name="name">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection