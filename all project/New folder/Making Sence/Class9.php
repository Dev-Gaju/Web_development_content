<?php

$result="";
if(isset($_POST['btn'])){
    $first_name=$_POST['value1'];
    $last_name=$_POST['value2'];
    $operator=$_POST['btn'];
    
    switch ($operator) {
    case '+':
        $result=$first_name + $last_name;
        break;
    case '-':
        $result=$first_name - $last_name;
        break;
    case '*':
        $result=$first_name * $last_name;
        break;
    case '/':
        $result=$first_name / $last_name;
        break;

    default:
        break;
}
    }
?>

 <form method="post">
            <input type="text" name="value1" placeholder="first Number">
            <br/>
            <input type="text" name="value2" placeholder="Second Number">
            <br/>
            <input type="text" placeholder=" Result" value="<?php echo $result;?>">
            <br/>
            <input type="submit" name="btn" value="+">
            <input type="submit" name="btn" value="-">
            <input type="submit" name="btn" value="*">
            <input type="submit" name="btn" value="/">
            
        </form>


        <br/>
        <br/>
        <br/>

<?php

$name="abcd";
if(empty($name)){
    echo "username:  {$name}";
}  else {
    echo "Please entered the correct name";
}



?>