@extends('themeback')
@section('title')
<title>modifier contact</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">modifier contact</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Basic Elements</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body p-4">
                                    <form action="/editContact" method="post">
                                            @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" name="nom" value="{{$donnee['nom']}}" id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" value="{{$donnee['email']}}" id="example-email-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Sujet</label>
                                                        <input class="form-control" type="text" name="sujet" value="{{$donnee['sujet']}}" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Message</label>
                                                       <textarea class="form-control" name="message">{{$donnee['message']}}</textarea>
                                                    </div>
                                                    
                                                   
                                                    <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary" >modifier</button>

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

                       

                       

                        

                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection