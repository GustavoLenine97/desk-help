@extends('adminlte::page')

@section('content_header')
<h1>Categoria</h1>
@endsection

@section('content')
<div class="row">
@foreach($cats as $cat)
@php
$categoria = $cat->DescricaoCategoria
@endphp
<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
        <div class="inner">
            <a href="{{ route('hardware') }}" style="color:white"><h3>{{ $categoria }}</h3></a>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection

