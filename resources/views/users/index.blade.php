<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parttime - User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Parttime - User Data</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Tambah Data</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Tinggi</th>
                    <th>Berat Badan</th>
                    <th>Agama</th>
                    <th>Kebangsaan</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                ?>
                @foreach ($pengguna as $pengguna)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $pengguna-> id_pengguna }}</td>
                        <td>{{ $pengguna-> nama }}</td>
                        <td>{{ $pengguna-> ttl }}</td>
                        <td>{{ $pengguna-> jenis_kelamin }}</td>
                        <td>{{ $pengguna-> tinggi }}</td>
                        <td>{{ $pengguna-> bb }}</td>
                        <td>{{ $pengguna-> agama }}</td>
                        <td>{{ $pengguna-> kebangsaan }}</td>
                        <td>{{ $pengguna-> status }}</td>
                        <td>{{ $pengguna-> alamat }}</td>
                        <td>{{ $pengguna-> no_hp }}</td>
                        <td>{{ $pengguna-> email }}</td>
                        <td>{{ $pengguna-> password }}</td>
                        <td>
                            <form action="{{ route('users.destroy',$pengguna->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('users.edit',$pengguna->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        $index++;
                    ?>
                    @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
    </div>
</body>
</html>