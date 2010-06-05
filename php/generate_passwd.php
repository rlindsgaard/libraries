<?php
$time = time();
$passwd = substr(md5($time),0,8);
?>
<form>
  <input type="text" value="<?php print $passwd ?>" />
  <input type="submit" value="Generér" />
</form>

