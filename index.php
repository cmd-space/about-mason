<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<title>Document</title>
	</head>
	<body>
		<h1>about-mason</h1>
		<p>
			Lorem ipsum... Just kidding! It's a beautiful day to be stuck inside all day learning about programming and actually 'coding' on the first day of class. Maybe I'll be able to make this page look nice...
		</p>
		<p>
			I'll be brainstorming the many different apps I would love to create in order to contribute to our capstone project process. So many problems or 'problems' that need solving, and I can't wait to dig in.
		</p>
		<p>
			I'm thinking about checking out Raja Yoga, since I have trouble focusing on occas... SQUIRREL! <img id="gif" class="na" src="images/giphy%20(1).gif" alt="SQUIRREL!">
		</p>
		<p id="poof">Click the meme above to make it go away! Click this paragraph to bring it back!</p>
		<img src="images/rajaYoga.jpg" alt="Raja Yoga Book Cover, written by Swami Vivekananda">
		<script>
			$(document).ready(function() {
				$("#gif").click(function() {
						$(this).addClass("camo");
				});
				$("#poof").click(function() {
					$("#gif").removeClass("camo");
				});
			});
		</script>
	</body>
</html>