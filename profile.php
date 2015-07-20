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
	/** this is the accessor method for getting the profile id
	 * @return int value of profile id **/
public function getProfileId() {
	return($this->ProfileId);
}
	/** this is the mutator method for ProfileId
	  * @param int $newProfileId new value of profile id
	  * @throws InvalidArgumentException if $newProfileId is not an integer or not positive
	  * @throws RangeException if $newProfileId is not positive
	  * need to verify that the profile id is valid and positive
	 **/
public function setProfileId($newProfileId) {
	$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
	if($newProfileId === false) {
		throw(new InvalidArgumentException("profile id is not a valid integer"));
	}
	if($newProfileId <= 0) {
		throw(new RangeException("profile id is not positive"));
	}

	$this->profileId = intval($newProfileId);
}

?>