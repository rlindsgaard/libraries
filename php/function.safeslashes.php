<?php
if(!function_exists('safeslashes'))
{
  function safeslashes($str)
  {
    if(!get_magic_quotes_gpc())
      return addslashes($str);
    return $str;
  }
}
?>
