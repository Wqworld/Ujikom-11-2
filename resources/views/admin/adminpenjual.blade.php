<x-layout>

   <x-side-bar>
      <div class="m-5">
         <p class="text-gray-500 text-xl sm:text-lg">Selamat Datang admin</p>
         <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl">
            {{ $admin->nama_admin }}
         </h1>
      </div>

      <div class="m-5">
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                     <th scope="col" class="px-6 py-3">
                        Nama
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Umur
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Nomor Hp
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Alamat
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Username
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Password
                  </tr>
               </thead>
               <tbody>
                  @foreach ($penjual as $item)
                  <tr
                     class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->nama_penjual }}
                     </th>
                     <td class="px-6 py-4">
                        {{ $item->umur_penjual }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->nomor_hp }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->alamat_penjual }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->username }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->password }}
                     </td>
                  </tr>
                  @endforeach
                  {{ $penjual->links() }}
               </tbody>
            </table>
         </div>

      </div>
   </x-side-bar>

</x-layout>