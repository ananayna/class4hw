<?php



echo "1. <u><i>index array</i></u> <br>";

$mysalf = ["Ananayna", "ananayna@gmail.com", "bangladeshi", "AB+", 123456];

echo "<pre>";
    print_r($mysalf);
echo "</pre>";

echo ($mysalf[2]);

                                                                    //2 no
echo "<br><br>2. <u><i>a array</i></u> <br>";

$mysalf = [
     "name" => "Ananayna",
     "email" => "ananayna@gmail.com",
     "nationality" => "bangladeshi",
     "BG"=> "AB+",
      "pass" => 123456];

echo "<pre>";
    print_r($mysalf);
echo "</pre>";

echo $mysalf["name"];

                                                                        // 3 no
echo "<br><br>2. <u><i>mal array</i></u> <br>";

$cmpi = [
    "user1" => [
    "name" => [
     "first_name" => "Ananayna",
     "last_name" => "debi"
    ],
     "email" => "ananayna@gmail.com",
     "nationality" => "bangladeshi",
      "pass" => 123456
        ],
    "user2" => [
        "name" => [
            "first_name" => "razia",
            "last_name" => "sultana"
        ],
            "email" => "razia@gmail.com",
            "nationality" => "bangladeshi",
             "pass" => 12356
        ],
        "user3" => [
            "name" => [
                "first_name" => "inur",
                "last_name" => "nahar"
            ],
                "email" => "liya@gmail.com",
                "nationality" => "bangladeshi",
                 "pass" => 123956
        ]

    ];

echo "<pre>";
    print_r($cmpi);
echo "</pre>";
echo "<pre>";
print_r ($cmpi['user1']);
echo "</pre>";

echo $cmpi['user1']['name']['first_name'];


                                                                            //4 no
echo "<br><br>4. <u><i>strtoupper</i></u> <br><br>";

$test = "good morning";

echo strtoupper($test);


                                                                            //5 no
 echo "<br><br>5. <u><i>strtolower</i></u> <br><br>";

$test = "Good Morning";

echo strtolower($test);

                                                                            //6 no
echo "<br><br>6. <u><i>ucwords</i></u> <br><br>";

$test = "good morning";

echo ucwords($test);

                                                                            //7 no
echo "<br><br>7. <u><i>strrev</i></u> <br><br>";

$test = "good morning";

echo strrev($test);

                                                                            //8 no
echo "<br><br>8. <u><i>strpos</i></u> <br><br>";

$test = "good jhg morning";

echo strpos($test, "morning");

                                                                            //9 no
echo "<br><br>9. <u><i>stripos</i></u> <br><br>";

$test = "good morning";

echo stripos($test, "Morning");

                                                                            //10 no
echo "<br><br>10. <u><i>str_replace</i></u> <br><br>";

$test = "count_number               ";

echo str_replace(' ','*', $test);

                                                                            //11 no
echo "<br><br>11. <u><i>substr</i></u> <br><br>";

$test = "good morning";

echo substr($test,5,7).'<a href="#">.......</a>' ;

                                                                            //12 no
echo "<br><br>12. <u><i>trim</i></u> <br><br>";

$test = "good    morning";

var_dump(trim($test));

                                                                            //13 no
echo "<br><br>13. <u><i>md5,shal, pass</i></u> <br><br>";

$test = "good morning";

echo md5($test);
echo "<br>";
echo sha1($test);
echo "<br>";
echo password_hash($test, PASSWORD_BCRYPT);

                                                                            //14 no
echo "<br><br>14. <u><i>pass</i></u> <br><br>";

$test = "good morning";

$dbtest= password_hash($test, PASSWORD_BCRYPT);

var_dump(password_verify($test, $dbtest));

