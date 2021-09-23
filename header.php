
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/logo.png" />
    <!-- <title>Khatral - <?php echo $_SESSION['dept']; ?> Dept</title> -->
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0d58c98fc8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/softview.css">
    <script src="codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <script src="codemirror/mode/htmlembedded/htmlembedded.js"></script>
    <script src="codemirror/mode/xml/xml.js"></script>
    <script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="codemirror/addon/mode/multiplex.js"></script>
    <script src="codemirror/mode/css/css.js"></script>
    <style>
      
        @media (max-width: 768px) {
            .navbar-collapse {
                position: relative;
                top: 1%;
                left: 0;
                /* padding-left: 15px;
                padding-right: 15px; */
                padding-bottom: 15px;
                width: 100%;
                
                border-radius: 20px 20px 20px 20px;
            }
            .navbar-collapse.collapsing {
                
                -webkit-transition: left 0.2s ease;
                -o-transition: left 0.2s ease;
                -moz-transition: left 0.2s ease;
                transition: left 0.2s ease;
                left: -100%;
                
                z-index: 1;
                border-radius: 20px 20px 20px 20px;
            }
            .navbar-collapse.show {
                
                
                z-index: 1;
                left: 0;
                -webkit-transition: left 0.2s ease-in;
                -o-transition: left 0.2s ease-in;
                -moz-transition: left 0.2s ease-in;
                transition: left 0.2s ease-in;
                border-radius: 20px 20px 20px 20px;
            }
        }
        .bg-grad{
            background: #56ccf2; /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #56ccf2, #2f80ed); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #56ccf2, #2f80ed); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .img-info{
            background-color: #F2F2F2;
        }
        .img-info:hover{
            background-color: #C2C2C2;
        }
        .img-info:active{
            background-color: #D2D2D2;
        }
      
        .btn{
            padding-top: 8px;
            padding-bottom: 8px;
        }
        
    </style>
</head>
<body class="bg-light">