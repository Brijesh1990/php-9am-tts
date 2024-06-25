<?php 
// $name="My name is Brijesh"; //varaible decalred
// function display()
// {
//     global $name;
//     echo $name;
// }

// display();


$name1="My name is Brijesh"; //varaible decalred
function display()
{
    global $name1;
    $name="My name is kavish";
    echo $name."<br>";
    echo $name1;
}

display();

?>