@extends('admin.layout')
@section('content')


<style>


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
    /* Hover Button with Red Effect */
	  .button_new {
  background-color: #fff; /* Green */
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
border-radius:10px;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 1.3px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
</style>

    <div class="clearfix"></div>

    <div class="col-md-3 text-center">
    </div>
    <div class="col-md-6 text-center" style="margin-top: 5%">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="row">
                    <div class="panel-body" style="padding:1px 5px 2px 5px;">

                        <div class="col-md-12" style="margin-top:5px;">


                        </div>
                    </div>

                </div>

             
                <!-- <section id="vendor"> -->
                        <h4><i class="sl sl-icon-phone"></i> Fill the form now</h4>
                        <form id="vendor_reg" action="{{route('update_vendor_registration')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{{$vendor_registration->id}}}">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <input name="name" id="name1" type="text" value="{{$vendor_registration->name}}" placeholder="Name of Business"
                                        required />
                                      </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <select id="state" name="state" class="form-control" required>
                                        <option>Maharashtra</option>
                                    </select>
</div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <select id="city" name="city" class="form-control" required>
                                        <option>Amravati</option>
                                    </select>
</div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="Cars" @if ($vendor_registration->category == 'Cars') selected @endif>Cars</option>
                                        <option value="Horse" @if ($vendor_registration->category == 'Horse') selected @endif>Ghori/Horse</option>
                                        <option value="Photographer" @if ($vendor_registration->category == 'Photographer') selected @endif>Photographer</option>
                                        <option value="Decorators" @if ($vendor_registration->category == 'Decorators') selected @endif>Decoration</option>
                                        <option value="Catering" @if ($vendor_registration->category == 'Catering') selected @endif>Catering</option>
                                        <option value="DJ" @if ($vendor_registration->category == 'DJ') selected @endif>DJ</option>
                                        <option value="Musician" @if ($vendor_registration->category == 'Musician') selected @endif>Singer/Musician</option>
                                        <option value="Banjo" @if ($vendor_registration->category == 'Banjo') selected @endif>Dhol-Tasha/Banjo</option>
                                        <option value="Mehndi" @if ($vendor_registration->category == 'Mehndi') selected @endif>Mehndi</option>
                                        <option value="Makeup" @if ($vendor_registration->category == 'Makeup') selected @endif>Makeup</option>
                                        <option value="Choreographer" @if ($vendor_registration->category == 'Choreographer') selected @endif>Choreographer</option>
                                    </select>
</div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email1" type="email" value="{{$vendor_registration->email}}" placeholder="Email Id" required />
</div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input name="contact_no" id="contact_no1" value="{{$vendor_registration->phone_number}}" type="text" placeholder="Phone Number" maxlength="10"
                                        required />
</div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="alternate_phone_number" id="contact_no2" value="{{$vendor_registration->alternate_phone_number}}" type="text" maxlength="10" placeholder="Alternate Phone Number"
                                            required />
    </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="address" id="address" value="{{$vendor_registration->address}}" type="text" placeholder="Address"
                                                required />
        </div>
                                        </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <input name="password" id="password1" type="password" placeholder="Password" />
</div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input name="image" id="image" type="file" placeholder="file 235 X 250" />
</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="star_count" id="star_count1" value="{{$vendor_registration->star_count}}" type="text" placeholder="Star Count" />
    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="review_count" id="review_count1" value="{{$vendor_registration->review_count}}" type="text" placeholder="Review Count" />
        </div>
                                        </div>
                    
                            <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="button3 button_new"
                                style="border-radius:5px; border-color:red;">Update</button>
                                </div>
                                </div>
                                </div>
                        </form>

                     <!-- </section>  -->
                </div>

            </div>
        </div>
   


@stop

