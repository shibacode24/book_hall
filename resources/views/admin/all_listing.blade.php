@extends('admin.layout')
@section('content')



<div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                             
</div>
            </div> 
       
         </div>

    <div class="row">
        <div class="col-md-12" style="text-align: center;margin-top: 5px;">
            <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:16px;"
                align="center">
                <i class="fa fa-file-text"><label style="margin: 7px;">All Listing</label> </i>
            </h6>

        </div>
        <div class="col-md-12" style="overflow:scroll">

            <!-- START DEFAULT DATATABLE -->

            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                <table class="table datatable" style="overflow:auto !important;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Business Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            {{-- <th>Email</th> --}}
                            {{-- <th>Website Link</th> --}}
                            <th>Wedding Venue Type</th>
                            {{-- <th>Price</th> --}}
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($all_listing as $all_listings)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $all_listings->name }}</td>
                                <td>{{ $all_listings->contact_no }}</td>
                                <td>{{ $all_listings->address }}</td>
                                {{-- <td>{{ $all_listings->email }}</td> --}}
                                {{-- <td>{{ $all_listings->website_link }}</td> --}}
                               
                       
              @php
              $categoryIds = json_decode($all_listings->WeddingVenueName, true); // Convert JSON string to array
              $categories = App\Models\admin\Category::whereIn('id', $categoryIds)->pluck('category')->toArray(); // Fetch category names as array
              $categoryString = implode(', ', $categories); // Convert array to comma-separated string
          @endphp
          
          <td>{{ $categoryString }}</td>
          
             
            
          {{-- @php
          $prices = json_decode($all_listings->Price, true); // Convert JSON string to array
          $price = implode(', ', $prices); // Convert array to comma-separated string
      @endphp --}}
      {{-- @php
      $prices = json_decode($all_listings->Price, true); // Convert JSON string to array
  @endphp --}}
  
  {{-- <td>{{ implode(', ', $all_listings->Price) }}</td> --}}
                                {{-- <<td>{{ implode(', ', $all_listings->capacity)  ?? ['']}}</td> --}}

                                <td>{{ $all_listings->city_name->city ?? '' }}</td>
                                @if ($all_listings->status == 'approve')
                             
                                <td>
                                    <button class="btn" style="background-color:#10af23; color:#fff; max-height:25px;">{{ ucfirst($all_listings->status) }}</button>
                                    </td>
                               
                                    @elseif ($all_listings->status == 'pending')
                                  
                                     <td >
                                        <div class="btn" style="background-color:#fe970a; color:#fff; max-height:25px;">{{ ucfirst($all_listings->status) }}</div>
                                        </td>
                                    
                                    @elseif ($all_listings->status == 'reject')
                                   
                                        <td>
                                        <div class="btn" style="background-color:#d40e0e; color:#fff; max-height:25px;">{{ ucfirst($all_listings->status) }}</div>
                                        </td>
                                   
                                @endif
{{-- 
                                @if ($all_listings->status == 'approve')
                                    <td>
                                        <a href="{{ route('approve_listing', $all_listings->id) }}">
                                            <button type="button" class="btn btn-warning">Approve</button>
                                        </a>
                                        <a href="{{ route('reject_enquiry', $all_listings->id) }}">
                                            <button type="button" class="btn btn-danger">Reject</button>
                                        </a>
                                    </td>
                               @else --}}
                                <td>
                                  <a href="{{ route('view_listing', $all_listings->id) }}">
                                    <button type="button" class="btn btn-primary" style="background-color:#0ccde9; max-height:25px;">View</button>
                                </a>
                                    {{-- <a href="{{ route('approve_listing', $all_listings->id) }}" onclick=""> --}}
                                        <button
                                        onclick="openCustomModal('{{ route('approve_listing', $all_listings->id) }}')"
                                        id="customModal"
                                        style="background-color:#10af23; border:none; max-height:25px; color:#fff;" 
                                        type="button" class="btn btn-info" >Approve</button>
                                    {{-- </a> --}}
                                        <button
                                        onclick="openCustomModal_reject('{{ route('reject_listing', $all_listings->id) }}')"
                                        id="customModal_reject"
                                        style="background-color:#d40e0e; border:none; max-height:25px; color:#fff;"
                                        type="button" class="btn btn-info">Reject</button>
                                   
                                    
                                </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

@stop
