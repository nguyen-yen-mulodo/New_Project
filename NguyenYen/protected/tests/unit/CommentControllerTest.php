<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentControllerTest
 *
 * @author nguyenthihaiyen
 */
class CommentControllerTest extends CDbTestCase{
    //put your code here
    public $fixtures = array(
        'comments' => ':tbl_comment'
    );
    
//    public function testSaveModel() {
//// 		echo '<pre>';
//// 		var_dump(self::$id);
//// 		echo '</pre>';die;
//        
//	var_dump($this->comments);
//    }
    
    /**
     * @test
     */
    public function testactionaList(){
        
        $models = Comment::model()->findAll();
        $this->assertTrue(is_array($models) );
        $this->assertTrue(is_array($this->comments) );
        var_dump($models);
//         var_dump($this->comments);
//         $flag = $models == $this->comments?true:false;
//         var_dump($flag);
       //$com = array_diff($models, $this->comments);
       
       // $this->assertTrue($flag);
        
        
    }
    
}

?>
