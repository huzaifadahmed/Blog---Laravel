<x-template>

<div class="text-4xl text-center py-4"><p>All Posts</p></div>
    <div class="px-8 py-8">
        
<div class="shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Post Title
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Updated
                </th>
            </tr>
        </thead>

        @foreach ($posts as $post)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="/post/{{$post->slug}}">{{$post->title}}</a>
                </th>
                <td class="py-4 px-6">
                    {{$post->category->category}}
                </td>
                <td class="py-4 px-6">
                    {{$post->updated_at->DiffForHumans()}}
                </td>
 
                <td class="py-4 px-6">
                    <a href="/edit/{{$post->slug}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

                <form method="POST" action="/delete/{{$post->slug}}">
                    @csrf
                    @method ('DELETE')
                    <td class="py-4 px-6">
                        <button type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                    </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


    </div>

</x-template>