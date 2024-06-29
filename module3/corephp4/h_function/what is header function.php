<!-- 
header function is used to redirect one page to another page

there are three types off header function
a) header("location:welcome.php");
     Note : this is used to redirect but not able to pass messages
b) header("refresh:2,welcome.php");
     Note : this is used to redirect and proper  pass messages and we will provides a time to display messages
c) header("Content-Type");

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$filepath); 
readfile($filepath);

-->