<x-layout>
    <x-slot name="title">
        <title>{{$blog->title}}</title>
    </x-slot>
        <h1>{{$blog->title;}}</h1>
        <div>
            <p>Published at -{{$blog->created_at->diffForHumans();}}</p>
        </div>
        <p><?= $blog->body ?></p>
    <a href="/blogs"><button>Go Back</button></a>
</x-layout>