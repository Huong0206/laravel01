@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>Create Loai Tin</h3>
    </div>
</div>
<form action="{{ route('loaitin.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Tieu de</label>
      <input name="tieu_de" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tieu de">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tieu de khong dau</label>
        <input name="tieu_de_khong_dau" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tieu de">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tom tat</label>
        <input name="tom_tat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tieu de">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.Hello every body.</small>
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">An hien</label>
      <select name="an_hien" class="form-control" >
          <option value="0">An</option>
          <option value="1">Hien</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection