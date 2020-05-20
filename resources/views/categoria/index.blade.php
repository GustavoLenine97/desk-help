@extends('adminlte::page')

@section('content_header')
<h1>Categoria</h1>
@endsection

@section('content')
<div class="row">

<!--
<table class="table no-margin">
    <thead>
    <tr>
    <th>Codigo Categoria</th>
    <th>DescricaoCategoria</th>
    <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cats as $cat)
    <tr>
    <td><a href="pages/examples/invoice.html">{{ $cat->CodigoCategoria }}</a></td>
    <td>{{ $cat->DescricaoCategoria }}</td>
    <td><span class="label label-success">{{ $cat->AtivoCategoria }}</span></td>
    </tr>
    @endforeach
    </tbody>
</table>
-->

@foreach($cats as $cat)
<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
        <div class="inner">
            <a href="categoria/subcategoria/{{ $cat->DescricaoCategoria }}" style="color:white"><h3>{{ $cat->DescricaoCategoria }}</h3></a>
        </div>
    </div>
</div>
@endforeach


</div>

@endsection

