<?php 


$conn = mysqli_connect("fdb34.awardspace.net","4046163_gaber","3294510Mgm","4046163_gaber");
if($conn){
echo "connection successfuly";
}else{
    echo "failed";
}
$in = mysqli_query($conn,"insert into signup2(email,name,password,gender,inbox)values('$_POST[email]','$_POST[name]','$_POST[password]','$_POST[gender]','$_POST[inbox]')");

if($in)
{

echo "inserted";
}
else
{
die("nooooot0".mysqli_error($conn));

}


?>