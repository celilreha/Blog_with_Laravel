

@extends("front.layout.master")
@section("title",$page->title)
@section("bg",$page->image)
@section("content")

    <div class="col-md-10 mx-auto">
        {!! $page->content !!}
    </div>


@include("front.widgets.categoryWidget")
@endsection

