<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datepicker Example</title>
    <!-- Include jQuery UI CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include jQuery UI Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize datepicker
            $('#my-date-picker').datepicker({
                // Add any other datepicker options here
                dateFormat: 'yy-mm-dd', // Date format
                minDate: 0, // Set minimum selectable date to today
                beforeShowDay: function(date) {
                    // Disable specific dates (e.g., April 10, 2024)
                    var disabledDates = ['2024-04-10'];
                    var stringDate = $.datepicker.formatDate('yy-mm-dd', date);
                    return [disabledDates.indexOf(stringDate) === -1];
                }
            });
        });
    </script>
</head>
<body>
    <!-- Input field with the ID my-date-picker -->
    <input type="text" id="my-date-picker" placeholder="Select Date">
</body>
</html>
