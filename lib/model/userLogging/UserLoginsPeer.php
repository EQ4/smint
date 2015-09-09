<?php


/**
 * Skeleton subclass for performing query and update operations on the 'smint_userlogins' table.
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
class UserLoginsPeer extends BaseUserLoginsPeer {

  /**
   * helper function to log user logins
   */
  static public function login()
  {
    $user=sfContext::getInstance()->getUser();
    
    $newLogin = new UserLogins();
    $newLogin->setIp($user->getAttribute('ip'));
    $newLogin->setSmintUserId($user->getAttribute('userid'));
    $newLogin->save();
  }
  
  
} // UserLoginsPeer