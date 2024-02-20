<div>
    <div class="mx-auto bg-white rounded overflow-hidden shadow-md px-5 py-6 mb-5">
        <h1 class="text-3xl">Rangsit Learning Management System</h1>
    </div>
    <div class="mx-auto bg-white rounded overflow-hidden shadow-md px-5 py-6">
        <x-searchbox />
        <h1 class="text-3xl my-[50px] flex">Course Categories</h1>


        <div class="flex flex-row-reverse">
            <button wire:click="toggleAll">Toggle All</button>
        </div>
        <div>
            @foreach ($courseCategories as $category)
                <div class="my-4">
                    <button wire:click="toggleCategory({{ $category['id'] }})" class="flex items-center">
                        @if (in_array($category['id'], $openCategories))
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        @endif


                        <span class="text-2xl">{{ $category['name'] }}</span>
                    </button>
                    <div class="mt-2 ml-10">
                        @if (in_array($category['id'], $openCategories))
                            @foreach ($category['courses'] as $course)
                                <div>{{ $course['name'] }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        </div>





    </div>
</div>
