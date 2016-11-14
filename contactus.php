<?php include "header.php"; ?>

<P class="content"> Have any questions or comments?????</p>
<p>SEND US AN EMAIL!!!</P>
<form action="mail.php" method="post" id="emailform">
    Name: <input type="text" name="name"/><br>
    Email: <input type="text" name="email"/><br>
    Subject: <input type ="text" name="subject"/><br>
    <textarea name="comment" form="emailform"></textarea>
    <br>
    <input type="submit" name="send_button" value="Send Message"/>
</form>  




<?php include "footer.php"; ?>
