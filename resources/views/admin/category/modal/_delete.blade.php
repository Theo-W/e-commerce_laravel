<!-- modal div -->
<div x-data="{ open: false }">

    <!-- Button (blue), duh! -->
    <button class="ml-2 text-red-600  hover:text-red-400"
            @click="open = true"><i class="far fa-trash-alt text-2xl"></i>
    </button>

    <!-- Dialog (full screen) -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
         style="background-color: rgba(0,0,0,.5);" x-show="open">

        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="w-full h-auto p-2 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
             @click.away="open = false">
            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                <div class="flex justify-between border-b-2 pb-3">
                    <h3 class=" text-2xl font-medium leading-6 text-gray-900">
                        Supprimer  "{{ $category->name }}"
                    </h3>
                    <button  @click="open = false" class="text-gray-500"><i class="fas fa-times fa-2x"></i></button>
                </div>

                <p class="mt-10 text-center">Voulez vous supprimer votre Catégorie</p>

                <form method="post" action="{{ route('admin.category.delete', ['id' => $category->id ]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <div class="flex justify-end mt-5">
                        <button type="submit" class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                            Supprimer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
