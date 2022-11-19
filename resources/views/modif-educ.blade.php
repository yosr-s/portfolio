@extends('themeback')
@section('title')
<title>modifier education</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">modifier education</h4>
                                        
                                    </div>
                                    <div class="card-body p-4">
                                    <form action="/editEduc" method="post">
                                            @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Titre</label>
                                                        <input class="form-control" type="text"  name="titre" value="{{$donnee['titre']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Période</label>
                                                        <input class="form-control" type="text"  name="periode" value="{{$donnee['periode']}}" id="example-text-input">
                                                    </div>
                                                   
                                                   
                                                   
                                                   
                                                 

                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Description</label>
                                                       <textarea class="form-control" name="description">{{$donnee['description']}}</textarea>
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