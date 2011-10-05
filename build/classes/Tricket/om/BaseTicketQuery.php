<?php


/**
 * Base class that represents a query for the 'Ticket' table.
 *
 * 
 *
 * @method     TicketQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TicketQuery orderByAreaId($order = Criteria::ASC) Order by the Area_id column
 * @method     TicketQuery orderByClienteId($order = Criteria::ASC) Order by the Cliente_id column
 * @method     TicketQuery orderByNomereferente($order = Criteria::ASC) Order by the nomeReferente column
 * @method     TicketQuery orderByEmailriferimento($order = Criteria::ASC) Order by the emailRiferimento column
 * @method     TicketQuery orderByStato($order = Criteria::ASC) Order by the stato column
 *
 * @method     TicketQuery groupById() Group by the id column
 * @method     TicketQuery groupByAreaId() Group by the Area_id column
 * @method     TicketQuery groupByClienteId() Group by the Cliente_id column
 * @method     TicketQuery groupByNomereferente() Group by the nomeReferente column
 * @method     TicketQuery groupByEmailriferimento() Group by the emailRiferimento column
 * @method     TicketQuery groupByStato() Group by the stato column
 *
 * @method     TicketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TicketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TicketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TicketQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     TicketQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     TicketQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     TicketQuery leftJoinArea($relationAlias = null) Adds a LEFT JOIN clause to the query using the Area relation
 * @method     TicketQuery rightJoinArea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Area relation
 * @method     TicketQuery innerJoinArea($relationAlias = null) Adds a INNER JOIN clause to the query using the Area relation
 *
 * @method     TicketQuery leftJoinMessaggio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Messaggio relation
 * @method     TicketQuery rightJoinMessaggio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Messaggio relation
 * @method     TicketQuery innerJoinMessaggio($relationAlias = null) Adds a INNER JOIN clause to the query using the Messaggio relation
 *
 * @method     Ticket findOne(PropelPDO $con = null) Return the first Ticket matching the query
 * @method     Ticket findOneOrCreate(PropelPDO $con = null) Return the first Ticket matching the query, or a new Ticket object populated from the query conditions when no match is found
 *
 * @method     Ticket findOneById(int $id) Return the first Ticket filtered by the id column
 * @method     Ticket findOneByAreaId(int $Area_id) Return the first Ticket filtered by the Area_id column
 * @method     Ticket findOneByClienteId(int $Cliente_id) Return the first Ticket filtered by the Cliente_id column
 * @method     Ticket findOneByNomereferente(string $nomeReferente) Return the first Ticket filtered by the nomeReferente column
 * @method     Ticket findOneByEmailriferimento(string $emailRiferimento) Return the first Ticket filtered by the emailRiferimento column
 * @method     Ticket findOneByStato(double $stato) Return the first Ticket filtered by the stato column
 *
 * @method     array findById(int $id) Return Ticket objects filtered by the id column
 * @method     array findByAreaId(int $Area_id) Return Ticket objects filtered by the Area_id column
 * @method     array findByClienteId(int $Cliente_id) Return Ticket objects filtered by the Cliente_id column
 * @method     array findByNomereferente(string $nomeReferente) Return Ticket objects filtered by the nomeReferente column
 * @method     array findByEmailriferimento(string $emailRiferimento) Return Ticket objects filtered by the emailRiferimento column
 * @method     array findByStato(double $stato) Return Ticket objects filtered by the stato column
 *
 * @package    propel.generator.Tricket.om
 */
