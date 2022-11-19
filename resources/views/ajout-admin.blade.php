@extends('themeback')
@section('title')
<title>ajouter info pers</title>
@endsection
@section('contenu')


                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ajouter vos informations personnelles</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="addPers" method="post" enctype="multipart/form-data">
                                                @csrf 

                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" name="nom" placeholder="nom" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="prenom" placeholder="Prénom" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Login</label>
                                                        <input class="form-control" type="text" name="login" placeholder="Login" id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" placeholder="bootstrap@example.com" id="example-email-input">
                                                    </div>
                                                    
                                                   
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Adresse</label>
                                                        <input class="form-control" type="text" name="adresse" placeholder="adresse" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Lien facebook</label>
                                                        <input class="form-control" type="text" name="fb" placeholder="lien fb" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Lien Linkedin</label>
                                                        <input class="form-control" type="text" name="ln" placeholder="Lien Linkedin" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Lien Github</label>
                                                        <input class="form-control" type="text" name="git" placeholder="Lien Github" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">telephone</label>
                                                        <input class="form-control" type="text" name="tel" placeholder="telephone" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">age</label>
                                                        <input class="form-control" type="text" name="age" placeholder="age" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Description</label>
                                                       <textarea class="form-control" name="description" placeholder="description"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file" name="image"  placeholder="" id="example-text-input">
                                                    </div>


                                                      <div class="form-group">
   
    
    </select>
  </div>



                                                      <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

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

                
              