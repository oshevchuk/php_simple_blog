<!--<h1>Таємний Санта</h1>-->

<?php
$text = "test@mail.com Jone1 Doe1! Petrovich1 
test2@mail.com Jone2 Doe2! Petrovich2 
test3@mail.com Jone3 Doe3! Petrovich3 
test4@mail.com Jone4 Doe4! Petrovich4 
test5@mail.com Jone5 Doe5! Petrovich5 
test6@mail.com Jone6 Doe6! Petrovich6 
test7@mail.com Jone7 Doe7! Petrovich7";
?>

<div>
    <form action="" method="post">
        <textarea name="text" id="text" cols="30" rows="10" style="min-width: 400px;"><?= $text; ?></textarea>
        <br>
        <input type="submit" value="Generate">
    </form>
</div>
<?php

class People
{
    public $email;
    public $name;
    public $lastname;
    public $surname;

    function __construct($email, $name, $lastname, $surname)
    {
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->surname = $surname;
    }
}

class Present{
    public $from;
    public $to;
    function __construct($from, $to)
    {
        $this->from=$from;
        $this->to=$to;
    }
}

$peoples = [];
$res=[];

if (isset($_POST["text"])) {
    $input = $_POST["text"];
//        strpos($input, "\n");
//    for($i=0; $i<strlen($input); $i++){
//        echo ord($input[$i]).'('.$input[$i].')';
//    }
    $segments = explode(' ', $input);
//    echo count($segments);
    for($i=0; $i< count($segments); $i+=4){
//        echo $segments[$i].'<<';

        array_push($peoples, new People($segments[$i], $segments[$i+1], $segments[$i+2], $segments[$i+3]));
    }

    $clone=$peoples;
    shuffle($clone);
    shuffle($peoples);
    foreach ($peoples as $p){
        print_r($p);
        echo "<br>";
    }
    echo "<hr>";
    foreach ($clone as $p){
        print_r($p);
        echo "<br>";
    }

    echo "<hr>";
    for($i=0; $i<count($peoples); $i++){
        if($peoples[$i]!=$clone[$i]){
            array_push($res, new Present($peoples[$i], $peoples[$i]));
            unset($clone[$i]);
            unset($peoples[$i]);
        }else{
            echo  '*';
        }
    }
    echo "<hr>";
    print_r($clone);
//    print_r($res);
}