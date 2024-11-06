
@extends('layouts.app')

@section('title', 'Форма')

@section('css')
    <link rel="stylesheet" href="css/main.css">
@endsection

@section('content')
    <form action="" method="POST">
    @csrf
        <label>Имя</label></br>
        <input type="text" name="firstname" class="@error('firstname') is-invalid @enderror" value="@if($errors->any()){{ old('firstname') }}@endif"></br>
        @error('firstname') <div class="alert alert-danger">{{ $message }}</div> @enderror
        <label>Фамилия</label></br>
        <input type="text" name="lastname" class="@error('lastname') is-invalid @enderror" value="@if($errors->any()){{ old('lastname') }}@endif"></br>
        @error('lastname') <div class="alert alert-danger">{{ $message }}</div> @enderror
        <label>Телефон</label></br>
        <input type="tel" name="phone" class="@error('phone') is-invalid @enderror" value="@if($errors->any()){{ old('phone') }}@endif"></br>
        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
        <label>Дата рождения</label></br>
        <input type="date" name="birthdate" class="@error('birthdate') is-invalid @enderror" value="@if($errors->any()){{ old('birthdate') }}@endif"></br>
        @error('birthdate') <div class="alert alert-danger">{{ $message }}</div> @enderror
        <input type="checkbox" name="policy" class="@error('policy') is-invalid @enderror">
        <label>Согласен на обработку персональных данных</label></br>
        @error('policy') <div class="alert alert-danger">{{ $message }}</div> @enderror
        <input type="submit">
    </form>

@isset($alvar)
    <div class="alert">{{ $alvar }}</div>
@endisset
@endsection