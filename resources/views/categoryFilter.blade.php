<x-template>

    <section class="px-2 pt-16 pb-6 max-w-6xl mx-auto">
        
        <div class="mb-8 ml-20">
            <x-categoryDropdown :posts="$posts"/>


        </div>


        <div class="grid grid-cols-3 space-x-4">
            
            <x-cardFiltered :categoryposts="$categoryposts"/>

        </div>

    </section>

</x-template>




    


