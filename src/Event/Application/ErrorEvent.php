<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\Application;

use Nette\Application\Application;
use Symfony\Component\EventDispatcher\Event;
use Throwable;

class ErrorEvent extends Event
{

	public const NAME = ApplicationEvents::ON_ERROR;

	/** @var Application */
	private $application;

	/** @var Throwable */
	private $throwable;

	public function __construct(Application $application, Throwable $throwable)
	{
		$this->application = $application;
		$this->throwable = $throwable;
	}

	public function getApplication(): Application
	{
		return $this->application;
	}

	public function getThrowable(): Throwable
	{
		return $this->throwable;
	}

}
