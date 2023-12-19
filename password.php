<?php

$inputUtente = $_GET["input"];

$passwordMischiata = str_shuffle($inputUtente);

echo "<p>la tua Password è:  <b>$passwordMischiata</b></p>";
