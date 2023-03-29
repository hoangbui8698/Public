<!DOCTYPE html>
<html>
<head>
	<title>Generate Password</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Generate Password</h1>
	<button id="generate-btn">Generate Password</button>
	<div id="result"></div>

	<script>
		document.getElementById('generate-btn').addEventListener('click', function() {
		    // Gọi API từ backend
		    var xhr = new XMLHttpRequest();
		    xhr.onreadystatechange = function() {
		        if (xhr.readyState === XMLHttpRequest.DONE) {
		            if (xhr.status === 200) {
		                // Phân tích kết quả trả về
		                var data = JSON.parse(xhr.responseText);
		                var password = data['password'];
		                var message = data['message'];
		                
		                // Hiển thị kết quả
		                document.getElementById('result').innerHTML = 'Password: ' + password + '<br>' +
		                                                                'Message: ' + message;
		            } else {
		                console.log('Error: ' + xhr.status);
		            }
		        }
		    };
		    xhr.open('GET', 'http://10.0.1.10/var/www/html/generate_password.php');
		    xhr.send();
		});
	</script>
	<?php
	// Gọi API từ backend
	$url = 'http://10.0.1.10/var/www/html/generate_password.php';
	$data = file_get_contents($url);
	$result = json_decode($data, true);

	// Hiển thị kết quả
	echo '<h2>Password: ' . $result['password'] . '</h2>';
	echo '<p>Message: ' . $result['message'] . '</p>';
	?>
</body>
</html>