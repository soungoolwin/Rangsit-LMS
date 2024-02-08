<!-- dropdown-menu.blade.php -->

<div x-data="{
    open: false,
    toggle() {
        this.open = !this.open;
        if (this.open) {
            this.$refs.panel.focus();
        }
    },
    close() {
        this.open = false;
    }
}" @click.away="close()" class="relative">
    <!-- Button -->
    <button x-on:click="toggle()" aria-expanded="open ? 'true' : 'false'" type="button"
        class="flex items-center gap-2 bg-white px-5 py-2.5 rounded-md shadow">
        {{ $options['button_text'] }}
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Panel -->
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" x-ref="panel" tabindex="0"
        @keydown.escape.window="close()" class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
        style="display: none;">
        @foreach ($options['menu_items'] as $index => $item)
            <a href="#" wire:click.prevent="changeButtonText({{ $index }}), close()"
                class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 {{ isset($item['disabled']) && $item['disabled'] ? 'disabled:text-gray-500' : '' }}">
                {{ $item['text'] }}
            </a>
        @endforeach
    </div>
</div>
