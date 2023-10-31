<?php 
include './inc/db.php';
include './inc/form.php';
//include './inc/db_close.php';
//include './inc/select.php';
?>


<?php include_once './parts/header.php';?>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
   
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي فيسبوك بالتاريخ المذكور اعلاه </li>
  <li class="list-group-item">ساقوم ببث مباشر لمدة ساعة عبارة عن اسئلة و اجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامنازيا</li>
</ul>


<form class="mt-5" action="index.php" method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName " class="form-control" id="exampleInputEmail1" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>




<?php foreach($users as $user) : ?>
     <h1><?php  echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '<br>' . htmlspecialchars($user['email']); ?></h1>

</div>

<?php  endforeach; ?>


<?php include_once './parts/footer.php';?>