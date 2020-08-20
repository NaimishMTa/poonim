 <?php 

    if (isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $msg=$_POST['msg'];

      $to='naimishtank92@gmail.com';
      $subject='Form Submission';
      $messages="Name: ".$name."\n"."Phone: ".$contact."\n"."wrote the folling"."\n\n".$msg;
      $headers="form: ".$email;

       if(mail($to, $subject, $messages, $headers)){
         echo "<h1>Send Successfully ! THank You"."".$name.", we will contact you shortly !</h1>";
       }
       else{
         echo "Somting went worang" ;
       }
    }
   ?>