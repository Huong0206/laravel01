@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>List Loai Tin</h3>
    </div>
    <div class="col-md-3 text-right">
        <a href="{{ route('loaitin.create') }}" class="btn btn-primary">Create</a>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Thu tu</th>
        <th scope="col">Tieu de</th>
        <th scope="col">Tieu de khong dau</th>
        <th scope="col">Tom tat</th>
        <th scope="col">Trang thai</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    @foreach($catList as $cat)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td><a href="{{ route('loaitin.show', ['id' => $cat->id])}}">{{ $cat->thu_tu }}</a></td>
        <td><a href="{{ route('loaitin.show', ['id' => $cat->id])}}">{{ $cat->tieu_de }}</a></td>
        <td><a href="{{ route('loaitin.show', ['id' => $cat->id])}}">{{ $cat->tieu_de_khong_dau }}</a></td>
        <td><a href="{{ route('loaitin.show', ['id' => $cat->id])}}">{{ $cat->tom_tat }}</a></td>
        <td>{{ $cat->an_hien }}</td>
        <td><a href="{{ route('loaitin.edit', ['id' => $cat->id])}}">Edit</a></td>
        <td>
            <form action="{{ route('loaitin.destroy', ['id' => $cat->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button class="form-control btn-primary">Delete</button>
            </form>
            
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
