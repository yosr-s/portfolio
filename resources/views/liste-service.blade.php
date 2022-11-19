@extends('themeback')
@section('title')
<title>liste services</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">liste services</h4>

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
                                                <th>titre</th>
                                                <th>description</th>
                                                <th>image</th>
                                                <th>action</th>
                                               
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach($donnees as $donnee)

                                            <tr>
                                                <td>{{ $donnee['titre'] }}</td>
                                                <td>{{ $donnee['description'] }}</td>
                                                <td><img src="{{asset('Image/' .$donnee['image'])}}"  width="120px" alt=""></td>
                                                <td>
                                                <a href="/modifierService/{{$donnee['id']}}" class="btn btn-primary"> modifier </a>
                                                 
                                                 <a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer ces données{{$donnee['name']}}')"
                                                 href="deleteService/{{$donnee['id']}}"> Supprimer </a>

                                                
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
                               
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection