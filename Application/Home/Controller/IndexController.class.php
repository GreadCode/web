<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$category = M('Category');
    	
    	//导航菜单
    	$menu = $category->where('custom_id = '.C('CUSTOM_ID').' and pid=0 and category_type= 1 and area=\'index\'')->order('no asc')->select();
    	foreach ($menu as $n=>$val){
    		$menu[$n]['voo']=$category->where('pid='.$val['id'])->order('no asc')->select();
    	}
    	
    	//栏目介绍
        $this->assign('menu',$menu);
        $this ->show();
    }
}