<?php 
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html dir="rtl">
<head>
<title>Easy Donate</title>
<link rel="stylesheet" href="style.css">
<link href="images/">

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "شكرا لك!";
}
</script>
</head>
<body style="margin: 0px; ">

<!-- start of Menu section -->
<ul style="font-size: 18px; font-weight: bold;">

    <li ><a style="text-align: right;" href="Home.php">الرئيسية</a></li>
        <li><a href="Faqs.php">الأسئلة الشائعة</a></li>
        <li><a href="About_us.php">من نحن؟</a></li>
  <li><a href="Contact.php">تواصل معنا</a></li>

<?php  
if(isset($_SESSION['name'])){


echo"<li style='float:left !important'><a class='active' href='Logout.php'>تسجيل الخروج</a></li>";
echo"<li style='float:left !important'><a class='active' href='Edit.php'>الملف الشخصي</a></li>";

}
else
{
  echo"<li style='float:left !important'><a class='active' href='Login.php'>تسجيل الدخول </a></li>";
  echo"<li style='float:left !important'><a class='active' href='Type.php'>تبرع لمرة واحدة</a></li>";

}
?>
</ul>
<img src="images/header_pic.png" width="100%" height="600">

<!-- End of Menu section -->


 <!-- start of About section -->
<div class="about" id="about">

  <div>
    <center>
             <br><br><br>
  <i style="text-align: center;">من نحن؟</i>
 <pre> <p style="font-size:17px">نحن نسعى لتوفير وسيلة سهلة وموثوقة للأفراد للمساهمة في الأعمال الخيرية ودعم القضايا الإنسانية.
 نحن نؤمن بأن قوة التبرعات تكمن في قدرتنا على التكاتف والعمل المشترك لتحقيق تغيير إيجابي في المجتمع. 
يعد موقعنا منصة شفافة وموثوقة حيث يمكن للأفراد العثور على العديد من الحملات والمشاريع الخيرية المختلفة
 والتبرع لها بكل سهولة وأمان. نحن ملتزمون بضمان أن كل تبرع يصل إلى الجهة المستحقة وأن كل مساهمة 
تحقق فعليًا تأثيرًا إيجابيًا. نحن ندعم التنوع في القضايا ونسعى لتمكين الجميع للمساهمة والمشاركة في بناء عالم أفضل.
</p></pre>
</center>
  </div>
  <div>
  <img class="about_image" src="images/about_pic.png"  >
  </div>
  </div>

  <!-- end of About section -->
  <div class="clean"></div>
  <br><br>




<center>
    <footer id="footer">
      <div class="content">

        <div class="social-media">
          <h4>وسائل التواصل الاجتماعي</h4>
          <p>
           تويتر
          </p>
          <p>
           فيس بوك
          </p>
          <p>
           انستغرام
          </p>
        </div>
        <div class="links">
          <h4>روابط سريعة</h4>
          <p><a href="Home.php">الرئيسية</a></p>
          <p><a href="About.php">من نحن؟</a></p>
          <p><a href="Contact.php">تواصل معنا </a></p>
        </div>
        <div class="details">
          <h4 class="mobile">رقم الهاتف</h4>
          <p><a href="#">+966-776655449</a></p>
          <h4 class="mail">البريد الالكتروني</h4>
          <p><a href="#">easydonate@gmail.com</a></p>
        </div>
      </div>
      <footer>
        <hr />
        EasyDonate. © 2023
      </footer>
</center>

</body>
</html>

