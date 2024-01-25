<x-layouts.app>
    <div class="bg-[#ECEDEE] h-screen">
        <div class="flex justify-center">
            <img src="{{ Vite::image('rsulogo.png') }}" alt="" class="mt-[80px]">
        </div>


        <div class="grid lg:grid-cols-2 grid-cols-1 w-[60%] mx-auto">
            <div class="bg-[#253237] pt-[80px] pb-[140px] px-5 rounded-s-xl">
                <h1 class="text-white text-2xl mb-4">Rangsit Learning Management System</h1>
                <p class="text-white mb-4"> Cookies must be enabled in your browser</p>
                <p class="text-white mb-4">Is this your first time here?</p>
            </div>
            <div class="pt-5 px-5 bg-white rounded-br-xl rounded-tr-xl">
                <x-login-form />
            </div>
        </div>
    </div>

</x-layouts.app>
