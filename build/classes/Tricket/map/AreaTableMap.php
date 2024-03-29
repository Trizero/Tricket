<?php



/**
 * This class defines the structure of the 'Area' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Tricket.map
 */
class AreaTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'Tricket.map.AreaTableMap';

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
		$this->setName('Area');
		$this->setPhpName('Area');
		$this->setClassname('Area');
		$this->setPackage('Tricket');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOME', 'Nome', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('id' => 'Area_id', ), null, null);
		$this->addRelation('Areacliente', 'Areacliente', RelationMap::ONE_TO_MANY, array('id' => 'Area_id', ), null, null);
		$this->addRelation('Areadipendente', 'Areadipendente', RelationMap::ONE_TO_MANY, array('id' => 'Area_id', ), null, null);
	} // buildRelations()

} // AreaTableMap
