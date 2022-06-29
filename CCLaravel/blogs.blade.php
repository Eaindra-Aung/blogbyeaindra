<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
@foreach($blogs as $blog)
        <h1><a href="/blogs/{{$blog->slug;}}">{{$blog->title;}}</a></h1>
        <p><a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a></p>
        <div>
            <p>Published at -{{$blog->created_at->diffForHumans();}}</p>
            <p>{{$blog->intro;}}</p>
        </div>
        {{$blog->body;}}
    @endforeach

</x-layout>

