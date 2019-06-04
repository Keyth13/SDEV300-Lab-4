<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Purr-Fection Summary Page </title>
	</head>
	<body>
	<?php 
			
				// Set the session information
				session_start();  
				if(!isset($_SESSION['appUsername'])) {
					header("Location: Lab4LoginPage.html");
				}
				echo "<h3> Session Data </h3>";
				echo "<table border='1'>";
				echo "<tr>";
				echo "<td>Username </td>";
				echo "<td>Email</td>
				   </tr>";
				echo "<tr>
						<td>" . $_SESSION['appUsername'] . "</td>";
				echo "<td>" . $_SESSION['appEmail']. "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<form name='login' method='post' action='Lab4LoginPage.html'>
					<input name='btnsubmit' type='submit' value='Login'>";
				echo "<form name='logout' method='post' action='Lab4LogoutPage.php'>
					<input name='btnsubmit' type='submit' value='Logout'>
				</form>";
			?>
			<br>
			<br>
		<?php 
			// Retrieve Post Data
			$username = $_POST["username"];
			$email = $_POST["emailaddr"];
			$password = $_POST["passwd"];
			$thanks = Array("You shouldn’t have.", "Undying gratitude.", "I wouldn’t be where I am without you.", "I’m indebted to you.", "This means a lot to me.", "You are so kind.", "How can I repay you?", "I owe you one.", "If you ever need anything…", "Let me know what I can do for you.", "I won’t forget it.", "Endless gratitude.", "You have me if you need me.", "I’m in your corner.", "Gracias", "Thanks", "Thanks a bunch", "Thanks a million", "I couldn’t have done it without you.", "I will repay you twofold.", "I have so much gratitude for you.", "You’re so helpful!", "You’ve changed my life.", "This really makes a difference.", "You’re the best!", "I’m so lucky I have you.", "You’re awesome for thinking of me.", "This is very kind of you.", "You rock.", "What would I do without you?", "I can’t thank you enough.", "Many thanks for…", "I truly appreciate it.", "I want you to know how much I value…", "Words cannot describe how grateful I am…", "Words cannot express my gratitude", "You are the reason I made it", "Next one’s on me", "Thanks for inviting me.", "I’m happy to be a part of…", "I’m so grateful I get to be here.", "I appreciate your kind thoughts.", "I’m doing the happy dance. Thank you!", "You made me smile from ear to ear.", "If I had a cent for every time I appreciate you, I’d be a millionaire.", "Thanks for nothing and everything.", "I’ll get you next time.", "Don’t think you’re the only one who knows how to give.", "Thanks for not getting me a lump of coal.", "I truly appreciate you from from my head to my toes.", "I would floss a tiger’s teeth, that’s how much I appreciate you.", "I would say you’re the greatest, but you already think I’m the greatest. Thanks!", "How about I repay you by inviting you to go do my favorite thing: [insert thing you like to do that they hate to do]. Just kidding! Thank you!", "Grassy ass!", "Thank you berry much!", "Thanks a bunches of oats!", "Like cheese, I’m truly grate-ful for all that you do.", "The way I show appreciation is by not saying it at all. Silence!", "I know you hate saying “you’re welcome,” so I’ll do you the favor and not say thank you, but I am feeling it on the inside.", "If I knew how to say thank you, I would.", "You’re more thoughtful than my mother.", "Friends like you are not easy to find.", "You make me want to say thank you in other languages, and I can barely speak English.", "If you could read my mind, then you’d know how grateful I am for you at this very moment.", "You make me jump for joy. Thanks a million!", "I’m beaming with appreciation for you.", "You make me feel so lucky.", "I wish I could be as thoughtful as you. Thank you!", "You knew exactly what to get me. This is why I love you.", "This is so heartfelt. I couldn’t thank you enough.", "If I could say thank you in all of the languages in the world, I would do it to show you how much I appreciate you.", "I will never forget this.", "You never cease to make me smile.", "If I could, I’d jump through this card/email/phone and hug you right now.", "You’re the best gift giver!", "Thanks for your prompt response", "Thanks for taking the initiatie.", "Thanks for keeping me in the loop.", "Thanks for believing in me. I won’t disappoint you!", "Thanks for taking the time to talk to me.", "I appreciate that you remembered…", "On behalf of the company...", "Thanks for being in my corner.", "Thanks for making the time for…", "I appreciate your flexibility.", "I appreciate your understanding.", "Your support and kindness is much appreciated.", "I am truly grateful for…", "I can’t begin to thank you enough for…", "I’ll be sure to return the favor.", "Thanks for putting your trust in me.", "Your gesture is very kind.", "You’re more than a boss; you’re our friend.", "Thanks for always looking out for the littler guys.", "I couldn’t be more thankful.", "Please accept my deepest gratitude.", "Thank you for your assistance with…", "Thank you for your attention to…", "Your support is really appreciated.", "Thank you for your kind consideration…", "I’d like to express my most sincere appreciation to you for…", "Thank you for taking the trouble to…", "It is an honor to accept this…", "Words cannot express how grateful I am for your…", "Your help was invaluable.", "Thank you because it is the right thing to do.", "I know that you know that I know that you know that I just wanted to say thank you.", "Amazed. Inspired. Grateful. That’s how your generosity makes me feel.", "Is there no limit to your awesomeness? Thank you!", "I wish you could see me I’m totally doing a happy dance.", "You are lucky because I am mannered enough to say thank you.", "If you had a dollar for every time I said thank you, you would be rich!", "Even with amnesia, I’d remember to thank you.", "Thank you (Not sent from my iPhone).", "Endless Gratitude. Thanks.", "You = awesome, Me = grateful.", "I thought it would be weird if I sent a picture of myself to you. You must see my face, I look very grateful.", "Can’t spell thank you without YOU."); ?>
		 <h3> 
		 <?php echo $_SESSION['appUsername'].', ';
			 echo $thanks[array_rand($thanks)]; ?> 

		</h3>
		<?php
			$p1c = $_POST['project_1_comments'];
			$p2c = $_POST['project_2_comments'];
			$p3c = $_POST['project_3_comments'];
			$p4c = $_POST['project_4_comments'];
			$p5c = $_POST['project_5_comments'];
			$p6c = $_POST['project_6_comments'];
			$p7c = $_POST['project_7_comments'];
			$p8c = $_POST['project_8_comments'];
			$p9c = $_POST['project_9_comments'];
			$p0c = $_POST['project_0_comments'];
		?>
		<table border='1'>
			<tr>
				<td> Project </td>
				<td> Completion </td>
				<td> Project Data </td>
				<td> Investigator(s) </td>
				<td> Comments </td>
			</tr>
			<tr>
				<td> Feline coronavirus as a cause of upper <br> respiratory infection in shelter cats </td>
				<td> 55% </td>
				<td> Upper respiratory infections (URI) are an important feline disease in shelter cat populations, as cats with URI are 
					 less likely to be adopted, can transmit infections to other cats, and ultimately end up staying in shelters longer, 
					 thereby increasing the burden on shelters that are already commonly overcrowded. While a number of viral and 
					 bacterial organisms have been identified as being important contributors to the development of URI in shelter cats, 
					 feline coronaviruses (FCV) have not been historically thought of as being involved in this common syndrome. More 
					 recently, FCV have come under consideration as being a potential contributor to the development of URI in shelter 
					 cats. This study will investigate the prevalence of FCV in shelter cats both with and without URI to determine the 
					 relationship between FCV infection, URI, and the more commonly diagnosed clinical syndrome that is associated 
					 with FCV infection, feline infectious peritonitis (FIP). </td>
				<td> Gary Whittaker, PhD </td>
				<td> <?php if($p1c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p1c."\n"; 
				           }?> </td>
			</tr>
			<tr>
				<td> Canine distemper virus as a threat to <br> tiger conservation in tropical range states </td>
				<td> 12% </td>
				<td> Tigers (Panthera tigris) have been classified as endangered by the International Union for Conservation of Nature 
					 since 1986, and despite significant efforts by countless dedicated conservationists, both the number of wild tigers 
					 and their range have decreased by 50% in the past 20 years. Recently, canine distemper virus (CDV) has been 
					 identified as a new threat to wild tiger populations in the Russian far East, and the potential effect of this new 
					 threat on wild tiger populations is considerable. This project will investigate the prevalence of CDV infection in the 
					 previously unstudied tiger populations of Indonesia, Thailand, India, and Nepal, as the first step in characterizing 
					 the potential risk of CDV to these vulnerable populations. The protocols established by this study will then facilitate 
					 future surveillance of these populations for CDV, information that will prove vital in the design of rationale control 
					 strategies for CDV, should they be needed. </td>
				<td> Martin Gilbert, MRCVS, BVMS, PhD </td>
				<td> <?php if($p2c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p2c."\n"; 
				           }
				?> </td>
			</tr>
			<tr>
				<td> Applying novel pathogen discovery to <br> the investigation of infectious causes of heart disease in cats </td>
				<td> 37% </td>
				<td> The causes of two types of feline heart diseases called endomyocarditis (EMC) and endomyocardial fibrosis (EMF), 
					 in which the inner lining of the chambers of the heart are replaced by inelastic fibrous tissue, are currently 
					 unknown. The fact that EMC has been associated with pneumonia in cats suggests the possibility of an infectious 
					 cause for this syndrome, and EMC has been proposed as being a precursor to EMF, which generally occurs in older 
					 cats. While evidence for infectious causes of analogous syndromes has been identified in people, similar infectious 
					 causes have not previously been identified in cats. This study will use cutting edge molecular biological techniques 
					 in an effort to identify infectious agents that may cause EMC (and, subsequently, EMF). </td>
				<td> Laura Goodman, PhD </td>
				<td> <?php if($p3c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p3c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Entry and Egress of the novel feline <br> morbillivirus (FeMV) </td>
				<td> 78% </td>
				<td> Feline morbillivirus (FeMV) was first described in a group of stray cats in China in 2011, and this and subsequent 
					 identification of FeMV in association with a kidney disease called tubulointerstitial nephritis (TIN) in cats in Japan, 
					 Germany, and the US have raised concerns for this novel virus causing TIN. An infectious cause for TIN would have 
					 the potential to cause significant illness in a large number of cats in many regions of the world. This study will use 
					 cutting-edge technology to determine how FeMV virus gains access to kidney cells as the first step in 
					 understanding the mechanism of FeMV infection. An improved understanding of this mechanism has the potential 
					 to improve our ability to diagnose, treat, and prevent FeMV infections in cats worldwide. </td>
				<td> Hector Aguilar-Carreno, PhD </td>
				<td> <?php if($p4c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p4c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Cat and Human Personality Interaction <br> Project </td>
				<td> 23% </td>
				<td> Millions of cats that enter US animal shelters every year are euthanized. Currently, there is little scientific 
					 information about how to best match up individual cats with prospective adopters, meaning that adoptions either 
					 never occur or they fail (the cat is returned to the shelter). Combining research on human and feline personality, 
					 we aim to create a compatibility assessment tool that will allow cats to be placed in homes where they have the 
					 best chance for long term success. </td>
				<td> James Ha, Saethra Jade Fritscher </td>
				<td> <?php if($p5c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p5c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Feline Genetics and Comparative Medicine <br> Research Project </td>
				<td> 94% </td>
				<td> The Lyons’ Feline Genetics laboratory at MU pursues a plethora of genetic projects for the domestic cat, 
					 and some wild felids too! We attempt to find funding for each project, but often sample collection is a 
					 minimal cost and is a major prerequisite in order to initiate a formal study in the first place. Below 
					 is a lengthy list of projects. We tend to focus on the projects that obtain the most enthusiasm and 
					 cooperation from breeders and cat owners and also have funding. The squeaky wheel gets the attention – 
					 but you do have to play to win – by providing samples, health records, photographs and encouraging 
					 participation. </td>
				<td> Leslie A. Lyons, PhD </td>
				<td> <?php if($p6c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p6c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Feline sensitivity to human body language <br> cues </td>
				<td> 08% </td>
				<td> One way in which we frequently attempt to interact with the animals that live with us is by pointing at 
					 things. It is possible that this shows our limitations rather than our animal friends since this is a 
					 particularly human means of communication. However, in 2005 a study by Miklósi et al. demonstrated that 
					 cats could indeed follow human gestures to find food. The researchers also investigated whether, when 
					 unable to solve a task, whether the cats turned to the humans for help at all. They did not. </td>
				<td> Shreve, K. R. V., & Udell, M. A.  </td>
				<td> <?php if($p7c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p7c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Feline human voice recognition </td>
				<td> 82% </td>
				<td> Two researchers, Saito and Shinozuka in 2013 demonstrated that cats can recognise their owner’s voice. 
				To test this, the researchers played cats recordings of either their owner calling them or other people 
				calling their name. The cats were the most responsive to their owner calling. This response was mostly seen 
				in terms of the cat moving its ears or head, rather than walking towards the voice as a dog might. </td>
				<td> Saito, A., & Shinozuka, K. </td>
				<td> <?php if($p8c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p8c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Feline vocal communication </td>
				<td> 69% </td>
				<td> Kittens have around 9 different types of vocalisation, while adults have around 16 different types. 
				Interestingly, domestic and feral cats also differ from each other in their vocalisations, implying that 
				their relationships with humans influences how cats ‘talk’. Perhaps one of the most renowned 
				vocalisations of cats is their purr. Cats don’t just purr when being stroked by humans, they also use it 
				in interactions with each other and with their kittens. What’s more, cats alter their purr to change the 
				meaning of the vocalization. For example, when asking for food from owners, cats’ purrs change, becoming 
				more ‘urgent’ and ‘less pleasant’ (McComb et al. 2009). When asking for food, a high-frequency miaow is 
				usually also embedded within the lower-pitch purr. However, whether this food solicitation call is 
				specific to cats’ relationship to humans or whether they use it in other contexts, is currently unknown. </td>
				<td> McComb K, Taylor AM, Wilson C, Charlton BD  </td>
				<td> <?php if($p9c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p9c."\n"; 
				           }?> </td>			</tr>
			<tr>
				<td> Feline attachment to owner </td>
				<td> 41% </td>
				<td> In 2007, Edwards et al. carried out the unusually-named ‘Ainsworth Strange Situation Test’ in order 
				to test whether cats were more attached to their owners than to a random human. In this test, the cat was 
				essentially placed in a room and experienced being alone, being with their human owner and being with an 
				unknown human. The researchers found that cats spent more time allogrooming (head-butting) their owners 
				than the stranger. They also only ever followed and played with their owner and never with the stranger. 
				The cats were generally more exploratory and moved around more when their owner was in the room compared 
				to the stranger. Both when alone and with the stranger, the cat generally spent more time being alert and 
				sitting by the door. They vocalised the most when alone (compared to when with either human). Thus it 
				seems that cats do have attachment to their owners that is stronger than with a random human, which is 
				perhaps somewhat comforting to know. </td>
				<td> Edwards, C., Heiblum, M., Tejeda, A., & Galindo, F.  </td>
				<td> <?php if($p0c !== '') {
								echo date("M,d,Y h:i:s A") .' : '.$p0c."\n"; 
				           }?> </td>			</tr>
		</table>
	</body>
</html>