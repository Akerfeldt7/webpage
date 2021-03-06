<!DOCTYPE html>


<html lang="eng">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="reviews.css"> <!--css gia tin sugkekrimeni selida mono -->
		
	
	
	<!--<body onload="first_open('opeth_sorceress')"> -->
	
	
	<?php
		require('php_scripts/menu.php');

	?>
	
	
	<br>
	<br>
	<br>
	<br>
	
	
	
<div id="container">
	<nav>
		<div style="margin:10px 10px"> <!--auto edo to div einai gia ta checkboxes-->
			<li>
				<label for="classic" onchange="checked()" style="color:green ; font-family:Comic Sans MS;margin-right:30px;"><input id="classic" class="checkbox" type="checkbox" name="field1"  value="classic"></input> Classic albums </label>
				<label for="2016" onchange="checked()" style="color:green; font-family:Comic Sans MS; margin-right:30px;"><input id="2016" class="checkbox" type="checkbox" name="field2" value="2016"></input> 2016 albums</label>
			</li>
			<li>
				<label for="2018" onchange="checked()" style="color:green; font-family:Comic Sans MS"><input id="2018" class="checkbox" type="checkbox" name="field3" value="2018"></input> 2018 albums</label>
			</li>
		</div>
		
		<input type="text" id="search_field" onkeyup="searchband()" placeholder="Search..">
		<ul id="reviews_ul">  <!--H LISTA POU PERIEXEI TA REVIEWS -->
			<li><a href="#" id="first_open_rev" class="tablinks album_2016" onclick="openreview(event,'opeth_sorceress')">Opeth-Sorceress</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'testament-brotherhood')">Testament-Brotherhood Of The Snake</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Anciients–Voice of the Void')">Anciients–Voice of the Void</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Despised Icon-Beast')">Despised Icon-Beast</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Heaven Shall Burn–Wanderer')">Heaven Shall Burn–Wanderer</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Batushka–Litourgiya')">Batushka–Litourgiya</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Helstar-vampiro')">Helstar-vampiro</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Unfathomable Ruination-Finitude')">Unfathomable Ruination-Finitude</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Evergrey-The Storm Within')">Evergrey-The Storm Within</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Slayer-Repentless')">Slayer-Repentless</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Sodom-Decision Day')">Sodom-Decision Day</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Thy Catafalque-Meta')">Thy Catafalque-Meta</a></li>
			<li><a href="#" class="tablinks album_classic" onclick="openreview(event,'Mastodon-Leviathan')">Mastodon-Leviathan</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Ulcerate–Shrines of Paralysis')">Ulcerate–Shrines of Paralysis</a></li>
			<li><a href="#" class="tablinks album_2016" onclick="openreview(event,'Wardrum-Awakening')">Wardrum-Awakening</a></li>
			<li><a href="#" class="tablinks album_2018" onclick="openreview(event,'Michael Romeo–War of the Worlds,Pt.1')">Michael Romeo–War of the Worlds,Pt.1</a></li>
			
			
			
			<!--<li>Haken-Affinity</li>
			<li>Neurosis–Fires Within Fires</li>
			<li>Insomnium–Winter’s Gate</li>-->
			
		</ul>
		
	</nav>
	
	
	
	<article> <!-- edo mesa einai ta reviews! se kathe ksexoristo div ena review -->
		
		<div id="opeth_sorceress" class="tabcontent">
			<h1>Opeth-Sorceress</h1>
			<h4 style="padding-left:10px;">Progressive rock</h4>
			<p>  <img src="images/opethsorceressfinalcd.jpg" width="300" height="300"> 
		<a href="http://www.angrymetalguy.com">Review from Angry metal guy:</a>
		It’s funny to think about how long it has been since the golden age of Swedish metal. 
		In the mid-to-late ’90s and early aughts,1 Swedish bands were atop the world. Now venerable legends were young, 
		hungry and novel. 1995 saw the release of Slaughter of the Soul, The Gallery and Orchid, 
		while the following year graced us with Morningrise and The Jester Race. And when I got into Opeth in 1998 
		I was swimming in a veritable ocean of amazing Swedish records. Despite my love of the band, 
		I would have laughed if someone had suggested that Opeth—the guys who couldn’t write a song shorter than 
		10 minutes—would be the most successful of the bunch in 20 years. Maybe it’s obvious in retrospect. 
		Opeth was the band with the broadest opportunities for evolution. 
		They have shown that consistently in their long career. 
		Record after record they evolve; sometimes for the better and sometimes not. 
		But they have always been forward thinking and—given their recent moves into merch and their own imprint—clever.
		Sorceress is the follow-up to one of the band’s best albums. Pale Communion was a success musically, 
		but it was also a triumph of production and presentation. 
		It saw Opeth sidling away from a pair of albums (Watershed and Heritage) marked by a writing style that was choppy, 
		or even clumsy.2 Pale Communion corrected this trajectory by assembling something more coherent, echoing MAYH and Ghost Reveries, but, y’know, not super metal.
		Rather than being a continuation of its predecessor, Sorceress is the culmination of the different styles Opeth has been exploring since Watershed. 
		The album lacks the straight-up Frippisms which sunk Heritage for me, but it straddles a more abstract sound with Åkerriffs and a 
		healthy dose of ’70s blues rock influence. Åkerfeldt’s newfound appreciation for subtle Swedish folk feel3 and harmonic minor leads things off on 
		“Persephone” which brackets the album on the “slight return.” In the gooey center, the band oscillates between bongwater rock, laced with keyboards 
		and noodling in blues scales on “Chrysalis,” nods to King Crimson and Heritage like “Strange Brew,” and an apparent admiration for Jethro Tull on “Will o’ the Wisp.”
		Where Sorceress shines the most, though, is where Åkerfeldt’s strengths have always been: complex compositions balanced with heart-wrenching, melancholy melodies. 
		“Chrysalis” is a song that strikes remarkably close to sounding like death metal ‘peth—but with blues scales—and it merges into “Sorceress 2.” 
		The sequel could have been on Damnation and may be my favorite chorus from the band since “Isolation Years.” “The Wilde Flowers” features an artful, 
		delicate bridge (complete with harp?) and a memorable chorus, while “A Fleeting Glance” features harmonic minor acoustics, a groovy bass driven feel and Opeth‘s best musical 
		climax since “The Drapery Falls.” It’s in these moments where the band demonstrates what a mature, tight unit they are, and Mikael’s voice meshes perfectly with the music, 
		supported by tight play from the whole band.
		Maybe the biggest change from Pale Communion to Sorceress is the extent to which the latter has developed a Spiritual Beggars–like dedication to the blues scale. While there has been a growing influence of ’70s blues rock vibes in Opeth for a long while, Sorceress reaches Peak Blue Note. Scattered throughout Sorceress is a proportion of noodly, bluesy solos and chunky hard rock riffs. The riffs are usually balanced with verbose Åkerriffs, but they stand out to me because of a deeper issue. In contrast to tracks like “A Fleeting Glance,” Åkerfeldt is least in his element when the band crescendos while riffing on blue scales. 
		Robert Plant isn’t fronting this band, so when the vocals hit emotional—but monotone—zeniths (see: “Chrysalis” or “Strange Brew”), they lack power and grit. 
		I haven’t really missed growls in later Opeth, but Sorceress‘ move into slightly heavier material 
		emphasizes the intensity growls brought in contrast to Åkerfeldt’s choirboy voice.
		My other nagging doubt about Sorceress is the production. While Pale Communion had pristine, artful production and a top-rate mastering job, 
		Sorceress is a bit muddy and uneven. I love the individual tone of the instruments on here—though 
		I’m less in love with the fuzzbox tone than usual—but there are places where Sorceress ends up on the muffled side of bassy. 
		I don’t know what happened, but given that the material is heavier than Pale Communion, with songs like “Sorceress,” “Era,” and “Chrysalis” sporting serious heft, 
		you can hear that these songs were mastered down to a DR7. On the other hand “Sorceress 2” and “The Seventh Sojourn” clock in at DR11 and DR10 respectively. 
		The former tracks have a snare drum that sounds pretty boxy, while Mendez’s bass doesn’t breathe nearly enough.
		My complaints are minor in comparison to the artful construction of Sorceress. 
		This a complete album with great material from a band that has transitioned 
		from “very popular” to “institution.” With the establishment of Moderbolaget and, 
		as far as I can tell, moving even more creative control into the hands of the band themselves, 
		these upcoming years will be a very interesting era for Opeth. My gut instinct is that this is the last record before they flip 
		the switch and try something else on for size.4 This record is the culmination of a strategic and musical shift, and like Watershed was to Ghost Reveries and My Arms, 
		Your Hearse was to Morningrise, it’s time for a new permutation. Regardless, Sorceress is an album that will please fans of prog rock, fans of dark music and that 
		has grown on me significantly since I first heard it. While not as immediate as its predecessor, I’ve grown to love the texture and contrasts. 
		And hell, the last record these guys wrote that really had to grow on me was Ghost Reveries, and well, you might know what I think of that one…
		</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/LhqijfqecvA" frameborder="0" allowfullscreen></iframe>
		</div>

		<div id="testament-brotherhood" class="tabcontent">
			<h1>Testament-Brotherhood of the snake</h1>
			<h4 style="padding-left:10px;">Thrash metal</h4>
			<p> <img src="images/Testament_-_The_Brotherhood_of_the_Snake_2016.jpg" width="300" height="300"> 
		<a href="http://www.rocking.gr/">Review from ROCKING.gr:</a>
		Φαίνεται πως η έμπνευση έχει αράξει για τα καλά στους ώμους των Testament εδώ και πάρα πολλά χρόνια, 
		παρά τα διάφορα προσωπικά προβλήματα των μελών και τα αέναα πήγαινε-έλα στο line-up τους. 
		Δισκογραφικά, αλλά και στο σανίδι, οι Testament είναι σταθερά η αξιοπρεπέστερη και ακμαιότερη αμερικάνικη thrash metal μπάντα της παλιάς γενιάς 
		και από τις ελάχιστες που αυξάνουν συνεχώς τη δημοτικότητά τους (βλ. και Slayer, Overkill). Το "Brotherhood..." είναι άλλο ένα διαμάντι στο σεντούκι των κατορθωμάτων τους, αλλά δεν είναι απλώς «άλλο ένα καλό Testament άλμπουμ». Είναι το καλύτερό τους από την εποχή του "The Gathering" του 1999 και χαλαρά μέσα στις κορυφαίες metal κυκλοφορίες της χρονιάς που διανύουμε.
			Το ενδέκατο studio άλμπουμ των Testament είναι και αυτό με τη σειρά του αποτέλεσμα μιας μάζωξης (gathering) 
			κορυφαίων metal μουσικών: Πέρα από την τριάδα Chuck Billy (chief, σε άψογη φόρμα) - Eric Peterson (ήρεμη δύναμη, μάστορας των riff και βασικός συνθέτης) - 
			Alex Skolnick (αυτό που λέμε «κιθαρίστας με προσωπικότητα»), εδώ ακούμε το βουνό Gene Hoglan στα τύμπανα (ισοπεδωτικός και με ωραίο, φυσικό ήχο -τον είχαν χρειαστεί και
			στο κάφρικο "Demonic" του 1997) και τον "eternal hippy of all that is fretless", όπως τον αποκάλεσε κάποτε ο Chuck Schuldiner, κύριο Steve DiGiorgio στο μπάσο 
			(επιβλητικός όπως παντού και πάντα, επιστρέφει στο συγκρότημα από το 1999). Όπως ήταν, λοιπόν, αναμενόμενο (και αφού επιβεβαιώθηκε η χημεία μεταξύ των μελών επί σκηνής 
			στα καλοκαιρινά ευρωπαϊκά φεστιβάλ), το παίξιμο στο "Brotherhood..." είναι αδιανόητο. Η κιθαριστική δουλειά αποσπά αμέσως την προσοχή και είναι αληθινό «εργόχειρο». 
			Οι Testament δεν βασίζονται (μόνο) στις ογκώδεις παραγωγές για να γεμίσουν τον ήχο τους, αντίθετα μας προσφέρουν απλόχερα επιθετικά riff, μελωδικά σόλο, αρμονίες και ό,τι άλλο 
			τραβάει η όρεξή σας (ακούστε οπωσδήποτε το έπος "Neptune’s Spear", ένα αληθινό σεμινάριο κιθάρας, όπου ο Skolnick λάμπει ως ένας μεγάλος guitar hero). Στα μετόπισθεν, 
			οι Hoglan/DiGiorgio χτίζουν έναν συμπαγή ρυθμικό τοίχο, αρνούμενοι όμως -ευτυχώς- να παίξουν ρόλους κομπάρσων, γι' αυτό και η προσωπική τους σφραγίδα είναι ολοφάνερη στο άλμπουμ. 
			Ο δε Chuck Billy, αγέραστος, επιλέγει παραδοσιακές thrash metal φόρμες, με κάποιες λιγοστές death metal στιγμές (π.χ."Centuries Of Suffering", αλλά και διάσπαρτα growls στα υπόλοιπα κομμάτια, για έμφαση).
			Οι βετεράνοι πλέον Testament κινούνται σε μια κάπως πιο ρετρό thrash metal κατεύθυνση αυτήν τη φορά (σε σχέση με το πιο χαλαρό και μοντέρνο, ας πούμε, "Dark Roots Of Earth" του 2012), 
			στην οποία γκαζώνουν ακόμα και με κλειστά μάτια και θριαμβεύουν. Παρουσιάζουν τον πιο πλούσιο κιθαριστικά δίσκο τους, από την εποχή των "Souls Of Black" και "The Ritual" και 
			δεν τσιγκουνεύονται καθόλου σε μελωδίες και ρεφρέν (π.χ. "Seven Seals", "Pale King"), αξιοποιώντας άριστα τα σημεία εκείνα στα οποία ακριβώς υπερέχουν και διαφοροποιούνται 
			από το συνάφι τους. Το σημαντικότερο όλων, όμως, είναι ότι η μπάντα για άλλη μια φορά κυκλοφορεί έναν δίσκο δουλεμένο σε κάθε του πτυχή και 
			λεπτομέρεια (από το χαλαρό spooky στιχουργικό concept μέχρι το πανέμορφο ζωγραφιστό εξώφυλλο), σεβόμενη το κοινό της αλλά και την ιστορία της και το μουσικό ιδίωμα που την ανέδειξε: οι Testament δεν κάνουν αγγαρεία, ακούγονται ακόμα επιθετικοί και διψασμένοι, το thrash metal τους ρέει αβίαστο, αυθεντικό και άρα πειστικό.
			Σε μια δύσκολη από άποψη ανταγωνισμού χρονιά, καθώς τα μεγαθήρια έχουν ή θα έχουν νέες δουλειές στα ράφια, οι Testament αναδεικνύονται μέχρι στιγμής πανάξιοι πρωταθλητές, 
			καθώς το "Brotherhood Of The Snake" με άνεση κατατροπώνει το "Dystopia" (Megadeth) και τo "For All Kings" (Anthrax), παραμερίζει υπεροπτικά το "Evil Divide" (Death Angel) και κλείνει προκλητικά το μάτι στο "Hard Wired... To Self-Destruct", που ετοιμάζεται να κυκλοφορήσει η μεγαλύτερη metal μπάντα του πλανήτη και κάποτε (και ίσως ακόμα) μεγάλη τους επιρροή, οι Metallica. 
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/OeIgFsU0x4I" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Anciients–Voice of the Void" class="tabcontent">
			<h1>Anciients–Voice of the Void </h1>
			<h4 style="padding-left:10px;">Progressive metal</h4>
			<p> <img src="images/AnciientsArtwork.jpg" width="300" height="300">
				Progressive metal με death metal στοιχεία! Θυμίζουν αρκέτα Opeth χώρις να δημιουργούν όμως τόσο σκοτείνες ατμόσφαιρες.
				Ο δίσκος σίγουρα θα μπορούσε να είναι απίστευτος αλλά δεν έχει αυτό το κάτι παραπάνω και καταλήγει να είναι απλά ένας αρκέτα καλός δίσκος που
				σίγουρα θα θέλετε να τον ακούσετε πολλές φορές.
				Οπως καταλήγει και ο <a href="http://www.angrymetalguy.com/anciients-voice-of-the-void-review/">Angry metal guy</a> <br>
				Voice of the Void is a classic case of an album featuring an abundance of great moments that doesn’t quite translate into a great album. 
				Some bloated moments, momentum lags and the sub-par mastering job hold this otherwise accomplished and frequently enjoyable sophomore album from reaching its full potential, 
				resulting in a very good album that could have been so much more.
				
			</p>
			<iframe style="margin-top:20px; margin-left:30px" width="560" height="315" src="https://www.youtube.com/embed/On2ZX_CxGGA?list=RDOn2ZX_CxGGA" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Despised Icon-Beast" class="tabcontent">
			<h1>Despised Icon-Beast </h1>
			<h4 style="padding-left:10px;">Deathcore</h4>
			<p> <img src="images/despisediconbeastcd.jpg" width="300" height="300">
			<a href="http://www.blabbermouth.net/">Review from blabbermouth.net :</a>
			Deathcore favorites DESPISED ICON may have called it quits in 2010, but there's nothing like watching a scene a band helped forge take off without them to prompt re-emergence four years later. Fans grumbling impatiently for the band's new album can rejoice now that 2016 brings them "Beast", the Montreal ensemble's first full-length since 2009's "Day of Mourning".
