<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use Picture;
use Exception;
use DataTables;
use CreateAppLog;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    #Bind the view
    protected $view = "admin.order";

    #Bind Model Order
    protected $order;


    #Bind Model OrderDetail
    protected $orderDetail;

    #Bind Model Product
    protected $product;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Product $product, Order $order, OrderDetail $orderDetail)
    {
        $this->order       = $order;
        $this->product     = $product;
        $this->orderDetail = $orderDetail;
    }

    /**
     * @method
     * @param 
     * @return
     */
    public function index(Request $request)
    {
        try{
            if($request->ajax()){
                $order  = $this->order->with(['addedBy'])->select('*');
                return Datatables::of($order)->addIndexColumn()
                                                ->addColumn('action', function($row){
                                                })->rawColumns(['action'])
                                                ->make(true);
            }else{
                return view($this->view.'.orders');
            }
        }catch(Exception $e){
            CreateAppLog::getErrorLog("Order list requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method
     * @param 
     * @return
     */
    public function orderDetail($slug)
    {
        return view($this->view.'.order_detail');
    }

    /**
     * @method
     * @param 
     * @return
     */
    public function orderProformaInvoice($slug)
    {
        return view($this->view.'.index');
    }

    /**
     * @method
     * @param 
     * @return
     */
    public function images()
    {
        return view($this->view.'.index');
    }

    /**
     * @method
     * @param 
     * @return
     */
    public function imagesPost(Request $request)
    {
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $data = [];
            foreach ($images as $image) {
                // Process each image here
                $data[]  = $image;
                
            }
            dd($data);
            return "Images uploaded successfully.";
        } else {
            return "No images were uploaded.";
        }
    }

}
