<?php

if(!function_exists('post_data'))
{
  function post_data($var_name)
  {
    if(!get_magic_quotes_gpc())
      return addslashes($_POST[$var_name]);
    return $_POST[$var_name];
  }
}
?>
