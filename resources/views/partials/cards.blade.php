<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
                <span class="card-title text-muted mb-3">{{$show->id}}</span>
                <h3 class="card-subtitle mb-2">Name : {{$show->name}}</h3>
                <p class="card-text">Text: {{$show->text}}</p>
                <h6 class="card-subtitle mb-2">Score : {{$show->score}}</h6>

                
                <a href="/edit-book/{{$show->id}}" class="btn btn-warning">EDIT</a>

                <form action="/destroy-book/{{$show->id}}" method="POST">
                    @csrf
                    <button class="btn btn-danger">DELETE</button>
                </form>
                
        </div>
    </div>
</div>