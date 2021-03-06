<?php
require_once("template/config.php");

$sql = "SELECT * FROM yoyaku, menu WHERE yoyaku.menu_id = menu.menu_id";
$rs = $pdo->query($sql);
?>

<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>店側：予約データ</title>
	<link rel="stylesheet" href="css/list.css">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<h1>予約データ</h1>
	<?php if(isset($_GET["cancel"])): ?>
		<p>ID：<?php echo $_GET["cancel"]; ?>の予約情報を削除しました</p>
	<?php endif; ?>
	<?php while($row = $rs->fetch(PDO::FETCH_ASSOC)): ?>
		<div id="data">
			<form action="cancel.php" method="get">
				<p>ID:<?php echo $row['id']; ?></p>
				<p>来店日:<?php echo $row['date']; ?></p>
				<p>時間:<?php echo $row['time']; ?></p>
				<p>人数:<?php echo $row['num']; ?></p>
				<p>メニュー:<?php echo $row['menu'] . " " . $row['price'] . "円"; ?></p>
				<p>名前:<?php echo $row['name']; ?></p>
				<p>メール:<?php echo $row['email']; ?></p>
				<p>電話:<?php echo $row['phone']; ?></p>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<p><button type="submit">予約の削除</button></p>
			</form>
		</div>
	<?php endwhile; ?>
	</div>
</body>
</html>