<?php
/**
 * publish.
 *
 * @author        zhangwj<phperweb@vip.qq.com>
 * @copyright     Copyright (c) 2014,RcPHP Dev Team
 */
defined('IN_RCPHP') or exit('Access denied');

class publishController extends Controller
{

	/**
	 * 模板变量
	 *
	 * @var array
	 */
	private $_data = array();

	/**
	 * 继承基类构造方法
	 *
	 * @author zhangwj<phperweb@vip.qq.com>
	 */
	public function __construct()
	{
		parent::__construct();

		F("user", true);

		if(checkLogin() === false)
		{
			$this->redirect("/index.php/account/login");
		}
	}

	/**
	 * 提问题
	 *
	 * @author zhangwj<phperweb@vip.qq.com>
	 */
	public function ask()
	{
		if(Request::post("ask-submit") !== false)
		{
		}
		
		$this->_data['title'] = '认知 - 提出新问题 - 最接地气的开发者技术问答社区';

		$this->_data['js_module'] = "ask";

		$this->assign($this->_data)
			 ->display();
	}
}