<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    /*
module.exports = {
    plugins: [
        require('tailwindcss-inset')({
            insets: {
                full: '100%'
            }
        })
    ]
};
*/
    .inset-l-full {
        left: 100%;
    }

</style>
{{-- <div class="flex flex-wrap place-items-center h-screen">
    <!-- buttons -->
    <div class="text-center">
        <button
            class="p-2 pl-5 pr-5 bg-transparent border-2 border-indigo-500 text-indigo-500 text-lg rounded-lg transition-colors duration-700 transform hover:bg-indigo-500 hover:text-gray-100 focus:border-4 focus:border-indigo-300">Login</button>
    </div>
</div> --}}

<div class="min-w-screen min-h-screen bg-gray-200 px-5 pb-5 pt-20">
    <div class="py-3 px-5 bg-white rounded shadow-xl">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-10">
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#"
                        class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 bg-indigo-500 text-white"
                        @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-xl"> <i class="mdi mdi-gauge"></i> </span>
                        <span>Mes notes</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                        x-show="showChildren" style="display: none;"
                        x-transition:enter="transition ease duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4">
                        <span
                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            <ul class="list-reset">
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="{{route('prive.index')}}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Mes notes priv??es</span> </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Mes notes public</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="block relative">
                    <a href="{{route('home')}}"
                        class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                        <span class="mr-3 text-xl"> <i class="mdi mdi-widgets-outline"></i> </span>
                        <span>Global</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#"
                        class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100"
                        @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-xl"> <i class="mdi mdi-layers-outline"></i> </span>
                        <span>Likes</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                        x-show="showChildren" x-transition:enter="transition ease duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                        <span
                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            <ul class="list-reset">
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Basic Elements</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute inset-l-full top-0 min-w-full w-56 z-30 mt-1"
                                        x-show="showChildren"
                                        x-transition:enter="transition ease duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease duration-300 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                        <span
                                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -ml-1 mt-2"></span>
                                        <div class="bg-white rounded w-full relative z-10 py-1">
                                            <ul class="list-reset">
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Accordion</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Buttons</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Badges</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Breadcrumbs</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Dropdown</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Modals</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Advanced Elements</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute inset-l-full top-0 min-w-full w-56 z-30 mt-1"
                                        x-show="showChildren"
                                        x-transition:enter="transition ease duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease duration-300 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                        <span
                                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -ml-1 mt-2"></span>
                                        <div class="bg-white rounded w-full relative z-10 py-1">
                                            <ul class="list-reset">
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Charts</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Maps</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Drag n Drop</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Slider</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Loader</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Notification</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Forms &amp; Tables</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute inset-l-full top-0 min-w-full w-56 z-30 mt-1"
                                        x-show="showChildren"
                                        x-transition:enter="transition ease duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease duration-300 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                        <span
                                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -ml-1 mt-2"></span>
                                        <div class="bg-white rounded w-full relative z-10 py-1">
                                            <ul class="list-reset">
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Form Elements</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Advanced Forms</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Basic Tables</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                        <span class="flex-1">Data Tables</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="relative" x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Icons</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#"
                        class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100"
                        @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-xl"> <i class="mdi mdi-web"></i> </span>
                        <span>Mon compte</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                        x-show="showChildren" x-transition:enter="transition ease duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                        <span
                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            
                        </div>
                    </div>
                </li>
                <!-- Green Button -->
                {{-- <a href="{{route('ckeditors.index')}}">Cr??er une note</a> --}}
                <button onclick="location.href='{{route('ckeditors.index')}}'" type="button" class="p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg transition-colors duration-700 transform hover:bg-green-500 hover:text-gray-100 focus:border-4 focus:border-green-300">
                    Cr??er une note</button>
            </ul>
        </div>
    </div>
</div>


