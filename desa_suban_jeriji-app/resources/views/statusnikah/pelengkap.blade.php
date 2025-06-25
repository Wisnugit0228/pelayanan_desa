@extends('beranda')

@section('title')
    Upload Dokumen
@endsection

@section('konten')








<form action="/pelengkapsuratstatus" method="POST" enctype="multipart/form-data">
    @csrf
    @method('GET')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Lengkapi Data
                </center>
              </div>
            <div class="card-body">
                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Upload KTP</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                    @error('foto')
                    <div class="alert alert-danger">Foto KTP Tidak Boleh Kosong</div>
                    @enderror
                </div>
                
                
                <div class="form-group col-xl-12">
                    <label for="statusnikah" class="form-label">Status</label><label for="" style="color: red">*</label>
                    <select name="statusnikah" id="statusnikah" class="form-control" >
                                <option value="">--pilih status--</option>
                                <option value="Janda">Janda</option>
                                <option value="Duda">Duda</option>
                        
                        
                    </select>
                    
                </div>
                
                
             
                <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <input type="text" class="form-control" name="surat_id" id="surat_id" value="{{ $status->id }}" >
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