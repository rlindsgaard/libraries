<?php
/**
*Author: Ronni Elken Lindsgaard (ronni.lindsgaard@gmail.com)
*Use: Automatically generates secure passwords
*Terms of use: Use it anyway you like, but please keep this comment in the sourcecode. And please e-mail me, I love seeing my code at work :)
*
*Attribs:
*$min_length: The length of the password, defaults to 8.
*$initials_required: Sets the number of initial letters required in the password, defaults to at least 1. Set to 0 (zero) if you don't wish to make it required
*$caps_required: Same as initials but with capital letters.
*$nums_required: Same as initials but with numbers ranging from 0 to 9
*
*/

if(!function_exists('generate_password')) //Don't make function if another one already exists
{
  function generate_password($min_length=8,$initials_required=1,$caps_required=1,$nums_required=1)
  {
    $length = $min_length;
    $req_length = $initials_required+$caps_required+$nums_required;
    if($req_length > $length) //If the combined number of required chars exceed the length of the password, increase the password length.
      $length = $req_length;
      
    $passwd = '';
//Define the characters table
    $chars[0] = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $chars[1] = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $chars[2] = array(0,1,2,3,4,5,6,7,8,9);


    $counter = array(0=>0,1=>0,2=>0); //Keeps track of how many times each class has been used

    for($i=0;$i<$length;$i++)
    {
      $r = rand(0,2); //Find a random chartype (initial,capital,numeric)
      $counter[$r]++; //Increase the given counter
      $char = $chars[$r][rand(0,count($chars[$r]))]; //Find a char from the array
      $passwd .= $char; //assign the char to the password string
    }
   if($counter[0] >= $initials_required && $counter[1] >= $caps_required && $counter[2] >= $nums_required) //Test if the password string contains the number of charactes defined.
      return $passwd;
    else //Try again
      return generate_password($length,$initials_required,$caps_required,$nums_required);
  }
}

?>
