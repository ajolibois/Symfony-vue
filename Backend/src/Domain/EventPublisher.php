<?php

namespace App\Domain;

interface EventPublisher
{
	/**
	 * @param Event ...$event
	 */
	public function publish(Event ...$event): void;
}
