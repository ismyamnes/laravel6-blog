<div class="row justify-content-center mb-3">
    <div class="col-md-8">
        @foreach ($photo->comments as $comment)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{ $comment->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $comment->email }}</h6>
            <p class="card-text">{{ $comment->message }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>