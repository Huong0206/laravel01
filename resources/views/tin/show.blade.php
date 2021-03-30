@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>Show Tin</h3>
    </div>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Thu Tu</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->tieu_de }}</small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Loai Tin</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->tieu_de_khong_dau }}</small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tom tat</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->tom_tat }}</small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Trang thai</label>
    <small id="emailHelp" class="form-text text-muted">{{ $cat->an_hien }}</small>
</div>
@endsection