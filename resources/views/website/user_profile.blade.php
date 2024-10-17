@extends('website.layout')
@section('content')
    <div class="clearfix"></div>

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Personal Information</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{ route('website_index') }}">Home</a></li>
                            <li>Edit Personal Information</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="container margin-bottom-75">
        <form action="{{ route('edit_profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4 class="gray"><i class="sl sl-icon-user"></i> Profile Details</h4>
                        <div class="utf_dashboard_list_box-static">
                            {{-- <div class="edit-profile-photo">
                                <img src="{{ asset('public/images/photos/' . $data->photo) }}" alt="Admin"
                                    class="rounded-circle p-1 bg-primary" style="width:150px; height:150px;">
                                <div class="change-photo-btn">
                                    <div class="photoUpload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload form-control" id="inputFirstName" placeholder=""
                                            name="photo" style="padding-top:7px; padding-bottom:25px;" />
                                    </div>
                                </div>
                            </div> --}}
                           <!-- <a href="{{route('delete_profile',$data->id)}}" onclick="return confirm('Are you sure want to delete this?')"> <div style="margin-left:500px;color:red;"><i class="fa fa-trash"></i></div></a>-->
                            @if ($data->photo == null)
                            <div class="edit-profile-photo"> <img src="{{ asset('public/images/user_profile.jpg') }}" alt=""  style="max-width:100px">
                                @else
                                    <div class="edit-profile-photo"> <img src="{{ asset('public/images/photos/' . $data->photo) }}" alt=""  style="max-width:100px">
                            @endif
                                <div class="change-photo-btn" style="width: 50px !important;bottom:-25px;right:50px;">
                                  <div class="photoUpload"> <span><i class="fa fa-upload"></i></span>
                                    <input type="file" name="photo" class="upload" />
                                  </div>
                                </div>
								<div class="change-photo-btn" style=" width: 50px !important;bottom:-25px; left:50px;"> 
									 <a href="{{route('delete_profile',$data->id)}}" onclick="return confirm('Are you sure want to delete this?')">
										 <div  class="photoUpload">
									<span><i class="fa fa-trash"></i></span>
								</div>
									</a>
                                  </div>
							
                              </div>
    
                            <div class="my-profile">
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label> Name:</label>
                                        <input type="text" name="name" class="input-text" value="{{ $data->name }}"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="profile_details_text">Mobile Number:</label>
                                        <input type="tel" name="contact_no" class="input-text"
                                            value="{{ $data->contact_no }}" required pattern=[0-9]{10}>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Id</label>
                                        <input type="email" name="email" class="input-text" value="{{ $data->email }}"
                                            required>

                                    </div>
                                    <div class="col-md-6">

                                        <label>Gender</label>
                                        <select name="gender" class="input-text" value="" style="padding:0px;"
                                            required>
                                            <option value="Male" @if ($data->gender == 'Male') selected @endif>Male
                                            </option>
                                            <option value="Female" @if ($data->gender == 'Female') selected @endif>Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" class="input-text" value="">
                                    </div>
                                </div>
                            </div>
                            <!--<input type="submit" class="btn btn-success" value="Update" style="background-color:red;">-->
                            <button type="submit" class="button preview btn_center_item margin-top-15"
                                value="Update">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



   
       
        <div class="overlay" id="overlay"></div>
        <div class="popup" id="popup">
            {{-- <button style="width: 20px;" onclick="togglePopup1()"
        style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
            style="color: #000; "></i></button> --}}
            <button style="width: 20px; text-align: right;" onclick="closePopup()">
                <i class="fa fa-times" aria-hidden="true" style="color: #000;"></i>
            </button>
            <div class="verification-code">
                <label class="control-label" style="color:red; font-size: 24px;">Verification
                    Code</label>
                {{-- <div class="verification-code--inputs">
                    <input type="text" id="otp1" maxlength="1" />
                    <input type="text" id="otp2" maxlength="1" />
                    <input type="text" id="otp3" maxlength="1" />
                    <input type="text" id="otp4" maxlength="1" />

                </div> --}}
                <div id='inputs'>
                    <input id='input1' type='text' maxLength="1" />
                    <input id='input2' type='text' maxLength="1" />
                    <input id='input3' type='text' maxLength="1" />
                    <input id='input4' type='text' maxLength="1" />
                  </div>


                <button type="button" class="button border fw margin-top-10" name="register" onclick="verifyOTP()"
                    value="Register">Verify </button>
                <input type="hidden" id="verificationCode" />
            </div>
        </div>
  
    </div>
    {{-- <-----footer---> --}}
@stop
@section('js')
<script>
    const inputs = ["input1", "input2", "input3", "input4"];

inputs.map((id) => {
  const input = document.getElementById(id);
  addListener(input);
});

function addListener(input) {
  input.addEventListener("keyup", () => {
    const code = parseInt(input.value);
    if (code >= 0 && code <= 9) {
      const n = input.nextElementSibling;
      if (n) n.focus();
    } else {
      input.value = "";
    }

    const key = event.key; // const {key} = event; ES6+
    if (key === "Backspace" || key === "Delete") {
      const prev = input.previousElementSibling;
      if (prev) prev.focus();
    }
  });
}
    </script>
@stop