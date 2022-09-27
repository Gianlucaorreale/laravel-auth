@extends('layouts.app')

@section('content')
<header>
    <h1>Lista Post</h1>

    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Creato il </th>
      <th scope="col">Modificato il </th>
      <th>Azioni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
</header>
@endsection