<div class="container mt-5">
    <div class="mb-5">
        <h1>The authors</h1>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            {{-- <th scope="col">Text</th>
            <th scope="col">Score</th> --}}
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    {{-- <td>{{$book->text}}</td>
                    <td>{{$book->score}}</td> --}}
                    <td>
                        <a href="/show-book/{{$book->id}}" class="btn btn-primary">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>