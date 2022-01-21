@extends('backoffice.layout.master')

@section('content')
@section('content-title','Authentification')
@if(Session::has('success'))
    <div class="alert alert-warning" style="width: 500px;margin: 10px auto;">
            <p>{{Session::get('success')}}</p>
    </div>
@endif
    <div class="card-box">
        <div class="card-body">
            <table class="table bordered">
                <tr>
                    <td>Nom auth</td>
                    <td>email</td>
                    <td>crée a</td>
                    <td>Email</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($users as $user)  
                @if(!$user->profile)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>
                        @if($user->email_verified_at)
                        <span class="text-success"><i class="fa fa-check"></i> Verifier</span>
                        @else
                        <span class="text-muted"> en attend ..</span>
                        @endif
                    </td>
                        <td class="text-danger">Sans d'inscription</td>
                    <td>
                        <a href="{{route('auth.delete',['id'=>$user->id])}}" class="faicon de">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection