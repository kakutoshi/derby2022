<?php
ob_start();

require_once('init.php');
require_once('general.php')
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>日本ダービー　勝ち馬予想投票[</title>
</head>

<body>

	<h2>第89回<br>
	東京優駿<br>
	勝ち馬予想投票</h2>


	
	<?php



	if ($_GET) {
	    update_vote($mysqli);
	}

	
	//現在の投票数を取得する
	$query = "select no,name,votes from derby";
	$result = $mysqli->query($query);
	while ($row = $result->fetch_assoc()) { ?>
		<br />

		<!-- <a href="?vote=up&amp;no=1">ジオグリフ</a> -->

		<a href="?vote=up&amp;no=<?php echo $row["no"] ?>">

			<?php echo $row["no"]; ?> :
			<?php echo $row["name"]; ?> :
			<?php echo $row["votes"]; ?>

		</a>
		<br />

	<?php }








	// End of While ?>
</body>

</html>