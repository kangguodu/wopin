<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    public function getCatGoods(Request $request){
        $per_page = $request->get('per_page',100);
        $cat_id1 = $request->get('cat_id1',1);
        $result = $this->getGoods($cat_id1,$per_page);
        $goods = collect($result->items());
        $cat = $this->getCatInfoById($cat_id1);
        $category = $this->getCat();
        return view('category',['goods'=>$goods,'cat'=>$cat,'category'=>$category]);
    }

    public function getGoods($cat_id1,$per_page){
        $list = DB::table('goods')->where('is_onsale','=',1)
            ->where('checked','=',1);
       if($cat_id1){
            $list->where('cat_id_1','=',$cat_id1);
        }

        return $list->select([
            'goods.id',
            'goods_name',
            'tiny_name',
            'hd_thumb_url',
            'image_url',
            'prom_price',
            'sold_quantity',
            'market_price'
        ])
            ->orderBy('sold_quantity','DESC')
            ->paginate($per_page);
    }

    public function getCatInfoById($cat_id){
        return DB::table('goods_categories')->where('id',$cat_id)->select([
            'id',
            'cat_name',
            'cat_desc',
            'img'
        ])
            ->first();
    }

    public function getCat(){
    	return DB::table('goods_categories')->where('parent_id',0)->select([
		            'id',
		            'cat_name',
		        ])
		        ->get();
    }

}
