@extends('layouts.admin-panel')

@section('content')
    @if ($type == 'motherboards' || $type == 'random_access_memory' || $type == 'videocards')
    <h1>Новая <span>{{$title}}</span></h1>
    @else
    <h1>Новый <span>{{$title}}</span></h1>
    @endif

    <form action="{{ route('admin.createProduct.create', ['type' => $type]) }}" method="POST">
        @csrf
        @method('POST')
        <div class="admin-create-main">
            <div class="admin-create-left-bar column-display">
                @foreach ($data as $key => $value)
                    <div class="admin-create-block column-display" style="gap: 10px">
                        <label for="{{ $key }}">{{ $value }}</label>
                        <input type="text" name="{{ $key }}"
                            class="admin-create-input full-width mediun-border-radius" required>
                    </div>
                @endforeach

                @foreach ($specificationArray[$type] as $key => $item)
                    <select name="{{ $key }}" required style="margin-top:10px" class="full-width">
                        <option value="">Выберите категорию</option>
                        @foreach ($item as $value)
                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                        @endforeach
                    </select>
                @endforeach
            </div>
            <div class="admin-create-right-bar column-for-over-length">
                <div class="admin-create-image center"></div>
                <button type="submit" class="admin-create-button full-width bright-button-style">Создать</button>
            </div>
        </div>
    </form>
@endsection
