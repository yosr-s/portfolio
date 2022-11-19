@extends('themeback')
@section('title')
<title>modifier service</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">modifier un service</h4>
                                        
                                    </div>
                                    <div class="card-body p-4">
                                    <form action="/editAuth" method="post">
                                            @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
        
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Email</label>
                                                        <input class="form-control" type="text"  name="email" value="{{$donnee['email']}}" id="example-text-input">
                                                    </div>
                                                   
                                                   
                                                   
                                                   
                                                   

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Password</label>
                                                        <input class="form-control" type="text"  name="password" value="{{$donnee['password']}}" id="example-text-input">
                                                    </div>
                                                   
                                                   
                                                    <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">modifier</button>

                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>

                                            
                                                   
                                                </div>
                                            </div>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- Start row -->
                       

                       

                       

                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                @endsection