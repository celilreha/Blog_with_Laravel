

@extends("front.layout.master")
@section("title","Anasayfa")
@section("content")


        <div class="col-md-9 mx-auto">
            @foreach($articles as $article)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{\Illuminate\Support\Str::limit($article->content,75)}}
                    </h3>
                </a>
                <p class="post-meta">Kategori:
                    <a href="#">{{$article->getCategory->name}}</a>
                    <span class="float-right">{{$article->created_at->diffforHumans()}}</span>
                </p>

            </div>
            @if(!$loop->last)
                <hr>
            @endif


        @endforeach

        </div>
@include("front.widgets.categoryWidget")

@endsection

