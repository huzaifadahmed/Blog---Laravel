@props(['featuredpost'])
<!--Featured Card-->
<div class='border-2 border-neutral-400 rounded-2xl shadow-lg hover:shadow-xl flex hover:bg-neutral-200 transition-colors'>
    <img src="/images/blogimg.jpg" height="500" width="500" class="rounded-2xl p-2">
    <div>
        <div class='p-4'>
            <h4><a href="/post/{{$featuredpost[0]->slug}}" class='text-blue-500 text-4xl hover:text-blue-400'>{{$featuredpost[0]->title}}</a></h4>
        </div>
        <div class='p-4'>
            <span class="border-2 border-blue-500 p-1 rounded-lg hover:bg-blue-200">
                <a href="#">{{$featuredpost[0]->category->category}}</a></span>
            <p class="mt-4">{{$featuredpost[0]->body}}</p>
            <p class='mt-4 text-sm font-thin'>Written by: {{$featuredpost[0]->author->name}}</p>
            <p class='text-sm font-thin italic'>Last updated: {{$featuredpost[0]->updated_at->diffForHumans()}}</p>
        </div>
    </div>
</div>