@extends('mahasiswa.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Mahasiswa
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nim">Nim</label> 
                    <input type="text" name="nim" class="form-control" id="Nim" value="{{ $mahasiswa->nim }}" aria-describedby="Nim" > 
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="Nama" value="{{ $mahasiswa->nama }}" aria-describedby="Nama" > 
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label> 
                    <select class="form-control" name="kelas_id">
                        @foreach($kelas as $kls)
                            <option value="{{$kls->id}}" {{$mahasiswa->kelas_id ==$kls->id ? 'selected' : ''}}>{{$kls->nama_kelas}}</option>
                        @endforeach 
                    </select> 
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label> 
                    <input type="text" name="jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="Jurusan" > 
                </div>
                <div class="form-group">
                    <label for="Email">Email</label> 
                    <input type="text" name="email" class="form-control" id="Email" value="{{ $mahasiswa->email }}" aria-describedby="Email" > 
                </div>
                <div class="form-group">
                    <label for="Alamt">Alamat</label> 
                    <input type="text" name="alamat" class="form-control" id="Alamat" value="{{ $mahasiswa->alamat }}" aria-describedby="Alamat" > 
                </div>
                <div class="form-group">
                    <label for="Tanggal lahir">Tanggal lahir</label> 
                    <input type="date" name="ttl" class="form-control" id="TanggalLahir" value="{{ $mahasiswa->ttl }}" aria-describedby="TanggalLahir" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection