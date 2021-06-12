<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <style>.footer {
 clear: both;
 margin-top:300px;
 background-color: #eee;
 padding:10px 8px;
}</style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link">Home</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container mt-3">
        <h2 class="mt-5">Data Dokter</h2>
        <p class="lead">Data Dokter</p>
        <div class="d-flex justify-content-between pt-2">
            <div class="d-flex">
            </div>
            <div class="mr-2 mb-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Import</button>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLongTitle">Import Data Dokter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('dokter.import') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="file">Import File</label>
                                <input type="file" name="file" id="file" class="form-control" accept="xlsx,xls">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
<div class="footer">
		<center>Untag dan ongky watermark Copyright &copy; 2021 - <a href="https://www.instagram.com/ongky_pramuja/">Ongky Pramuja</a></center>
        <center>titip promosi kak && jual ikan cupang terbaik - <a href="https://www.instagram.com/ontbetta.sub/">Ontbettasub</a></center>
	</div>
<script src="{{ URL::asset('js/app.js') }}"></script>

</html> 
