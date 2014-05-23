<?php namespace Acme\Notifications;

use Illuminate\Session\Store;

class FlashNotifier {

	/**
	 * @var \Illuminate\Session\Store
	 */
	private $session;

	/**
	 * @param Store $session
	 */
	function __construct(Store $session)
	{
		$this->session = $session;
	}

	/**
	 * @param $message
	 */
	public function success($message)
	{
		$this->message($message, 'success');
	}

	/**
	 * @param $message
	 */
	public function error($message)
	{
		$this->message($message, 'danger');
	}

	/**
	 * @param $message
	 */
	public function overlay($message)
	{
		$this->message($message);
		$this->session->flash('flash_notification.overlay', true);
	}

	/**
	 * @param $message
	 * @param string $level
	 */
	public function message($message, $level = 'info')
	{
		$this->session->flash('flash_notification.message', $message);
		$this->session->flash('flash_notification.level', $level);
	}

}