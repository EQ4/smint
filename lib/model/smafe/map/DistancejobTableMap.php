<?php


/**
 * This class defines the structure of the 'distancejob' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed May 30 15:27:45 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.smafe.map
 */
class DistancejobTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.smafe.map.DistancejobTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('distancejob');
		$this->setPhpName('Distancejob');
		$this->setClassname('Distancejob');
		$this->setPackage('lib.model.smafe');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('FEATUREVECTORTYPE_ID', 'FeaturevectortypeId', 'INTEGER', true, null, null);
		$this->addForeignPrimaryKey('TRACK_ID', 'TrackId', 'INTEGER' , 'featurevector', 'TRACK_ID', true, null, null);
		$this->addForeignPrimaryKey('DISTANCETYPE_ID', 'DistancetypeId', 'INTEGER' , 'distancetype', 'ID', true, null, null);
		$this->addForeignKey('SMAFEJOB_ADDFILE_ID', 'SmafejobAddfileId', 'INTEGER', 'smafejob_addfile', 'ID', false, null, null);
		$this->addColumn('STATUS', 'Status', 'VARCHAR', false, 255, null);
		$this->addColumn('PRIORITY', 'Priority', 'INTEGER', true, null, 0);
		$this->addColumn('CREATED', 'Created', 'TIMESTAMP', true, null, 'now()');
		$this->addColumn('STARTED', 'Started', 'TIMESTAMP', false, null, null);
		$this->addColumn('FINISHED', 'Finished', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Featurevector', 'Featurevector', RelationMap::MANY_TO_ONE, array('track_id' => 'track_id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('Distancetype', 'Distancetype', RelationMap::MANY_TO_ONE, array('distancetype_id' => 'id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('SmafejobAddfile', 'SmafejobAddfile', RelationMap::MANY_TO_ONE, array('smafejob_addfile_id' => 'id', ), 'RESTRICT', 'CASCADE');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // DistancejobTableMap
