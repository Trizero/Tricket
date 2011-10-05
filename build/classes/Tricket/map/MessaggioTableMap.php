<?php



/**
 * This class defines the structure of the 'Messaggio' table.
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
class MessaggioTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'Tricket.map.MessaggioTableMap';

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
		$this->setName('Messaggio');
		$this->setPhpName('Messaggio');
		$this->setClassname('Messaggio');
		$this->setPackage('Tricket');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('TICKET_ID', 'TicketId', 'INTEGER', 'Ticket', 'ID', true, null, null);
		$this->addColumn('TITOLO', 'Titolo', 'LONGVARCHAR', false, null, null);
		$this->addColumn('TESTO', 'Testo', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Ticket', 'Ticket', RelationMap::MANY_TO_ONE, array('Ticket_id' => 'id', ), null, null);
	} // buildRelations()

} // MessaggioTableMap
