<?php


/**
 * Base class that represents a query for the 'AreaCliente' table.
 *
 * 
 *
 * @method     AreaclienteQuery orderByClienteId($order = Criteria::ASC) Order by the Cliente_id column
 * @method     AreaclienteQuery orderByAreaId($order = Criteria::ASC) Order by the Area_id column
 *
 * @method     AreaclienteQuery groupByClienteId() Group by the Cliente_id column
 * @method     AreaclienteQuery groupByAreaId() Group by the Area_id column
 *
 * @method     AreaclienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AreaclienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AreaclienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AreaclienteQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method     AreaclienteQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method     AreaclienteQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method     AreaclienteQuery leftJoinArea($relationAlias = null) Adds a LEFT JOIN clause to the query using the Area relation
 * @method     AreaclienteQuery rightJoinArea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Area relation
 * @method     AreaclienteQuery innerJoinArea($relationAlias = null) Adds a INNER JOIN clause to the query using the Area relation
 *
 * @method     Areacliente findOne(PropelPDO $con = null) Return the first Areacliente matching the query
 * @method     Areacliente findOneOrCreate(PropelPDO $con = null) Return the first Areacliente matching the query, or a new Areacliente object populated from the query conditions when no match is found
 *
 * @method     Areacliente findOneByClienteId(int $Cliente_id) Return the first Areacliente filtered by the Cliente_id column
 * @method     Areacliente findOneByAreaId(int $Area_id) Return the first Areacliente filtered by the Area_id column
 *
 * @method     array findByClienteId(int $Cliente_id) Return Areacliente objects filtered by the Cliente_id column
 * @method     array findByAreaId(int $Area_id) Return Areacliente objects filtered by the Area_id column
 *
 * @package    propel.generator.Tricket.om
 */
abstract class BaseAreaclienteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAreaclienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'Tricket', $modelName = 'Areacliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AreaclienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AreaclienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AreaclienteQuery) {
			return $criteria;
		}
		$query = new AreaclienteQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$Cliente_id, $Area_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Areacliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AreaclientePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(AreaclientePeer::CLIENTE_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(AreaclientePeer::AREA_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(AreaclientePeer::CLIENTE_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(AreaclientePeer::AREA_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
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
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByClienteId($clienteId = null, $comparison = null)
	{
		if (is_array($clienteId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AreaclientePeer::CLIENTE_ID, $clienteId, $comparison);
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
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByAreaId($areaId = null, $comparison = null)
	{
		if (is_array($areaId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AreaclientePeer::AREA_ID, $areaId, $comparison);
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente|PropelCollection $cliente The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByCliente($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(AreaclientePeer::CLIENTE_ID, $cliente->getId(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AreaclientePeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    AreaclienteQuery The current query, for fluid interface
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
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function filterByArea($area, $comparison = null)
	{
		if ($area instanceof Area) {
			return $this
				->addUsingAlias(AreaclientePeer::AREA_ID, $area->getId(), $comparison);
		} elseif ($area instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AreaclientePeer::AREA_ID, $area->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    AreaclienteQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Areacliente $areacliente Object to remove from the list of results
	 *
	 * @return    AreaclienteQuery The current query, for fluid interface
	 */
	public function prune($areacliente = null)
	{
		if ($areacliente) {
			$this->addCond('pruneCond0', $this->getAliasedColName(AreaclientePeer::CLIENTE_ID), $areacliente->getClienteId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(AreaclientePeer::AREA_ID), $areacliente->getAreaId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseAreaclienteQuery
