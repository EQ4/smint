<?php

/**
 * Base class that represents a row from the 'filedesc' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed May 30 15:27:45 2012
 *
 * @package    lib.model.metadata.om
 */
abstract class BaseFiledesc extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        FiledescPeer
	 */
	protected static $peer;

	/**
	 * The value for the tracknr field.
	 * @var        string
	 */
	protected $tracknr;

	/**
	 * The value for the performers field.
	 * @var        string
	 */
	protected $performers;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the version field.
	 * @var        string
	 */
	protected $version;

	/**
	 * The value for the genre field.
	 * @var        string
	 */
	protected $genre;

	/**
	 * The value for the subgenre field.
	 * @var        string
	 */
	protected $subgenre;

	/**
	 * The value for the tempo field.
	 * @var        string
	 */
	protected $tempo;

	/**
	 * The value for the bpm field.
	 * @var        int
	 */
	protected $bpm;

	/**
	 * The value for the leadvocalgender field.
	 * @var        string
	 */
	protected $leadvocalgender;

	/**
	 * The value for the instruments field.
	 * @var        string
	 */
	protected $instruments;

	/**
	 * The value for the moods field.
	 * @var        string
	 */
	protected $moods;

	/**
	 * The value for the situations field.
	 * @var        string
	 */
	protected $situations;

	/**
	 * The value for the genre_sm field.
	 * @var        string
	 */
	protected $genre_sm;

	/**
	 * The value for the genre_sm2 field.
	 * @var        string
	 */
	protected $genre_sm2;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'FiledescPeer';

	/**
	 * Get the [tracknr] column value.
	 * 
	 * @return     string
	 */
	public function getTracknr()
	{
		return $this->tracknr;
	}

	/**
	 * Get the [performers] column value.
	 * 
	 * @return     string
	 */
	public function getPerformers()
	{
		return $this->performers;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [version] column value.
	 * 
	 * @return     string
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * Get the [genre] column value.
	 * 
	 * @return     string
	 */
	public function getGenre()
	{
		return $this->genre;
	}

	/**
	 * Get the [subgenre] column value.
	 * 
	 * @return     string
	 */
	public function getSubgenre()
	{
		return $this->subgenre;
	}

	/**
	 * Get the [tempo] column value.
	 * 
	 * @return     string
	 */
	public function getTempo()
	{
		return $this->tempo;
	}

	/**
	 * Get the [bpm] column value.
	 * 
	 * @return     int
	 */
	public function getBpm()
	{
		return $this->bpm;
	}

	/**
	 * Get the [leadvocalgender] column value.
	 * 
	 * @return     string
	 */
	public function getLeadvocalgender()
	{
		return $this->leadvocalgender;
	}

	/**
	 * Get the [instruments] column value.
	 * 
	 * @return     string
	 */
	public function getInstruments()
	{
		return $this->instruments;
	}

	/**
	 * Get the [moods] column value.
	 * 
	 * @return     string
	 */
	public function getMoods()
	{
		return $this->moods;
	}

	/**
	 * Get the [situations] column value.
	 * 
	 * @return     string
	 */
	public function getSituations()
	{
		return $this->situations;
	}

	/**
	 * Get the [genre_sm] column value.
	 * 
	 * @return     string
	 */
	public function getGenreSm()
	{
		return $this->genre_sm;
	}

	/**
	 * Get the [genre_sm2] column value.
	 * 
	 * @return     string
	 */
	public function getGenreSm2()
	{
		return $this->genre_sm2;
	}

	/**
	 * Set the value of [tracknr] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setTracknr($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tracknr !== $v) {
			$this->tracknr = $v;
			$this->modifiedColumns[] = FiledescPeer::TRACKNR;
		}

		return $this;
	} // setTracknr()

	/**
	 * Set the value of [performers] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setPerformers($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->performers !== $v) {
			$this->performers = $v;
			$this->modifiedColumns[] = FiledescPeer::PERFORMERS;
		}

		return $this;
	} // setPerformers()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = FiledescPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [version] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setVersion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->version !== $v) {
			$this->version = $v;
			$this->modifiedColumns[] = FiledescPeer::VERSION;
		}

		return $this;
	} // setVersion()

	/**
	 * Set the value of [genre] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setGenre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->genre !== $v) {
			$this->genre = $v;
			$this->modifiedColumns[] = FiledescPeer::GENRE;
		}

		return $this;
	} // setGenre()

	/**
	 * Set the value of [subgenre] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setSubgenre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subgenre !== $v) {
			$this->subgenre = $v;
			$this->modifiedColumns[] = FiledescPeer::SUBGENRE;
		}

		return $this;
	} // setSubgenre()

	/**
	 * Set the value of [tempo] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setTempo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tempo !== $v) {
			$this->tempo = $v;
			$this->modifiedColumns[] = FiledescPeer::TEMPO;
		}

		return $this;
	} // setTempo()

	/**
	 * Set the value of [bpm] column.
	 * 
	 * @param      int $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setBpm($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->bpm !== $v) {
			$this->bpm = $v;
			$this->modifiedColumns[] = FiledescPeer::BPM;
		}

		return $this;
	} // setBpm()

	/**
	 * Set the value of [leadvocalgender] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setLeadvocalgender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->leadvocalgender !== $v) {
			$this->leadvocalgender = $v;
			$this->modifiedColumns[] = FiledescPeer::LEADVOCALGENDER;
		}

		return $this;
	} // setLeadvocalgender()

	/**
	 * Set the value of [instruments] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setInstruments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->instruments !== $v) {
			$this->instruments = $v;
			$this->modifiedColumns[] = FiledescPeer::INSTRUMENTS;
		}

		return $this;
	} // setInstruments()

	/**
	 * Set the value of [moods] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setMoods($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->moods !== $v) {
			$this->moods = $v;
			$this->modifiedColumns[] = FiledescPeer::MOODS;
		}

		return $this;
	} // setMoods()

	/**
	 * Set the value of [situations] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setSituations($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->situations !== $v) {
			$this->situations = $v;
			$this->modifiedColumns[] = FiledescPeer::SITUATIONS;
		}

		return $this;
	} // setSituations()

	/**
	 * Set the value of [genre_sm] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setGenreSm($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->genre_sm !== $v) {
			$this->genre_sm = $v;
			$this->modifiedColumns[] = FiledescPeer::GENRE_SM;
		}

		return $this;
	} // setGenreSm()

	/**
	 * Set the value of [genre_sm2] column.
	 * 
	 * @param      string $v new value
	 * @return     Filedesc The current object (for fluent API support)
	 */
	public function setGenreSm2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->genre_sm2 !== $v) {
			$this->genre_sm2 = $v;
			$this->modifiedColumns[] = FiledescPeer::GENRE_SM2;
		}

		return $this;
	} // setGenreSm2()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->tracknr = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->performers = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->version = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->genre = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->subgenre = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->tempo = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->bpm = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->leadvocalgender = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->instruments = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->moods = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->situations = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->genre_sm = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->genre_sm2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 14; // 14 = FiledescPeer::NUM_COLUMNS - FiledescPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Filedesc object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FiledescPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = FiledescPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FiledescPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseFiledesc:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				FiledescPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseFiledesc:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FiledescPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseFiledesc:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseFiledesc:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				FiledescPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = FiledescPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setNew(false);
				} else {
					$affectedRows += FiledescPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = FiledescPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FiledescPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTracknr();
				break;
			case 1:
				return $this->getPerformers();
				break;
			case 2:
				return $this->getTitle();
				break;
			case 3:
				return $this->getVersion();
				break;
			case 4:
				return $this->getGenre();
				break;
			case 5:
				return $this->getSubgenre();
				break;
			case 6:
				return $this->getTempo();
				break;
			case 7:
				return $this->getBpm();
				break;
			case 8:
				return $this->getLeadvocalgender();
				break;
			case 9:
				return $this->getInstruments();
				break;
			case 10:
				return $this->getMoods();
				break;
			case 11:
				return $this->getSituations();
				break;
			case 12:
				return $this->getGenreSm();
				break;
			case 13:
				return $this->getGenreSm2();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = FiledescPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTracknr(),
			$keys[1] => $this->getPerformers(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getVersion(),
			$keys[4] => $this->getGenre(),
			$keys[5] => $this->getSubgenre(),
			$keys[6] => $this->getTempo(),
			$keys[7] => $this->getBpm(),
			$keys[8] => $this->getLeadvocalgender(),
			$keys[9] => $this->getInstruments(),
			$keys[10] => $this->getMoods(),
			$keys[11] => $this->getSituations(),
			$keys[12] => $this->getGenreSm(),
			$keys[13] => $this->getGenreSm2(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FiledescPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTracknr($value);
				break;
			case 1:
				$this->setPerformers($value);
				break;
			case 2:
				$this->setTitle($value);
				break;
			case 3:
				$this->setVersion($value);
				break;
			case 4:
				$this->setGenre($value);
				break;
			case 5:
				$this->setSubgenre($value);
				break;
			case 6:
				$this->setTempo($value);
				break;
			case 7:
				$this->setBpm($value);
				break;
			case 8:
				$this->setLeadvocalgender($value);
				break;
			case 9:
				$this->setInstruments($value);
				break;
			case 10:
				$this->setMoods($value);
				break;
			case 11:
				$this->setSituations($value);
				break;
			case 12:
				$this->setGenreSm($value);
				break;
			case 13:
				$this->setGenreSm2($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FiledescPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTracknr($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPerformers($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setVersion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGenre($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSubgenre($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTempo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setBpm($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLeadvocalgender($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setInstruments($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMoods($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSituations($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setGenreSm($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGenreSm2($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(FiledescPeer::DATABASE_NAME);

		if ($this->isColumnModified(FiledescPeer::TRACKNR)) $criteria->add(FiledescPeer::TRACKNR, $this->tracknr);
		if ($this->isColumnModified(FiledescPeer::PERFORMERS)) $criteria->add(FiledescPeer::PERFORMERS, $this->performers);
		if ($this->isColumnModified(FiledescPeer::TITLE)) $criteria->add(FiledescPeer::TITLE, $this->title);
		if ($this->isColumnModified(FiledescPeer::VERSION)) $criteria->add(FiledescPeer::VERSION, $this->version);
		if ($this->isColumnModified(FiledescPeer::GENRE)) $criteria->add(FiledescPeer::GENRE, $this->genre);
		if ($this->isColumnModified(FiledescPeer::SUBGENRE)) $criteria->add(FiledescPeer::SUBGENRE, $this->subgenre);
		if ($this->isColumnModified(FiledescPeer::TEMPO)) $criteria->add(FiledescPeer::TEMPO, $this->tempo);
		if ($this->isColumnModified(FiledescPeer::BPM)) $criteria->add(FiledescPeer::BPM, $this->bpm);
		if ($this->isColumnModified(FiledescPeer::LEADVOCALGENDER)) $criteria->add(FiledescPeer::LEADVOCALGENDER, $this->leadvocalgender);
		if ($this->isColumnModified(FiledescPeer::INSTRUMENTS)) $criteria->add(FiledescPeer::INSTRUMENTS, $this->instruments);
		if ($this->isColumnModified(FiledescPeer::MOODS)) $criteria->add(FiledescPeer::MOODS, $this->moods);
		if ($this->isColumnModified(FiledescPeer::SITUATIONS)) $criteria->add(FiledescPeer::SITUATIONS, $this->situations);
		if ($this->isColumnModified(FiledescPeer::GENRE_SM)) $criteria->add(FiledescPeer::GENRE_SM, $this->genre_sm);
		if ($this->isColumnModified(FiledescPeer::GENRE_SM2)) $criteria->add(FiledescPeer::GENRE_SM2, $this->genre_sm2);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FiledescPeer::DATABASE_NAME);

		$criteria->add(FiledescPeer::TRACKNR, $this->tracknr);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getTracknr();
	}

	/**
	 * Generic method to set the primary key (tracknr column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setTracknr($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Filedesc (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTracknr($this->tracknr);

		$copyObj->setPerformers($this->performers);

		$copyObj->setTitle($this->title);

		$copyObj->setVersion($this->version);

		$copyObj->setGenre($this->genre);

		$copyObj->setSubgenre($this->subgenre);

		$copyObj->setTempo($this->tempo);

		$copyObj->setBpm($this->bpm);

		$copyObj->setLeadvocalgender($this->leadvocalgender);

		$copyObj->setInstruments($this->instruments);

		$copyObj->setMoods($this->moods);

		$copyObj->setSituations($this->situations);

		$copyObj->setGenreSm($this->genre_sm);

		$copyObj->setGenreSm2($this->genre_sm2);


		$copyObj->setNew(true);

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Filedesc Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     FiledescPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new FiledescPeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseFiledesc:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseFiledesc::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseFiledesc
