<x-template>

    <section class="px-2 pt-16 pb-6 max-w-6xl mx-auto">
        
        <div class="mb-8 ml-20">
            <x-categoryDropdown :posts="$posts"/>


        </div>

        <x-featured-card :featuredpost="$posts"/>

        <div class="grid grid-cols-3 space-x-4">
            
            <x-card :posts="$posts"/>

        </div>
        {{$posts->links()}}
    </section>

</x-template>




    


