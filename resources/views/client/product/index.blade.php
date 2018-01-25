@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-1 pull-right">
        <a href="{{ route('product.create') }}" class="btn btn-primary" role="button">Add</a>
    </div>
    <hr>
    {{--  <div class="col-md-4 pull-right">
        <div class="input-group input-daterange">
            <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">
            <div class="input-group-addon">to</div>
            <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">
        </div>
    </div>  --}}

    <table id="products" class="table table-hover table-condensed" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#products').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('product.getproducts') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
        ]
    });
});
</script>
@endsection