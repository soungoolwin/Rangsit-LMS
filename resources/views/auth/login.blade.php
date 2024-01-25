<x-layouts.app>
    <x-navigation />
    <div class="h-[250px] lg:h-[550px]"
        style="background-image: url('{{ Vite::image('loginhero.png') }}'); background-size: cover; background-position: top;">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
            <div class="leading-3 ml-[4rem] mt-[2rem]">
                <h1 class="text-4xl text-[#ffffff] tracking-widest">
                    Rangsit
                    Learning Management System
                </h1>
                <h1 class="text-2xl mt-[25px] tracking-widest text-[#ffffff]">Rangsit University มหาวิทยาลัยรังสิต
                </h1>
            </div>
            <div>
                <x-login-form />
            </div>
        </div>
    </div>
    <x-usermanual />
    <x-footer />
</x-layouts.app>
