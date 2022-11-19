@extends('themeback')
@section('title')
<title>modifier info pers</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">modifier vos information personnelles</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
                                    <form action="/editPers" method="post">
                                            @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" name="nom" value="{{$donnee['nom']}}"  id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="prenom" value="{{$donnee['prenom']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">age</label>
                                                        <input class="form-control" type="text" name="age" value="{{$donnee['age']}}" id="example-text-input">
                                                    </div> 

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Login</label>
                                                        <input class="form-control" type="text" name="login" value="{{$donnee['login']}}" id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" value="{{$donnee['email']}}" id="example-email-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">adresse</label>
                                                        <input class="form-control" type="text" name="adresse" value="{{$donnee['adresse']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">telephone</label>
                                                        <input class="form-control" type="text" name="tel" value="{{$donnee['tel']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">lien facebook</label>
                                                        <input class="form-control" type="text" name="fb" value="{{$donnee['fb']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">lien Linkedin</label>
                                                        <input class="form-control" type="text" name="ln" value="{{$donnee['ln']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">lien github</label>
                                                        <input class="form-control" type="text" name="git" value="{{$donnee['git']}}" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Description</label>
                                                       <textarea class="form-control" name="description" name="description" >{{$donnee['description']}}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file"  name="image" value="{{$donnee['image']}}" id="example-text-input">
                                                    </div>





                                                      <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">modifier</button>

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