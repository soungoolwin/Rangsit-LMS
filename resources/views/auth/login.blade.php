<x-layouts.app>
    <nav class="grid grid-cols-2 gap-3 mx-4">
        <div class="">
            <img src="{{ Vite::image('rsulogo.png') }}" class="" alt="">
        </div>
        <div class="ml-auto mr-[50px] my-[15px] flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
            <a href="" class="ml-5 border-2 rounded-full px-4 py-3 lg:hidden block">Log in</a>
        </div>

    </nav>

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
            <div class="w-[70%] mx-auto mt-5 rounded overflow-hidden shadow-lg bg-white hidden lg:block">
                <div class="px-8 py-6">
                    <div class="font-bold text-xl mb-2">Access to the platform LMS</div>
                    <form class="max-w-[95%] mt-3">
                        <label for="username" class="block mb-2 text-md font-medium text-gray-900">Username</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>

                            </span>
                            <input type="text" id="website-admin"
                                class="rounded-none pt-3 bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="StudentID">
                        </div>
                        <p class="text-red-600 pt-3">ตัวอย่างเช่น 6000012</p>

                        <label for="password" class="block mb-2 text-md font-medium text-gray-900">Password</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>


                            </span>
                            <input type="text" id="website-admin"
                                class="rounded-none bg-gray-50 border pt-3 border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="StudentID">
                        </div>
                        <p class="text-red-600 pt-3">ตัวอย่างเช่น 6000012</p>

                        <div class="mt-3">
                            <button class="bg-[#2F3F45] text-white py-4 px-6">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 my-10 mx-[10%]">
        <div class="w-[100%] mx-auto mt-5 rounded overflow-hidden shadow-lg bg-white relative lg:bottom-[100px]">
            <div class="py-8 mx-auto text-center">
                <img src="{{ Vite::image('login.png') }}" alt="" class="mx-auto">
                <h1 class="text-2xl my-3">วิธีการ log in เข้าระบบ</h1>
                <h1>How to log in.</h1>
                <button class="bg-[#2F3F45] text-white mt-3 py-4 px-6">Read More</button>
            </div>
        </div>
        <div class="w-[100%] mx-auto mt-5 rounded overflow-hidden shadow-lg bg-white relative lg:bottom-[100px]">
            <div class="py-8 mx-auto text-center">
                <img src="{{ Vite::image('opencourse.png') }}" alt="" class="mx-auto">
                <h1 class="text-2xl my-3">แบบฟอร์มขอเปิดรายวิชา</h1>
                <h1>Open a course in Rangsit LMS</h1>
                <button class="bg-[#2F3F45] text-white mt-3 py-4 px-6">Read More</button>
            </div>
        </div>
        <div class="w-[100%] mx-auto mt-5 rounded overflow-hidden shadow-lg bg-white relative lg:bottom-[100px]">
            <div class="py-8 mx-auto text-center">
                <img src="{{ Vite::image('manual.png') }}" alt="" class="mx-auto">
                <h1 class="text-2xl my-3">คู่มือการใช้งานระบบ LMS</h1>
                <h1>Manual</h1>
                <button class="bg-[#2F3F45] text-white mt-3 py-4 px-6">Read More</button>
            </div>
        </div>
        <div class="w-[100%] mx-auto mt-5 rounded overflow-hidden shadow-lg bg-white relative lg:bottom-[100px]">
            <div class="py-8 mx-auto text-center">
                <img src="{{ Vite::image('unabletologin.png') }}" alt="" class="mx-auto">
                <h1 class="text-2xl my-3">แจ้งเข้าระบบไม่ได้</h1>
                <h1>Unable to login</h1>
                <button class="bg-[#2F3F45] text-white py-4 px-6">Read More</button>
            </div>
        </div>
    </div>

    <div class="bg-[#63A8E9] px-8 py-10 lg:flex">
        <div>
            <h1 class="text-3xl">Stay in touch</h1>
            <p class="mt-4">ศูนย์บริการทางวิชาการ (RSU CyberU)</p>
            <p class="flex items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
                <a href="https://cyberuonline.rsu.ac.th">https://cyberuonline.rsu.ac.th</a>
            </p>
            <p class="flex items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <a href="">Tel : 02-997-2222 ต่อ 4160</a>
            </p>
            <p class="flex items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <a href="">cyberu@rsu.ac.th</a>
            </p>
        </div>

        <div class="ml-auto mt-5">
            <div class="flex">
                <a href="" class="bg-[#3C5997] px-4 py-2 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </a>
                <a href="" class="flex bg-[#CC171F] px-4 py-2 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </a>
                <a href="" class="flex bg-[#50226A] px-4 py-2 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </a>
            </div>

            <div class="flex mt-5 p-3 bg-[#B8C1CA]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                </svg>

                <h1 class="mx-2">Data retention summary</h1>
            </div>
            <div class="flex mt-5 p-3 bg-[#253237]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 text-[#B8C1CA]">
                    <path d="M10.5 18.75a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" />
                    <path fill-rule="evenodd"
                        d="M8.625.75A3.375 3.375 0 0 0 5.25 4.125v15.75a3.375 3.375 0 0 0 3.375 3.375h6.75a3.375 3.375 0 0 0 3.375-3.375V4.125A3.375 3.375 0 0 0 15.375.75h-6.75ZM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 0 1 7.5 19.875V4.125Z"
                        clip-rule="evenodd" />
                </svg>

                <h1 class="mx-2 text-[#B8C1CA]">Get the mobile app</h1>
            </div>
        </div>
    </div>


</x-layouts.app>
