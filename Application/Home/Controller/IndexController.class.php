<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$category = M('Category');
    	
    	//导航菜单
    	$map['custom_id'] = C('CUSTOM_ID');
    	$map['pid']=0;
    	$map['category_type'] = 1;
    	$map['area'] = 'index';
    	$menu = $category->where($map)->order('no asc')->select();
    	foreach ($menu as $n=>$val){
    		$menu[$n]['voo']=$category->where('pid='.$val['id'])->order('no asc')->select();
    	}
    	
    	//栏目介绍
        $this->assign('menu',$menu);
        $this ->show();
    }
}