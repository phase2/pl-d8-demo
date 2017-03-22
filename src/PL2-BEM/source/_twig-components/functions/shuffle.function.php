<?php

$function = new Twig_SimpleFunction('shuffle', function ($array) {
  if ($array instanceof Traversable) {
    $array = iterator_to_array($array, false);
  }
  shuffle($array);

  return $array;
});
