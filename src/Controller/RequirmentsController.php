<?php

/**

 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)

 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)

 *

 * Licensed under The MIT License

 * For full copyright and license information, please see the LICENSE.txt

 * Redistributions of files must retain the above copyright notice.

 *

 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)

 * @link      https://cakephp.org CakePHP(tm) Project

 * @since     0.2.9

 * @license   https://opensource.org/licenses/mit-license.php MIT License

 */

namespace App\Controller;



use Cake\Core\Configure;

use Cake\Network\Exception\ForbiddenException;

use Cake\Network\Exception\NotFoundException;

use Cake\View\Exception\MissingTemplateException;

use Cake\Event\Event;

use App\View\Helper\GetInfoHelper;

/**

 * Static content controller

 *

 * This controller will render views from Template/Pages/

 *

 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html

 */

class RequirmentsController extends AppController
{

	

	public function initialize()
	{

		parent::initialize();
	    
		$this->product_file_path = WWW_ROOT . 'img' .DS. 'Products' . DS;
	}

	public function beforeFilter(Event $event)
	{

		parent::beforeFilter($event);
		
		$this->loadComponent('Upload');

		$this->Auth->allow(['add','index' ,'detail' ,'searchElement' ,'getLocations']);

		$this->set('title', 'Manage Property');

	}


  public function add(){}
	
	
	
   public function index()
    {}
	



		
			


}

