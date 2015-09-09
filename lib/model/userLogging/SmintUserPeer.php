<?php


/**
 * Skeleton subclass for performing query and update operations on the 'smint_user' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed Aug 24 09:56:03 2011
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model.userLogging
 */
class SmintUserPeer extends BaseSmintUserPeer {

  
	/**
	 * Retrieve a single object by unique constraint fields.
	 *
	 * @param      string $username
	 * @param      string $name
	 * @param      string $email
	 * @param      string $organization
	 * @param      PropelPDO $con the connection to use
	 * @return     SmintUser
	 */
	public static function retrieveByUniqueColumnValues($username, $name, $email, $organization, PropelPDO $con = null) {

		if ($con === null) {
			$con = Propel::getConnection(SmintUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(SmintUserPeer::DATABASE_NAME);
		$criteria->add(SmintUserPeer::USERNAME, $username);
		$criteria->add(SmintUserPeer::NAME, $name);
		$criteria->add(SmintUserPeer::EMAIL, $email);
		$criteria->add(SmintUserPeer::ORGANIZATION, $organization);
		$v = SmintUserPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
  

} // SmintUserPeer