<?php
	$PAGE_NAME = 'Home';
	include 'includes/header.php';
?>

<h2 class="text-box">About Me</h2>
<div class="text-box">
	<h3><i>Aspiring Freakazoid</i></h3>
	<p>What's a "freakazoid" and why do I want to be one?<br>That's for me to know and you to wonder.</p>
	<br>
	<h3><i>Hyperfixator</i></h3>
	<p>You think I made this parralax background for the fun of it?<br>
	Well, yeah, I did actually. It took me like 5 hours idk how I didn't move for that long.<br>
	<br>
	
	<h3><i>Mediocre Artist</i></h3>
	<p>A solid 6/10 I would say. I had a few that were an 8/10 but they're on my desktop at home. oops<br>
	Wait no i found em<br>
	<img src="img/pfp.jpg" style="max-height: 96px"><img src="img/pfp2.jpg" style="max-height: 96px"><br>
	And yes I spent over $500 on equipment please don't ask.</p>
	
	<br>
	<h3><i>Self Diagnosed AI Hater</i></h3>
	<p>See attached proof of me torturing a machine (I would do it again)</p><br>
	<img src="img/aihater.png" style="max-height: 256px;"><br>

	<br>
	<h3><i>Minecraft Server Hoster</i></h3>
	<p><?= "Your IPV4 Address: " . $_SERVER['REMOTE_ADDR'] ?></p>
	<p>IYKYK</p>
	
	<br>
	<h3><i>Proud Owner of a Riced Linux Desktop</i></h3>
	<p>KDE, sorry no dotfiles availible.</p><br>
	<img src="img/rice.webp" style="max-height: 256px; max-width:100%"><br>
</div>
<br>
<?php include 'includes/footer.php'; ?>