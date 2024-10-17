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
        <div style="padding: 15px 10px; background: red; font-size: 20px; color: white;"><center><b>Enquiry</b></center></div>
        
        <div style="padding: 10px; background-color: white; color: black; border: 2px solid red;">
            <p style="font-size: 14px;"><strong>Name:</strong> {{ $data['name'] }}</p>
            <p style="font-size: 14px;"><strong>Email:</strong> {{ $data['email'] }}</p>
            <p style="font-size: 14px;"><strong>Mobile Number:</strong> {{ $data['number'] }}</p>
            <p style="font-size: 14px;"><strong>Message:</strong> {{ $data['comments'] }}</p>
          
            <p style="font-size: 14px;text-align: right;"><strong> Thank You!.. </strong></p>
           
            
        </div>
    </div>
</div>
</body>

</html>















