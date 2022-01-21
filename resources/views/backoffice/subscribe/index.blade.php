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
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <div class="btn-group">
                                            <a href="{{route('subcribe.excel')}}" id="addRow"
                                                class="btn btn-info">
                                              Excel <i class="fa fa-file-excel"></i>
                                            </a>
                                        </div>
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
                                        
                                        <div class="table-scrollable">
                                            <table
                                            class="table text-center table-striped table-hover table-checkable order-column valign-middle"
                                            id="example4">
                                            <tr>
                                                <td>Email</td>
                                                <td>Date</td>
                                                <td>Action</td>
                                            </tr>
                                        
                                            @foreach($subscribes as $sub)
                                            <tr>
                                                <td>{{$sub->email}}</td>
                                                <td>{{$sub->created_at!=''?$sub->created_at->diffForHumans():''}}</td>
                                                <td>
                                                    <a href="{{route('sub.delete',['id' => $sub->id])}}" onclick="return confirm('Vous voulez vraiment supprimer ce enregistrement??!!');"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection