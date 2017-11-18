<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $usertel = $_POST['usertel'];
    $usercontact = $_POST['usercontact'];
    $usernvaildate = $_POST['useravaildate'];
    $userbrowser = $_POST['userbrowsers'];
    $usermessage = $_POST['usermessage'];
    if(isset($_POST['userfbtype_1'])){
        $_POST['userfbtype_1'] = "Say Hello ";
        $userfbtype_1 = $_POST['userfbtype_1'];
    }else{
        $userfbtype_1 = "";
    }
    if(isset($_POST['userfbtype_2'])){
        $_POST['userfbtype_2'] = "Complain ";
        $userfbtype_2 = $_POST['userfbtype_2'];
    }else{
        $userfbtype_2 = "";
    }
    if(isset($_POST['userfbtype_3'])){
        $_POST['userfbtype_3'] = "Share Opinion ";
        $userfbtype_3 = $_POST['userfbtype_3'];
    }else{
        $userfbtype_3 = "";
    }
    if(isset($_POST['userfbtype_4'])){
        $_POST['userfbtype_4'] = "Share Joke ";
        $userfbtype_4 = $_POST['userfbtype_4'];
    }else{
        $userfbtype_4 = "";
    }
    echo "Name = ".$username."<br>";
    echo "E-mail = ".$useremail."<br>";
    echo "Telephone = ".$usertel."<br>";
    echo "Contact Preference = ".$usercontact."<br>";
    echo "Available Date = ".$usernvaildate."<br>";
    echo "Favourite Browser = ".$userbrowser."<br>";
    echo "Feedbacktype = ".$userfbtype_1.$userfbtype_2.$userfbtype_3.$userfbtype_4."<br>";
    echo "Message = ".$usermessage."<br>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Handling in PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="uname">
      </div>
      <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="uemail">
      </div>
      <div>
        <label for="telephone">Telephone:</label>
        <input type="tel" id="tel" name="utel">
      </div>
      <div>
        <label for="cmethod">Contact Preference:</label>
        <input type="radio" id="conmet" name="uconmet" value="mail" checked>Email&nbsp;&nbsp;
        <input type="radio" id="conmet" name="uconmet" value="tel">Telephone<br>
      </div>
      <div>
        <label for="availDate">Available Date:</label>
        <input type="date" id="adate" name="uavaildate">
      </div>
      <div>
        <label for="availDate">Favourite Browser:</label>
        <input list="browsers" name="ubrowsers">
        <datalist id="browsers">
          <option value="Chrome">
          <option value="Edge">
          <option value="Firefox">
          <option value="Opera">
          <option value="Safari">
        </datalist>
      </div>
      <div>
        <label for="feedtype">Feedback type:</label><br>
        <label for="ftype_1">Say Hello</label>
        <input type="checkbox" id="ftype_1" name="uftype_1" value="1"><br>
        <label for="ftype_2">Complain</label>
        <input type="checkbox" id="ftype_2" name="uftype_2" value="2"><br>
        <label for="ftype_3">Share Opinion</label>
        <input type="checkbox" id="ftype_3" name="uftype_3" value="3"><br>
        <label for="ftype_4">Share Joke</label>
        <input type="checkbox" id="ftype_4" name="uftype_4" value="4"><br>
      </div>
      <div>
        <label for="msg">Message:</label><br>
        <textarea id="msg" name="umessage" style="width:400px; height:200px"></textarea>
      </div>
      <div class="button">
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
