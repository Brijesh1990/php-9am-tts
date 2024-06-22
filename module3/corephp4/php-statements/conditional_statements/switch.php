<?php 
// switch(condition)
// {
//     case 'A': 
//         statements;
//         break;
        
//     case 'B': 
//             statements;
//             break;
//     case 'C': 
//         statements;
//         break;


//     default: 
//        statements;
//        break;     
                    
// }


$grade="D";
echo "Grade should be A,B,C"."<br>";
switch($grade)
{

    case 'A':
        echo "you are topper students &#9786";
        break;

    case 'B':
        echo "you are average students &#9786";
        break;
        
    case 'C':
        echo "you are failed  students &#9785";
        break;

     default:
       echo "Sorry this grade is not found in our database";
       break;

    
}



?>