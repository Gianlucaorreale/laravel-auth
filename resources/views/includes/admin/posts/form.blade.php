@if($post->exists)
<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @method('PUT')
@else
<form action="{{ route('admin.posts.store') }}" method="POST">
@endif

     @csrf
     <div class="row">
        <div class="col-12">
           <div class="form-group">
               <label for="title">Titolo</label>
               <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}" 
               required minlenght="5">
               
           </div>
        </div>
        <div class="col-12">
           <div class="form-group">
               <label for="content">Contenuto</label>
               <textarea class="form-control" id="content" name="content" 
               required >{{old('content', $post->content)}}</textarea>
               
           </div>
        </div>
        <div class="col-12">
           <div class="form-group">
               <label for="image">Immagine</label>
               <input type="url" class="form-control" id="image" name="image" value="{{old('image', $post->image)}}"
                >
               
           </div>
        </div>
    </div>

  <hr>
  <footer class="d-flex justify-content-between">
    <a class="btn btn-secondary" href="{{route('admin.posts.index')}}">
        <i class="fa-solid fa-rotate-left mr-2"></i>Indietro
    </a>

    <button class="btn btn-success" type="submit">
        <i class="fa-solid fa-floppy-disk mr-2"></i>Salva
    </button>
  </footer>
</form>