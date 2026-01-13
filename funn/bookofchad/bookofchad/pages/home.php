<?php
	$page = "Home";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>

<div id="content">
<!--
<?php
	$sql = "SELECT * FROM blog RIGHT JOIN admin ON blog.adminID = admin.adminID ORDER BY dateTime DESC LIMIT 0,6";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
		while ($row = mysqli_fetch_array($result))
		{
			echo "<div id='news'>";
			if((is_null($row['image'])) || (empty($row['image']))) //if the state field is NULL or empty
				{
					echo "";
				}
				else
				{
					echo "<div id='chadgasm'><img src='../images/" . $row['image'] . "' /></div>";
				}
			echo "<h4>" . $row['title'] . "</h4>";
			echo "<p>" . $row['content'] . "</p>";
			echo "<div id='date'>Posted on " . $row['dateTime'] . " by " . $row['username'] . "</div>";
			echo "</div>";
			if (isset($_SESSION['login']))
	{
		echo "<div id='readMore' style='width: 100%; text-align:left; top:0px; position:relative'><a href='postedit.php?blogID=" . $row['blogID'] . "'>Edit Post</a></div><br />";
	}
		}
		// echo "<br />";
?>
-->

<h3>The Book of Chad - Intro scene</h3>

<p><iframe width="620" height="413" src="https://www.youtube.com/embed/fUIjps-31n4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

<h3>Hey Kids! Check this fucking shit out!</h3>
    <p>You wanna see the Temple? You going there someday? Well now you don’t have to go there! And that someday can be today!</p>

<p>Introducing the world’s first home Temple experience, exclusive to the Nintendo Entertainment System! Wear the NES Power Glove to perform the tokens to be taken behind the veil! Stand on the Power Pad as you raise your arms and your voices hail “Oh God, hear the words of my mouth!” Perform baptisms for the dead on ROB the Robot! You can even connect up to 4 players with the NES Four Score!</p>

<p style="text-align: center;"><img src="../images/chadgasm/NESpriesthoodPower.png" alt="Nintendo now you're playing with priesthood power" /></p>


<h3>Interesting peripheral Smitties</h3>

<p><em>Orrin Porter Rockwell</em></p>

<p><em>John Doyle Lee</em></p>
<p>After reading <em>The Mountain Meadows Massacre</em> by <em>Juanita Brooks</em> (I recommend it), John D. Lee isn't quite the villain I hoped for. He had a hand in the massacre, no doubt, but he seemed to really be distraught from the event. He even cried like a baby, which led the Indians to call him "Yau-Gauts," which means "crybaby". He endured that nickname for the rest of his life. Hilarious.</p>

<p><em>Christopher Nemelka</em></p>
<p>The supposed translator of <em>The Sealed Portion - The Final Testament of Jesus Christ</em>, which claims to be the story given to The Brother of Jared as outlined on the 'sealed portion' of the golden plates. Joseph Smith was commanded not to translate from this section, as God would reveal it 'in his own due time'. It outlines the very beginning and answers sexy answers such as 'What's Heavenly Mother's name?' (Marihala btw). Hilarious.<br />
However, our Lattest-day Saint movement debunks his outrageous false-prophet claims. We know what the real Sealed Portion contains, and God won't fucking like it.</p>

<p><em>Mark Hofmann</em></p>
<p>One of the most accomplished counterfeiters in our time. Among his notable catalogue includes the infamous Salamander Letter, in which Martin Harris writes to W. W. Phelps regarding Joseph Smith's vision of Moroni actually being a White Salamander. Hilarious.<br />
One would think that a true prophet, seer and revelator would be in a unique position to spot a scam like this.<br />
Why did you have to murder? I really wanted to love you, Mr. Hofmann, for you truly did a number on their credibility.</p>

<p><em>Ron and Dan Lafferty</em></p>
<p>These fucking cunts seriously went off the shit-rails with their shitty-ass view of an already shitty-ass view. Unlike Mark Hofmann, who also killed but did some banging-ass hilarious and impressive work, these bitchclits are full dickshits.</p>

