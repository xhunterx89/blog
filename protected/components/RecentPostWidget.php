<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RecentPostWidget extends CWidget
{
    public function run() {
        $models = Post::model()->findAll(array(
                "order" => "id DESC",
                "limit" => 5,
        ));

        $this->render('recentpost', array(
            'models'=>$models   
        ));
    }
}
