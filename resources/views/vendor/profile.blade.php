<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

    body {
        box-sizing: border-box;
        background: #f2f2f2;
        font-family: "Roboto", sans-serif;
        display: flex;
        align-items: left;
        justify-content: left;
    }

    .container {
        background: #fff;
        width: 100%;
        padding: 1rem;
    }

    .title {
        font-size: 24px;
        line-height: 28px;
        font-weight: bold;
        color: #374151;
        padding-bottom: 11px;
        border-bottom: 1px solid #d7dbdf;
    }

    .form-group {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
    }

    .textarea-group label,
    .form-group label {
        color: #374151;
        font-size: 16px;
        line-height: 19px;
        margin-bottom: 10px;
        text-align: left;
    }

    .form-group [type],
    .textarea-group textarea {
        border: 1px solid #d2d6db;
        border-radius: 6px;
        padding: 15px;
    }

    .form-group [type]:hover,
    .textarea-group textarea:hover {
        border-color: red;
    }

    .form-group [type]:focus,
    .textarea-group textarea:focus {
        border-color: red;
    }

    .textarea-group {
        margin-top: 24px;
    }

    .textarea-group textarea {
        resize: none;
        width: 100%;
        margin-top: 10px;
        height: calc(100% - 59px);
    }

    .checkbox-group {
        margin-top: 25px;
    }

    .checkbox-group label {
        display: flex;
    }

    .checkbox-group label::before {
        content: "\0020";
        display: flex;
        align-items: center;
        justify-content: center;
        width: 16px;
        height: 16px;
        margin-right: 8px;
        border: 1px solid #d2d6db;
        border-radius: 6px;
        transition: background 0.1s ease-in;
    }

    .checkbox-group input[type="checkbox"] {
        /* ici on ne doit pas mettre de display: none afin de pouvoir "tabber" */
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .checkbox-group input[type="checkbox"]:focus+label:before {
        border-color: #5850eb;
    }

    .checkbox-group input[type="checkbox"]:checked+label:before {
        color: #fff;
        content: "\2713";
        background: #5850eb;
        border-color: #5850eb;
    }

    .button {
        font-weight: bold;
        line-height: 19px;
        background: red;
        border: none;
        padding: 15px 25px;
        border-radius: 6px;
        color: white;
        width: 100%;
        margin-top: 24px;
    }

    .button:hover {
        background: red;
    }

    .button:focus {
        background: red;
    }

    @media screen and (min-width: 768px) {
        body {
            align-items: center;
            justify-content: center;
        }

        .container {
            margin: 2rem;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            max-width: 32rem;
            padding: 2rem;
        }
    }

    @media screen and (min-width: 1024px) {
        .container {
            max-width: 80%;
            width: 100%;
        }

        .checkboxes {
            display: flex;
        }

        .checkboxes> :not(:first-child) {
            margin-left: 1rem;
        }

        .grid {
            display: grid;
            grid-gap: 24px;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-rows: 1fr;
        }

        .email-group {
            grid-column: 1;
            grid-row: 2;
        }

        .phone-group {
            grid-column: 2;
            grid-row: 2;
        }

        .textarea-group {
            grid-column: 3;
            grid-row: span 2;
            margin-right: 2rem;
        }

        .button-container {
            text-align: right;
        }

        .button {
            /* bon, bon, bon
  c'est pas tout mais j'ai faim moi ^^
  */
            width: auto;
        }
    }
</style>
@extends('vendor.layout')
@section('content')
    <div class="col-md-3 text-center">
    </div>
    <form action="{{ route('edit_profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">


        <div class="col-md-6 text-center" style="margin-top: 5%">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <div class="panel-body" style="padding:1px 5px 2px 5px;">

                            <div class="col-md-12" style="margin-top:5px;">
                                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}



                            </div>
                        </div>

                    </div>

                    <form action="" method="POST">
                        <h3 class="text-center" style="color:red;">Edit Personal Information</h3>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="align-items:center">
                                    <img src="{{ asset('public/images/photos/' . $data->photo) }}" alt="Admin"
                                        class="rounded-circle p-1 bg-primary" width="110">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" id="inputFirstName" placeholder=""
                                        name="photo" style="padding-top:7px; padding-bottom:25px;">

                                </div>
                            </div>
                        </div>

						
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="profile_details_text"> Name:</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data->name }}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="profile_details_text">Email Address:</label>
                                    <input type="email" name="email" class="form-control" value="{{ $data->email }}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="profile_details_text">Mobile Number:</label>
                                    <input type="tel" name="contact_no" class="form-control"
                                        value="{{ $data->contact_no }}" required pattern=[0-9]{10}>

                                </div>
                            </div>
                        </div>
                        <!--	<div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">&nbsp;
           <label class="profile_details_text">Gender :
          <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="Male">Male</label>&nbsp;
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="Female">Female</label>
            </label>
          </div>
         </div>
        </div>-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="profile_details_text">Gender:</label>
                                    <select name="gender" class="form-control" value="" required>
                                        <option value="Male" @if ($data->gender == 'Male') selected @endif>Male
                                        </option>
                                        <option value="Female" @if ($data->gender == 'Female') selected @endif>Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="profile_details_text">Password:</label>
                                    <input type="password" name="password" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Update"
                                        style="background-color:red;">
                                </div>
                            </div>
                        </div>
                    </form>


                    {{-- <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-picture"></i> Update Profile</h3>
            </div>
            <div class="col-md-5 col-md-offset-3">
                <img src="{{ asset('public/images/photos/' . $data->photo) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                <div class="mt-3">
            <input type="file" class="form-control" id="inputFirstName" placeholder="" name="photo" > --}}

                    {{-- <h4>ADMIN</h4> --}}
                    {{-- <p class="text-secondary mb-1">Admin</p>
                    <p class="text-muted font-size-sm">Webmedia Amravati</p> --}}
                    {{-- <button class="btn btn-primary">Follow</button>
                    <button class="btn btn-outline-primary">Message</button> --}}
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$data->name}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="form-group">
                        <label>Contact No</label>
                        <input type="number" class="form-control" maxlength="10" name="contact_no" placeholder="Contact No" value="{{$data->contact_no}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="form-group">
                        <label>Gender</label><br>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male" {{$data->gender == 'male' ? 'checked' : ''}}> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female" {{$data->gender == 'female' ? 'checked' : ''}}> Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{$data->email}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password" value="">
                    </div>
                </div>
            </div>
            <div class="utf_add_listing_part_headline_part">
                <button id="on" type="submit" class="btn mjks" style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top:2%;">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Update
                </button>
            </div> --}}
        </div>
        </div>
        </div>
    </form>

@stop
