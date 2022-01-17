@extends('backoffice.layout.master')

@section('content')
@section('content-title','Etudiant')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <ul class="nav customtab nav-tabs" role="tablist">
                    <li class="nav-item"><a href="#tab1" class="nav-link active"
                            data-bs-toggle="tab">List
                            View</a></li>
                    <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                            View</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>All Students List</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh"
                                                href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down"
                                                href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times"
                                                href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group">
                                                    <a href="{{route('etudiant.add')}}" id="addRow"
                                                        class="btn btn-info">
                                                       Nouveau etudiant <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-scrollable">
                                            <table
                                                class="table table-striped table-hover table-checkable order-column valign-middle"
                                                id="example4">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> CIN </th>
                                                        <th> Nom Prenom </th>
                                                        <th> Date, Lieu nais </th>
                                                        <th> Gender </th>
                                                        <th>Inscription</th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($profiles as $profile)
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                         @if($profile->etudiant->image)
                                                            <img src="{{asset('uploads/'.$profile->etudiant->image)}}" class="img-thumbnail" width="40" height="40">
                                                        @else
                                                            <img src="{{asset('assets/img/default.png')}}" class="img-thumbnail" width="40" height="40">
                                                        @endif
                                                        </td>
                                                        <td class="left">{{$profile->etudiant->cin}}</td>
                                                        <td>{{$profile->etudiant->nom}} {{$profile->etudiant->prenom}}</td>
                                                        <td class="left">{{$profile->etudiant->date_nais}}, {{$profile->etudiant->lieu_nais}}</td>
                                                        <td>{{$profile->etudiant->gender}}</td>
                                                        <td>{{'12 déc 2021'}}</td>
                                                        <td>
                                                            <a href="{{route('etudiant.profile',['id'=>$profile->id])}}"
                                                                class="faicon  pro">
                                                                <i class="fa fa-user"></i>
                                                            </a>
                                                            <a href="{{route('etudiant.edit',['id'=>$profile->id])}}"
                                                                class="faicon ed">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="{{route('etudiant.destroy',['id' => $profile->etudiant->id])}}" class="faicon de">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="row">
                            @foreach($profiles as $profile)
                            <div class="col-md-4">
                                <div class="card card-box">
                                    <div class="card-body no-padding ">
                                        <div class="doctor-profile">
                                             @if($profile->etudiant->image)
                                                <img src="{{asset('uploads/'.$profile->etudiant->image)}}" class="doctor-pic">
                                                @else
                                                    <img src="{{asset('assets/img/default.png')}}" class="doctor-pic">
                                                @endif
                                            <div class="profile-usertitle">
                                                <div class="doctor-name">{{$profile->etudiant->nom}} {{$profile->etudiant->prenom}}</div>
                                                <div class="name-center">{{$profile->etudiant->nom_ar}} {{$profile->etudiant->prenom_ar}}</div>
                                                <div class="name-center"> {{$profile->etudiant->date_nais}}, {{$profile->etudiant->lieu_nais}} </div>
                                            </div>
                                            <p>{{$profile->contact->adresse}}, <br/>{{$profile->contact->ville_resident}}
                                            </p>
                                            <div>
                                                <p><i class="fa fa-phone"></i><a
                                                        href="tel:{{$profile->contact->tele}}"> {{$profile->contact->tele}}</a> 
                                                        @if($profile->contact->whatsapp)
                                                        <i class="fa fa-whatsapp"></i> <a
                                                        href="tel:{{$profile->contact->whatsapp}}"> {{$profile->contact->whatsapp}}</a></p>
                                                        @endif
                                            </div>
                                            <div class="profile-userbuttons">
                                                <a href="{{route('etudiant.profile',['id' => $profile->id])}}"
                                                    class="btn btn-circle deepPink-bgcolor btn-sm">Profile</a>
                                               
                                                            <a href="{{route('etudiant.profile',['id'=>$profile->id])}}"
                                                                class="faicon  pro">
                                                                <i class="fa fa-user"></i>
                                                            </a>
                                                            <a href="{{route('etudiant.edit',['id'=>$profile->id])}}"
                                                                class="faicon ed">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="{{route('etudiant.destroy',['id' => $profile->etudiant->id])}}" class="faicon de">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection