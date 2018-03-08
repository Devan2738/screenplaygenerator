<?php
  $nouns = array ('Devan', 'Brian', 'Mitchelle', 'Cooper', 'Jordan', 'Ben', 'Jake', 'Sam');
  $verbs = array ('ate', 'shot', 'destroyed', 'exterminiated');
  $subjects = array ('the volcano', 'the school of fish', 'the taxi driver', 'the city of Boston');
  $nounNum = rand (0, sizeof($nouns)-1);
  $verbNum = rand (0, sizeof($verbs)-1);
  $subjectbNum = rand (0, sizeof($subjects)-1);
  $output = $nouns[$nounNum] . ' ' . $verbs[$verbNum] . ' ' . $subjects[$subjectbNum] . '.';
  echo $output;
?>
