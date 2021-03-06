<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\Application;

use Nette\Application\UI\Presenter;
use Symfony\Component\EventDispatcher\Event;

class PresenterStartupEvent extends Event
{

	public const NAME = ApplicationEvents::ON_PRESENTER_STARTUP;

	/** @var Presenter */
	private $presenter;

	public function __construct(Presenter $presenter)
	{
		$this->presenter = $presenter;
	}

	public function getPresenter(): Presenter
	{
		return $this->presenter;
	}

}
