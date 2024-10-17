{{-- <div class="container">
    <div class="square-box">
        <div class="square-box1">Hello There</div>
    </div>
</div>

<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%; /* Full height of the viewport */
    border: 2px solid red; /* Optional: to visualize the container */
}

.square-box {
    height: 200px;
    width: 150px;
    border: 2px solid black;
    padding: 50px;
    margin-top: -300px;
    margin-right: 80%;
    box-sizing: border-box;
}
.square-box1 {
    height: 90px;
    width: 70px;
    border: 2px solid blue;
    padding: 10px;
    margin-top: 40px;
    /* margin-left: 45px; */
    box-sizing: border-box;
}

</style> --}}
{{-- <div id="square-box1">Hello There</div>

<style>
    #square-box1 {
    height: 90px;
    width: 70px;
    border: 2px solid blue;
    padding: 10px;
    margin-top: 60px;
    margin-left: 90px;
    box-sizing: border-box;
}
    </style> --}}

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redirect Confirmation</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <a href="https://www.google.com" class="test">Sunshine</a>
    
        <script>
            $(document).ready(function() {
                $('.test').click(function(event) {
                    event.preventDefault(); // Prevent the default anchor click behavior
                    var url = $(this).attr('href');
                    var confirmationMessage = "You are redirecting to " + url;
                    
                    if (confirm(confirmationMessage)) {
                        // Redirect to the specified URL if "Confirm" is clicked
                        window.location.href = url;
                    } else {
                        // Do nothing if "Cancel" is clicked
                    }
                });
            });
        </script>
    </body>
    </html>
    
    
</html>