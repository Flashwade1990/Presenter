<?php 

namespace ABystry\Presenter;

use ABystry\Presenter\Exceptions\PresenterException;

trait PresentableTrait
{
	protected $presenterInstance;

	/**
	 * [present description]
	 * @return [type] [description]
	 */
	public function present()
	{
		if(!$this->presenter || !class_exists($this->presenter)) {
			throw new PresenterException('Please set the $protected property to your presenter path.');
		}

		if(!$this->presenterInstance) {
			$this->presenterInstance = new $this->presenter($this);
		}

		return $this->presenterInstance;
	}
}

?>