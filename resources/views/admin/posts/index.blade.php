@extends('layouts.app')

@section('content')

<header>
    
    <div class="container">
       <h1>Lista Post</h1>
    </div>
</header>
<div class="container">
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

@forelse($posts as $post)
<tr>
  <th scope="row">{{$post->id}}</th>
  <td>{{$post->title}}</td>
  <td>{{$post->slug}}</td>
  <td>{{$post->created_at}}</td>
  <td>{{$post->updated_at}}</td>
  <td class="d-flex justify-content-end">
    <a class="btn btn-sm btn-primary ml-2 mr-2" href="{{route('admin.posts.show', $post)}}">
      <i class="fa-solid fa-eye mr-2"></i>vedi
    </a>
    <form action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
             <button class="btn btn-sm btn-danger" type="submit">
                 <i class="fa-solid fa-trash mr-2"></i>Elimina
             </button>
    </form>
</td>
</tr>
@empty
<tr><td colspan="6"><h3 class="text-center">Nessun Post</h3></td></tr>
@endforelse

</tbody>
</table>
    </div>

@endsection