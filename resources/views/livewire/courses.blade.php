<div>
    <div class="mx-auto bg-white rounded overflow-hidden shadow-md px-5 py-6 mb-5">
        <h1 class="mb-3 text-4xl">ภาควิชาเคมี</h1>
        <div class="flex">
            <button class="rounded-lg px-4 py-2 bg-gray-200 hover:bg-gray-300 duration-300 mr-1">Dashboard</button>
            <button class="rounded-lg px-4 py-2 bg-gray-200 hover:bg-gray-300 duration-300 mr-1">Courses</button>
            <button class="rounded-lg px-4 py-2 bg-gray-200 hover:bg-gray-300 duration-300 mr-1">คณะวิทยาศาสตร์</button>
            <button class="rounded-lg px-4 py-2 bg-gray-200 hover:bg-gray-300 duration-300 mr-1">ภาควิชาเคมี</button>
        </div>
    </div>

    <div class="mx-auto bg-white rounded overflow-hidden shadow-md px-5 py-6 mb-5">
        <div class="flex justify-center items-center mx-auto">
            <p class="mr-3">Course Categories</p>
            <form class="w-[80%]">
                <fieldset>
                    <div class="relative border border-gray-300 text-gray-800 bg-white shadow-lg">
                        <label for="frm-whatever" class="sr-only">My field</label>
                        <select class="appearance-none w-full py-1 px-2 bg-white" name="whatever" id="frm-whatever">
                            <option value="">Please choose&hellip;</option>
                            <option value="1">Item 1</option>
                            <option value="2">Item 2</option>
                            <option value="3">Item 3</option>
                        </select>
                        <div
                            class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="mt-5">
            <x-searchbox />
        </div>

        <div class="mt-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">
                        {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Button
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Button
                        </button> --}}
                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                    <!-- Image Section -->
                    <div class="relative h-56">
                        <img class="absolute object-cover w-full h-full" src="{{ Vite::image('rsubg.png') }}"
                            alt="Image">
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">IRS160 / RSU160 Digital Media Literacy (Dr. Chutima and Dr.
                            Waiwit)</h2>
                    </div>

                    <!-- Button Section -->
                    <div class="px-6 py-4 bg-gray-100">

                        <div class="flex justify-between">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>

                            </div>
                            <div class="">
                                <button
                                    class="bg-[#263238] hover:hover:bg-gray-900 text-white font-bold py-2 px-4 rounded ml-2">
                                    Access
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
