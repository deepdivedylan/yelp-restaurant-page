<!DOCTYPE html>
<html>
	<head>
		<title>Yelp Restaurant Page Data Design Project</title>
		<link type="image/ico" href="http://s3-media2.fl.yelpcdn.com/assets/2/www/img/118ff475a341/ico/favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	</head>
	<body>
	<div class="container">
		<header>
			<h1>Data Design Project</h1>
			<h3>Yelp Restaurant Page</h3>
			<h4>Trevor Rigler</h4>

		<img src="images/yelp.jpg" alt="Yelp Logo" height="450" width="800">
		<p>Yelp is a website consisting mainly of reviews of local
			businesses, with an emphasis on restaurants. Founded in 2004 by two former PayPal employees, Yelp is now
		a publicly traded company (<a href="https://www.nyse.com/quote/XNYS:YELP" target="_blank">NYSE:YELP</a>) with approximately <b>135 monthly visitors</b>.</p>
		</header>
	</div>
			<h2>Frontend of Assignment</h2>
		<h3>Persona</h3>
		<ul>
			<li>&#160; Our Persona is Estelle, a 30-year-old associate at an East Coast law firm.</li>
			<li>&#160; Estelle frequently travels for work to cities throughout the U.S.</li>
			<li>&#160; Estelle is often pressed for time when traveling and needs information about local businesses quickly.</li>
			<li>&#160; Estelle uses her smart phone almost exclusively when traveling for work.</li>
			<li>&#160; Estelle is single, has no kids, has a decent amount of discretionary income, and eats out frequently.</li>
			<li>&#160; Estelle is fairly <i>opinionated</i>.</li>
		</ul>
		<h4>Main Use Cases</h4>
		<br/>&#160;&#160;&#160;<b>I.</b> Search for restaurant by name (static use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to find specific restaurant.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account. Restaurant has a page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol>
			<li>&#160;&#160;&#160;&#160;Estelle gets a tip from the concierge at her Miami hotel to try a Haitian restaurant called Tap Tap.</li>
			<li>&#160;&#160;&#160;&#160;Estelle browses to Yelp page for Miami.</li>
			<li>&#160;&#160;&#160;&#160;Estelle uses Yelp's main search function to find Tap Tap.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server searches internally for a potential match, limited geographically to the greater Miami area.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server returns list of possible matches, each a link.</li>
			<li>&#160;&#160;&#160;&#160;Estelle selects best match offered by server and clicks.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server takes Estelle to Yelp's <a href="http://www.yelp.com/biz/tap-tap-restaurant-miami-beach-2" target="_blank">Tap Tap</a> page.</li>
			<li>&#160;&#160;&#160;&#160;Estelle clicks on pictures, menu, and reviews listed on Tap Tap's Yelp page..</li>
		</ol>
			&#160;&#160;&#160;<b>II.</b> Allow Estelle to find other Yelp users she already knows from other sites. (dynamic use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to locate other Yelp users based on other website affiliations.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, other Yelp user(s), Third Party Website(s)(ex:Facebook)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle and the other users have accounts with Yelp <i>and</i> certain third party websites.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol>
			<li>&#160;&#160;&#160;&#160;Estelle browses to any Yelp page.</li>
			<li>&#160;&#160;&#160;&#160;Estelle clicks on Find Friends link near top of page.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server offers for Estelle to log in to her Facebook account.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server accesses Estelle's friend list on external Facebook server.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server cross-references existing Yelp users against Estelle's FB friend list.</li>
			<li>&#160;&#160;&#160;&#160;Estelle selects from list of her FB friends to whom to submit Yelp friend requests.</li>
		</ol>
			&#160;&#160;&#160;<b>III.</b> Estelle needs map and directions to Tap Tap. (dynamic use case)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to access map and directions for Tap Tap from third party website(s).
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant, Third Party Website(s)(ex:Google Maps)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account with Yelp. Estelle permits Yelp to know user's location. Tap Tap has page with Yelp. Tap Tap is on third party website.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol>
		<li>&#160;&#160;&#160;&#160;Estelle browses to Yelp page for Tap Tap.</li>
		<li>&#160;&#160;&#160;&#160;Estelle clicks on Get Directions link under Tap Tap's name.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server searches third party website for Tap Tap's location.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server provides map with Tap Tap's location indicated.</li>
		<li>&#160;&#160;&#160;&#160;Estelle clicks on Get Directions button inset on map.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server acquires driving directions from third party website and provides same to Estelle in map form.</li>
		</ol>
		<h2>Backend of Assignment</h2>
		<h5>Entities:</h5>
			<br/>&#160;&#160;&#160;User(s) (strong entity)
			<br/>&#160;&#160;&#160;Restaurant(s) (strong entity)
			<br/>&#160;&#160;&#160;Review(s) (weak entity)
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
			<div class="imgDiagram">
			<figure>
				<img src="images/erd.jpg" alt="Entity Relationship Diagram"/>
				<figcaption>Figure 1: Example ERD for the Yelp SQL Database</figcaption>
			</figure>
			</div>
		<br/><i>TO BE CONTINUED...</i>
		<!--Next set up proper tables (via block div class) denoting relationships-->
		<!--Next improve CSS style sheet(s)-->
		<!--Next improve html, replace <br/> tags-->
		<!--Next identify strong and weak entities, primary and foreign keys, and relations-->
	</body>
</html>