To recap the enormity of this band, DESPISED ICON is a seven-piece riot squad boasting not one but two growlers, Alex Erian in mid-range and Steve Marois diving in the deeper end while pulling from his arsenal pukes and squawks abominable enough to send goblins scurrying. Eric Jarrin, Yannick St-Amand and Ben Landreville make up DESPISED ICON's triple guitar attack, while Sebastien Piche (bass) and Alex Pelletier (drums) round up the band's vicious rhythm section.
Many bands call themselves deathcore, but DESPISED ICON exhibits the two pulped components better than anyone, and nothing's changed on "Beast". If you can picture AGNOSTIC FRONT or TERROR with stomping hardcore grooves, breakdowns and gang shouts set to fiercer lead vocals, cruder riffs and dizzying blast sections ala CATTLE DECAPITATION, you get an idea of you're in for.
"The Aftermath" is all of the aforementioned elements wrapped into a butt-ugly track; it's one of the nastiest hardcore songs you'll ever hear. "Inner Demons" sticks more in the death metal leagues with a ton of tech blitzing behind Alex Erian and Steve Marois. The manic tradeoffs between the two during a trifecta of subsequent breakdowns is enough to pound listeners into submission before Alex Pelletier's sewing machine effects throughout "Drapeau Noir" keeps them planted down. Pelletier's blast beats are brutal, but expect the dynamic to shift toward a hardcore mosh in the last minute of the song. The reverse structure applies to "Bad Vibes", which leads with a mosh and vaults through grind and thrash segments. The song is only strengthened with the additional of some of Steve Marois's ghastly pig squeals—also found on "Time Bomb" and the title cut. As hard as Marois and Erian raze their esophagi, it's no wonder DESPISED ICON took a hiatus.
The cinematic orchestration of "Dedicated To Extinction" serves as a sweeping interlude en route to the self-explanatory "Grind Forever". As with the rest of the album, flurrying adjustments between grind and hardcore modes on "Time Bomb" and "One Last Martini" (Reverend Horton Heat might be wont to skip this not-so-happy hour) become decimating workovers. This album may have been seven years in the making, but there'll be no DESPISED ICON fan out there who won't consider "Beast" worth its gruesome wait.


			
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/AECzwseIYwo" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Heaven Shall Burn–Wanderer" class="tabcontent">
			<h1>Heaven Shall Burn–Wanderer </h1>
			<h4 style="padding-left:10px;">Melodic death metal</h4>
			<p> <img src="images/Heaven-Shall-Burn-Wanderer-Cover-2016.jpg" width="300" height="300">
			<a href="http://www.angrymetalguy.com">Review from Angry metal guy:</a>
			I love seeing bands progress beyond their infant stages, taking their influences and branching out into worlds unknown. Germany’s Heaven Shall Burn are not one of those bands you think of when you picture the word “progress.” They’ve taken their signature sound from 2004’s landmark Antigone, refined their attack, and proceeded to beat us over the head with variations of their trademark brand of metalcore/death metal/whatever it is the cool kids are calling them these days. Still, I love their formula of tight riffing, heavy-artillery double-bass-littered drums, and multi-layered vocals from the bowels of Hell. That said, this formula tends to get old after a while. So what are Heaven Shall Burn to do on their eighth album, Wanderer, their first without founding drummer Matthias Voigt?

