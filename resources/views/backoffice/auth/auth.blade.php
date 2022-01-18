@extends('backoffice.layout.master')

@section('content')
@section('content-title','Admin')
@if($errors->count()>0)
        <div class="alert alert-danger" style="width: 300px;margin: 10px auto;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success" style="width: 300px;margin: 10px auto;">
        <p>{{Session::get('success')}}</p>
    </div>
    @endif
	 <section class="contact-page-section">
	    <div class="container">
	        <div class="row">
	            <center>
	                <h3>Auth</h3>
	            </center>
	            <div class="form-column col-lg-12 col-md-12 col-sm-12">
	                <div class="container">
	                	<div class="card">
	                		<div class="card-body">
								<form action="{{route('admin.update')}}" method="POST">
									@csrf
									<div class="col-lg-6 p-t-20">
								        <label class="text-muted">Nom</label>
								        <div
								            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								            <input class="mdl-textfield__input" type="text" value="{{$admin->name}}"
								                id="txtFirstName" name="name">
								        </div>
								    </div>
								    <div class="col-lg-6 p-t-20">
								        <label class="text-muted">Email</label>
								        <div
								            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								            <input class="mdl-textfield__input" type="text" value="{{$admin->email}}"
								                id="txtFirstName" name="email">
								        </div>
								    </div>
								    <div class="col-lg-6 p-t-20">
								        <label class="text-muted">Nouveau mot de pass</label>
								        <div
								            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								            <input class="mdl-textfield__input" type="password" value=""
								                id="txtFirstName" name="psw">
								        </div>
								    </div>
								    <div class="col-lg-6 p-t-20">
								        <label class="text-muted">Confirm mot de pass</label>
								        <div
								            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								            <input class="mdl-textfield__input" type="password" value=""
								                id="txtFirstName" name="npsw">
								        </div>
								    </div>

							    <button type="submit" class="btn-success">
							        Enregistrer
							    </button>
								</form>
	                		</div>
	                	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection