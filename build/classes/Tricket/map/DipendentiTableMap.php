<?php



/**
 * This class defines the structure of the 'Dipendenti' table.
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
class DipendentiTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'Tricket.map.DipendentiTableMap';

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
		$this->setName('Dipendenti');
		$this->setPhpName('Dipendenti');
		$this->setClassname('Dipendenti');
		$this->setPackage('Tricket');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOME', 'Nome', 'LONGVARCHAR', false, null, null);
		$this->addColumn('COGNOME', 'Cognome', 'LONGVARCHAR', false, null, null);
		$this->addColumn('EMAIL', 'Email', 'LONGVARCHAR', false, null, null);
		$this->addColumn('USERNAME', 'Username', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PASSWORD', 'Password', 'VARCHAR', false, 40, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Areadipendente', 'Areadipendente', RelationMap::ONE_TO_MANY, array('id' => 'Dipendenti_id', ), null, null);
	} // buildRelations()

} // DipendentiTableMap
