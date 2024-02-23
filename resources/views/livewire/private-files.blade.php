<div>
    <div class="px-5 py-6 mx-auto overflow-hidden bg-white rounded shadow-md">
        <div class="flex">
            <img src="{{ Vite::image('profile_pic.png') }}" alt="" class="ml-5 rounded-full">
            <h1 class="mt-2 ml-5 text-2xl">SAUNG OO LWIN</h1>
            <span class="flex ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                </svg>
                <p>Message</p>
            </span>
        </div>

        <div class="flex mt-3">
            <button class="px-4 py-2 mr-1 duration-300 bg-gray-200 rounded-lg hover:bg-gray-300">Dashboard</button>
            <button class="px-4 py-2 mr-1 duration-300 bg-gray-200 rounded-lg hover:bg-gray-300">Site pages</button>
            <button class="px-4 py-2 mr-1 duration-300 bg-gray-200 rounded-lg hover:bg-gray-300">Private files</button>

        </div>
    </div>

    <div class="px-5 py-8 mt-5 overflow-hidden bg-white rounded shadow-md ">

        <div class="flex">

            <div class="w-[35%]">
                <h2>Files</h2>
            </div>

            <div class=" w-[65%]  ">
                <p class="text-right">Maximum size for new files: 50MB, overall limit 50MB</p>
                <div class="border">
                    {{-- icons --}}
                    <div class="flex justify-between m-2">
                        <div class="flex ">
                            <x-svgs.file-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                            <x-svgs.folder-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                            <x-svgs.download-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                        </div>

                        <div class="flex ">
                            <x-svgs.grid-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                            <x-svgs.list-ul-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                            <x-svgs.folder-icon class="w-[38px] p-[5px] mr-1 h-[28px] bg-gray-200 cursor-pointer" />
                        </div>
                    </div>
                    {{-- file upload--}}
                    <div class="p-8 border border-top">
                        <livewire:file-upload>
                    </div>
                </div>

                <div class="mt-4 ">
                    <button class="px-3 py-2 mr-2 text-white bg-black">Save changes</button>
                    <button class="px-3 py-2 mr-2 bg-gray-300">Cancel</button>
                </div>

            </div>

        </div>

    </div>
</div>