<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
@extends('layout.main')

@section('home', 'active')

@section('title', 'Welcome')

@section('content')

<body>
<div class="signUpPage">
    <div class="container" style="margin: 10px; background-color: white;">
        <div class="row">
        <p class="h1">Sign Up</p>

            <div class="col-md-5 col-12">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label><br><br>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}"
                        style="border-color : #f25353;"><br>
                    </div>

                    <div class="form-group">
                        <label for="ttl">Tanggal Lahir</label><br><br>
                        <input type="date" id="ttl" name="ttl" class="form-control" value="{{ old('ttl') }}"
                        style="border-color : #f25353;">
                        <br>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp</label><br><br>
                            <div class="input-group mb-3" id="no_hp">
                                <span class="input-group-text"></span>
                                    <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}" style="border-color :#f25353"><br>
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label><br><br>
                            <input type="number" class="form-control" value="{{ old('NIK') }}" style="border-color : #f25353;"><br>
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label">Foto KTP</label><br>
                        <input class="form-control" type="file" id="formFile" style="border-color : #f25353;">
                    </div><br>
                    <button type="signup" class="signupButton" style="background-color: #f44336;">Sign Up</button>
                </form>
            </div>

            <div class="col-md-5 col-12" style="margin left: 20px">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label><br><br>
                      <input type="email" class="form-control" id="email" style="border-color : #f25353;"><br>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label><br><br>
                      <input type="password" class="form-control" id="password" style="border-color : #f25353;"><br>
                    </div>

                    <div class="form-group">
                      <label for="confirmPassword">Konfirmasi Password</label><br><br>
                      <input type="password" class="form-control" id="confirmPassword" style="border-color : #f25353;"><br>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

</body>
@endsection