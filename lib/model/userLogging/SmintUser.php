<?php


/**
 * Skeleton subclass for representing a row from the 'smint_user' table.
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
class SmintUser extends BaseSmintUser {

  public function __toString(){
    return $this->id." ".$this->username." ".$this->name." ".$this->organization." ".$this->email;
  }

} // SmintUser
