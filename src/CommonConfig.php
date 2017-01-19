<?php
namespace GCWorld\Interfaces;

/**
 * Interface CommonConfig
 * DEPRECATED
 * 
 * @package GCWorld\Interfaces
 */
Interface CommonConfig
{
	/**
	 * @return array
	 */
	public function configDB();

	/**
	 * @return array
	 */
	public function configCache();

	/**
	 * @return string
	 */
	public function configRoot();

	/**
	 * @return string
	 */
	public function configDomain();

	/**
	 * @return string
	 */
	public function configWebRoot();

}
