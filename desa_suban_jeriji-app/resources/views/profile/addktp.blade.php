@extends('layouts.mainadmin')

@section('title')
    Upload KTP
@endsection

@section('konten')
<form action="/ktp/{{ $ktp->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Upload KTP
                </center>
              </div>
            <div class="card-body">



                <div class="form-group col-xl-6 col-lg-8">
                    <label for="ktp" class="form-label">Upload Ktp</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="ktp" name="ktp"  >
                </div>
                @error('ktp')
                <div class="alert alert-danger">Foto KTP Tidak Boleh Kosong</div>
                @enderror
            
            
                <div class="form-group col-xl-6 col-lg-8">
                      
                    <input type="hidden" class="form-control" name="status" id="status" value="pengecekan" >
                </div>




                <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </center>
              
            </div>
            <div class="card-footer">
                <p><i>~* Wajib diisi <br>
                      ~Isikan nama dengan nama lengkap</i></p>
                <p><i></i></p>
              </div>
        </div>
        
    </div>

    

      
      
      
</form>

@endsection