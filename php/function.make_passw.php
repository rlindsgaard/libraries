<?php

if(!function_exists('make_passw'))
{
  function make_passw($length=8,$initial_required=true,$caps_required=true,$num_required=true)
  {
    $passw = '';
    $chars[0] = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $chars[1] = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $chars[2] = array(0,1,2,3,4,5,6,7,8,9);

    $used = array(false,false,false);

    for($i=0;$i<$length;$i++)
    {
      $r = rand(0,2);
      $char = $chars[$r][rand(0,count($chars[$r]))];
      $passw .= $char;
    }
    if(($used[0] === true || $initial_required === false) && ($used[1] === true || $caps_required === true) && ($used[2] === true || $num_required === true))
      return $passw;
    else 
      return make_passw();
  }
}
for($i = 0; $i < 10; $i++)
{
  echo make_passw();
}

?>
