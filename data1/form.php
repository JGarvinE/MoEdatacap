<!DOCTYPE html>
<html>
<head>
	<title>Service Form</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}
		
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
			text-align: center;
		}
		
		.logo {
			margin-bottom: 20px;
		}
		
		.logo img {
			max-width: 100px;
			height: auto;
		}
		
		h2 {
			margin-bottom: 20px;
			color: #333;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			color: #333;
			text-align: left;
		}
		
		input[type="text"], select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-sizing: border-box;
			font-size: 16px;
			color: #333;
		}
		
		input[type="submit"], input[type="reset"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		
		input[type="submit"]:hover, input[type="reset"]:hover {
			background-color: #3e8e41;
		}
	</style>
   
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="img/logo.png" alt="Logo">
		</div>
		<h2>MoES CIM Service Data Capture Form</h2>
		<form method="post" action="submit.php">
			<label for="officer">Officer:</label>
			<input type="text" name="officer">
			<label for="monitor_code">Monitor Code:</label>
			<input type="text" name="monitor_code">
			<label for="monitor_serial">Monitor Serial Number:</label>
			<input type="text" name="monitor_serial_number">
			<label for="cpu_code">CPU Code:</label>
			<input type="text" name="cpu_code">
			<label for="cpu_serial">CPU Serial Number:</label>
			<input type="text" name="cpu_serial_number">
			<label for="printer_code">Printer Code:</label>
			<input type="text" name="printer_code">
			<label for="printer_serial">Printer Serial Number:</label>
			<input type="text" name="printer_serial_number">
			<label for="condition">Condition:</label>
			<select name="condition">
				<option value="Good">Good</option>
				<option value="Fair">Fair</option>
				<option value="Slow">Slow</option>
			</select>
			
                  <input type="submit" value="Submit">
			<input type="reset" value="Clear">
		</form>
	</div>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDcytMsqzVtpVrtSHRU5xx0t7DM8eu6PI0",
    authDomain: "moes-5f1ea.firebaseapp.com",
    projectId: "moes-5f1ea",
    storageBucket: "moes-5f1ea.appspot.com",
    messagingSenderId: "835045452157",
    appId: "1:835045452157:web:f7237a4a22851154bd0414",
    measurementId: "G-MJY8HBGVVG"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>
</html>