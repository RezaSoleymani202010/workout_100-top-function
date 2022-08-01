<?php
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>file_exists()

$result =file_exists("..\\bitnami.css");
//var_dump($result);

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>str_replace()
//
//$string="hello i am reza and this my project ";
//$result=str_replace("reza","ali",$string);
//var_dump($result);

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>implode()

//$array=[
//    "reza",
//    "ali",
//    "hasan"
//];
//$result=implode("__",$array);
//var_dump($result);
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>explode()

//$string="ali,hasan,hossein,reza";
//$a=explode(",",$string);
//var_dump($a);

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>count()

//$array=["hello im reza whats your name? ",
//    2,
//  [
//      "hamed"=>8,
//      "reza"=>2,
//      "ali"=>5
//  ]
//];
//$result=count($array,1);
//var_dump($result);

//
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>dirname()
//$result=dirname("a\\a.txt");
//var_dump($result);



//_________________________________________________________substr()
//$string="hello im reza whats your name?";
//$result=substr($string,5,7);
//$result=substr($string,-5,-2);
//var_dump($result);




//____________________________________________________________sprintf()
//$a="hello";
//$b="good morning";
//$c=12;
//$result=sprintf("%s %s today is %d juan",$a,$b,$c);
//var_dump($result);




//________________________________________________________________________________strpos()
//$string="reza hello im reza whats reza your reza name reza ssss reza fgf?";
//$ofsset=0;
//
//    $pos=strpos($string,"reza",$ofsset);
//  $a=strpos($string,"reza",$pos+1);
//$array=[];
//
//
//while(1)
//{
//    $pos=strpos($string ,"reza",$ofsset);
//
//    $ofsset=$pos+1;
//if ($pos===false){
//break;
//}
//    array_push($array,$pos);
//}
//var_dump($array);




//______________________________________________________array_merge()
//$array1=[
//    "ali",
//    "hasan",
//    "hossein",
//    "reza"
//];
//$array2=[
//    2,4,6,8,
//    [4,5,78]
//];
//$result=array_merge($array1,$array2);
//var_dump($result);




//________________________________________________in_array()
//$array=[
//    "reza",
//    "farhad",
//    "amir",
//    [
//        "ahmad"=>5,
//        "amir"=>45
//    ],
//    5,
//    "7"
//];
//$result=in_array(7,$array,true);
//var_dump($result);




//______________________________________________________strlen()
//$string="heello im reza whats your name?";
//$result=strlen($string);
//var_dump($result);



//_______________________________________________________mb_strlen()
//$string="سلام من رضا هستم نام شما چیست؟";
//$result=mb_strlen($string,'utf8');
//var_dump($result);


//_____________________________________________________________is_array()
//$array=[1,2,3];
//$a="dd";
//$result=is_array($array);
//var_dump($result);



//________________________________________________________array_key_exists()
//$array=[
//    "reza"=>1,
//    "amir"=>2,
//    "ali"=>3,
//    "hamed",
//    [
//        1,2,3,
//        "hossein"=>3
//    ]
//];
//$result=array_key_exists("reza",$array);//=>true
//
//$result=array_key_exists("hossein",$array);//=>false
//var_dump($result);


//___________________________________________________________array_keys()

//$array=[
//    "reza"=>8,
//    "amir"=>5,
//    "hosssein"=>1000,
//    [
//        "gavad"=>45,
//        "hadi"=>7
//    ],
//    47
//];
//$result=array_keys($array,8);
//var_dump($result);


//_________________________________________________________________________________________file_get_contents()
//$result=file_get_contents("t.txt",null,null,2,10);
//var_dump($result);
//$result=file_get_contents("reza.png");
//var_dump($result);

//_______________________________________________________________is_file()
//$result=is_file("reza.png");
//var_dump($result);


//_______________________________________________________________is_dir()
//$result=is_dir("a");
//var_dump($result);

//_______________________________________________________________________array_values()
//$array=[
//    "reza"=>5,
//    "kaveh"=>47,
//    "ali"=>1
//,[
//    "hossein"=>87,
//        "sajjad"=>55
//    ]
//];
//$result=array_values($array);
//var_dump($result);


//______________________________________________________________________________________________FILE_PUT_CONTENT()
$string="good night im reza whats your name?\ngood night im reza whats your name?\n
good night im reza whats your name?\n
good night im reza whats your name?\n";
$result=file_put_contents("t.txt",$string,FILE_APPEND);
var_dump($result);

