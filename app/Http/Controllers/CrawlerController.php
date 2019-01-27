<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use emanueleminotto;
use App\Crawler;
use Helper;
use Validator;
use Yajra\Datatables\Datatables;
use App\Report;
use Carbon\Carbon;
class CrawlerController extends Controller
{
    //

      function index()
    {
        
    $heading  = ['id','title','price','created','action'];
        $pages = Helper::MakeTableView('products');
        $table = Helper::TableHeading($heading);
        return view('crawler.index',['heading'=>$heading,'page'=>$pages,'table'=>$table]);
    }

    function store(Request $request){

    $validator = Validator::make($request->all(), [
        'url' => 'required|unique:products|url',
    ]
     );
                if($validator->fails()) 
                {
                return response()->json(['errors'=>$validator->errors()->all()]);  
                } 

                $str1 = str_replace('Rp','', $request->price);
                $str2 = str_replace('.','', $str1);

               // return number_format($str2, 0, '', '.');

        $data = new Crawler;
        $data->url = $request->url;
        $data->title = $request->title;
        $data->price = number_format($str2, 0, '', '.');
        $data->desc = $request->desc;
        $data->save();
       return response()->json(['success'=>'Record Added']);
    }


    function load(Request $request)
    {
                    $articles = [];

    	            $curl = curl_init();
                    curl_setopt($curl, CURLOPT_HEADER, 0);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($curl, CURLOPT_URL,$request->url);
                    $html=curl_exec($curl);
                  
                    $dom = new \simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);
                    $html=$dom->load($html, true, true);




                        $avalable = ($html->find('.product-info-main', 0)) ? 1 : 0;


                        if($avalable == 1){

                                            foreach($html->find('.page-wrapper') as $products) 
                                            {


                                                if(($products->find('.price-final_price .price',0)->plaintext)) 
                                                {
                                                $item['price']     = $products->find('.price-final_price .price',0)->plaintext;
                                                }else{
                                                $item['price'] = '';
                                                }

              $desc  =   $avalable = ($html->find('#description p', 0)) ? 1 : 0;


if($desc == 1){

                                                if(($products->find('#description p',0)->plaintext)) {
                                                     $item['desc']    = $products->find('#description p',0)->plaintext;
                                                }
                                                else if(($products->find('#description p',1)->plaintext)){

                                                    $item['desc']    = $products->find('#description p',1)->plaintext;

                                                }


}
                                                else{
                                                    $item['desc']    = '';
                                                }
                                                

                                                 if(($products->find('.product-info-main .page-title',0)->plaintext)) {
                                                    $item['title'] =  $products->find('.product-info-main .page-title',0)->plaintext;
                                                 }
                                                 else{
                                                    $item['title'] = '';
                                                 }

                            $product = $item;
                                            }
                                        }
                        else{
                        return response()->json(['code'=>400,'message'=>"invaild page"]);
                        }

             return response()->json(['code'=>200,'price'=>$product['price'],'title'=>$product['title'],'desc'=>$product['desc']]);     
             	
             
          	
        }



      function table_list()
      {
            $data = Crawler::get(['title','price','created_at as created','id']);
            return Datatables::of($data)
            ->rawColumns(['action'])
            ->addColumn('action', function ($data) {
                return '<a data-act="ajax-modal"  data-id="'.$data->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> view</a> 
                <a data-act="ajax-modal-del" data-id="'.$data->id.'" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-edit" ></i> Delete</a>';
            })
         ->editColumn('id', 'ID: {{$id}}')
        ->make(true);
        
        }

              function table_list_price($id)
      {
            $data = Report::where('product_id',$id)->get(['price','date','time']);

            return Datatables::of($data)
                    ->make(true);
        
        }






        

        function get_report($id){

            $data = Crawler::where('id',$id)->first();
            $item = "";

                    $articles = [];
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_HEADER, 0);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($curl, CURLOPT_URL,$data->url);
                    $html=curl_exec($curl);
                  
                    $dom = new \simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);
                    $html=$dom->load($html, true, true);

                    $avalable = ($html->find('.product-info-main', 0)) ? 1 : 0;

                    if($avalable == 1){

                        $arElements = $html->find( "meta[property=og:image]" );
                     $item  = $arElements[0]->content;

                                        

        }

//return $item;


               return response()->json(['html'=>$data,'image'=>$item]);    

        }

       function  get_report_price($id){


                        $dataz = Report::where('product_id',$id)->get();
                        foreach($dataz as $d){
                        //return date('d-m-Y', strtotime($d->created_at));

                            $str1 = str_replace('Rp','', $d->price);
                            $str2 = str_replace('.','', $str1);

                            $data[] = array('units'=>(int)$str2,'date'=>strtotime($d->created_at));
                        }

                    $dt = Carbon::now();
//  return $dt->isoFormat('y-m-d');
//return $dt->format('Y-m-d H:i:s');

         return response()->json($data);
      //   return $data;               
       }

        function drop($id){
                        $data = Crawler::find($id);
                        $data->delete();
  
            return response()->json(['success'=>'Data Recorded']);              
        }
        function cron(Request $request){

            if($request->id){
                

            $r = Crawler::where('id',$request->id)->get();

                    if(count($r) == 0){
                     return response()->json(['status'=>'304']);  
                     }
            }else{

                        $r = Crawler::all();
            }
                       
                        foreach ($r as $key => $value) {
                                

                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_HEADER, 0);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($curl, CURLOPT_URL,$value->url);
                    $html=curl_exec($curl);
                    $dom = new \simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);
                    $html=$dom->load($html, true, true);
                    $avalable = ($html->find('.product-info-main', 0)) ? 1 : 0;
                    if($avalable == 1)
                    {
                     foreach($html->find('.page-wrapper') as $products) 
                    {
                        if(($products->find('.price-final_price .price',0)->plaintext)) 
                        {
                        $item['price']     = $products->find('.price-final_price .price',0)->plaintext;
                        }else{
                        $item['price'] = '';
                        }
                        $product = $item;
                    }

                        if($product['price'] != ''){

                                $str1 = str_replace('Rp','', $product['price']);
                                $str2 = str_replace('.','', $str1);
                              //  return number_format($str2, 0, '', '.');


                                $report = new Report;
                                $report->price =  $str1;
                                $report->product_id = $value->id;
                                $report->date = Carbon::now();
                                $report->time = Carbon::now();
                                $report->save();
                         }

                    }
        }
    }

}