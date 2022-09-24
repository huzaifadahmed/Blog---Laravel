<x-template>

    <div class="w-96 mx-auto py-8">
        <p class="text-xl font-bold py-8 text-center">Edit Post {{$post->title}}</p>

        <form name="form" method="POST" action="/update/{{$post->slug}}">
        @csrf
        @method ('PATCH')
            <label for="title" class="mt-4 mb-2 font-semibold">Title</label>
            <input name="title" id="title" type="text" placeholder="Title..." class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400" value="{{$post->title}}"></input>
            @error('title')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror

            <label for="excerpt" class="mt-4 mb-2 font-semibold">Excerpt</label>
            <textarea name="excerpt" placeholder="Excerpt..." rows="3" cols="30" class="w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400">{{$post->excerpt}}</textarea>
            @error('excerpt')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror

            <label for="slug" class="mt-4 mb-2 font-semibold">Slug</label>
            <input name="slug" type="text" placeholder="Example: my-first-post..." class="w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400 bg-gray-300" value="{{$post->slug}}" readonly></input>
            @error('slug')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror

            <div class="my-4">
                <label for="category_id" class="font-semibold mr-2">Select a Category: </label>
                <select name="category_id" class="rounded-xl border-blue-500">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
                </select>
            </div>
            @error('category')
                <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror

            <label for="body" class="mt-4 mb-2 font-semibold">Body</label>
            <textarea name="body" rows="10" cols="30" placeholder="Type your content here..." class=" w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400">{{$post->body}}</textarea>
            @error('body')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror



            <button type="submit" id="enterBtn" class="text-white bg-blue-600 mt-4 p-2 px-4 rounded-md shadow-xl w-24 font-bold hover:shadow-none hover:bg-blue-400 transition-colors ml-8">Update</button>
        </form>
    </div>

</x-template>