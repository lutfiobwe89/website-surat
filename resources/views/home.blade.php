@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
          <main class="content px-3 py-2" style="background-color: #F6F9FF">
               @if (Session::get('cantAccess'))
               <div class="alert alert-danger">{{ Session::get('cantAccess') }}</div>
           @endif
               <div class="container-fluid">
               <div class="mb-3">
                    <h4>Admin Dashboard</h4>
               </div>
               <div class="row">
                    <div class="container px-4 ">
                         <div class="row g-3 my-2 mb-4">
                              <div class="col-md-7">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">6</h3>
                                        <p class="fs-5">Surat Keluar</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-4">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">1</h3>
                                        <p class="fs-5">Klasifikasi Surat</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">5</h3>
                                        <p class="fs-5">Staff Tata Usaha</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>
                              <div class="col-md-7">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">2</h3>
                                        <p class="fs-5">Guru</p>
                                   </div>
                                   <i class="ri-bookmark-fill fs-1"></i>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               </div>
          </main>
           
          <footer class="footer">
               <div class="container-fluid">
               <div class="row text-muted">
                    <div class="col-6 text-start">
                         <p class="mb-5">
                              <a href="#" class="text-muted">
                                   <strong>Pengelolaan Surat TU</strong>
                              </a>
                         </p>
                    </div>
               </div>
               </div>
          </footer>
        
      <script src="{{ asset('js/script.js') }}"></script>

@endsection