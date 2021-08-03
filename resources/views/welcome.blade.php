@extends('layouts.main')

@section('title', 'Events')

@section('content')

<h1>Alguma Titulo</h1>
@if(10 > 15)
    <p>A condição é true</p>
@endif


<p>{{ $nome }}</p>

@if($nome == "Rafael")
<p>O nome é Rafael</p>
@elseif($nome == "Mateus")
<p>O nome é {{ $nome }}</p> e ele tem {{ $idade2 }} anos, e trabalha como {{ $profissao }}</p>
@else
<p>O nome não é Rafael</p>
@endif
@for($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }} - {{ $i }}</p>
@if($i == 2)
<p>O i é 2</p>
@endif
@endfor    

@foreach($nomes as $nome)
<p>{{ $loop->index }}</p>
<p>{{ $nome }}</p>
@endforeach
@php
$nome = "Luis";
echo $nome;
@endphp    
@endsection   