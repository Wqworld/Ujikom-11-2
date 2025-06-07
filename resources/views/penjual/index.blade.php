<x-layout>
    <div class="m-auto">

        <h1 class="font-exile">halaman penjual</h1>
        <a href="{{ route('create.hewan')}}">Tambah Hewan</a>
        <h1>{{ session('penjual' )->nama_penjual }}</h1>
        <a href="logout">logout</a>
    </div>
</x-layout>