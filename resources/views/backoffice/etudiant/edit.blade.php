@extends('backoffice.layout.master')

@section('content')
@section('content-title','Etudiant Profile')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Basic Information</header>
                <button id="panel-button"
                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                    data-upgraded=",MaterialButton">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="panel-button">
                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                        here</li>
                </ul>
            </div>
            <div class="card-body row">
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="Payal"
                            id="txtFirstName">
                        <label class="mdl-textfield__label">First Name</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="Mahera"
                            id="txtLasttName">
                        <label class="mdl-textfield__label">Last Name</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="23" id="txtRollNo">
                        <label class="mdl-textfield__label">Roll No</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="email" value="student@example.com"
                            id="txtemail">
                        <label class="mdl-textfield__label">Email</label>
                        <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="2017-03-12"
                            id="date">
                        <label class="mdl-textfield__label">Registration Date</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="list2" value="Commerce"
                            readonly tabIndex="-1">
                        <label for="list2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="list2" class="mdl-textfield__label">Class</label>
                        <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Computer</li>
                            <li class="mdl-menu__item" data-val="BY">Mechanical</li>
                            <li class="mdl-menu__item" data-val="BY">Mathematics</li>
                            <li class="mdl-menu__item" data-val="BY">Commerce</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="sample2" value="Female"
                            readonly tabIndex="-1">
                        <label for="sample2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="sample2" class="mdl-textfield__label">Gender</label>
                        <ul data-mdl-for="sample2"
                            class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Male</li>
                            <li class="mdl-menu__item" data-val="BY">Female</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1234567890"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
                        <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="Pradip Mehra"
                            id="txtParentName">
                        <label class="mdl-textfield__label">Parents Name</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1234567890"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="txtPNo">
                        <label class="mdl-textfield__label" for="txtPNo">Parents Mobile
                            Number</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1987-08-13"
                            id="dateOfBirth">
                        <label class="mdl-textfield__label">Birth Date</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="O+"
                            id="txtBloodGroup">
                        <label class="mdl-textfield__label">Blood Group</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                        <textarea class="mdl-textfield__input" rows="4"
                            id="text7">45, Shivani park, Mumbai-678765</textarea>
                        <label class="mdl-textfield__label" for="text7">Address</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20">
                    <label class="control-label col-md-3">Upload Photo
                    </label>
                    <div class="col-md-12">
                        <div id="id_dropzone" class="dropzone"></div>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="button"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                    <button type="button"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection