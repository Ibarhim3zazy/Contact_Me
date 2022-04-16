<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Contact Card</title>
  </head>
  <body onload="success()">
    <?php require 'header.php'; ?>
      <div class="container">
        <div class="contact_con">
          <div>قال رسول اللَّه صلى اللَّه عليه و سَلم : «مَنْ حَفَرَ مَاءً لَمْ يَشْرَبْ مِنْهُ كَبِدٌ حَرَّى مِنْ جِنٍّ وَلاَ إِنْسٍ وَلاَ طَائِرٍ إِلاَّ آجَرَهُ اللَّهُ يَوْمَ الْقِيَامَةِ» [صحيح] <br>
و لأنه «لَيْسَ صَدَقَةٌ أَعْظَمَ أَجْرًا مِنْ مَاءٍ» كما روي عنه صلى الله عليه وسلم. [حسن لغيره] <br>
اجتمعنا إننا بإذن الله نعمل بئر ماء صدقه عن *دفعة 29 تربيه نوعيه* .
*خير يجمعنا و آثر طَيب يربطنا ببعض حتى بعد التخرج*✨
( قيمة السَهم 100ج )<br>
يُدفع للمسئولين عن لم التبرعات فِ كل فرع :<br>
فرع المنصوره:<br>
<a href="Mohamed_contact.php">محمد الشريف ( قسم حاسب )</a>
<a href="javascript:">دعاء غنيم ( قسم حاسب )</a>
<a href="javascript:">أمنيه راشد ( قسم حاسب )</a><br>
فرع منيه النصر:<br><br>
<a href="Mostafa_contact.php">مصطفى اسامه ( قسم حاسب )</a><br>
فرع ميت غمر:<br><br>
<a href="Ibrahim_contact.php"> ابراهيم السيد عزازى ( قسم حاسب )</a>
<a href="javascript:">مي اسامه ( قسم اعلام )</a><br>
أو عن طريق رقم فودافون كاش :<br>
<span>01014794899</span><br>
الأسهم مش شرط تكون من الدفعه أو من قسم مُعين بس ، أى حد يقدر يشاركنا الأجر سواء بنية التصدق لـ نفسه أو لأهله ♥️.
</div>
        </div>
      	<div class="row">
      			<h1>تواصل معنا</h1>
      	</div>
      	<div class="row">
      			<h4 style="text-align:center">نحب ان نستمع الي نصائحكم واقتراحاتكم</h4>
      	</div>
      	<div class="row input-container">
      			<div class="col-xs-12">
      				<div class="styled-input wide">
      					<input type="text" id="name" required />
      					<label>الاسم</label>
      				</div>
      			</div>
      			<div class="col-md-6 col-sm-12">
      				<div class="styled-input">
      					<input type="email" id="mail" required/>
      					<label>الايميل</label>
      				</div>
      			</div>
      			<div class="col-md-6 col-sm-12">
      				<div class="styled-input" style="float:right;">
      					<input type="text" id="phone" required />
      					<label>رقم الهاتف</label>
      				</div>
      			</div>
      			<div class="col-xs-12">
      				<div class="styled-input wide">
      					<textarea id="message" required></textarea>
      					<label>الرساله</label>
      				</div>
      			</div>
      			<div class="col-xs-12">
      				<div class="btn-lrg submit-btn" onclick="sending_message()">ارسال</div>
      			</div>
      	</div>
      </div>
      <div id="success-msg">
        <i class="fa fa-check"></i>
        تم ارسال الرساله بنجاح.<br>
        سيتم تحويلك الي الصفحه الرئيسيه خلال ثواني
      </div>
    <script src="js/contact_us.js"></script>
  </body>
</html>
