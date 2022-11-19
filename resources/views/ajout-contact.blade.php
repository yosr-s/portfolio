@extends('themeback')
@section('title')
<title>ajouter contact</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                      
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ajouter un contact</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="addContact" method="post">
                                                @csrf 

                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" name="nom" placeholder="nom" id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" value="bootstrap@example.com" id="example-email-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Sujet</label>
                                                        <input class="form-control" type="text" name="sujet" placeholder="sujet" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Message</label>
                                                       <textarea class="form-control" name="message" placeholder="message"></textarea>
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

                       

                       

                       


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection