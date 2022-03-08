<!-- С помощью формы спросите у пользователя его имя и возраст. После отправки формы выведите эти данные на экран. -->

<form action="" method="POST">
  <input type="text" name="name">
  <input type="text" name="age">
  <input type="submit" name="submit">
</form>

<?php
  if (isset($_REQUEST['submit'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    echo "ჩემი სახელია: $name, <br> ჩემი ასაკია: $age";
  }
?>
