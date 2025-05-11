@extends('layouts.admin-panel')

@section('content')
    <h1>Выберите категорию</h1>
    <div class="admin-content-block for-length">
        @foreach ($typeOfComponents as $key => $item)
        <a href="{{ route('admin.createProduct.show', ['type' => $key]) }}" class="full-width mediun-border-radius column-for-over-length">
            <div class="image full-width mediun-border-radius"></div>
            <div class="componentTitle">
                {{ $item }}
            </div>
        </a>
    @endforeach
    </div>
@endsection
