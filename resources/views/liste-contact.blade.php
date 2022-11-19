@extends('themeback')
@section('title')
<title>liste contact</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste contact</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">DataTables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body table-responsive">
        
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 table-secondary table table-striped">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Nom</th>
                                                <th>e-mail</th>
                                               
                                                <th>sujet</th>
                                                <th>message</th>
                                                <th>action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach($donnees as $donnee)

                                            <tr>
                                                <td>{{ $donnee['nom'] }}</td>
                                                <td>{{ $donnee['email'] }}</td>
                                                <td>{{ $donnee['sujet'] }}</td>
                                                <td>{{ $donnee['message'] }}</td>
                                                <td>
                                                <a href="/modifierContact/{{$donnee['id']}}" class="btn btn-primary"> modifier </a>
                                                 
                                                 <a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer ces données{{$donnee['name']}}')"
                                                 href="deleteContact/{{$donnee['id']}}"> Supprimer </a>

                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                </div>
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection