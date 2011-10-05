<?php


/**
 * Base class that represents a query for the 'Cliente' table.
 *
 * 
 *
 * @method     ClienteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ClienteQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method     ClienteQuery orderByCognome($order = Criteria::ASC) Order by the cognome column
 * @method     ClienteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ClienteQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     ClienteQuery orderByPassword($order = Criteria::ASC) Order by the password column
 *
 * @method     ClienteQuery groupById() Group by the id column
 * @method     ClienteQuery groupByNome() Group by the nome column
 * @method     ClienteQuery groupByCognome() Group by the cognome column
 * @method     ClienteQuery groupByEmail() Group by the email column
 * @method     ClienteQuery groupByUsername() Group by the username column
 * @method     ClienteQuery groupByPassword() Group by the password column
 *
 * @method     ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ClienteQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method     ClienteQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method     ClienteQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method     ClienteQuery leftJoinAreacliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Areacliente relation
 * @method     ClienteQuery rightJoinAreacliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Areacliente relation
 * @method     ClienteQuery innerJoinAreacliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Areacliente relation
 *
 * @method     Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method     Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method     Cliente findOneById(int $id) Return the first Cliente filtered by the id column
 * @method     Cliente findOneByNome(string $nome) Return the first Cliente filtered by the nome column
 * @method     Cliente findOneByCognome(string $cognome) Return the first Cliente filtered by the cognome column
 * @method     Cliente findOneByEmail(string $email) Return the first Cliente filtered by the email column
 * @method     Cliente findOneByUsername(string $username) Return the first Cliente filtered by the username column
 * @method     Cliente findOneByPassword(string $password) Return the first Cliente filtered by the password column
 *
 * @method     array findById(int $id) Return Cliente objects filtered by the id column
 * @method     array findByNome(string $nome) Return Cliente objects filtered by the nome column
 * @method     array findByCognome(string $cognome) Return Cliente objects filtered by the cognome column
 * @method     array findByEmail(string $email) Return Cliente objects filtered by the email column
 * @method     array findByUsername(string $username) Return Cliente objects filtered by the username column
 * @method     array findByPassword(string $password) Return Cliente objects filtered by the password column
 *
 * @package    propel.generator.Tricket.om
 */
abstract class BaseClienteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseClienteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'Tricket', $modelName = 'Cliente', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ClienteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ClienteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ClienteQuery) {
			return $criteria;
		}
		$query = new ClienteQuery();
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
	 * @return    Cliente|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ClientePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ClientePeer::ID, $keys, Criteria::IN);
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
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ClientePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the nome column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNome('fooValue');   // WHERE nome = 'fooValue'
	 * $query->filterByNome('%fooValue%'); // WHERE nome LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nome The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByNome($nome = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nome)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nome)) {
				$nome = str_replace('*', '%', $nome);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::NOME, $nome, $comparison);
	}

	/**
	 * Filter the query on the cognome column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCognome('fooValue');   // WHERE cognome = 'fooValue'
	 * $query->filterByCognome('%fooValue%'); // WHERE cognome LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cognome The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByCognome($cognome = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cognome)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cognome)) {
				$cognome = str_replace('*', '%', $cognome);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::COGNOME, $cognome, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
	 * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $username The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
	 * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $password The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ClientePeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket $ticket  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByTicket($ticket, $comparison = null)
	{
		if ($ticket instanceof Ticket) {
			return $this
				->addUsingAlias(ClientePeer::ID, $ticket->getClienteId(), $comparison);
		} elseif ($ticket instanceof PropelCollection) {
			return $this
				->useTicketQuery()
					->filterByPrimaryKeys($ticket->getPrimaryKeys())
				->endUse();
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
	 * @return    ClienteQuery The current query, for fluid interface
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
	 * Filter the query by a related Areacliente object
	 *
	 * @param     Areacliente $areacliente  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function filterByAreacliente($areacliente, $comparison = null)
	{
		if ($areacliente instanceof Areacliente) {
			return $this
				->addUsingAlias(ClientePeer::ID, $areacliente->getClienteId(), $comparison);
		} elseif ($areacliente instanceof PropelCollection) {
			return $this
				->useAreaclienteQuery()
					->filterByPrimaryKeys($areacliente->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAreacliente() only accepts arguments of type Areacliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Areacliente relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function joinAreacliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Areacliente');
		
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
			$this->addJoinObject($join, 'Areacliente');
		}
		
		return $this;
	}

	/**
	 * Use the Areacliente relation Areacliente object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AreaclienteQuery A secondary query class using the current class as primary query
	 */
	public function useAreaclienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAreacliente($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Areacliente', 'AreaclienteQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Cliente $cliente Object to remove from the list of results
	 *
	 * @return    ClienteQuery The current query, for fluid interface
	 */
	public function prune($cliente = null)
	{
		if ($cliente) {
			$this->addUsingAlias(ClientePeer::ID, $cliente->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseClienteQuery
