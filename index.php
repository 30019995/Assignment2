<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SCP Template Page</title>
  </head>
  <body class="container">
      <!-- Just an image -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
            <img src="Images/logo.jpg" width="100%" height="150" alt="" loading="lazy">
          </a>
        </nav>
        <br>
    
    <?php 
     $SCP = json_decode(file_get_contents('SCP_Subject_Files.json'));
    ?>
    
    <?php foreach($SCP as $new=>$display): ?>
     <div id="<?php echo $new ?>" class="card text-white bg-secondary mb-3" style="max-width:100%;">
  <div class="card-header"><?php echo $display->SCP_Item; ?> </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $display->Object_Class; ?> </h5>
    <p class="card-text"><?php echo $display->Containment; ?> </p>
    <p class="card-text"><?php echo $display->Description; ?> </p>
    <p class="card-text"><?php echo $display->Reference; ?> </p>
    <button type="button" class="btn btn-danger" onclick="TextToSpeech('<?php echo $new ?>')">TextToSpeech</button>
  </div>
  </div>
  

    <?php endforeach; ?>
    
  
  <script>
      function TextToSpeech(Speech)
{
    const speech = new SpeechSynthesisUtterance();
    let voices = speechSynthesis.getVoices();
    let convert = document.getElementById(Speech).innerHTML;
    speech.text = convert;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.voice = voices[1];
    window.speechSynthesis.cancel();
    window.speechSynthesis.speak(speech);
}
  </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>