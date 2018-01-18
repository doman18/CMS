<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nie znaleziono strony</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
        .error-template {padding: 40px 15px;text-align: center;}
        .error-actions {margin-top:15px;margin-bottom:15px;}
        .error-actions .btn { margin-right:10px; }
   </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Chwilunia!</h1>
                <h2>
                    403 Access denied!</h2>
                <div class="error-details">
                    Nie masz uprawnień do przejścia na tą stronę.
                </div>
                <div class="error-actions">
                    <a href="" class="btn btn-default btn-lg"><i class="fa fa-mail-reply "></i>
                        Wróć </a><a href="{{APP_URI}}" class="btn btn-primary btn-lg"><i class="fa fa-home "></i> Przejdź na główną </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>