<?php 


$firstName       =            $POST['firstName'];
$lastName        =            $POST['lastName'];
$email           =            $POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])){


   


//تحقق الاسم الاول
if(empty($firstName)){
    $errors['firstNameError'] = 'يرجى ادخال الاسم الاول' ; 
}
//تحقق الاسم الاخير
if(empty($lastName)){
    $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير' ; 
}
//تحقق الايميل
if(empty($email)){
    $errors['emailError'] = 'يرجى ادخال الايميل' ; 
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'يرجى ادخال ايميل صحيح' ; 
}

//تحقق لا يوجد اخطاء


if(array_filter($errors)){
$firstName  =   mysqli_real_escape($conn, $POST['firstName']);
$lastName   =   mysqli_real_escape($conn, $POST['lastName']); 
$email      =   mysqli_real_escape($conn, $POST['email']);

$sql = "INSERT INTO users(firstName, lastName, email)
VALUES ('$firstName', '$lastName', '$email')";


    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
    }else{
        echo 'Error:' , mysqli_error($conn);
    }
}

 

}








?>