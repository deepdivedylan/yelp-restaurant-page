<?php
/**
 * Creation of Class Profile
 *
 * This script is designed to create a basic user profile for Yelp.
 *
 * @author Trevor Rigler <tarigler@gmail.com>
 *
 **/

class Profile {
	/** this is our class, it's the id of the Profile of the user
	 * this is a primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/** @var int $profileEmail
	 * email address assigned to the Profile **/
	private $profileEmail;
	/** @var int $profileBio
	 * biographical info for Profile **/
	private $profileBio;
}
?>