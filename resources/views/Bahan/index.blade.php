<h1>Data pesanan</h1>

<table border="1">
<tr>
    <th>1</th>
    <th>Pesanan</th>
    <th>Jumlah Pesanan</th>
    <th>Level Pedas</th>
    <th>Riviews</th>
    <th>Price</th>

</tr>
@foreach ($bahan as $b )

<tr>
    <td>{{ $b->id }}</td>
    <td>{{ $b->menu }}</td>
    <td>{{ $b->older_items }}</td>
    <td>{{ $b->LevelPedas }}</td>
    <td>{{ $b->Riviews }}</td>
    <td>{{ $b->payment }}</td>
</tr>
@endforeach

</table>