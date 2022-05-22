<?php

function update_vote($mysqli)
{
// 	$no = $_GET['no'];
	
// 	if (isset($_GET['vote'], $_GET['no'])) {
// 		$query = "update derby set votes = votes + 1 where no = $no";
// 		$mysqli->query($query);
// 	} else {
// 	}




		$no = $_GET['no'];
	
		// クッキーで投票済かどうかを判断する
		if (!isset($_COOKIE['voted_' . $no])) {
	
			// GETが実行されたときに下記を実行
			if (isset($_GET['vote'], $_GET['no'])) {
				$query = "UPDATE derby SET votes = votes + 1 WHERE no = $no";
				$mysqli->query($query);
	
				// クッキーの付与
				// 参考：http://php.net/manual/ja/function.setcookie.php#refsect1-function.setcookie-examples
				setcookie("voted_" . $no, "voted_" . $no, time() + 86400);  // 有効期限は一日です
	
			}
		} else {
			echo "本日は投票済です。";
			
			
		}
	}

