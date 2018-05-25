@foreach ($categories as $category)

    @if ($category->children->where('published', 1)->count())
        <div class="dropdown show">
            <a class="btn dropdown-toggle" href="{{url("/blog/category/$category->slug")}}" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$category->title}}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @include('layouts.top_menu', ['categories' => $category->children])
            </div>

            {{--<li class="dropdown">--}}
            {{--<a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
            {{--{{$category->title}} <span class="caret"></span>--}}
            {{--</a>--}}
            {{--<ul class="dropdown-menu" role="menu">--}}
            {{--@include('layouts.top_menu', ['categories' => $category->children])--}}
            {{--</ul>--}}
            @else
                <div>
                    <a class="btn" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
                    @endif
                </div>

        @endforeach