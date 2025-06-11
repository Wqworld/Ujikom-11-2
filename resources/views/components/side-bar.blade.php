<div x-data="{ open: false }" >

    <div class="bg-gray-600 border-b-1">

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" @click="open = !open" type="button"
        type="button"
        class="inline-flex items-center p-2 mt-5 ms-3 text-sm text-gray-500  rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
    </path>
</svg>
</button>
</div>


    @if (session('admin'))
        
   <aside id="default-sidebar" :class="{ '-translate-x-full': !open }"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" @click="open = false" type="button"
        type="button"
        class="inline-flex items-center p-2 mt-2  text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        </button>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('beranda.admin') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard Admin</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.hewan') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="#9a9996" width="77px" height="77px" viewBox="0 0 512.00 512.00" xmlns="http://www.w3.org/2000/svg" stroke="#9a9996" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="5.12"></g><g id="SVGRepo_iconCarrier"><path d="M16.44 309.74c-2.44 11.52-2.82 21.72-1.14 30.61 2.57 13.13 9.94 29.4 25.12 29.08 1.13-.03 5.08-.63 7.58-1.43 0 26.51 10.75 50.51 28.12 67.88 24.77 24.77 61.13 34.06 94.65 24.34C187.28 491.97 220.02 512 256 512c35.98 0 68.72-20.03 85.23-51.78 33.52 9.72 69.88.43 94.65-24.34C453.25 418.51 464 394.51 464 368c2.5.8 6.45 1.4 7.58 1.43 15.18.32 22.55-15.95 25.12-29.08 1.68-8.89 1.3-19.09-1.14-30.61C506.33 293.83 512 275.21 512 256c0-35.98-20.03-68.72-51.78-85.23 9.71-33.52.44-69.87-24.34-94.65-24.77-24.78-61.12-34.05-94.65-24.34C324.72 20.03 291.97 0 256 0c-35.97 0-68.72 20.03-85.23 51.78-33.53-9.71-69.88-.44-94.65 24.34-24.78 24.78-34.05 61.13-24.34 94.65C20.03 187.28 0 220.02 0 256c0 19.21 5.67 37.83 16.44 53.74zM256 480c-34.46 0-61.85-26.98-63.88-60.02l-7.02-2.91c-24.94 20.91-62.54 20.01-86.36-3.81C87.16 401.68 80 385.67 80 368c0-5.84.79-11.51 2.25-16.88 3.9-2.84 7.26-5.96 10.07-9.36 13.24-16.01 18.13-20.42 15.82-41.15-4.79-12.3-6.07-36.94-5.81-53.6.26-16.66.64-25.63 6.8-38.79 1.37-2.75-21.6 7.52-24.51 9.37-22.59 14.4-34.88 32.69-50.56 54.59A64.403 64.403 0 0 1 32 256c0-34.17 27-61.79 60.02-63.87l2.92-7.02c-20.89-24.87-20.09-62.47 3.8-86.37 23.9-23.89 61.49-24.69 86.36-3.81l7.02-2.91C194.15 58.98 221.53 32 256 32s61.85 26.98 63.88 60.02l7.02 2.91c24.87-20.88 62.46-20.08 86.36 3.81 23.89 23.9 24.69 61.5 3.8 86.37l2.92 7.02C453 194.21 480 221.83 480 256c0 5.59-.72 11.01-2.06 16.18-15.68-21.9-27.97-40.19-50.56-54.59-2.91-1.85-25.88-12.12-24.51-9.37 6.16 13.16 6.54 22.13 6.8 38.79.26 16.66-1.02 41.3-5.81 53.6-2.31 20.73 2.58 25.14 15.82 41.15 2.81 3.4 6.17 6.52 10.07 9.36A64.32 64.32 0 0 1 432 368c0 17.67-7.16 33.68-18.74 45.26-23.82 23.82-61.42 24.72-86.36 3.81l-7.02 2.91C317.85 453.02 290.46 480 256 480zM145.75 196.32c-7 20.16-10.51 39.72-10.51 58.69 0 26.31 3.46 50.23 10.38 71.76C162.49 379.24 197 421 256 421c59.32 0 93.38-41.36 110.16-94.23 6.83-21.53 10.25-45.45 10.25-71.76 0-14.35-1.71-28.36-5.13-42.03-10.42 0-19.94-3.89-28.57-11.66-8.63-7.78-14.05-16.96-16.28-27.56-4.61 5.3-10.08 9.74-16.4 13.33-6.32 3.59-12.64 5.38-18.96 5.38-10.43 0-21.79-6.49-34.09-19.47-2.05 9.56-6.75 17.89-14.1 24.98-7.34 7.09-15.72 10.64-25.11 10.64-7.35 0-14.4-2.86-21.15-8.59-6.75-5.72-11.83-12.34-15.24-19.86-7.19 7.19-14.92 16.66-27.94 16.66-2.4 0-5.34-.01-7.69-.51zm73.68 68.82c0 15.15-12.28 27.43-27.43 27.43s-27.43-12.28-27.43-27.43c0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42zM320 292.57c-15.15 0-27.43-12.28-27.43-27.43 0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42c0 15.15-12.28 27.43-27.43 27.43z"></path></g></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Hewan Hewan</span>
                    
                    </a>
                </li>
                <li>    
                    <a href="{{ route('admin.penjual') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 18">
                        <path
                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile Penjual</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </aside>
    @else
        <aside id="default-sidebar" :class="{ '-translate-x-full': !open }"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" @click="open = false" type="button"
        type="button"
        class="inline-flex items-center p-2 mt-2  text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        </button>

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('beranda.penjual') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('hewan.penjual') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="#9a9996" width="77px" height="77px" viewBox="0 0 512.00 512.00" xmlns="http://www.w3.org/2000/svg" stroke="#9a9996" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="5.12"></g><g id="SVGRepo_iconCarrier"><path d="M16.44 309.74c-2.44 11.52-2.82 21.72-1.14 30.61 2.57 13.13 9.94 29.4 25.12 29.08 1.13-.03 5.08-.63 7.58-1.43 0 26.51 10.75 50.51 28.12 67.88 24.77 24.77 61.13 34.06 94.65 24.34C187.28 491.97 220.02 512 256 512c35.98 0 68.72-20.03 85.23-51.78 33.52 9.72 69.88.43 94.65-24.34C453.25 418.51 464 394.51 464 368c2.5.8 6.45 1.4 7.58 1.43 15.18.32 22.55-15.95 25.12-29.08 1.68-8.89 1.3-19.09-1.14-30.61C506.33 293.83 512 275.21 512 256c0-35.98-20.03-68.72-51.78-85.23 9.71-33.52.44-69.87-24.34-94.65-24.77-24.78-61.12-34.05-94.65-24.34C324.72 20.03 291.97 0 256 0c-35.97 0-68.72 20.03-85.23 51.78-33.53-9.71-69.88-.44-94.65 24.34-24.78 24.78-34.05 61.13-24.34 94.65C20.03 187.28 0 220.02 0 256c0 19.21 5.67 37.83 16.44 53.74zM256 480c-34.46 0-61.85-26.98-63.88-60.02l-7.02-2.91c-24.94 20.91-62.54 20.01-86.36-3.81C87.16 401.68 80 385.67 80 368c0-5.84.79-11.51 2.25-16.88 3.9-2.84 7.26-5.96 10.07-9.36 13.24-16.01 18.13-20.42 15.82-41.15-4.79-12.3-6.07-36.94-5.81-53.6.26-16.66.64-25.63 6.8-38.79 1.37-2.75-21.6 7.52-24.51 9.37-22.59 14.4-34.88 32.69-50.56 54.59A64.403 64.403 0 0 1 32 256c0-34.17 27-61.79 60.02-63.87l2.92-7.02c-20.89-24.87-20.09-62.47 3.8-86.37 23.9-23.89 61.49-24.69 86.36-3.81l7.02-2.91C194.15 58.98 221.53 32 256 32s61.85 26.98 63.88 60.02l7.02 2.91c24.87-20.88 62.46-20.08 86.36 3.81 23.89 23.9 24.69 61.5 3.8 86.37l2.92 7.02C453 194.21 480 221.83 480 256c0 5.59-.72 11.01-2.06 16.18-15.68-21.9-27.97-40.19-50.56-54.59-2.91-1.85-25.88-12.12-24.51-9.37 6.16 13.16 6.54 22.13 6.8 38.79.26 16.66-1.02 41.3-5.81 53.6-2.31 20.73 2.58 25.14 15.82 41.15 2.81 3.4 6.17 6.52 10.07 9.36A64.32 64.32 0 0 1 432 368c0 17.67-7.16 33.68-18.74 45.26-23.82 23.82-61.42 24.72-86.36 3.81l-7.02 2.91C317.85 453.02 290.46 480 256 480zM145.75 196.32c-7 20.16-10.51 39.72-10.51 58.69 0 26.31 3.46 50.23 10.38 71.76C162.49 379.24 197 421 256 421c59.32 0 93.38-41.36 110.16-94.23 6.83-21.53 10.25-45.45 10.25-71.76 0-14.35-1.71-28.36-5.13-42.03-10.42 0-19.94-3.89-28.57-11.66-8.63-7.78-14.05-16.96-16.28-27.56-4.61 5.3-10.08 9.74-16.4 13.33-6.32 3.59-12.64 5.38-18.96 5.38-10.43 0-21.79-6.49-34.09-19.47-2.05 9.56-6.75 17.89-14.1 24.98-7.34 7.09-15.72 10.64-25.11 10.64-7.35 0-14.4-2.86-21.15-8.59-6.75-5.72-11.83-12.34-15.24-19.86-7.19 7.19-14.92 16.66-27.94 16.66-2.4 0-5.34-.01-7.69-.51zm73.68 68.82c0 15.15-12.28 27.43-27.43 27.43s-27.43-12.28-27.43-27.43c0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42zM320 292.57c-15.15 0-27.43-12.28-27.43-27.43 0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42c0 15.15-12.28 27.43-27.43 27.43z"></path></g></svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Hewan saya</span>
                        
                    </a>
                </li>
                <li>    
                    <a href="{{ route('profile.penjual') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('create.hewan') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="4 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g id="SVGRepo_bgCarrier" stroke-width="0">

                        </g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">

                            </g>
                            <g id="SVGRepo_iconCarrier"> 
                                <path opacity="0.5" d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22Z" fill="#c0bfbc">
                                    </path>
                                     <path d="M12 8.25C12.4142 8.25 12.75 8.58579 12.75 9V11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H12.75L12.75 15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V12.75H9C8.58579 12.75 8.25 12.4142 8.25 12C8.25 11.5858 8.58579 11.25 9 11.25H11.25L11.25 9C11.25 8.58579 11.5858 8.25 12 8.25Z" fill="#c0bfbc">
                            </path>
                        </g>
                    </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Tambah Hewan</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('logout') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </aside>
    @endif

    <div class="sm:ml-64 p-10">
        {{ $slot }}
    </div>
</div>