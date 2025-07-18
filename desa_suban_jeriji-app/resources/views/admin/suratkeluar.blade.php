@extends('layouts.mainadmin')

@section('title')
    Daftar Surat Keluar
@endsection

@section('konten')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-info">
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Jenis Surat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
              
                <tbody>
                    @forelse ($ktpsurat as $no => $item)
                    <tr>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>
                            <a href="/permintaansuratpengantarktpadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                      </svg>
                                </i>    
                            </button></a> 
                        </td>
                        
                        
                    </tr>
                        
                    @empty
                    <tr>
                    </tr>
                        
                    @endforelse


                    @forelse ($kk as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>

            <td>
                <a href="/permintaansuratpengantarkkadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
        </tr>
            
        @endforelse


        @forelse ($domisili as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>

            <td>
                <a href="/permintaansuratdomisiliadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
          
        </tr>
            
        @endforelse


        @forelse ($lahir as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
           
            <td>
                <a href="/permintaansuratlahiradmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse


        @forelse ($mati as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
           
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansuratmatiadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse

        @forelse ($usaha as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansuratusahaadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>  
                  </i>  
                
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse


        @forelse ($tidak as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansurattidakmampuadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse




                   
                </tbody>
            </table>
        </div>
    </div>
</div>


  
  {{-- <table class="table table-striped table-bordered">
      <thead class="bg-info">
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Jenis Surat</th>
          <th scope="col">Aksi</th>


          
         
        </tr>
      </thead>
      <tbody>
        @forelse ($ktpsurat as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
            <td>
                <a href="/permintaansuratpengantarktpadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
        </tr>
            
        @endforelse


        @forelse ($kk as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>

            <td>
                <a href="/permintaansuratpengantarkkadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
        </tr>
            
        @endforelse


        @forelse ($domisili as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>

            <td>
                <a href="/permintaansuratdomisiliadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
          
        </tr>
            
        @endforelse


        @forelse ($lahir as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
           
            <td>
                <a href="/permintaansuratlahiradmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse


        @forelse ($mati as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
           
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansuratmatiadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse

        @forelse ($usaha as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansuratusahaadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>  
                  </i>  
                
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse


        @forelse ($tidak as $no => $item)
        <tr>
            <td>{{ $item->nomor }}</td>
            <td>{{ $item->jenis }}</td>
            
            <td>
                <a href="/permintaansurattidakmampuadmin/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                    </i>    
                </button></a> 
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            
        </tr>
            
        @endforelse
      </tbody>
    </table> --}}
    {{-- @include('sweetalert::alert') --}}
    
@endsection