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
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        
        $categories = TableRegistry::get('Categories');
        $mimics = TableRegistry::get('Mimics');
        $categorylist = $categories->find('All');
        
        $this->set('categories', $categorylist);
        
        if($this->request->env('REQUEST_METHOD') == 'POST'){
            $chosencategory = $this->request->header('category');
            $mimiclist = $mimics->find()->where(['Mimics.categories_id'  => $chosencategory]);
            $list = array();
            foreach($mimiclist as $mimic){
                array_push($list, array('name' => $mimic->name, 'value' => $mimic->value));
            }
            $k = array_rand($list);
            $l = array_rand($list);
            while($l == $k){
                $l = array_rand($list);
            }
            $chosenmimic = $list[$k];
            $chosenmimic2 = $list[$l];
            die('<td style="text-align:center">Mímica: <b><h2>' . $chosenmimic['name'] . '</b></h2> Valor: <b><h2>' . $chosenmimic['value'] . '</b></h2></td><td style="text-align:center; width:10%"><h1>OU</h1></td><td style="text-align:center"><br>Mímica: <b><h2>' . $chosenmimic2['name'] . '</b></h2> Valor: <b><h2>' . $chosenmimic2['value'] . '</b></h2></td>');
        }
        
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