The answer’s simple: up the intensity level, make the melodic moments shine brighter than the sun, and sacrifice none of the things that made Heaven Shall Burn the ferocious beast it is. The band channeled their inner Bolt Thrower because, with some exceptions, I haven’t heard the band sound this vicious since 2002’s brutal Whatever It May Take. Once second track “Bring The War Home” goes past the electronic-sounding drums about a few seconds in, new drummer Christian Bass wastes no time in proving he’s a worthy successor to Voigt’s throne. His blistering double-bass work and clever cymbal play blend well with the riffing of guitarists Maik Weichert and Alexander Dietz. And the vocals? Kudos to Markus Bischoff for still sounding like he possesses a raging flamethrower of a throat. This is classic Heaven Shall Burn, only meaner and more ferocious. A necessary progression and regression, all in one. Also, “Prey To God” pummels savagely, aided by George “Corpsegrinder” Fisher’s (Cannibal Corpse) vocals.

Despite the intensity increasing, there are also nods to the classic sound on the more melodic sections of Wanderer. “Passage Of The Crane” opens with a melody that brings back pleasant memories of Colony-era In Flames. Breakout track “Corium” also possesses that Gothenburg feel mid-way in, bookended by some rather savage riffing, and an opening melody that is just anthemic. Speaking of anthems, Heaven Shall Burn continue their trend of paying tribute to classic bands by covering classic songs and making them their own. Sodom‘s “Agent Orange” sounds venomous with Bischoff’s ear-piercing screams, topped off with a guitar solo by former Sodom guitarist Frank Blackfire. Closing out the album is a tasteful rendition of My Dying Bride‘s classic, “The Cry of Mankind,” featuring clean vocals by Sólstafir‘s Aðalbjörn Tryggvason.
There are a few issues with Wanderer, however. The back-end of Wanderer feels like the band was running out of steam. “Save Me” would be otherwise middling had it not been for Nick Hipa’s (Wovenwar, ex-As I Lay Dying) guitar solo. Plus, “The Loss of Fury” isn’t a good song to open up the album with, as it sounds docile compared to its immediate follow-up, “Bring The War Home.” Production-wise, the Tue Madsen mix is standard Heaven Shall Burn. Guitars are up-front and heavy, the drums are heavy and a bit distorted (especially the cymbals at times), but thankfully Eric Bischoff’s bass makes a few more appearances than it did on 2013’s Veto. Otherwise, dynamics don’t exist in this dojo, sensei. Also, they cut back on layering Markus’ vocals for the most part, as we don’t need gentle reminders how savage his voice is.

Heaven Shall Burn haven’t reinvented the wheel with Wanderer, nor are they going to change the minds of their detractors with this release. That said, they have brought back the much-missed intensity of their older days, and for that I am thankful. They accomplished this while sacrificing none of the anthemic melodies that make Heaven Shall Burn such a memorable, aggressive beast. Welcome back, gents, and may the rage continue.
			<br>Το τραγούδι που ακολουθεί <strong>ΣΠΕΡΝΕΙΙΙΙΙΙΙΙ!!!!!!!</strong>
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Ed5CqrVS7ok" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Batushka–Litourgiya" class="tabcontent">
			<h1>Batushka–Litourgiya </h1>
			<h4 style="padding-left:10px;">Black metal</h4>
			<p> <img src="images/leitourgeia.jpg" width="300" height="300">
			The identities of the members are unknown, but it is known that they are from well-known bands. Their live line-up contains 8 members.
			The band's Cyrillic name Батюшка means "father", used to address a priest. The band name should be pronounced as "Batjushka."
			Despite their imagery, they are not a Christian band.
			<br>
			I initially avoided listening to Batuska because I was a bit put off by the all aboard the hype train situation surrounding them, 
			with every battle-jacket clad metalloid I have on Facebook yammering on about it. To make matters worse, there was the whole hidden identity of the members thing – you know this gimmick 
			has gotten old when a saccharine radio friendly pop-metal band like Ghost adopts it as part of their never ending attention whoring campaign. As more and more people who’s taste 
			I respect sang Litourgiya’s praises and as I caught wind of rumors that a member of Mgla might be involved (the Polish black metal scene is a favorite of mine, 
			with Mgla easily being one of the country’s best acts), I finally relented and gave the album a chance. 
Am I ever fucking glad I did. While lots of over-hyped metal bands end up being more image than substance, I knew from the first listen 
that I’d be spinning Litourgiya for years to come. While this record is full of nuances and atmosphere and more of its intricacies are revealed with each listen, 
it’s also really fucking fun and chock-full of riffs that get the blood running. 
Batushka’s feet are firmly planted in the orthodox camp, with its arms feverishly attempting to hack them off. The backbone of Litourgiya stems 
from a very well established black metal tradition, largely informed by the usual suspects of the second-wave innovators. However, 
it’s where Batushka wanders a bit from the beaten path (and not even particularly far, mind you) that really makes this album so damn memorable. 
The ecclesiastic vibes give Litourgiya a unique flavor very distinguishable from your average second-wave worship black metal band. Look - are Batushka the first band to use orthodox chanting in black metal? Absolutely fucking not. However, this is easily the best integration of these chants with black metal I’ve ever heard. While lots of bands choose to separate both elements, Batushka integrates the Slavonic choir parts into the black metal instead of entirely keeping them reserved for calmer moments. I suspect most bands keep them separate because doing what Batuska did here is damn hard to pull off, but they took a risk and nailed it flawlessly. 
This is not where Batushka spicing up the worn-out template ends. I’ve seen the band being given the ‘black/doom’ tag a few times, which strikes me as a tad hyperbolic. This is definitely a black metal album through and through, but that’s not to say that a slight doom influence isn’t lurking in the shadows. However, what I found much more interesting was the influence of Rotting Christ, specifically when they stopped being so much a black metal and included many influences from across the extreme-metal spectrum and beyond (‘dark metal’ is the most used descriptor of this sound, I guess). This comes across brilliantly here, and helps in fortifying the atmosphere. There are a fair amount of reverb-drenched clean parts as well, which have an almost meditative atmosphere that goes well with the Slavonic choir parts.
I could rant for days about all the little things Batushka do to reanimate the bloated orthodox corpse, but let’s look at the meat of the music. The black metal backbone that forms the springboard for all these little experiments is honestly not particularly original. And I think that’s where the band really triumphs – adding to a well established sound rather than attempt to reimagine its framework entirely (let’s not forget that originality is not always synonymous with quality). This is jam-packed with tremolo riffs; sometimes rambunctious and sometimes more pensive. Very typical of the polish scene, there’s a fair amount of melody injected into orthodox black metal riffs. While there is surely lots of shitty melodic black metal out there, these sort of melodies retain lots of bite. Litourgiya is a tightrope walk between extremes – orthodoxy and innovation, accessibility and savagery and nowhere is this more evident in the production. The production is of a much higher quality than the vast majority of black metal bands and indeed feels a bit “professional”. While everything is clear and sounds big, the production is not polished to the point of sapping the album’s lifesblood. 
There’s really not a lot to complain about here. The riffs are memorable and are just as likely to kick your ass as to weave a catchy melody. The drumming is incredibly tight and it knows when to unleash the savagery and when to lay down some more intricate patterns. The bass largely does its duty in a supportive role, but in some of the clean section does some really cool jangly stuff. The rasps are blistering and the ethereal clean vocals add a whole new dimension to the sound. There seems to be something here for every black metal fan, no matter what their chosen vein of black metal is. I could go on forever but I’ll just end with this – if you like black metal, just fucking check out Batushka already. The hype is not a lie, for once.

			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vk4d0mm_jKc?list=RDuZ3DHGutU3w" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Helstar-vampiro" class="tabcontent">
			<h1>Helstar-vampiro </h1>
			<h4 style="padding-left:10px;">Power metal</h4>
			<p> <img src="images/vampiro.jpg" width="300" height="300">
			Like a pale, clawed hand surging forth from the earth, <i>Vampiro</i> signals the reinvigoration and return of these beloved Texans into the fold. After years of competent yet uninspired thrash ventures, they have seemingly decided to stop fooling around, and the result is nothing less than exquisite. As a general rule, releasing a sequel for an older, well-regarded album such as <i>Nosferatu</i> is the kind of move expected to end in a half-cooked, infinitely inferior piece that merely shoots itself in the foot by drawing comparisons to its predecessor (see <i>Abigail II</i>). And yet, against all odds, <i>Vampiro</i> is perfectly capable of carrying its own weight, the ravages of time and trends be damned. Helstar's thirst for blood is nearly palpable; a metallic miasma, leaving a wickedly pleasant taste of iron and flesh in the listener's mouth.<br />
