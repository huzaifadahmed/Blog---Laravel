@props(['categoryposts'])

@foreach ($categoryposts as $categorypost)
<div class='mt-8 border-2 border-neutral-400 rounded-2xl p-4 hover:shadow-xl hover:bg-neutral-200 transition-colors'>
    <div>
    <img src="/images/cardimg.jpg" height="400" width="400" class="rounded-2xl">
    <a href="/post/{{$categorypost->slug}}" class='text-2xl text-blue-500 hover:text-blue-400 mb-4'>{{$categorypost->title}}</a></div>
    <span class="border-2 border-blue-500 p-1 rounded-lg hover:bg-blue-200">
                <a href="#">{{$categorypost->category->category}}</a></span>
    <p class='max-h-56 overflow-hidden mt-4'>{{$categorypost->body}}</p>
    <p class='mt-4 text-sm font-thin'>Written by: {{$categorypost->author->name}}</p>
    <p class='text-sm font-thin italic'>Last updated: {{$categorypost->updated_at->diffForHumans()}}</p>
</div>

@endforeach
