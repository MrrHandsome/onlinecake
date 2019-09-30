<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\add_customer_model;
use App\user;
use App\cake;
use App\admin_add_product;
use Session;
use App\page;
use Maatwebsite\Excel\Facades\Excel;

class IndexController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //Admin View Customers
    public function view_customer()
    {
        $data['data']=DB::select('select * from users');
        return view('admin/admin_view_customer',$data); 
    }
    //Edit Data into Input Types
    public function edit_data(Request $request,$id){
     
       $data1 = user::select('id','name','admin','email')->where('id',$id)->get();
      
           $id = $data1[0]['id'] ;
           $name = $data1[0]['name'];
           $admin=$data1[0]['admin'];
            $email = $data1[0]['email'];

            
        return view('admin/admin_update_cust',['id'=>$id,'name'=>$name,'admin'=>$admin,'email'=>$email]);
   
    }
    //Admin Update Data of Customer
    public function edit_cust_data(request $request)
    {
        $id =  $request->input('id');
     
        
        $data1 = array(
            
            'name' =>  $request->input('name'),
           
            'email' =>  $request->input('email')
        );
        

        user::where('id',$id)->update($data1);
        return redirect('admin/admin_view_customer');
    }
    //Admin Delete Customers
    public function delete_customer($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect('admin/admin_view_customer');
    }
    //Admin View Cakes
    public function view_cake()
    {
        $data['data']=DB::select('select * from cakes');
        return view('admin/admin_view_product',$data); 
    }
    //Admin Edit Cakes
    public function edit_cake(Request $request,$cake_id){
     
       
        $data1 = cake::select('cake_id','cake_name','cake_type','cake_price' )->where('cake_id',$cake_id)->get();
      
           $cake_id = $data1[0]['cake_id'] ;
           $cake_name = $data1[0]['cake_name'];
          $cake_type = $data1[0]['cake_type'];
          $cake_price = $data1[0]['cake_price'];

        return view('admin/admin_update_cake',['cake_id'=>$cake_id,'cake_name'=>$cake_name,'cake_type'=>$cake_type,'cake_price'=>$cake_price]);
     
    }
    //Admin Update Cakes
    public function edit_cake_data(request $request)
    {
     
        $cake_id =  $request->input('cake_id');
       
        
        $data2 = array(
            
            'cake_name' =>  $request->input('cake_name'),
            'cake_type' =>  $request->input('cake_type'),
            'cake_price' =>  $request->input('cake_price')
        );
        
    

        cake::where('cake_id',$cake_id)->update($data2);
        return redirect('admin/admin_view_product');
       
    }
    //Admin Delete Cakes
    protected function delete_cake($cake_id){
        DB::delete('delete from cakes where cake_id = ?',[$cake_id]);
        return redirect('admin/admin_view_product');
    }
   
    //Admin Add Product
    public function add_product(Request $request)
    {
   
        $cakes =  new admin_add_product;
        
        $image = $request->file('cake_image');
        $name = str_slug($request->cake_name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $cakes->cake_image = $name;

        $cakes->cake_name = $request->input('cake_name');
        $cakes->cake_type = $request->input('cake_type');
        $cakes->cake_price = $request->input('cake_price');
        $cakes->save();
        
       
        return redirect('admin\admin_view_product');
    }
    public function retrivedata()
    {
    
        $cakes =   admin_add_product::all();
        return view('user\shop',['cakes'=>$cakes]);
    }
    public function uploadFile(Request $request){

        if($request->input('submit')!=null){
            $file=$request->file('file');

            //file details
            $filename=$file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $tempPath=$file->getRealPath();
            $fileSize=$file->getSize();
            $mimeType=$file->getMimeType();

            //valid file extensions
            $valid_extension=array('csv');

            //2MB in bytes
            $maxFileSize=2097152;

            //check file extensions
            if(in_array(strtolower($extension),$valid_extension)){
                //check file size
                if($fileSize<=$maxFileSize){
                    //file upload location
                    $location='uploads';

                    //upload file
                    $file->move($location,$filename);

                    //import csv to database
                    $filepath=public_path($location."/".$filename);

                    //reading file

                    $file=fopen($filepath,"r");

                    $importData_arr=array();
                    $i=0;
                    while(($filedata=fgetcsv($file,1000,","))!=FALSE){
                        $num=count($filedata);
                        //skip first row
                        for($c=0;$c<$num;$c++){
                            $importData_arr[$i][]=$filedata[$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    //insert into mysql database
                    foreach($importData_arr as $importData){
                        $insertData=array(
                            "cake_name"=>$importData[0],
                            "cake_type"=>$importData[1],
                            "cake_price"=>$importData[2],
                            "cake_image"=>$importData[3],
                        );
                        
                        page::insertData($insertData);
                    }
                    Session::flash('message','Import Successfully');
                }
                else{
                    Session::flash('message','file to large must be less then 2 MB');
                }
               
            }
            else{
                Session::flash('message','Invalid File Extension');
            }

        }
        //redirect to 
        return redirect('admin/admin_view_product');
    }
    public function view_res()
    {
        $data['data']=DB::select('select * from contactus');
        return view('admin/admin_view_response',$data); 
    }
    public function delete_res($id)
    {
        DB::delete('delete from contactus where id = ?',[$id]);
        return redirect('admin/admin_view_response');
    }
    
    public function export()
    {
        return Excel::download(new UsersExport(),'product.csv');
        return redirect('admin/admin_view_proudct');
        
    }


}
