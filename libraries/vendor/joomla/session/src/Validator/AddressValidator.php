<?php
/**
 * Part of the Joomla Framework Session Package
 *
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Session\Validator;

use Joomla\Input\Input;
use Joomla\Session\Exception\InvalidSessionException;
use Joomla\Session\SessionInterface;
use Joomla\Session\ValidatorInterface;

/**
 * Interface for validating a part of the session
 *
 * @since  2.0.0-beta
 */
class AddressValidator implements ValidatorInterface
{
	/**
	 * The Input object.
	 *
	 * @var    Input
	 * @since  2.0.0-beta
	 */
	private $input;

	/**
	 * The session object.
	 *
	 * @var    SessionInterface
	 * @since  2.0.0-beta
	 */
	private $session;

	/**
	 * Constructor
	 *
	 * @param   Input             $input    The input object
	 * @param   SessionInterface  $session  DispatcherInterface for the session to use.
	 *
	 * @since   2.0.0-beta
	 */
	public function __construct(Input $input, SessionInterface $session)
	{
		$this->input   = $input;
		$this->session = $session;
	}

	/**
	 * Validates the session
	 *
	 * @param   boolean  $restart  Flag if the session should be restarted
	 *
	 * @return  void
	 *
	 * @since   2.0.0-beta
	 * @throws  InvalidSessionException
	 */
	public function validate(bool $restart = false): void
	{
		if ($restart)
		{
			$this->session->set('session.client.address', null);
		}

		$remoteAddr = $this->input->server->getString('REMOTE_ADDR', '');

		// Check for client address
		if (!empty($remoteAddr) && filter_var($remoteAddr, FILTER_VALIDATE_IP) !== false)
		{
			$ip = $this->session->get('session.client.address');

			if ($ip === null)
			{
				$this->session->set('session.client.address', $remoteAddr);
			}
			elseif ($remoteAddr !== $ip)
			{
				throw new InvalidSessionException('Invalid client IP');
			}
		}
	}
}
