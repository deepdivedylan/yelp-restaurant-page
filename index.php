<!DOCTYPE html>
<html>
	<head>
		<title>Yelp Restaurant Page Data Design Project</title>
		<link type="image/ico" href="http://s3-media2.fl.yelpcdn.com/assets/2/www/img/118ff475a341/ico/favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div class="container">
		<header>
			<h1>Data Design Project</h1>
			<h3>Yelp Restaurant Page</h3>
			<h4>Trevor Rigler</h4>
		</header>
		<img src="yelp.jpg" alt="Yelp Logo" height="225" width="400">
		<p>Yelp is a website consisting mainly of reviews of local
			businesses, with an emphasis on restaurants. Founded in 2004 by two former PayPal employees, Yelp is now
		a publicly traded company (<a href="https://www.nyse.com/quote/XNYS:YELP" target="_blank">NYSE:YELP</a>) with approximately <b>135 monthly visitors</b>.</p>
		<h2>Frontend of Assignment</h2>
		<h3>Persona</h3>
		<p>&#160;&#160;&#160;&#149; Our Persona is Estelle, a 30-year-old associate at an East Coast law firm.
		<br/>&#160;&#160;&#160;&#149; Estelle frequently travels for work to cities throughout the U.S.
		<br/>&#160;&#160;&#160;&#149; Estelle is often pressed for time when traveling and needs information about local businesses quickly.
		<br/>&#160;&#160;&#160;&#149; Estelle uses her smart phone almost exclusively when traveling for work.
		<br/>&#160;&#160;&#160;&#149; Estelle is single, has no kids, has a decent amount of discretionary income, and eats out frequently.
		<br/>&#160;&#160;&#160;&#149; Estelle is fairly <i>opinionated</i>.</p>
		<h4>Main Use Cases</h4>
		<p>&#160;&#160;&#160;<b>1.)</b> Search for restaurant by name (static use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to find specific restaurant.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account. Restaurant has a page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. Estelle gets a tip from the concierge at her Miami hotel to try a Haitian restaurant called Tap Tap.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. Estelle browses to Yelp page for Miami.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Estelle uses Yelp's main search function to find Tap Tap.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Yelp's server searches internally for a potential match, limited geographically to the greater Miami area.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Yelp's server returns list of possible matches, each a link.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. Estelle selects best match offered by server and clicks.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. Yelp's server takes Estelle to Yelp's <a href="http://www.yelp.com/biz/tap-tap-restaurant-miami-beach-2" target="_blank">Tap Tap</a> page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;7. Estelle clicks on pictures, menu, and reviews listed on Tap Tap's Yelp page..</p>
		<p>&#160;&#160;&#160;<b>2.)</b> Allow Estelle to find other Yelp users she already knows from other sites. (dynamic use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to locate other Yelp users based on other website affiliations.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, other Yelp user(s), Third Party Website(s)(ex:Facebook)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle and the other users have accounts with Yelp <i>and</i> certain third party websites.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. Estelle browses to any Yelp page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. Estelle clicks on Find Friends link near top of page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Yelp's server offers for Estelle to log in to her Facebook account.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Yelp's server accesses Estelle's friend list on external Facebook server.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. Yelp's server cross-references existing Yelp users against Estelle's FB friend list.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. Estelle selects from list of her FB friends to whom to submit Yelp friend requests.</p>
		<p>&#160;&#160;&#160;<b>3.)</b> Estelle needs map and directions to Tap Tap. (dynamic use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to access map and directions for Tap Tap from third party website(s).
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant, Third Party Website(s)(ex:Google Maps)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account with Yelp. Estelle permits Yelp to know user's location. Tap Tap has page with Yelp. Tap Tap is on third party website.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. Estelle browses to Yelp page for Tap Tap.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. Estelle clicks on Get Directions link under Tap Tap's name.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Yelp's server searches third party website for Tap Tap's location.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Yelp's server provides map with Tap Tap's location indicated.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. Estelle clicks on Get Directions button inset on map.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. Yelp's server acquires driving directions from third party website and provides same to Estelle in map form.</p>
		<h2>Backend of Assignment</h2>
		<h5>Entities:</h5>
			&#160;&#160;&#160;User(s)
			<br/>&#160;&#160;&#160;Restaurant(s)
			<br/>&#160;&#160;&#160;Third Party Websites
			<div class="row">
				<div class="col-md-3">
					<table class="table-bordered table-responsive">
						<tr><th>User</th></tr>
						<tr><td>userId - primary key</td></tr>
						<tr><td>email</td></tr>
						<tr><td>password</td></tr>
						<tr><td>picture</td></tr>
					</table>
				</div>
			</div>
			<figure>
				<img src="erd.jpg" alt="Entity Relationship Diagram">
				<figcaption>Figure 1: Example ERD for the Yelp SQL Database</figcaption>
			</figure>
		<br/><i>TO BE CONTINUED...</i>
		<!--Next set up proper tables denoting relationships-->
		<!--Next improve CSS style sheet(s)-->
		<!--Next identify strong and weak entities, primary and foreign keys, and relations-->
	</div>
	</body>
</html>