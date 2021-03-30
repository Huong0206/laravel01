@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>Show Category</h3>
    </div>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tieu de</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->tieu_de }}</small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tieu de</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->an_hien }}</small>
</div>
@endsection