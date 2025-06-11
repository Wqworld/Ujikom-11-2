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
                        Penjual
                     </th>
                     <th scope="col" class="px-6 py-3">
                        jenis
                     </th>
                     <th scope="col" class="px-6 py-3">
                        status
                     </th>
                     <th scope="col" class="px-6 py-3">
                        deksripsi
                     </th>
                     <th scope="col" class="px-6 py-3">
                        kesehatan
                     </th>
                     <th scope="col" class="px-6 py-3">
                        umur hewan
                     <th scope="col" class="px-6 py-3">
                        harga Hewan
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Berat Hewan
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Harga Dp
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Gambar
                     </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($hewan as $item)
                  <tr
                     class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->penjual->nama_penjual }}
                     </th>
                     <td class="px-6 py-4">
                        {{ $item->jenis }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->status }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->deksripsi }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->kesehatan }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->umur_hewan }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->harga_hewan }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->berat_hewan }}
                     </td>
                     <td class="px-6 py-4">
                        {{ $item->hargadp_hewan }}
                     </td>
                     <td class="px-6 py-4">
                        <img class="w-10" src="{{ asset('storage/foto_Hewan/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                        
                     </td>
                  </tr>
                  @endforeach
                  {{ $hewan->links() }}
               </tbody>
            </table>
         </div>

      </div>
   </x-side-bar>

</x-layout>