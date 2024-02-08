<div class="mx-auto mt-5 bg-white rounded overflow-hidden shadow-md px-5 py-6">
    <div class="flex justify-between">
        <h1>Course Overview</h1>
    </div>

    <div class="flex justify-between">
        <div>
            {{-- this is livewire component for dropdown to pass dynamically data --}}
            <livewire:dropdown-menu :options="[
                'button_text' => 'In Progress',
                'menu_items' => [
                    ['text' => 'All(except removed from view)', 'url' => '#'],
                    ['text' => 'In progress', 'url' => '#'],
                    ['text' => 'Future', 'url' => '#', 'disabled' => true],
                    ['text' => 'Past', 'url' => '#', 'disabled' => true],
                    ['text' => 'Stared', 'url' => '#', 'disabled' => true],
                    ['text' => 'Removed from view', 'url' => '#', 'disabled' => true],
                ],
            ]" />
        </div>
        <div class="flex">
            <livewire:dropdown-menu :options="[
                'button_text' => 'Course name',
                'menu_items' => [['text' => 'Course name', 'url' => '#'], ['text' => 'Last accessed', 'url' => '#']],
            ]" />
            <livewire:dropdown-menu :options="[
                'button_text' => 'Card',
                'menu_items' => [
                    ['text' => 'Card', 'url' => '#'],
                    ['text' => 'List', 'url' => '#'],
                    ['text' => 'Summary', 'url' => '#', 'disabled' => true],
                ],
            ]" />
        </div>
    </div>

    <div class="grid lg:grid-cols-2 grid-cols-1 gap-2 mt-3">
        <div class="">
            <div class="mx-auto bg-white rounded border px-5 py-6 h-auto">
                <img src="{{ Vite::image('blugbg.png') }}" alt="" class="w-full h-[120px]">
                <div class="mt-3">
                    <h1>Information and Communication Technology</h1>
                    <h1>ICT101 Object-Oriented Technology</h1>
                </div>
                <div class="w-full bg-white border rounded-full h-2.5 mt-5">
                    <div class="bg-[#253237] h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <h1 class="mt-3">0% complete</h1>
            </div>
        </div>
        <div class="">
            <div class="mx-auto bg-white rounded border px-5 py-6 h-auto">
                <img src="{{ Vite::image('blugbg.png') }}" alt="" class="w-full h-[120px]">
                <div class="mt-3">
                    <h1>Information and Communication Technology</h1>
                    <h1>ICT101 Object-Oriented Technology</h1>
                </div>
                <div class="w-full bg-white border rounded-full h-2.5 mt-5">
                    <div class="bg-[#253237] h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <h1 class="mt-3">0% complete</h1>
            </div>
        </div>
        <div class="">
            <div class="mx-auto bg-white rounded border px-5 py-6 h-auto">
                <img src="{{ Vite::image('blugbg.png') }}" alt="" class="w-full h-[120px]">
                <div class="mt-3">
                    <h1>Information and Communication Technology</h1>
                    <h1>ICT101 Object-Oriented Technology</h1>
                </div>
                <div class="w-full bg-white border rounded-full h-2.5 mt-5">
                    <div class="bg-[#253237] h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <h1 class="mt-3">0% complete</h1>
            </div>
        </div>
        <div class="">
            <div class="mx-auto bg-white rounded border px-5 py-6 h-auto">
                <img src="{{ Vite::image('blugbg.png') }}" alt="" class="w-full h-[120px]">
                <div class="mt-3">
                    <h1>Information and Communication Technology</h1>
                    <h1>ICT101 Object-Oriented Technology</h1>
                </div>
                <div class="w-full bg-white border rounded-full h-2.5 mt-5">
                    <div class="bg-[#253237] h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <h1 class="mt-3">0% complete</h1>
            </div>
        </div>
        <div class="">
            <div class="mx-auto bg-white rounded border px-5 py-6 h-auto">
                <img src="{{ Vite::image('blugbg.png') }}" alt="" class="w-full h-[120px]">
                <div class="mt-3">
                    <h1>Information and Communication Technology</h1>
                    <h1>ICT101 Object-Oriented Technology</h1>
                </div>
                <div class="w-full bg-white border rounded-full h-2.5 mt-5">
                    <div class="bg-[#253237] h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <h1 class="mt-3">0% complete</h1>
            </div>
        </div>
    </div>
</div>
