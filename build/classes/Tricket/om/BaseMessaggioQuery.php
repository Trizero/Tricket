<?php


/**
 * Base class that represents a query for the 'Messaggio' table.
 *
 * 
 *
 * @method     MessaggioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MessaggioQuery orderByTicketId($order = Criteria::ASC) Order by the Ticket_id column
 * @method     MessaggioQuery orderByTitolo($order = Criteria::ASC) Order by the titolo column
 * @method     MessaggioQuery orderByTesto($order = Criteria::ASC) Order by the testo column
 *
 * @method     MessaggioQuery groupById() Group by the id column
 * @method     MessaggioQuery groupByTicketId() Group by the Ticket_id column
 * @method     MessaggioQuery groupByTitolo() Group by the titolo column
 * @method     MessaggioQuery groupByTesto() Group by the testo column
 *
 * @method     MessaggioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MessaggioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MessaggioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MessaggioQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method     MessaggioQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method     MessaggioQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method     Messaggio findOne(PropelPDO $con = null) Return the first Messaggio matching the query
 * @method     Messaggio findOneOrCreate(PropelPDO $con = null) Return the first Messaggio matching the query, or a new Messaggio object populated from the query conditions when no match is found
 *
 * @method     Messaggio findOneById(int $id) Return the first Messaggio filtered by the id column
 * @method     Messaggio findOneByTicketId(int $Ticket_id) Return the first Messaggio filtered by the Ticket_id column
 * @method     Messaggio findOneByTitolo(string $titolo) Return the first Messaggio filtered by the titolo column
 * @method     Messaggio findOneByTesto(string $testo) Return the first Messaggio filtered by the testo column
 *
 * @method     array findById(int $id) Return Messaggio objects filtered by the id column
 * @method     array findByTicketId(int $Ticket_id) Return Messaggio objects filtered by the Ticket_id column
 * @method     array findByTitolo(string $titolo) Return Messaggio objects filtered by the titolo column
 * @method     array findByTesto(string $testo) Return Messaggio objects filtered by the testo column
 *
 * @package    propel.generator.Tricket.om
 */
abstract class BaseMessaggioQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMessaggioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'Tricket', $modelName = 'Messaggio', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MessaggioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MessaggioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MessaggioQuery) {
			return $criteria;
		}
		$query = new MessaggioQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Messaggio|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MessaggioPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MessaggioPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MessaggioPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MessaggioPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the Ticket_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTicketId(1234); // WHERE Ticket_id = 1234
	 * $query->filterByTicketId(array(12, 34)); // WHERE Ticket_id IN (12, 34)
	 * $query->filterByTicketId(array('min' => 12)); // WHERE Ticket_id > 12
	 * </code>
	 *
	 * @see       filterByTicket()
	 *
	 * @param     mixed $ticketId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByTicketId($ticketId = null, $comparison = null)
	{
		if (is_array($ticketId)) {
			$useMinMax = false;
			if (isset($ticketId['min'])) {
				$this->addUsingAlias(MessaggioPeer::TICKET_ID, $ticketId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ticketId['max'])) {
				$this->addUsingAlias(MessaggioPeer::TICKET_ID, $ticketId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MessaggioPeer::TICKET_ID, $ticketId, $comparison);
	}

	/**
	 * Filter the query on the titolo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTitolo('fooValue');   // WHERE titolo = 'fooValue'
	 * $query->filterByTitolo('%fooValue%'); // WHERE titolo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $titolo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByTitolo($titolo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($titolo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $titolo)) {
				$titolo = str_replace('*', '%', $titolo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MessaggioPeer::TITOLO, $titolo, $comparison);
	}

	/**
	 * Filter the query on the testo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTesto('fooValue');   // WHERE testo = 'fooValue'
	 * $query->filterByTesto('%fooValue%'); // WHERE testo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $testo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByTesto($testo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($testo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $testo)) {
				$testo = str_replace('*', '%', $testo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MessaggioPeer::TESTO, $testo, $comparison);
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket|PropelCollection $ticket The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function filterByTicket($ticket, $comparison = null)
	{
		if ($ticket instanceof Ticket) {
			return $this
				->addUsingAlias(MessaggioPeer::TICKET_ID, $ticket->getId(), $comparison);
		} elseif ($ticket instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MessaggioPeer::TICKET_ID, $ticket->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByTicket() only accepts arguments of type Ticket or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Ticket relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function joinTicket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Ticket');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Ticket');
		}
		
		return $this;
	}

	/**
	 * Use the Ticket relation Ticket object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery A secondary query class using the current class as primary query
	 */
	public function useTicketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTicket($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Ticket', 'TicketQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Messaggio $messaggio Object to remove from the list of results
	 *
	 * @return    MessaggioQuery The current query, for fluid interface
	 */
	public function prune($messaggio = null)
	{
		if ($messaggio) {
			$this->addUsingAlias(MessaggioPeer::ID, $messaggio->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMessaggioQuery
