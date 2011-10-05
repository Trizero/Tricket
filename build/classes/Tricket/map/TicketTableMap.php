<?php



/**
 * This class defines the structure of the 'Ticket' table.
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
class TicketTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'Tricket.map.TicketTableMap';

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
		$this->setName('Ticket');
		$this->setPhpName('Ticket');
		$this->setClassname('Ticket');
		$this->setPackage('Tricket');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('AREA_ID', 'AreaId', 'INTEGER', 'Area', 'ID', true, null, null);
		$this->addForeignKey('CLIENTE_ID', 'ClienteId', 'INTEGER', 'Cliente', 'ID', true, null, null);
		$this->addColumn('NOMEREFERENTE', 'Nomereferente', 'LONGVARCHAR', false, null, null);
		$this->addColumn('EMAILRIFERIMENTO', 'Emailriferimento', 'LONGVARCHAR', false, null, null);
		$this->addColumn('STATO', 'Stato', 'DOUBLE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('Cliente_id' => 'id', ), null, null);
		$this->addRelation('Area', 'Area', RelationMap::MANY_TO_ONE, array('Area_id' => 'id', ), null, null);
		$this->addRelation('Messaggio', 'Messaggio', RelationMap::ONE_TO_MANY, array('id' => 'Ticket_id', ), null, null);
	} // buildRelations()

} // TicketTableMap
