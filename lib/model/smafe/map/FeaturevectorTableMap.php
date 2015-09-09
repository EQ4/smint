<?php


/**
 * This class defines the structure of the 'featurevector' table.
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
class FeaturevectorTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.smafe.map.FeaturevectorTableMap';

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
		$this->setName('featurevector');
		$this->setPhpName('Featurevector');
		$this->setClassname('Featurevector');
		$this->setPackage('lib.model.smafe');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('TRACK_ID', 'TrackId', 'INTEGER' , 'track', 'ID', true, null, null);
		$this->addForeignPrimaryKey('FEATUREVECTORTYPE_ID', 'FeaturevectortypeId', 'INTEGER' , 'featurevectortype', 'ID', true, null, null);
		$this->addColumn('DATA', 'Data', 'BLOB', false, null, null);
		$this->addForeignKey('FILE_ID', 'FileId', 'INTEGER', 'file', 'ID', false, null, null);
		$this->addColumn('INSERTED', 'Inserted', 'TIMESTAMP', false, -4, null);
		$this->addColumn('UPDATED', 'Updated', 'TIMESTAMP', false, -4, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Track', 'Track', RelationMap::MANY_TO_ONE, array('track_id' => 'id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('Featurevectortype', 'Featurevectortype', RelationMap::MANY_TO_ONE, array('featurevectortype_id' => 'id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('File', 'File', RelationMap::MANY_TO_ONE, array('file_id' => 'id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('DistanceRelatedByTrackAId', 'Distance', RelationMap::ONE_TO_MANY, array('track_id' => 'track_a_id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('DistanceRelatedByTrackBId', 'Distance', RelationMap::ONE_TO_MANY, array('track_id' => 'track_b_id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('Distancejob', 'Distancejob', RelationMap::ONE_TO_MANY, array('track_id' => 'track_id', ), 'RESTRICT', 'CASCADE');
    $this->addRelation('Featurevectorsegment', 'Featurevectorsegment', RelationMap::ONE_TO_MANY, array('track_id' => 'track_id', ), 'RESTRICT', 'CASCADE');
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

} // FeaturevectorTableMap
