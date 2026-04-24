<x-layout :title="$title">

    <form action="/kosts" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Kost</label>
            <input type="text" name="nama_kost" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga per Bulan</label>
            <input type="number" name="harga_per_bulan" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Fasilitas</label>
            <input type="text" name="fasilitas" class="form-control" placeholder="Contoh: WiFi, AC, Kamar Mandi">
        </div>

        <div class="mb-3">
            <label class="form-label">Kontak</label>
            <input type="text" name="kontak" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/kosts" class="btn btn-secondary">Kembali</a>
    </form>

</x-layout>
