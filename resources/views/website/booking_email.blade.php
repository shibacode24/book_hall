<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry</title>
</head>

<body style="font-family: Cambria, Helvetica, sans-serif;">
<div >
    <div style=" max-width: 500px;">
        <div style="padding: 15px 10px; background: red; font-size: 20px; color: white;"><center><b>Booking Enquiry</b></center></div>
        
        <div style="padding: 10px; background-color: white; color: black; border: 2px solid red;">
            <p style="font-size: 14px;"><strong>Name:</strong> {{ $data['name1'] }}</p>
            <p style="font-size: 14px;"><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p style="font-size: 14px;"><strong>Mobile Number:</strong> {{ $data['contact_no1'] }}</p>
            <p style="font-size: 14px;"><strong>Booking Date:</strong> {{ $data['date'] }}</p>
            <p style="font-size: 14px;"><strong>Venue Name:</strong> {{ $venue_name }}</p>
            <p style="font-size: 14px;"><strong>Time Slot:</strong> {{ $data['time_slot'] }}</p>
            <p style="font-size: 14px;"><strong>Guest:</strong> {{ $data['guest'] }}</p>
            <p style="font-size: 14px;"><strong>Enquiry Date:</strong> {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>
          
            <p style="font-size: 14px;text-align: right;"><strong> Thank You!.. </strong></p>
           
            
        </div>
    </div>
</div>
</body>

</html>















