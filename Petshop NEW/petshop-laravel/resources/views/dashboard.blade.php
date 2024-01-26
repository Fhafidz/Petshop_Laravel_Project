<!-- File view dashboard.blade.php -->
@extends('layouts.dashboard.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Admin HaloPets</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Stock</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dashboards as $dashboard)
          <tr>
            <td>{{ $dashboard->title }}</td>
            <td>{{ $dashboard->description }}</td>
            <td>{{ $dashboard->stock }}</td> 
            <td>{{ $dashboard->price }}</td> 
            <td><img src="data:image/png;base64,{{ base64_encode($dashboard->image) }}" alt="{{ $dashboard->title }}" style="max-width: 100px; max-height: 100px;"></td>
            <td>
                <a href="{{ route('dashboard.edit', $dashboard->id) }}" class="badge bg-warning"><span data-feather="edit"></span>Edit</a>
                <form action="{{ route('dashboard.destroy', $dashboard->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge bg-danger border-0"><span data-feather="x-circle"></span>Delete</button>
                </form>        
            </td> 
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
