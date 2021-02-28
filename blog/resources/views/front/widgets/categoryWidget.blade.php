@isset($categories)
    <div class="col-md-3 mx-auto">
        <div class="card">
            <div class="card-header">
                Kategoriler
            </div>
            <div class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item @if(\Illuminate\Support\Facades\Request::segment(2)==$category->slug) active @endif">
                        <a @if(\Illuminate\Support\Facades\Request::segment(2)!=$category->slug) href="{{route("category",$category->slug)}} @endif ">{{$category->name}} </a><span
                            class="badge bg-danger text-white float-right">{{$category->articleCount()}}</span>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endisset
