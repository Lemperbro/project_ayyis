<table border="1" style="width: 100%;">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIA</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Ranting</th>
      <th>Cabang</th>
      <th>Tingkatan</th>
    </tr>
  </thead>
  <tbody>
@foreach ($data as $item) 
      <tr>
        <td>1</td>
        <td>{{ $item->nama }}</td>
        <td>{{ asset('ft_anggota/'.$item->image) }}</td>
        <td>{{ $item->nia }}</td>
        <td>Jl. Merdeka No. 10, Jakarta</td>
        <td>Ranting 1</td>
        <td>Cabang Jakarta</td>
        <td>Anggota</td>
      </tr>
@endforeach
  </tbody>
</table>
