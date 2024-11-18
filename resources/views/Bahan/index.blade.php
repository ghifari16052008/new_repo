<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-7">
    <a href="/datapembeli/create" class="btn btn-success btn-sm"> Tambah Data</a>
    <a href="/datapembeli" class="btn btn-warning btn-sm">Kembali</a>
    @if (session()->get('msg'))
    <div class="alert alert-success mt-1 text-center">
        {{session('msg')}}
        <meta http-equiv="refresh" content="5;{{'/datapembeli'}}">
    </div>
    
    @endif
</div>
<h1 class="text-center my-4">Data Pesanan</h1>
<div class="container">
    <!-- Table with Bootstrap classes -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Level Pedas</th>
                <th>Riviews</th>
                <th>Price</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bahan as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->menu }}</td>
                <td>{{ $b->older_items }}</td>
                <td>{{ $b->LevelPedas }}</td>
                <td>{{ $b->Riviews }}</td>
                <td>{{ $b->payment }}</td>
                <td>
                    <a href="/datapembeli/{{ $b->id }}/update" class="btn btn-sm btn-warning">Update</a>
                    <form action="/bahan/{{$b->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger mt-2" type="submit" onclick="return confirm('apakah kamu yakin ?')">
                            Delte
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
