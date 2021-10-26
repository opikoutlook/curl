<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="nomor"><br>
		<input type="" name="pesan"><br>
		<input type="submit" name="kirim" value="kirim">
	</form>
	<?php
	@$number = $_post['nomor'];
	@$pesan = $_post['pesan'];

	//$ip='192.168.1.102:9000';
			// set post fields
		$post = [
		    'number' => '$number',
		    'message' => '$pesan'
		];

		$ch = curl_init('http://36.95.175.83:9000/send-message');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		// execute!
		$response = curl_exec($ch);

		// close the connection, release resources used
		curl_close($ch);

		// do anything you want with your response
		var_dump($response);

			?>
</body>
</html>