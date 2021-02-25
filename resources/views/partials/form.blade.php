<div class="container mt-5">
  <div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
  <form action="/store-book" method="POST">
      @csrf
    <div class="form-group">
      <label for="name">Name : </label>
      <input type="text" class="form-control" id="name" name="name" value={{old('name')}}>
    </div>
    <div class="form-group">
      <label for="text">Text : </label>
      <input type="text" class="form-control" id="text" name="text" value={{old('text')}}>
    </div>
    <div class="form-group">
      <label for="score">Score : </label>
      <input type="number" class="form-control" id="score" name="score" value={{old('score')}}>
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
  </form>
</div>