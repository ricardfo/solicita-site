@extends('master')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
@parent

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Aberto por</th>
        <th>Aberto em</th>
        <th>Status</th>
        <th>Tipo</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td>{{ $chamado->user->name }}</td>
        <td>{{ Carbon\Carbon::parse($chamado->created_at)->format('d/m/Y H:i') }}</td>
        <td>{{ $chamado->status }}</td>
        <td>{{ $chamado->tipo }}</td>
        
      </tr>

</tbody>
</table>
</div>

<h2>Descrição</h2>
<p>{{ $chamado->descricao }}</p>

@stop
