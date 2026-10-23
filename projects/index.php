<?php
	$PAGE_NAME = "Projects";
	include '../includes/header.php';
	
?>
<h2 style="text-align: center;">"Chess speaks for itself" - Hans Niemann</h2>
<div class="entry">
	<h2 class="text-box">(2018 - Present) - Pikifen</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://github.com/Espyo/Pikifen">
			<img src="img/pikifen_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				An open source collaborative Pikmin fangame engine written in C++, utilizing <a href="https://liballeg.org/">Allegro</a> 
				and <a href="https://github.com/ocornut/imgui">DearImGUI</a>. It features numerous
				built in editors for custom content creation.
			</p>
			<p>
				I have personally implemented a particle system with its own editor, convex polygon collision using Separating Axis Theorm,
				GLSL shaders utilized for water and in game menus, Github Actions to automate compiling release builds, parts of a custom made
				scripting language, and fixed numerous bug reports. This list is not all encompassing, as I work on this project continuously!
			</p>
			<p>
				Beyond programming, I moderate the game's <a href="https://discord.gg/qbhz4u3">Discord Server</a>, helping a community of over 400 people with any questions or issues that arise.
			</p>
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2026) - Discord Mod Sim</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://github.com/Helodity/DiscordModSim">
			<img src="img/mod_sim_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				A comedic minigame rush that was created in two days for the <a href="https://globalgamejam.org/games/2026/discord-mod-sim-0">Global Game Jam 2026</a>. 
				Given the theme "Mask", myself and two teammates went down the route of how the internet is able to mask your real self.
			</p>
			</p>
				I wrote the entire codebase for the project, which included a revised version of <u>Beat King</u>'s cutscene system, 
				a modular condition checker, five unique minigames, and six endings.
	   		</p> 
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2025) - Beat King</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://github.com/Helodity-M/Fog">
			<img src="img/beat_king_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				A one key rhythm game that served as my final project for <u>Fundamentals of Game Design</u>, created with a partner over the course of the month.
			</p>
			<p>
				I personally implemented nearly all the code, reusing bits from Bisyntho for UI elements. 
		   		This includes scripts that handle syncing audio with visuals, a simple visual novel themed cutscene system, and smooth and appealing animations for
		   		effects and scene transitions. I also contributed audio, writing every track found within the game.
			</p>
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2025) - Command Output Widget</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://github.com/Helodity/plasma-applet-commandoutput">
			<img src="img/command_output_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				A fork of an existing abandoned KDE Plasma widget that prints terminal outputs to a screen.
			</p>
			<p>
				I implemented support for ANSI codes that move the console cursor and added customizable colors. 
				This required a near entire rewrite of how the output was parsed in order to parse these ANSI codes.
			</p>
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2025) - Allegro</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://liballeg.org/changes-5.2.html">
			<img src="https://liballeg.org/images/logo.png" width="300">
		</a>
		<div class="entry-text">
			<p>
				Allegro is a C library that handles common, low-level tasks such as creating windows, accepting user input, loading data, drawing images, playing sounds, etc. 
				and generally abstracting away the underlying platform.
			</p>
			<p>
				I implemented UV mapping for verticies drawn with the primitives addon, and resolved a memory leak that occured on Wayland.
			</p>
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2023 - 2024) - Bisyntho</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://store.steampowered.com/app/2754560/Bisyntho/">
			<img src="img/bisyntho_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				A solo project written in Unity that taught me how to publish a game on Steam over the course of three months, featuring full controller suppoert, various gamemodes,
				a skin system, and a variety of accessibility settings.
			</p>
			<p>
				I personally created every single, sprite, effect, soundtrack, and line of code.
			</p>
		</div>
	</div>
</div>
<div class="entry">
	<h2 class="text-box">(2022) - Group Playlist Creator</h2>
	
	<div class="entry-description">
		<a class="entry-image" href="https://docs.google.com/spreadsheets/d/1XjC5FyW4jCw19_MZ0cWMpPGaNfJ9yOi7Gunug3d5nh4/edit?gid=415518367#gid=415518367">
			<img src="img/song_rater_header.jpg" width="300">
		</a>
		<div class="entry-text">
			<p>
				A small project made in C#, utilizing Spotify and Google Sheet's APIs, allowing users to rank their song on a spreadsheet and turn the top 50 into a playlist.
			</p>
		</div>
	</div>
</div>

<?php include '../includes/footer.php'; ?>