<?php

for($i=0; $i<10; $i++){
  $date = date('Y-m-d h:i:s');
  echo ($i + 1) ." - ". $date. " OK <br />";
  sleep(3);
}
