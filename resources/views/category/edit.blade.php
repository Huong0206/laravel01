@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>Edit Category</h3>
    </div>
</div>
<form action="{{ route('category.update', ['id' => $cat->id]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group">
      <label for="exampleInputEmail1">Tieu de</label>
      <input name="tieu_de" value="{{ $cat->tieu_de }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tieu de">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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