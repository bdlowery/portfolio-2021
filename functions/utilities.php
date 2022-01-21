<?php

//remove default WYSIWYG classes
function remove_p($text)
{
  // removes <p> from wysiwyg field when we don't want them
  return str_replace(array('<p>', '</p>'), '', $text);
}


//format code for debugging
function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}
