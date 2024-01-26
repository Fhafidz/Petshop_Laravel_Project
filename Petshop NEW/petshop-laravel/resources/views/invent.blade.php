@extends('layouts.navbar')

@section('container')

  <div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ($dashboards as $dashboard)
      <div class="col">
        <div class="card h-100 d-flex flex-column">
          <div class="d-flex justify-content-center align-items-center" style="flex: 1;">
            <!-- Menampilkan gambar dinamis sesuai dengan path/URL yang disimpan di database -->
            <img src="data:image/png;base64,{{ base64_encode($dashboard->image) }}" alt="{{ $dashboard->title }}" class="card-img-top" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="card-body">
            <h4 class="card-title">{{ $dashboard->title }}</h4>
            <p class="card-text">{{ $dashboard->description }}</p>
            <div class="d-flex justify-content-between align-items-center mt-auto">
              <h5 class="card-title mb-0">Stock: {{ $dashboard->stock }}</h5>
              <h5 class="card-title mb-0">Price: {{ $dashboard->price }}</h5>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
