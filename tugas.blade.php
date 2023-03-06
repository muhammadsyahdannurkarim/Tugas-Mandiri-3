@php
$no = 1;
//array scalar
$s1 = ['nama'=>'Fawwaz', 'Alamat'=>'Jakarta'];
$s2 = ['nama'=>'Inaya', 'Alamat'=>'Depok'];
$s3 = ['nama'=>'Zidan', 'Alamat'=>'Sinjai'];
$s4 = ['nama'=>'Bambang', 'Alamat'=>'Mojokerto'];
$s5 = ['nama'=>'Unyil', 'Alamat'=>'Bandung'];
$judul = ['No','Nama','Alamat'];
//array associative
$siswa = [$s1,$s2,$s3,$s4];
@endphp

<h3 align="center">Daftar MahaSiswa</h3>
<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
        @foreach($judul as $jdl)
            <th>{{ $jdl }}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $sis)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $sis['nama'] }}</td>
                <td>{{ $sis['Alamat'] }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>