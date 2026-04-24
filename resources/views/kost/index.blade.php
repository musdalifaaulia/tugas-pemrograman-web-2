<x-layout>
    <h2>{{ $title }}</h2>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="/kost/create">Tambah Kost</a>

    <ul>
        @foreach ($kosts as $kost)
            <li>
                {{ $loop->iteration }}.
                {{ $kost->nama_kost }} - {{ $kost->alamat }}
                | Harga: Rp {{ number_format($kost->harga_per_bulan) }}
                | Fasilitas: {{ $kost->fasilitas }}
                | Kontak: {{ $kost->kontak }}

                <a href="{{ route('kost.edit', $kost->id) }}">Edit</a>

                <form action="{{ route('kost.destroy', $kost->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
