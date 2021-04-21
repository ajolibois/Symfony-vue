<?php

namespace App\Domain;

abstract class AggregateRoot
{
	/**
	 * @var Event[]
	 */
	private array $events = [];

	/**
	 * @param Event ...$events
	 * @return void
	 */
	protected function record(Event ...$events): void
	{
		foreach ($events as $event) {
			$this->events[] = $event;
		}
	}

	/**
	 * @return Event[]
	 */
	public function pullEvents(): array
	{
		$events = $this->events;
		$this->events = [];
		return $events;
	}
}
