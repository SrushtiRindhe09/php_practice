

<?php

  
   //DRY

  // function myFunc() {

  // 	//echo "hello from function";

  // 	$username = "web coding";

  // 	if ($username == "web coding") {
  // 		echo "hello, web coding";
  // 	} else {
  // 		echo "you are not web coding, should not be here";
  // 	}
  // }

  // myfunc();


  function printFullName($fname, $lname) {

    echo "your first name is: $fname and your last name is: $lname";

  }

  printFullName("Mohamed", "Hassan");