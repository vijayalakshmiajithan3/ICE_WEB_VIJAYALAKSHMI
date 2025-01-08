<html>
    <head>
        <body>
            <form method="POST">
                <br>
                <input type="text" name="num"placeholder="Enter a number"/>
                <br>
                <input type="submit" name="submit" value="submit"/>
</form>
</body>
</head>
</html>
<?php
if(isset($_POST['submit']))
$n=$_POST['num'];
$x=$n;
$r=0;
while($n>1)
{
    $r=$r*10;
    $r=$r+($n%10);
    $n=$n/10;
}
echo "reverse of number:$x is:$r";
return 0;
?>
