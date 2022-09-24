@props(['post'])

<section class="px-2 pt-16 pb-6 max-w-6xl mx-auto">

    <div class='flex'>
        <img src="/images/blogimg.jpg" height="500" width="500" class="rounded-2xl p-2">
        <div>
            <div class='p-4'>
                <h4 class='text-blue-500 text-6xl'>{{$post->title}}</h4>
            </div>

        </div>

    </div>
    <div class='p-4 pt-8 flex justify-between'>
        <p class='text-lg font-thin'>Written by: {{$post->author->name}}</p>
        <p class='text-sm font-thin italic'>Last updated: {{$post->updated_at->diffForHumans()}}</p>
    </div>
    <hr>

    <div class="p-4 mt-10 border-2 border-neutral-400 rounded-xl">
        <p>{{$post->body}}</p>
    </div>

</section>