abstract class BaseTicketQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTicketQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'Tricket', $modelName = 'Ticket', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TicketQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TicketQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TicketQuery) {
			return $criteria;
		}
		$query = new TicketQuery();
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
	 * @return    Ticket|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TicketPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TicketPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TicketPeer::ID, $keys, Criteria::IN);
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
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TicketPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the Area_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAreaId(1234); // WHERE Area_id = 1234
	 * $query->filterByAreaId(array(12, 34)); // WHERE Area_id IN (12, 34)
	 * $query->filterByAreaId(array('min' => 12)); // WHERE Area_id > 12
	 * </code>
	 *
	 * @see       filterByArea()
	 *
	 * @param     mixed $areaId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByAreaId($areaId = null, $comparison = null)
	{
		if (is_array($areaId)) {
			$useMinMax = false;
			if (isset($areaId['min'])) {
				$this->addUsingAlias(TicketPeer::AREA_ID, $areaId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($areaId['max'])) {
				$this->addUsingAlias(TicketPeer::AREA_ID, $areaId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::AREA_ID, $areaId, $comparison);
	}

	/**
	 * Filter the query on the Cliente_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByClienteId(1234); // WHERE Cliente_id = 1234
	 * $query->filterByClienteId(array(12, 34)); // WHERE Cliente_id IN (12, 34)
	 * $query->filterByClienteId(array('min' => 12)); // WHERE Cliente_id > 12
	 * </code>
	 *
	 * @see       filterByCliente()
	 *
	 * @param     mixed $clienteId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId)) {
			$useMinMax = false;
			if (isset($clienteId['min'])) {
				$this->addUsingAlias(TicketPeer::CLIENTE_ID, $clienteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clienteId['max'])) {
				$this->addUsingAlias(TicketPeer::CLIENTE_ID, $clienteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::CLIENTE_ID, $clienteId, $comparison);
	}

	/**
	 * Filter the query on the nomeReferente column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNomereferente('fooValue');   // WHERE nomeReferente = 'fooValue'
	 * $query->filterByNomereferente('%fooValue%'); // WHERE nomeReferente LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomereferente The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByNomereferente($nomereferente = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomereferente)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomereferente)) {
				$nomereferente = str_replace('*', '%', $nomereferente);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TicketPeer::NOMEREFERENTE, $nomereferente, $comparison);
	}

	/**
	 * Filter the query on the emailRiferimento column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmailriferimento('fooValue');   // WHERE emailRiferimento = 'fooValue'
	 * $query->filterByEmailriferimento('%fooValue%'); // WHERE emailRiferimento LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $emailriferimento The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByEmailriferimento($emailriferimento = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($emailriferimento)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $emailriferimento)) {
				$emailriferimento = str_replace('*', '%', $emailriferimento);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TicketPeer::EMAILRIFERIMENTO, $emailriferimento, $comparison);
	}

	/**
	 * Filter the query on the stato column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStato(1234); // WHERE stato = 1234
	 * $query->filterByStato(array(12, 34)); // WHERE stato IN (12, 34)
	 * $query->filterByStato(array('min' => 12)); // WHERE stato > 12
	 * </code>
	 *
	 * @param     mixed $stato The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByStato($stato = null, $comparison = null)
	{
		if (is_array($stato)) {
			$useMinMax = false;
			if (isset($stato['min'])) {
				$this->addUsingAlias(TicketPeer::STATO, $stato['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stato['max'])) {
				$this->addUsingAlias(TicketPeer::STATO, $stato['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TicketPeer::STATO, $stato, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(TicketPeer::CLIENTE_ID, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TicketPeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Cliente relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Cliente');
		
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
			$this->addJoinObject($join, 'Cliente');
		}
		
		return $this;
	}

	/**
	 * Use the Cliente relation Cliente object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
	}

	/**
	 * Filter the query by a related Area object
	 *
	 * @param     Area|PropelCollection $area The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByArea($area, $comparison = null)
	{
		if ($area instanceof Area) {
			return $this
				->addUsingAlias(TicketPeer::AREA_ID, $area->getId(), $comparison);
		} elseif ($area instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TicketPeer::AREA_ID, $area->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByArea() only accepts arguments of type Area or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Area relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function joinArea($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Area');
		
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
			$this->addJoinObject($join, 'Area');
		}
		
		return $this;
	}

	/**
	 * Use the Area relation Area object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AreaQuery A secondary query class using the current class as primary query
	 */
	public function useAreaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinArea($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Area', 'AreaQuery');
	}

	/**
	 * Filter the query by a related Messaggio object
	 *
	 * @param     Messaggio $messaggio  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function filterByMessaggio($messaggio, $comparison = null)
	{
		if ($messaggio instanceof Messaggio) {
			return $this
				->addUsingAlias(TicketPeer::ID, $messaggio->getTicketId(), $comparison);
		} elseif ($messaggio instanceof PropelCollection) {
			return $this
				->useMessaggioQuery()
					->filterByPrimaryKeys($messaggio->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByMessaggio() only accepts arguments of type Messaggio or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Messaggio relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function joinMessaggio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Messaggio');
		
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
			$this->addJoinObject($join, 'Messaggio');
		}
		
		return $this;
	}

	/**
	 * Use the Messaggio relation Messaggio object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MessaggioQuery A secondary query class using the current class as primary query
	 */
	public function useMessaggioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMessaggio($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Messaggio', 'MessaggioQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Ticket $ticket Object to remove from the list of results
	 *
	 * @return    TicketQuery The current query, for fluid interface
	 */
	public function prune($ticket = null)
	{
		if ($ticket) {
			$this->addUsingAlias(TicketPeer::ID, $ticket->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTicketQuery
