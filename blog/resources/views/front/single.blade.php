

@extends("front.layout.master")
@section("title",$article->title)
@section("bg",$article->image)
@section("content")



                <div class="col-md-9 mx-auto">
                    {!! $article->content !!}
                    <br/>
                    <br/>
                    <span class="text-danger">Okunma Sayısı: <b>{{$article->hit}}</b></span>
                </div>

    <hr>
@include("front.widgets.categoryWidget")

@endsection

