<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class CategoriesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index(){
        $categories = TableRegistry::get('Categories');
        if($this->request->env('REQUEST_METHOD') == 'POST'){
            $category = $categories->newEntity($this->request->data());
            $categories->save($category);
        }
        $categorylist = $categories->find();
        $this->set('categories', $categorylist);
    }
    
    public function view(){
        // Se nao for passado o id, redireciona para o index
        if($this->request->pass == null){
            return $this->redirect(['controller' => 'Categories', 'action' => 'index']);
        }
        $mimics = TableRegistry::get('Mimics');
        $categories = TableRegistry::get('Categories');
        if($this->request->env('REQUEST_METHOD') == 'POST'){
            $mimic = $mimics->newEntity($this->request->data());
            $mimic->categories_id = $this->request->pass;
            $mimics->save($mimic);
        }
        $category = $categories->find('all')->where(['Categories.id'  => $this->request->pass[0]]);
        $this->set('categories', $category);
        $mimiclist = $mimics->find('all')->where(['Mimics.categories_id' => $this->request->pass[0]]);
        $this->set('mimics', $mimiclist);
    }
    
}
