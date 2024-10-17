<!DOCTYPE html>
<html>
<head>
    <title>Share Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .share-icon {
            font-size: 2rem;
            margin: 10px;
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Share this page</h1>
    <!-- Share Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shareModal">
        Share
    </button>

    <!-- Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Share this page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <!-- WhatsApp Share -->
                    <a href="https://wa.me/?text={{ urlencode('Check out this link: ' . url()->current()) }}" target="_blank" class="share-icon">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                    <!-- Facebook Share -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-icon">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                    <!-- Instagram Share -->
                    <a href="https://www.instagram.com/" target="_blank" class="share-icon">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
