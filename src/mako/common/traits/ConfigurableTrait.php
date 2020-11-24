<?php

/**
 * @copyright Frederic G. Østby
 * @license   http://www.makoframework.com/license
 */

namespace mako\common\traits;

/**
 * Configurable trait.
 *
 * @author Frederic G. Østby
 */
trait ConfigurableTrait
{
	/**
	 * Name of the default connection.
	 *
	 * @var string
	 */
	protected $default;

	/**
	 * Configurations.
	 *
	 * @var array
	 */
	protected $configurations;

	/**
	 * Constructor.
	 *
	 * @param string $default        Default connection name
	 * @param array  $configurations Configurations
	 */
	public function __construct(string $default, array $configurations)
	{
		$this->default = $default;

		$this->configurations = $configurations;
	}

	/**
	 * Adds a configuration.
	 *
	 * @param string $name          Connection name
	 * @param array  $configuration Configuration
	 */
	public function addConfiguration(string $name, array $configuration): void
	{
		$this->configurations[$name] = $configuration;
	}

	/**
	 * Removes a configuration.
	 * It will also remove any active connection linked to the configuration.
	 *
	 * @param string $name Connection name
	 */
	public function removeConfiguration(string $name): void
	{
		unset($this->configurations[$name]);
	}
}
