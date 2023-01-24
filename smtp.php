
<?php

if ( isset($_POST['Submitfeild'])) {
      $message = $_POST['Messagefeild'];
      $to = "tegaumurhurhu@gmail.com";
      $subject = "Website Message";
      $header = "From: umurhurhutega@gmail.com";

      mail($to, $subject, $message, $header);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="hieMe">
            <h3 id="h3" class="mails">Hire Me</h3>
            <p class="mails">Feel free to contact me at anytime</p>
                    <div id="hieMe1">
                        <form action="smtp.php" method="post">

                        <div id="inputf" class="input1 " >
                            <label for="Namefeild" class="mails">Name</label>
                            <input class="mails" name="Namefeild"  type="text" id='Namefeild'>
                        </div>
                        <div id="inputf"  class="input2">
                            <label class="mails" for="Emailfeild">Email</label>
                            <input class="mails" name="Emailfeild" value='<?php echo $email; ?>' type="text" id='Emailfeild'>
                        </div>
                        <div id="inputf"  class="input2">
                            <label class="mails" for="Subjectfeild">Subject</label>
                            <input class="mails" name='Subjectfeild' type="text" for='Subjectfeild' id="Subjectfeild">
                        </div>
                        <div id="inputf" class="input3">
                            <label class="mails" for="Messagefeild">Message</label>
                            <textarea class="mails" name='Messagefeild' value='<?php echo $message; ?>' id="Messagefeild" cols="40" rows="15"></textarea>
                        </div>
                        <div>
                            <button class="mails" name="Submitfeild" id="Submitfeild" type="submit">Submit</button>
                        </div>

                    </form>
                    </div>
          

</div>
</body>
</html>