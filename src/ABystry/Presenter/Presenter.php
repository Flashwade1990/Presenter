<?php 

namespace ABystry\Presenter;

abstract class Presenter
{
	/**
	 * [$entity description]
	 * @var [type]
	 */
	protected $entity;

	/**
	 * [__construct description]
	 * @param [type] $entity [description]
	 */
	public function __construct($entity)
	{
		$this->entity = $entity;
	}

	/**
	 * [__get description]
	 * @param  [type] $property [description]
	 * @return [type]       [description]
	 */
	public function __get($property)
	{
		if(method_exists($this, $property)) {
			return $this->{$property}();
		}

		return $this->entity->{$property};
	}
}

?>