
<h1>Datar Mahasiswa Jurusan TI</h1>
<table style="border-collapse: collapse" border="1">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->prodi_id }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
    @endforeach
</table>

