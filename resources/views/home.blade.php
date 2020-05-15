@extends('adminlte::page')

@section('content_header')
<h1>Dashboard</h1>
@endsection

@section('content')
<h1>Bem vindo, {{ Auth::user()->name }}</h1><br><br>


<div class="box-header with-border">
    <h3 class="box-title">Users Table</h3>
</div>

<div class="box-body">

    <table class="table table-bordered">
    <tr>
        <th style="width: 10px">ID</th>
        <th>Nome</th>
        <th>Email</th>
        <!-- <th style="width: 40px">Label</th> -->
    </tr>
    @foreach($users as $user)
    <tr>
        
        <th style="width: 10px">{{ $user->id}}</th>
        <th>{{ $user->name }}</th>
        <th>{{ $user->email }}</th>
        <!-- <th></th> -->
    </tr>
    @endforeach
    </table>
</div>

@php 
 
@endphp
@endsection
