@extends('layouts.admin-panel')

@section('content')
    <h1>Новый компонент</h1>
    <form action="{{ route('admin.createProduct.create', ['type' => $type]) }}" method="POST">
        @csrf
        @method('POST')
        <div class="admin-create-main">
            <div class="admin-create-left-bar">
                @foreach ($data as $key => $value)
                    <div class="admin-create-block column-display" style="gap: 10px">
                        <label for="{{ $key }}">{{ $value }}</label>
                        <input type="text" name="{{ $key }}"
                            class="admin-create-input full-width mediun-border-radius" required>
                    </div>
                @endforeach
                @switch($type)
                    @case('processors')
                        <div class="select-section column-display mediun-border-radius" style="gap: 10px; margin-top: 10px">
                            <select name="processor_generation_id" style="mediun-border-radius" required>
                                <option value="">Выберите поколение</option>
                                @foreach ($processorGeneration as $item)
                                    <option value="{{ $item->id }}">{{ $item->type }} {{ $item->title }}</option>
                                @endforeach
                            </select>
                            <select name="socket_id" required>
                                <option value="">Выберите сокет</option>
                                @foreach ($socket as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    @break

                    @case('motherboards')
                        <div class="select-section column-display mediun-border-radius" style="gap: 10px; margin-top: 10px">
                            <select name="socket_id" required>
                                <option value="">Выберите сокет</option>
                                @foreach ($socket as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            <select name="chipset_id" style="mediun-border-radius" required>
                                <option value="">Выберите чипсет</option>
                                @foreach ($chipset as $item)
                                    <option value="{{ $item->id }}">{{ $item->type }} {{ $item->title }}</option>
                                @endforeach
                            </select>
                            <select name="form_factor_id" style="mediun-border-radius" required>
                                <option value="">Выберите форм-фактор</option>
                                @foreach ($formFactor as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            <select name="express_version_id" style="mediun-border-radius" required>
                                <option value="">Выберите версию PCI-E</option>
                                @foreach ($expressVersion as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            <select name="type_of_memory_id" style="mediun-border-radius" required>
                                <option value="">Выберите тип памяти</option>
                                @foreach ($typeOfMemory as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    @break

                    @default
                @endswitch
                <select name="vendor_id" required style="margin-top:10px" class="full-width">
                    <option value="">Выберите производителя</option>
                    @foreach ($vendor as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin-create-right-bar column-for-over-length">
                <div class="admin-create-image center"></div>
                <button type="submit" class="admin-create-button full-width bright-button-style">Создать</button>
            </div>
        </div>
    </form>
@endsection
