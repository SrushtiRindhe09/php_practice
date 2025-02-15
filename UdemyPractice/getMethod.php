

<?php

   if(isset($_GET['lang']) AND isset($_GET['coursep'])) {
    $get = $_GET['lang'];

    $company = $_GET['coursep'];

    echo "my fav lang is: $get and the company name is: $company";
  }