<p><em>John Hyrum Koyle</em></p>
<p>Mr. Koyle had a dream/vision from the Angel Moroni in 1896. In it, he saw the location of hidden Nephite gold, stored away within a mountain near Salem, Utah. This gold would provide the Smitties with much needed aid during the tough times before Jesus Christ comes back for more Earthly action. Cuz, you know, during the apocalypse, people are going to still going to fucking care about gold. Hilarious.</p>

<p><em>Ervil LeBaron</em></p>

<p><em>Warren Jeffs</em></p>

<p><em>Jeffrey Lundgren</em></p>

<h3>Baskin Ye Shall Receive</h3>
<p>
Buy One Get One Free on Fast Sundae!<br />
Called to Softserve</p>
<h4>Flavors:</h4>
<p>Very Berry L. Tom Perry<br />
The New and Everlasting Coconut<br />
Mint Romney<br />
Lemon and Limeuel<br />
Plum Plum Ye Saints<br />
Tommy's Sour Monsoon<br />
White & Delightsome Vanilla<br />
Porter RockyRoadwell<br />
Bring 'em Young Bubblegum<br />
Molten Mocha Massacre<br />

Mousse the Right<br />
Boyd K. Fudge Packer<br />
Adam-ondi-Almond<br />
Cake Batter-day Saints<br />
Salem Dream Lime<br />
Mango and Do<br />
Nephi Neopoliton (3 flavors!)<br />
Fannie Alger Cherry<br />
A Choclamation to the Family<br />
Pearahemla<br />
The One Mighty and Strawberry<br />
Cain and Maple<br />
Handcart MooseTreks<br />
Raisin the Bar<br />
Gadianton Cobbler<br />
Peach My Gospel<br />
Priesthood Key Lime Pie<br />
Melonic Priesthood<br />
Melonium<br />
Angel Food Moroni<br />
Tespinoni<br />
Elderberry<br />
Pecan Pie to Kolob<br />
Search, Ponder and Praline<br />
S'mores of Babylon<br />
Bruce R. McCookie Dough<br />
Tiger's Blood Atonement<br />
The Grape and Spacious Building<br />
Mormon Pineapple Choir<br />
Hosana Banana<br />
Hi-Rum-cake Smith<br />

Your Own Planet Pomegranate<br />
Forbidden Fruit Punch<br />
Polygummy Bear<br />
The Fudgemints of God<br />
Praise to the Flan<br />
Sheri Honey Dew<br />
Cantaloupe to the Temple<br />
Artikiwis of Faith<br />
Urim and Thumpkin<br />
Apple Pie Apostate Guy<br />
Slippery Slope Cantaloupe<br />
Raspberry Tripple Combination<br />
Parfait P. Pratt<br />
Samuel the Lemonade<br />
Secret Honeycombinations<br />
Gordon B. Sprinkles<br />
Fudge Not Lest Ye Be Fudged<br />
Strawberry Short Creek<br />
Coca-Kolob<br />
Thomas B. Marshmallow<br />
Lafferty Taffy<br />
Prophet, Seer and Now-And-Later<br />
No Drink Coffee English Toffee<br />
Oh God, Taste the Flavor of my Mounds<br />
Peach me to walk<br />
Mountain Dew Nauvoo<br />
Palmyra New York Peppermint Patty<br />
Honor Code á la mode<br />
Heber J. Graham Cracker<br />
Family Scone Evening<br />
Pop Rocks in a Hat<br />
David Oreo McKay<br />
Orrin Hatch Sour Patch<br />
Upon the Crust of Cranberry
<p>


<h3>The Mormon Paradox</h3>
<p>The Mormon Paradox is an observation made in an attempt to disprove the authenticity of the Latter-day Saint (known commonly as Mormon or Smitty) faith. It suggests that you can listen to the Mormon Tabernacle Choir's performance of Come, Thou Fount of Every Blessing and feel the Holy Ghost, despite simultaneously engaging in an activity which the Holy Ghost does not approve of, such as watching naked women for entertainment.</p>

<p><em>Mormonism, you have been conquered.</em></p>

<p>This paradox has been referenced in popular culture, such as the fictional Twitter account, 

@ShitCCBShouldSay, quoted as saying 'Cum, Thou Fount of Every Jizzing.'</p>

<p>Yes relation to the real Twitter account, <a href="https://twitter.com/shitccbsays">@ShitCCBSays</a>.</p>


</div>


<?php
	include "../includes/footer.php";
?>