<br />
This album is chock-full of dark USPM riffing and tasteful neoclassical noodling, the way only Larry Barragan and company can deliver. The guitar work is stellar, as main man Barragan and newcomer Andrew Atwood weave together an intricate tapestry of power metal fury for the ages. Despite the clear virtuosity on display, these men know restraint, and not a single solo feels gratuitious or excessive. Even during "Malediction", the record's one and only instrumental, they work <i>with</i> the music, instead of showing off against it. Thus, we end up with one of <i>Vampiro</i>'s highest points, a swirling vortex of guitar madness and claustrophobic melodies. Of course, frontman James Rivera is not one to be eclipsed by his fellow musicians, and his present performance leaves thousands of younger singers in the dust. His characteristically strange tenor is as sharp as when he was but a boy, his high range nearly intact despite years of hard heavyn' and metallin'. Even his harsher screeches, which this reviewer is normally very ambivalent towards, work like a charm, with a suitably ghoulish and decrepit tone to match the atmosphere and subject matter of the material at hand.<br />
<br />
<i>Vampiro</i> could at times be interpreted as monotonous, though this is more of a simple observation than an outright indictment. Every single song exhudes an aura of penumbral menace and vertigo, like standing on top of a gorgeously dilapidated cathedral. It is a draining ride in its intensity, for certain, but it never becomes tiresome, and its conceptual strength lies in subtlety. The overarching story (a perfectly serviceable adaptation of Stoker's immortal classic) never takes precedence over the music, allowing the compositions to speak for themselves through proper musical narrative, rather than resorting to cheap tricks such as multiple spoken passages or film samples, with the latter being something its otherwise terrific ancestor relied far too much upon. From Vlad's blasphemous declaration of war against all things holy in "Awaken Unto Darkness", to his graceful acceptance of death in "Dreamless Sleep", the pace almost never wavers from a headstrong, violent charge, and it certainly doesn't need to. The tonal coherence of this full length is such that a more varied set of songs would end up as a distraction rather than an asset.<br />
<br />
Helstar take no prisoners with their latest outing. A ravenous chiropteran monster, <i>Vampiro</i> pursues and ravages its prey without mercy, thanks to a mix of impeccable, distinctive songwriting, top tier musicianship, and powerful horror aesthetics. Even the modernized sound presentation works in their favour, giving every single note a sharper edge to slice throats with. This is a perfect example of how to update one's style without compromising it; a true return to form. Even <i>This Wicked Nest</i>, despite being clearly superior to lukewarm efforts such as <i>The King of Hell</i> or <i>Glory of Chaos</i>, didn't really sound like a proper Helstar discharge. But this does. And that, people, is worthy of praise and celebration.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/b3BvOVM9mr4" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Unfathomable Ruination-Finitude" class="tabcontent">
			<h1>Unfathomable Ruination-Finitude </h1>
			<h4 style="padding-left:10px;">Brutal Death metal</h4>
			<p> <img src="images/finitude.jpg" width="300" height="300">
				I didn't really think of it until now, but Unfathomable Ruination have actually been basically a sister band to Abnormality in my eyes. They both stormed out of the gate in 2012, with fantastic debut albums on a notoriously lame record label (Sevared Records), both of which were blisteringly fast, chaotic, and somehow also groovy and hooky brutal tech death albums that both blew me off my chair. Afterwards, they both went relatively quiet, only for them both to roar back in 2016 with their sophomore efforts, both of which utilizing artwork prominently featuring a fractured face in washed out color against a black background. That's... oddly specific, but interesting nonetheless. The big difference between the two at this stage in their careers is that Abnormality has since jumped ship to Metal Blade and have found themselves backed by the closest thing to a major label you can find in extreme metal, whereas Unfathomable Ruination finds themselves still nestled snugly within the roster of that shitty BDM label I will probably always have a grudge against (blame my brief time writing for Metal Crypt, when Sevared would swarm us with terrible, faceless promos by the dozen).
Abnormality had the upper hand four years ago, but at this point, the Brits have easily usurped their crown. Finitude here has one immediately recognizable strength above Mechanisms of Omniscience, that being the production. The Americans found themselves recording with an extremely sterile sound, with squeaky clean snares, muffled guitars, and vocals shoved in the foreground, whereas the UKers instead find themselves continuing with what worked before. The sound here is absolutely fucking savage, with guitars that carry a massively punishing crunch, drums that pound the living daylights out of you (including that signature pingy snare that 70% of all brutal death metal bands seem to utilize), and vocals relegated slightly into the background to act more as a secondary percussive force as opposed to a driving mechanism of the music. It's amazing how much of a difference these small tweaks make, as the former album sounds like a clinical exercise running in the background and the latter is more akin to a furious hellbeast dripping lava from every orifice. The little moments stand out so much more here, like the Cryptopsy-esque squeals that punctuate the blasting insanity of "Thy Venomous Coils", the ethereal introduction that leads to the crushing groove that drives "Neutralizer", to the neck twisting bass runs in "Nihilistic Theorem". It's amazing how a small difference like giving some added rawness to the production and restructuring the balance of the individual performances can sound like night and day on albums that are functionally identical.
And on that "identical" comment comes the album's lone flaw; despite the occasional standout licks like the ones posted above, the album is essentially just a plateau of insanity. Which is fine by me, personally, but when they have standout sections like that that show they can write a punishing groove or a killer hook or a memorable lead line it tells me that they can simply multiply whatever the hell they did during those moments to load the album down even further with great moments. As it stands, they're pretty few and far between and the band repeats a few of the same tricks here and there, but they're all done quite well so it's not really a problem when all is said and done. At the end of the day this is still a highly enjoyable romp through twisted depths of unending depravity
I think the main thing that makes Unfathomable Ruination stand out in the crowd of samey tech death comes from something as simple as the songwriting. The band always sounds like they're coming apart at the seams and juuuuust holding together enough to throw in those knee buckling curveballs every now and again to keep things fresh. As soon as it seems like the drummer's arms are going to fall off and the vocalist is going to tear his own throat out, the pace will dip for a few bars and hammer you over the head with a Suffocation styled slamming groove. They even take a page out of Origin's playbook and close the album with an 8 minute scorcher that slows itself down for a good portion of the time. It's all kinda secretly brilliant. The thing with most tech death is that it never really sounds aggressive, so to speak. It's impressive, sure, and it's definitely heavy and fast, but it rarely carries a whole lot of fury outside of bands like Neuraxis and whatnot. Unfathomable Ruination, on the other hand, sounds fucking savage. Doug Anderson takes a more Alex Hernandez "flip the fuck out and play your whole drumkit at once" approach than a John Longstreth "focus really hard on not fucking up these lightning fast intricacies" one. The riffs are frantic and spastic but also grounded and simple enough at times to headbang yourself into a coma whilst playing. It's a perfect blend.
Long story short, this rocks like the stone age. Listen to it.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/SyJgCevYX-U" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Evergrey-The Storm Within" class="tabcontent">
			<h1>Evergrey-The Storm Within</h1>
			<h4 style="padding-left:10px;">Power metal</h4>
			<p> <img src="images/the_storm_within.jpg" width="300" height="300">
			<a href="http://www.rocking.gr/">Review from ROCKING.gr:</a>
					Πόσο μεγάλη πρόκληση είναι για μια μπάντα να ακολουθήσει έναν πετυχημένο δίσκο, όταν μάλιστα έχει καταφέρει να την ξαναφέρει στο προσκήνιο και να ανεβάσει το status της παγκοσμίως; Ένας τέτοιος δίσκος ήταν και το "Hymns For The Broken", ο οποίος γνώρισε καθολική κριτική και εμπορική επιτυχία και κατά τα λεγόμενα του ίδιου του Tom Englund στη συνέντευξη που μας έδωσε, κατάφερε να τους πάει από μισογεμάτα clubs σε sold out εμφανίσεις σε όλο τον κόσμο.

Δύο χρόνια μετά λοιπόν, το "The Storm Within" καλείται να σηκώσει την πίεση από τις προσδοκίες του κοινού, συνοδευόμενο από μεγαλεπήβολες δηλώσεις από την μπάντα (στα πλαίσια του marketing φυσικά) πως δεν υπάρχουν fillers και πως οι Evergrey νιώθουν καλύτερα από ποτέ. Είναι όμως έτσι;

Περίπου. Το "The Storm Within" είναι σίγουρα ένα καλό άλμπουμ, με μερικά φοβερά κομμάτια και αναμενόμενα όμορφες μελωδίες. Ωστόσο, του λείπει αυτό το «κάτι», όταν αναμενόμενα συγκρίνεται με τον προκάτοχό του, δεν ξέρω αν λέγεται ενέργεια αυτό το «κάτι», αλλά δεν κατάφερε να με εντυπωσιάσει και να κρατήσει το ενδιαφέρον μου με τον ίδιο τρόπο.

Ξεκινώντας από τα πολύ δυνατά κομμάτια που ξεχωρίζουν, βρίσκουμε το "The Impossible" που πατάει πάνω σε ένα στακάτο πιάνο και έγχορδα, καθόλου metal αλλά ρυθμικό και ιδιαίτερο, τα δυο ντουέτα του άλμπουμ "In Orbit" με τη φωνή της Floor Jansen να κουμπώνει τέλεια στις πιασάρικες μελωδίες, όπως και το doomy "Τhe Paradox Of The Flame" με την Carina Englund να επιστρέφει και να προσφέρει μια εξαιρετική ερμηνεία σε αυτό το μελωδικό, σχεδόν σπαρακτικό τραγούδι που κορυφώνεται με τις αρμονικές κιθάρες προς το κλείσιμό του. Το "Passing Through" σίγουρα θα αποτελέσει highlight στην επερχόμενη περιοδεία, με τα ογκώδη riff του και το φοβερό ρεφρέν.

Αξίζει να σημειωθεί η έντονη παρουσία των πλήκτρων, είτε με τη μορφή πιάνου είτε με πιο ηλεκτρονικούς ήχους, κάτι που χαρακτηρίζει όλο το άλμπουμ και δημιουργεί μια ομοιογένεια στο αποτέλεσμα με ένα συγκεκριμένο ατμοσφαιρικό ήχο να υποβόσκει σχεδόν σε όλα τα κομμάτια. Αυτή η ομοιογένεια από τη μια λειτουργεί θετικά στο να «δένει» τα επιμέρους τμήματα και να δίνει την εντύπωση μιας ενιαίας θεματικά δουλειάς, ωστόσο επειδή πολλά τραγούδια βασίζονται σε παρόμοιες εναλλαγές ειδικά στα ρεφρέν κάπου αυτό κουράζει και ομογενοποιείται στο αυτί.

Νομίζω αυτό είναι και το στοιχείο που μετρίασε την εντύπωση που μου έκανε ο δίσκος. Σε πολλά σημεία ο δίσκος αδυνατεί να σου κρατήσει την προσοχή, όπως στο "Μy Allied Ocean", που παρά τις ανεβασμένες ταχύτητες ακούγεται λίγο μονότονο, αλλά και στο "Αstray" που, ναι μεν, έχει κάποιες ενδιαφέρουσες εναλλαγές, ωστόσο δεν σε προκαλεί να το ξανακούσεις.

Το concept του άλμπουμ βασίζεται στα συναισθήματα που περνά κανείς όταν χάνει κάποιο αγαπημένο του πρόσωπο, είτε λόγω χωρισμού είτε ακόμη και λόγω θανάτου. Oι Evergrey καταφέρνουν πάντα να προσδώσουν συναισθηματική φόρτιση στα κομμάτια τους και να μας κάνουν να παραλληλίζουμε με δικές μας εμπειρίες, και εδώ δεν υπάρχει εξαίρεση. Η θεματολογία αγγίζει τον καθένα μας και ο τρόπος που αποτυπώνεται από τον Tom τόσο στους στίχους όσο και στις παθιασμένες ερμηνείες του καταφέρνει να συγκινήσει και να δημιουργήσει εικόνες στο μυαλό.

Ίσως να είναι άδικο τελικά να βάζουμε σε σύγκριση αυτό το άλμπουμ με τον προκάτοχό του. Θα είχαμε την ίδια εντύπωση αν δεν είχε προηγηθεί το εκπληκτικό "Hymns"; Πιστεύω πως ναι. Στην ουσία το "The Storm Within" είναι μια ακόμη πολύ καλή δουλειά από τους Evergrey, αλλά για τον γράφοντα βρίσκεται ένα σκαλί πιο κάτω, όχι από τον προκάτοχό του, αλλά από τις δυνατότητες μιας μπάντας που ξεδιπλώθηκαν περίτεχνα δυο χρόνια πριν. Θα αρκεστώ, λοιπόν, στο «πολύ καλό» και θα περιμένω να δω πώς αποτυπώνεται η σκοτεινή ατμόσφαιρα του δίσκου σε live περιβάλλον, ίσως και να αναθεωρήσω.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/izpMS_QbNwQ" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Slayer-Repentless" class="tabcontent">
			<h1>Slayer-Repentless </h1>
			<h4 style="padding-left:10px;">Thrash metal</h4>
			<p> <img src="images/slayer-repentless.jpg" width="300" height="300">
			<a href="http://www.rocking.gr/">Review from ROCKING.gr:</a>
				Ο θάνατος του Jeff Hanneman κάνει το "Repentless" ένα πολύ κομβικό άλμπουμ στην ιστορία των Slayer, μιας και ήταν ο ένας εκ των δύο βασικών συνθετών της μουσικής τους. Προφανώς, αυτό έβαλε σε σκέψεις τους διάφορους οπαδούς τους, με ερωτήματα του στιλ αν θα πρέπει να συνεχίσουν, τι βλασφημία που βγάζουν δίσκο κτλ. Όλα αυτά είναι παντελώς ανούσια για πολλούς λόγους που δεν χρειάζεται να αναφερθούν εδώ, οπότε πάμε στο ψητό που δεν είναι άλλο από τη μουσική.

Ύστερα από ουκ ολίγες ακροάσεις αξιολογώντας την καταπόνηση του σβέρκου, τα παράπονα των γειτόνων απ’ την ένταση των ουρλιαχτών πώρωσης και πηγαίας εκτόνωσης δια μέσου χοροπηδητών από οπουδήποτε (τραπέζια, καρέκλες), φτάνουμε στο συμπέρασμα να δηλώσουμε αναφανδόν υπέρ του "Repentless". Και ο λόγος θαρρώ εύκολα δικαιολογημένος. Έχει τραγούδια που σε πιάνουν απ' τα μαλλιά, γεννητικά όργανα, βάλτε ό,τι θέλετε τέλος πάντων και σε ρίχνουν σε έναν τοίχο από ταβανόπροκες σαν αυτές που φοράνε οι Nifelheim. Η δε πρώτη πλευρά του δίσκου, τα έξι πρώτα τραγούδια δηλαδή μαζί με την θεϊκή εισαγωγή "Delusions Of Saviour", είναι τόσο εθιστικά που μπορώ να τα ακούω συνεχώς, μέχρι να πεθάνει ο Χαϊλάντερ! Δεν περίμενα με τίποτα τέτοια βόμβα και ίσως επειδή δεν είχα και ιδιαίτερες προσδοκίες ο δίσκος με διέλυσε. Και πιστεύω ότι θα κάνει το ίδιο σε όποιον έρθει σε επαφή μαζί του.

Εξαιρετικά τραγούδια, άλλα γρήγορα με τρομερά riff, όπως το "Repentless", το ασύλληπτο "Take Control", ο δυναμίτης "Implode" (καμία σχέση με το πώς ήταν όταν πρωτοβγήκε στο ίντερνετ) ή τα punk meets thrash "Atrocity Vendor" και ειδικά το "You Against You". Από την άλλη έχομε το κλασικό Slayer - αρρωστημένο μοτίβο με το "When The Stillness Comes", όπου ο Araya είναι ανατριχιαστικός και το ατμοσφαιρικό «a la Danzig» εισαγωγικό του "Cast The First Stone" που καταλήγει σε ένα riff που τρυπάει μυαλά. Τι να πρωτογράψει κανείς. Δεν υπάρχει μέτρια στιγμή στο άλμπουμ, η αλληλουχία των κομματιών είναι ιδανική και το "Repentless" κυλάει νεράκι.

Από θέμα μουσικών, εντυπωσιακός σίγουρα είναι ο Araya, ο οποίος τραγουδά λες και είναι δεκαπεντάχρονος. Τόσο νεύρο, τόση δύναμη και τόσο πάθος δεν είχε στις  προηγούμενες δουλειές και σίγουρα κλέβει την παράσταση. Όπως, επίσης, πρέπει να γίνει ειδική μνεία στον Bostaph που τα κάνει όλα θρύψαλα. Δεν έχει νόημα μια σύγκριση με Lombardo, είναι και οι δύο απίστευτοι ντράμερ, απλά θεωρώ μειονεκτικό το  να χαρακτηρίζεται σαν ρεζέρβα του μεγάλου. Ο Bostaph έχει ένα χαρακτηριστικό παίξιμο που τον κάνει άμεσα αναγνωρίσιμο και ο τρόπος που φορτώνει μερικές φορές τα κομμάτια βγάζει ένα feeling λες και σε βαράνε πυροβολαρχίες. Τον βοηθάει βέβαια και ο ήχος που είναι εντυπωσιακός, στα τύμπανα ειδικά είναι για σεμινάριο. Οι δε axemen ρίχνουν το ένα δολοφονικό riff μετά το άλλο, ο King έχει κάνει φοβερή δουλειά, ενώ στα solo του ο Holt μοιάζει νε έχει μπει στο πετσί των Slayer.

Είναι τέτοια η ορμητικότητα του δίσκου (αυτό φαίνεται και στους στίχους) που μοιάζει πιο πολύ σαν απελευθέρωση θυμού και επιθετικότητας παρά σαν υπολογισμένη παραγωγή. Δηλαδή, εδώ δεν έχουμε να κάνουμε με έναν δίσκο απλά για να βγουν οι Slayer σε περιοδεία, αλλά περισσότερο μια εκδήλωση ακραίων συναισθημάτων που παρήχθησαν από πραγματική έμπνευση. Σπάνιο γεγονός για σχήμα 30 και βάλε χρόνων. Δεν έχει προφανώς νόημα να συγκρίνουμε το "Repentless" με ό,τι έβγαλαν στην αρχή της καριέρας τους, αλλά κατά τη γνώμη μου κοιτάει στα μάτια και το "Christ Illusion" και το "World Painted Blood". Όσον αφορά τέλος στο line-up και για το αν είναι όντως Slayer δίχως τον Jeff, αν είναι να κυκλοφορούν τέτοια πράγματα ας παίζει και η Γωγώ Τσαμπά μέσα, καρφί δεν μας καίγεται!
				
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/yjb0j9l1sz4" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Sodom-Decision Day" class="tabcontent">
			<h1>Sodom-Decision Day</h1>
			<h4 style="padding-left:10px;">Thrash metal</h4>
			<p>  <img src="images/decision_day.jpg" width="300" height="300"> 
			<a href="http://www.rocking.gr/">Review from ROCKING.gr:</a>
			Οι Sodom είναι από τις πιο σταθερές δυνάμεις στη metal μουσική. Ειδικότερα για το thrash είναι χαρακτηριστικό ότι αποτελούν το μοναδικό σχήμα που ξεκίνησε από τα '80s και δεν έπαψε ποτέ να παίζει τη μουσική του απαράλλακτα και χωρίς εκπτώσεις. Οι υπόλοιποι είτε το διαλύσανε, είτε αλλάξανε άρδην το στυλ τους. Και φυσικά όταν πέσανε τα μπικικίνια πολλοί άρχισαν τα «επιστρέψαμε και νιώθουμε τη φλόγα πάλι την ίδια», «το thrash δεν έφυγε ποτέ από τις καρδιές μας» κ.τ.λ. Το τρίο από τη Γερμανία, όμως, ήταν πάντα εκεί, ασάλευτο, αδιάλλακτο, προσφέροντας πάντα εξαίρετα άλμπουμ. Έτσι, φαντάζει αρκετά ανούσιο να κριτικάρεις τον νέο δίσκο τους "Decision Day". Πολύ απλά σπέρνει και θερίζει.

Θα προσπαθήσουμε, όμως, να εισχωρήσουμε λίγο παραπέρα, θεωρώντας ότι ο τυχόν αναγνώστης έχει μια σχετική εμπειρία με τους Sodom. Το συγκρότημα το 2010 προχώρησε σε μια κίνηση με αρκετό ρίσκο, παίρνοντας για παραγωγό τον Waldemar Sorychta. Το αποτέλεσμα ήταν το "In War And Pieces", το οποίο μπορεί να πει κανείς ότι παρόλα τα αρκετά καλά τραγούδια που είχε προβλημάτισε κάπως τους φίλους του γκρουπ. Σε κάποια σημεία είχαν μπει πιο μελωδικές πινελιές οι οποίες δεν σχολιάζονταν αρνητικά λόγω της παρουσίας τους καθεαυτό, αλλά λόγω της μη νορμάλ ένταξης στον σκελετό των τραγουδιών. Ταυτόχρονα τα φωνητικά του Tom δεν συμβάδιζαν πάντα ως όφειλαν στο όλο πλάνο. Αυτό, βέβαια, παρατηρούταν σε τρία κομμάτια από το μισό του άλμπουμ και μετά, ίσως αμελητέο γεγονός, αλλά ήταν η πρώτη φορά κατά τη γνώμη μου που κάπου κουραζόσουνα με δίσκο Sodom.

Η συνέχεια όμως με το "Epitome Of Torture" θα δικαιώσει το γκρουπ. Η αγριότητα και η επιθετικότητα θα ανέβει και αυτή τη φορά, στα φωνητικά Tom και Sorychta έκαναν θαύματα αφού δουλεύτηκαν μέχρι εξαντλήσεως. Γιατί, όμως, όλη αυτή η φιλολογία για τα προηγούμενα δύο άλμπουμ;

Καταρχάς, αν τα συγκρίνουμε νομίζω ότι με το "Decision Day" τα ξεπέρασαν κατά πολύ. Ο Sorychta δεν είναι πλέον με το συγκρότημα και ο ήχος έχει μια πιο ωμή προσέγγιση, αλλά ταυτόχρονα δεν απεμπολεί τελείως και το πρόσφατο παρελθόν. Αυτό είναι ξεκάθαρο και στον τρόπο που ο Angelripper έχει κτίσει τα φωνητικά. Προσπαθεί να βγάλει κάτι το διαφορετικό σε κάθε τραγούδι και έτσι να τα κάνει ξεχωριστά. Αυτή η μαγιά πιστεύω από τα προηγούμενα LP έχει αποδώσει καρπούς.

Ένα άλλο βασικό σημείο στο "Decision Day" είναι η συνεχόμενη ποιότητα που σε κρατάει σε τσίτα. Το άλμπουμ μπαίνει με τη μία τραγουδάρα να διαδέχεται την άλλη και εκεί που πιστεύεις ότι θα πέσει λίγο η ποιότητα διαψεύδεσαι. Ενδεικτικό ότι στη μέση βρίσκονται τα "Strange Lost World" και "Vaginal Born Evil" τα οποία είναι hit. Αργό το πρώτο με εκπληκτικές ερμηνείες ενώ το δεύτερο σε στέλνει στο pit χωρίς έλεος. Πέρα από αυτά, όμως, η επιλογή κολλητικών riff σε τραγούδια όπως τα "Rolling Thunder", "Who Is God?", "Belligerence" καρφιτσώνονται στο μυαλό και σε παρασέρνουν. Ακόμα και στο δάνειο του "Ace Of Spades" για το "Caligula" οι τύποι έχουν κάνει θαύματα αφού κτίζοντας πάνω του έχουν γράψει έναν πραγματικό ύμνο. Στο τέλος δε, έχεις ξεχάσει και Motorhead και τα πάντα.

Καθοριστικός παράγοντας, φυσικά, είναι πάλι ο γίγαντας Bernemann στην κιθάρα αφού στα solo έχει πέσει προσοχή, ενώ ακόμα και όταν βγάζει μελωδίες ή αρμονίες ακούγονται εντελώς εναρμονισμένες με τους ρυθμούς από πίσω. Ο Makka δε στα ντραμς είναι πιο καλός από το "Epitome Of Torture" και κάποια μακροσκελή περάσματά του στα "In Retribution" και "Rolling Thunder" φέρνουν προς τον Witchhunter. Τυχαίο; Αυτό το γεγονός μαζί με τον ήχο του μπάσου και την χροιά των φωνητικών σε κάποια songs ίσως δημιουργήσει και την ψευδαίσθηση ότι έχεις μεταφερθεί στην εποχή του "Persecution Mania".

Για άλλη μια φορά οι Sodom έβγαλαν τη δισκάρα τους με ό,τι συνεπάγεται αυτό. Πάνω από τα μισά τραγούδια εδώ μέσα βρίσκουν πολύ άνετα τον δρόμο στα setlist των συναυλιών τους. Ο Knarrenheinz στέκεται ικανοποιημένος στα χέρια του Petagno (ωραίο εξώφυλλο), αλλά κυρίως είναι υπερήφανος που για άλλη μια φορά η τριάδα από πίσω δεν χαρίζει κάστανα σε κανένα.
			
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Ov4CoRmmL-w" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Thy Catafalque-Meta" class="tabcontent">
			<h1>Thy Catafalque-Meta</h1>
			<h4 style="padding-left:10px;">Avantgarde black metal</h4>
			<p>  <img src="images/Thy-Catafalque-Meta.jpg" width="300" height="300">
			<a href="http://www.angrymetalguy.com">Review from Angry metal guy:</a>
				Imagine your basic symphonic black metal, say, Emperor. One day, Ihsahn’s on a big electronica kick, so he throws some cash at the latest Toontrack update, digs out his high school band instruments, and rolls all his artsy friends over for a weekend. No blasting, no razor thin production, just a full plate of programmed drums and defied expectations. This is the sound of Tamás Kátai’s Thy Catafalque. The world’s most successful alchemist of black metal, electronica, contemporary, and anything else you can imagine, Kátai continues to fly solo with Meta, a more-than-worthy successor to his impressive catalog.

After releasing Sgùrr less than a year ago, you’d think Kátai’s creativity might crumble under the ten-ton weight that comes with layering albums as complex as his. But the Hungarian superman stands tall, his mind a unique cornucopia of elegance and harmony. Drawing comparisons to other experimental metal like Ihsahn’s solo work or Kátai’s time with Gire captures the avant-garde spirit but lacks the sonic accuracy to convey the breadth of Meta’s style. Even turning to previous Thy Catafalque releases falls short as Kátai proffers material divergent from both his aggressive outings (Rengeteg, Róka Hasa Rádió) and the more heavily produced (Sgùrr). The trademark electronica-black metal mashup pops its head up here and there, but largely yields to a slower experimental approach. The drag races of “Szervetlan” past are nearly expunged from Meta, limited primarily to “10^(-20)” and the Fleshgod-infused “Ixión Düün.”  “Uránia” pays respect to its blackened heritage, but spends most of its seven minutes establishing a crushing symphonic doom environment that calls to mind The Howling Void more than In the Nightside Eclipse. “Mezolit” revisits that style at the album’s close, opening with a lumbering Sabbath riff for the ages. This methodical pacing benefits Kátai’s aptitude for crafting meaningful down-tempo passages and ensconcing atmospheres. Closer “Fehérvasárnap” plays (and reads) like poetry1 weaving a punctuated finality with the church bells and priestly incantations that regularly waft through Meta’s proceedings.

As always, Thy Catafalque lives and dies with its long-form offerings and Meta’s defter touch hinders 21-minute “Malmok járnak” more than helps. Tamás Kátai has certainly earned the right to self-edit, but there’s simply not enough in “Malmok” to justify its length. The creeping intro that sounds a heartbeat away from a Leviathan-esque frenzy never develops, leaving only a synth-laden dirge in its wake. After 10 minutes, the song teeters into self-indulgent interludes and an electronic passage that, while adequate, do not deserve the time they demand. By the arrival of the next noteworthy excerpt at 17:30, I’ve checked out for good. Meta’s midsection largely suffers from the same problem, stumbling in the balancing act between atmosphere and tedium. Kátai crafts effective segments that never reach their full potential without a counterweight of furious black metal. “Vonatút az éjszakában” in particular would greatly benefit from a shot of Hungarian black with its pint of subdued folk. These shortcomings are truly a shame, as a touch more self-restraint and substance would make Meta an Album of the Year front runner.
Thy Catafalque could field a baseball team with its guest musicians; fortunately Kátai selected his cohorts well and they add significant value to the recording. Notably, Balázs Tóth (ex-Casketgarden) throws some serious death riffs around the fantastic “Ixión Düün,” while an entrancing soprano performance from The Moon and the Nightspirit’s Ágnes Tóth stands out on “Sirály.” Preeminently replayable and the finest summation of Kátai’s curious mind, “Sirály” pits relaxing samples of seagulls and crashing waves against a melody as strong as any he’s ever penned. Kátai himself excels on Meta, arranging his myriad of instruments and effects in a fashion that never feels disjointed or derivative. However, on an album with such attention to detail, the mix is a shocking let down. It’s beyond me how Kátai could put this level of quality into his performance and then confine it to a poor-sounding DR6.

Thy Catafalque’s commitment to musical exploration has long produced some of the most interesting compositions in modern metal, and Meta is no different. With so many ideas banging on Tamás Kátai’s front door, this abundant quality should come as little surprise. There’s no gimmick here, no casual exploitation of mismatched sub-genres for the sake of headlines. If you approach Meta with clear eyes and full attention, I promise you will not be disappointed.
			
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/lPYeteGOUpE" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Mastodon-Leviathan" class="tabcontent">
			<h1>Mastodon-Leviathan</h1>
			<h4 style="padding-left:10px;">Sludge metal</h4>
			<p>  <img src="images/mastodon-leviathan.jpg" width="300" height="300">
			"Leviathan" has been described by many as a progressive metal record. This can be regarded as true if you look at it this way: Mastodon play their own music (which is heavy, very heavy) and bring into it influences that they draw from the 60's and 70's progressive rock. I want to give my opinion on this here point before I give you the reasons for the high rating because I've heard too many complaints already from progressive metal lovers who expected some Dream Theater kind of stuff from this band and didn't get it, then went and nagged about it. My point is that, in order to understand and (then eventually) love this album (and this band) one MUST have a solid 60's-70's prog-rock background or chances are he's going to feel misguided.

Besides the fact that I don't really like modern progressive metal because I think there's just as much feeling in it as I hear when my dishwasher is on, and that's another difference, one BEYOND the music, that sets Mastodon apart from modern progressive bands. This guys put their hearts and guts into it, not only their brains and musical knowledge. And sure to me it's much more interesting to hear a drummer like Brann Dailor going totally fucking insane on his drum kit with the urge of an hungry wild animal looking for blood that those plastic progressive drummers (Mike Portnoy, anybody?) all they do is indulge in those boring odd-time signatures where you barely know when the riff starts and when it ends and then give you the usual fucking roll and a bang to let you know when to clap... But let's cut the crap and get down to the songs that rocked my socks that morning of June 2005.

I had a chance to listen to "Blood And Thunder" a few weeks before I bought this Cd, watched the video on a compilation DVD I got from a magazine; I thought it was a silly funny video but the song was great! Ferocious up-tempo rock'n'roll with an Iron-Maiden-on-speed kind of break that put such a grin on my face… I got the weirdest looks even from my band-mates who were there with me. Everybody agreed it was an awesome song and a band definitely worth checking out. So, I went and bought the Cd, listened to it and got a sound thrashin'! After the first listen, I ended up thinking that "Blood And Thunder" was actually my least favourite song? I had to. This album grows like a monster, like the "Seabeast", from the depths of the fictional ocean it's set in, and grabs you by the balls and starts squeezin'. Throughout the triptych "I am Ahab"-"Seabeast"-"Island" melody and ferocity walk side by side. Talk about beauty and the beast, that's both.

I don't exactly know why but when I first heard the opening riff to "Iron Tusk" I immediately thought about Opeth. Can anyone explain that to me? Another great song, a little too short maybe, but absolutely enjoyable. On this one, and especially on "Megalodon", Brann Dailor shines and rules like never before. Notable the weird, yet very tasty, country guitar break that introduces the second, more aggressive part of the song, courtesy of Brent Hinds' not forgotten past spent as leader of the rockabilly band Fiend Without A Face.

After the relatively more relaxed and melody-driven episode Naked Burn, that can be seen as the calm before the storm, an unbelievably inspired guitar-drum double attack crashes on the listener like waves on a rocky shore in a stormy day introducing the amazing "Aqua Dementia". The uncontrollable stream of notes wrecks your ship, nothing you can do about it, as the song turns into an apocalyptic punk attack that kicks you far away from safe shores. As the chugging ending riff fades away, along with Scott Kelly's last abominable scream, your senses slowly come back... only to realize that you sank with the wreck of your ship and you're now up for one last claustrophobic nightmare. And you better be ready for this one, because it's going to be a long one...

"Hearts Alive" contains the best 13 minutes of heavy music I’ve heard since Neurosis’ "Through Silver In Blood". It's the best way to wrap up an album as adventurous and mystical as this one and one of the most beautiful progressive metal (by now you should know what I mean by it) compositions ever. Daring, intuitive, free-spirited improvisation of both drums and guitars build up slowly but inevitably to the album's epitaph: a guitar solo worthy of Jimmy Page followed by a crushing, menacing riff that can only lead to a long, agonizing fall into the depths of the god sea.

That is the end of the line. If you've been a careful listener all hope to regain your senses must now be gone and all you can do is float away and let the dream-like melodies of "Joseph Merrick" carry your drifting remains to a safe place where silence reigns and it's all that matters. Yes, that's exactly the way I feel when I come upon something this great and it unfortunately ends: nothing can match what I've just heard, then I'd rather enjoy the silence.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/v-Su1YXQYek" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Ulcerate–Shrines of Paralysis" class="tabcontent">
			<h1>Ulcerate–Shrines of Paralysis</h1>
			<h4 style="padding-left:10px;">Technical progressive death metal</h4>
			<p>  <img src="images/ulcerate-shrines-of-paralysis.jpg" width="300" height="300">
			<a href="http://www.angrymetalguy.com">Review from Angry metal guy:</a>
				God is dead, but what can be done once the corpse is buried? Just to the left of nihilism, HP Lovecraft staked out a territory where divinity was absent and mankind insignificant, battered by forces beyond time and comprehension. Anti-christian, nihilistic, and cosmicist themes have all long been staples of metal, both lyrically and musically – but after decades the fear is gone; the well dry and the water stagnant. To reach ever greater extremes, these tropes must be transcended. Ulcerate did so. Their music reaches deeper than Lovecraft, whose fantastic god-creatures crumble before what they represent: reality. Since Everything is Fire, they have charted their own path, using music not just as art but, I would argue, as a philosophical exercise. Their art does not only transcend death metal; it transcends death, mixing Lovecraftian themes in death metal with the nature-reverence of Cascadian black metal towards a sort of naturalistic cosmicism. In Ulcerate‘s music, life itself is insignificant, not before alien gods, but before earth, light, and entropy. Shrines of Paralysis stays the course.
				What strikes you first is the violence. “Abrogation” wastes no time slowly opening the gates; those familiar with Ulcerate already know what lies beyond – and that dawns on you next. The violence is a byproduct, and as “Abrogation” slows, the absolute vastness of Shrines of Paralysis becomes clear. Whereas Vermis was jagged and claustrophobically oppressive, its absolute spelean blackness as impenetrable as it was omnipresent, Shrines brings us back to the surface, where The Destroyers of All left off. In “Yield to Naught,” fragmented shards of melody flicker unevenly past the tumult like hapless sunbeams to scorch the barren soil below. “There are No Saviours,” pushes back out of that substrate, and after a lengthy introduction relapses into furor.
				Vermis also suffered from a somewhat monotone mid-album, something that Shrines of Paralysis most definitely avoids. The title track writhes through a dozen ideas smoothly, pulling together fragments of melody into a desolate architecture that’s among the album’s greatest accomplishments, and “Extinguished Light” provides a more visceral reaction than any piece of music I’ve heard this year. Ulcerate‘s spellbinding compositions are at times fugue-like in their use of repetition, yet produce anything but complacency. In a darkened room, the highest points of “Extinguished Light,” bring one’s stomach to the throat, as a very real sense of dread and fear twist through the mind. It’s a feeling of existential horror that remains as powerful here as when I first felt it listening to The Destroyers of All.
				Though every Ulcerate album since Everything is Fire has been fantastic on a musical level, each has suffered from a compressed master that makes listening through the entire thing a chore. Such dense music begins to induce fatigue very quickly, and Shrines of Paralysis proved often difficult to sit through because of the sonic monotony. It’s confusing to me how a band with such a fantastic grasp of dynamics and contrast in their writing can crush those exact qualities out of the master, which definitely suffers for its lack of dynamic range. After Ad Nauseam demonstrated how incredible this sort of music can be when left rich and dynamic, Ulcerate‘s recordings seem just a bit more wanting.
				In a way, Shrines of Paralysis is nothing more than what is expected; a densely written record that’s both technical and brutal, harrowing yet atmospheric. What we’ve come to expect from Ulcerate is far beyond that of other musicians. In its performances, writing, and scope, Shrines of Paralysis is a cut above, but in emotional impact, it’s paralleled only by the band’s previous work. These albums have rapidly disfigured the face of extreme metal and brought blood back to the surface; they are lofty in ambition and terrifying in scope, and though short of perfection will undoubtedly be seen as classics in the years to come. Whether as a musical statement or philosophical exploration, Shrines of Paralysis is an unqualified success.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/HtRsND8LNlE" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Wardrum-Awakening" class="tabcontent">
			<h1>Wardrum-Awakening </h1>
			<h4 style="padding-left:10px;">Power metal</h4>
			<p> <img src="images/wardrum-awakening.jpg" width="300" height="300">
				Το δισκάκι απλά σπέρνει!!! Μιλάμε για power metal που ξεχωρίζει από τα υπόλοιπα, με απίστευτα κιθαριστικά μέρη, τρομερέ μελωδίες, έναν τραγουδιστή 
				με φωνή διαμάντι. Τι άλλο να ζητήσει κανείς!!! 
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/eGLXNtByvrY" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div id="Michael Romeo–War of the Worlds,Pt.1" class="tabcontent">
			<h1>Michael Romeo–War of the Worlds,Pt.1</h1>
			<h4 style="padding-left:10px;">Power metal</h4>
			<p> <img src="images/Michael Romeo–War of the Worlds,Pt.1.jpg" width="300" height="300">
				<a href="http://www.angrymetalguy.com">Review from Angry metal guy:</a>
				Michael Romeo is one of prog/power’s finest genii and is deservedly renowned for his day job as the guitarist and primary composer in Symphony X. 
				Little known, however, is that Romeo released a solo album called The Dark Chapter in 1995. Only available on YouTube, the album is a mind-blowing display of, 
				n the one hand, Romeo’s virtuoso talent and, on the other hand, just how far recording has come in the 23 years since its release. The Dark Chapter‘s first 
				followup record is entitled War of the Worlds, Part 1 and on the surface, these two albums have little in common. War of the Worlds is not just Romeo, 
				a drum machine and all the eye-melting guitar gymnastics you can eat. Instead, Romeo’s latest soiree sounds like a damned fine Symphony X record, with a band 
				filled out by bassist John DeServio (BLS), drummer John Macaluso (Labÿrinth, ex-Yngwie Malmsteen, and many more), and the voice of surprising newcomer Rick Castellano.
				War of the Worlds clocks in at a hefty 54 minutes and is comprised of ten movements seamlessly weaved 
				together by Romeo’s orchestral compositions. From the overture to the album’s final strains, the orchestra bolsters Romeo’s frenetic, 
				thrashy—and maybe a bit tech—riffing, linking ideas, buttressing rhythms and adding tension and drama. 
				While the guitars and orchestras are center stage, Rick Castellano’s power metal tenor and an adroit, adaptable rhythm section fill out War of the Worlds‘ sound. 
				The songs chug, wind and soar as necessary; held together—or aloft—by Romeo’s deft compositions.There’s a cinematic feel to War of the Worlds reminiscent of Symphony X‘s The Odyssey. 
				Romeo establishes his themes in the overture and evokes John Williams’ feel for majestic, memorable melodies. As the themes are recapitulated throughout the album, 
				they further establish an energetic sound—bold, bombastic; like Gustav Holst composing power metal. Even when Romeo branches out beyond the orchestra, 
				War of the Worlds retains a soundtrack feel. “Fucking Robots,” for example, features Romeo wandering into EDM-soundscapes that evoke the ROBO-BLAAAAAAATS from Mass Effect 3.
				Nestled comfortably among the violins, horns and timpani are great metal songs. From start to finish, War of the Worlds demonstrates 
				Michael Romeo‘s best qualities: smart, techy riffing; catchy, anthemic choruses,1 and subtle, tasteful—but fucking ridiculous—guitarwork. 
				Romeo is both ‘tech’ and ‘prog,’ but unlike Obscura, who make the simple seem complex, Romeo has a way of making the complex seem simple. 
				At first blush, for example, War of the Worlds‘ choruses seem like straight power metal fare: sustained power chords letting Castellano’s clear tenor carry the melody. 
				Start counting, though, and it turns out that “Black” and “Differences” are in 7/8, “Djinn” is in 11/8, and “Oblivion” has a rotating feel that caught me off guard. 
				Even “Believe,” the obligatory ‘uplifting power ballad,’ knocks out sections in 7/4 before giving way to a techy bridge. And despite (but also because of) the subtle 
				complexity the songs are fun. A rogue AI *BLATS* the verses in “Fucking Robots,” leaving just the chorus to the HU-MAN. “Black” thrashes out Romeo’s trademark, 
				eminently groove-able riffs and “Djinn” features gorgeous, subtle sweep arpeggios that soundly disprove the Malmsteenian Theory of Value.
				War of the Worlds is also bolstered by excellent performances. Chief among them, Rick Castellano’s debut is lights out. 
				Castellano has a brassy vocal timbre that’s common among my favorite metal vocalists—including pre-Paradise Lost Russel Allen. 
				While the vocal compositions aren’t operatic in difficulty, Castellano shows off both power and touch. He works very well with cleaner tones (like “Believe,” or choruses like “Black”), 
				he can also add a healthy growl for flair and his soaring upper range is impressive.2 The outstanding vocals are bolstered by a world-class rhythm section that hits all the right beats. 
				Or Macaluso does. JD’s bass is, unfortunately, buried beneath a dense-as-hell master and gets lost—one of the album’s only drawbacks.
				The Dark Chapter and War of the Worlds may not share much, but even separated by nearly 25 years, 
				they demonstrate that Michael Romeo is a double threat—a virtuoso guitarist and metal’s finest symphonic composer. 
				War of the Worlds nails the sweet spot between memorable songs and techy and proggy goodness. 
				This guy doesn’t just shred or craft riffs, he composes metal symphonies that one can either admire for their depth or just bang your head to. And to top it all off? 
				The promo sheet says that War of the Worlds Part 2 is almost ready to go.
			</p>
		</div>
		<!--telos ton reviews-ola ta reviews pane pano apo auto to simeio-->
	</article>
	
	
	
			
</div>





	
	
	
	
	
</body>
	
	
</html>



<script>

document.getElementById("reviews").className+= " active";

window.onload=function(){
	first_open('opeth_sorceress');
}

function first_open(album){
	
	var i,tabcontent,target_div;
	
	target_div=document.getElementById(album);
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		if(tabcontent[i]!=target_div){
			tabcontent[i].style.display = "none";
		}
    }
	
	document.getElementById("first_open_rev").className+=" active"; <!--edo paizei rolo to keno sto " active" alla den ksero giati -->
	
	
	
}


