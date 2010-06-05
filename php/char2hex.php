<?php
function int2hex($i)
{
  $hex = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F');

  $rest = $i % 16;
  $q = floor($i / 16);
  if($rest > 0)
  {  
    
    return int2hex($q) . $hex[$rest];
  }
  return "";
}

print int2hex(233);

?>
