<!DOCTYPE html>
<html>
	<head>
		<title>Yelp Restaurant Page Data Design Project</title>
	</head>
	<body>
		<img src="yelp.jpg" alt="Yelp Logo" height="450" width="800">
		<p><br>Yelp is a website consisting mainly of reviews of local
			businesses, with an emphasis on restaurants.</br>
		<br>Founded in 2004 by two former PayPal employees, Yelp is now
		a publicly traded company (<a href="https://www.nyse.com/quote/XNYS:YELP">NYSE:YELP</a>) with approximately <b>135 monthly visitors</b>.</br></p>
		<br><b>Frontend of Assignment</b></br>
		<br><u>Persona</u> - The typical user of Yelp is a person in their 20s or 30s.</br>
		<br>&#160;&#160;&#160;&#149; There is no male or female bias here.</br>
		<br>&#160;&#160;&#160;&#149; Yelp users can use the site from mobile or traditional browsers.</br>
		<br>&#160;&#160;&#160;&#149; The true benefit of Yelp comes from mobile use.</br>
		<br>&#160;&#160;&#160;&#149; A user can simply open the Yelp app on their smartphone and
		have Yelp identify nearby businesses.</br>
		<br>&#160;&#160;&#160;&#149; The typical Yelp user is very <i>opinionated</i>.</br>
		<br><u>Main Use Cases</u></br>
		<br>&#160;&#160;&#160;<b>1.)</b> Search for restaurant by name (static use case)</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow user to find specific restaurant.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: User, Restaurant</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: User has an account. Restaurant has a page.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. User browses to Yelp page for preferred town.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. User types in name of specific restaurant in search field.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Server searches internally for a potential match, limited geographically.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Server returns list of possible matches, each a link.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. User selects best match offered by server and clicks.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. Server takes user to page designated for specific restaurant.</br>
		<br>&#160;&#160;&#160;<b>2.)</b> Find other users already known to our user. (dynamic use case)</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow user to locate other users based on other website affiliations.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: User(s), Third Party Website(s)(ex:Facebook)</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Users have accounts with Yelp <i>and</i> certain third party websites.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. User browses to Yelp page for any town.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. User clicks on Find Friends link near top of page.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Server offers for user to log in to Facebook account.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Server accesses user's friend list on external Facebook server.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. Server cross-references existing Yelp users against user's FB friend list.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. User selects from list of FB friends to whom to submit Yelp friend requests.</br>
		<br>&#160;&#160;&#160;<b>3.)</b> Find map and directions to specific restaurant. (dynamic use case)</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow user to access map and directions from third party website(s).</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: User(s), Restaurant, Third Party Website(s)(ex:Google Maps)</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: User has account with Yelp. User permits Yelp to know user's location. Restaurant has page with Yelp. Restaurant is on third party website.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1. User browses to Yelp page for desired restaurant.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2. User clicks on Get Directions link under restaurant name.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;3. Server searches third party website for restaurant's location.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;4. Server provides map with restaurant's location indicated.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;5. User clicks on Get Directions button inset on map.</br>
		<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;6. Server acquires driving directions from third party website and provides same to user in map form.</br>

	</body>
</html>