function openreview(evt, album) {
	var i,tabcontent,tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
	
	tablinks = document.getElementsByClassName("tablinks");
	
	for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
	
	document.getElementById(album).style.display = "block";
	evt.currentTarget.className += " active"; <!--edo paizei rolo to keno sto " active" alla den ksero giati -->
    
}

function searchband() {
    // orismos variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('search_field');
    filter = input.value.toUpperCase();
    ul = document.getElementById("reviews_ul");
    li = ul.getElementsByTagName('li');

    
	//psakse mesa stin lista,kai krupse oti den tairiazei sto search
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function checked(){ <!--auti i sunartisi einai psiloxontromapa sxediasmeni -->
	var c,i,j,a;
	var flag;
	
	c=document.getElementsByClassName("checkbox");
	
	for(i=0;i<c.length;i++){
		if(c[i].checked==true){
			flag=1;
		}
	}
	
	
	if(flag==1){
		for(i=0;i<c.length;i++){
			if(c[i].checked==true){
				/*album_2016*/
				if(c[i].id=="2016"){
					a=document.getElementsByClassName("album_2016");
					for(j=0;j<a.length;j++){
						a[j].style.display="block";
					}
				}
				/*album_classic*/
				else if(c[i].id=="classic"){
					a=document.getElementsByClassName("album_classic");
					for(j=0;j<a.length;j++){
						a[j].style.display="block";
					}
				}
				/*album_2018*/
				else if(c[i].id=="2018")	{
					a=document.getElementsByClassName("album_2018");
					for(j=0;j<a.length;j++){
						a[j].style.display="block";
					}
				}
			}
			else{

				/*album_2016*/
				if(c[i].id=="2016"){
					a=document.getElementsByClassName("album_2016");
					for(j=0;j<a.length;j++){
						a[j].style.display="none";
					}
			
				}
				/*album_classic*/
				else if(c[i].id=="classic"){
					a=document.getElementsByClassName("album_classic");
					for(j=0;j<a.length;j++){
						a[j].style.display="none";
					}
				}
				/*album_2018*/
				else if(c[i].id=="2018"){
					a=document.getElementsByClassName("album_2018");
					for(j=0;j<a.length;j++){
						a[j].style.display="none";
					}
				}		
			}
		}
	}
	else{
		a=document.getElementsByClassName("album_2016");
		for(j=0;j<a.length;j++){
			a[j].style.display="block";
		}
		a=document.getElementsByClassName("album_classic");
		for(j=0;j<a.length;j++){
			a[j].style.display="block";
		}
		a=document.getElementsByClassName("album_2018");
		for(j=0;j<a.length;j++){
			a[j].style.display="block";
		}
	}
}



</script>