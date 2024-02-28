@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-14">
                <h1 class="text-5xl border-b border-white border-opacity-25 pb-7">Редактирование категории</h1>
                <form action="{{ route('category.update', $category->id) }}" method="post" class="flex flex-col items-start gap-7">
                    @csrf
                    @method('PATCH')
                    <input type="text" class="input w-full" name="name" placeholder="Название категории" value="{{ $category->name }}">
                    @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                    <button type="submit" class="button">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection