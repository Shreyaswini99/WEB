<!-- 
Name:Shreyaswini
Usn:4MT17IS048
6. Write a PHP program to keep track of the number of visitors visiting the web pageand to
display this count of visitors, with proper headings. -->
<strong style="color:green;background:lightpink;">
<?php
$handle=fopen("counter.txt","r");
if(!$handle)
{
    echo"could not open the file";
}
else
{
$counter=(int)fread($handle,20);
fclose($handle);
$counter++;
echo"<p> WELCOME TO THE PAGE</p><p align=center><strong>you are visitor no".$counter."</strong></p>";
$handle=fopen("counter.txt","w");
fwrite($handle,$counter);
fclose($handle);
}
?>
