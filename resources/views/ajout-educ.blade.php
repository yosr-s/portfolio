@extends('themeback')
@section('title')
<title>ajouter education</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ajouter education</h4>
                                        
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <form action="addeduc" method="post">
                                                @csrf 
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Titre</label>
                                                        <input class="form-control" type="text" name="titre"  placeholder="titre" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Periode</label>
                                                        <input class="form-control" type="text" name="periode"  placeholder="periode" id="example-text-input">
                                                    </div>
                                                   
                                                   
                                                   
                                                   
                                                   
                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Description</label>
                                                       <textarea class="form-control" name="description" placeholder="description"></textarea>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>

                                            
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
</form>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- Start row -->
                       

                       

                       

                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection