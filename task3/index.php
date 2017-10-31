<h1>Таємний Санта</h1>

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
        <input type="checkbox" name="mail" > send email?
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

    function __toString()
    {
        return $this->name.'_'.$this->lastname.'_'.$this->surname;
    }
}

class Present
{
    public $from;
    public $to;

    function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    function __toString()
    {
        return $this->from . " -> " . $this->to;
    }
}


if (isset($_POST["text"])) {
    echo "<h2>Parsed elements:</h2>";

    $peoples = [];
    $res = [];

    $input = $_POST["text"];

    $segments = explode(' ', $input);

    for ($i = 0; $i < count($segments); $i += 4) {
        array_push($peoples, new People($segments[$i], $segments[$i + 1], $segments[$i + 2], $segments[$i + 3]));
    }


//    shuffle($peoples);
    foreach ($peoples as $p) {
        print_r($p);
        echo "<br>";
    }


    echo "<h2>Random logic:</h2>";

    $tt = [];
    $i = 0;
    $count= count($peoples)-1;
    echo "<i>blocks:</i>".$count;
    $break=1000;
    while ($i < count($peoples) && $break>0) {
        $current = $peoples[$i];

        $index = rand(0, $count);
        $get_people = $peoples[$index];
        echo "<br><b>block $i</b>,<i>compare: </i>".$current . ' vs ' . $get_people  ;

        if ($current != $get_people) {
            if(in_array($get_people, $tt)!=1) {
                $prepare = new Present($current, $get_people);
                array_push($res, $prepare);
                array_push($tt, $get_people);
                $i++;
                echo "<b> - ok</b>";
            }else{
                echo " <i><b>colision(double), try again</b></i>";
            }
        }else{
            echo " <i><b>colision(same), try again</b></i>";
        }
        $break--;
        if($break<0)
            echo "<h3><b>break something wrong</b></h3>";
    }

    echo "<h2>Result:</h2>";

    foreach ($res as $re) {
        echo "<br>".$re;
        $myfile = fopen( $re->from.".txt", "w") or die("Unable to open file!");
        fwrite($myfile, $re->to);
        fclose($myfile);
        echo "<b><i> - file created! </i></b>";

        if(isset($_POST["mail"]) && $_POST["mail"]=="on") {
            $to = $re->from->email;
            $subject = "Secret Santa";
            $txt = $re->to . " mail: " . $re->to->mail;
            $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
            mail($to, $subject, $txt, $headers);
            echo " <b> - mail sended!</b>";
        }
    }
}
