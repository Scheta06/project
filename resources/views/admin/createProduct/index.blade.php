@extends('layouts.admin-panel')

@section('content')
    <h1>Выберите категорию</h1>
    <div class="category-container">
        @foreach ($typeOfComponents as $key => $type)
<<<<<<< HEAD:resources/views/admin/createProduct/index.blade.php
        <a href="{{ route('admin.createProduct.show', ['type' => $key]) }}" class="item-block background-block-color huge-border-radius column-for-over-length">
=======
        <a href="{{route('admin.createProduct', ['type' => $key])}}" class="item-block background-block-color huge-border-radius column-for-over-length">
>>>>>>> 315da151fefd2ad9d4339cad06aa219d5ba498c4:resources/views/admin/create.blade.php
            <div class="image full-height small-border-radius"></div>
            <p class="bold-small-font">{{ $type }}</p>
        </a>
        @endforeach
    </div>
@endsection
