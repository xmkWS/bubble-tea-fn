@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-14">
                <h1 class="text-5xl border-b border-white border-opacity-25 pb-7">Добавление продукта</h1>
                <form action="{{ route('product.store') }}" method="post" class="flex flex-col items-start gap-7" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="input w-full" name="name" placeholder="Название продукта" value="{{ old('name') }}">
                    @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                    <textarea name="description" class="input w-full" placeholder="Описание продукта">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input type="number" class="input w-full" name="price" placeholder="Цена" value="{{ old('price') }}">
                    @error('price') <p class="text-red-500">{{ $message }}</p> @enderror
                    <select name="category_id" class="input w-full appearance-none cursor-pointer">
                        @foreach($categories as $category)
{{--                            <option @selected((int)old('category_id') === $category->id) class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>--}}
                            <option @selected(old('category_id') == $category->id) class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input type="file" class="input w-full" name="path">
                    @error('path') <p class="text-red-500">{{ $message }}</p> @enderror
                    <button type="submit" class="button">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection