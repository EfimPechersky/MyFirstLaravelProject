@extends('layouts.app')

@section('title', 'Таблица')

@section('css')
    <link rel="stylesheet" href="css/main.css">
@endsection


@section('content')
<table>
<tr><td>Имя</td>
    <td>Фамилия</td>
    <td>Телефон</td>
    <td>Дата рождения</td></tr>
@foreach($info as $el)
    <tr><td>{{$el['firstname']}}</td>
    <td>{{$el['lastname']}}</td>
    <td>{{$el['phone']}}</td>
    <td>{{$el['birthdate']}}</td></tr>
@endforeach
</table>
@endsection