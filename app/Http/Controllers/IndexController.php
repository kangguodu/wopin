<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index(Request $request){
    	$goods = $this->getGoods();
        $cat = $this->getCat();
        $result = $this->merge($goods,$cat);

    	return view('index',['data'=>$result]);
    }

    public function getGoods(){

       return \DB::select("select id,cat_id_1,goods_name,hd_thumb_url,sold_quantity,market_price,prom_price from `goods` where `goods`.`is_onsale` = 1 and `goods`.`checked` = 1 and (select count(*) from goods as f where f.cat_id_1 = goods.cat_id_1 and f.id <= goods.id) <= 3 order by sold_quantity desc");
    }

    public function getCat(){
        return DB::table('goods_categories')->where(['parent_id'=>0])->select('id','cat_name','img')->get();
    }

    public function merge($goods,$cat){
        if($cat){
            foreach ($cat as $v){
                if($goods){
                    $ary = [];
                    foreach ($goods as $value){
                        if($value->cat_id_1 == $v->id){
                            $ary[] = $value;
                        }
                    }
                    $v->goods = $ary;
                }else{
                    $v->goods = [];
                }

            }
        }
        return $cat;
    }
}
