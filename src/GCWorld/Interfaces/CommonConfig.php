<?php
namespace GCWorld\Interfaces;

Interface CommonConfig
{
	/**
	 * @return array
	 */
	public function configDB();

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
