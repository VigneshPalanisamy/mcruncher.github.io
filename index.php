<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Tag Generator</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="styles/worshipsongs-lyrics.css" >
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
    </head>
    <body>
        <div class="col-xs-12 ws-header">
            <h1>Test Heading</h1>
        </div>
        <div class="container-fluid">
            <div class="col-xs-12">
                <div class="col-xs-5">
                    <textarea id="userInput" class="form-control" rows="25" placeholder="Enter song lyrics here"></textarea>
                </div>
                <div class="col-xs-2" style="text-align: center">
                    <button type="button" class="btn btn-success" onclick="printSong()">Generate tags</button>
                </div>
                <div class="col-xs-5">
                    <textarea id="output" class="form-control" rows="25" placeholder="Generated Song"></textarea>
                </div>
            </div>
        </div>
        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js"></script>
        <script src="scripts/generateTags.js"></script>
    </body>
</html>
