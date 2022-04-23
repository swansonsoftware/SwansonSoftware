<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Greg And Ru&#39;s Album</title>
	<link rel="stylesheet" type="text/css" href="styles/photos-1v.css">
	<link rel="stylesheet" type="text/css" href="styles/recipes.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<script src="javascript/photos-v1.js"></script>
	<script src="javascript/debug.js"></script>
    <style>
    .fa-caret-down {display:inline;}
    .fa-plus {font-size: .6em; display:none;}
    .fa-minus {font-size: .6em; display:none;}

    @media only screen and (max-width: 800px) {
        .fa-caret-down {display:none;}
        .fa-plus {display:inline;}
    }
    </style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
            $(".recipe").click(function(){
                var content = $(this).attr("link");
                $("#recipe").load(content);
            });
        });

    </script>
</head>
