<?php

namespace App\Http\Controllers\user;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cart;
use App\user;
use Hash;
use App\contact;
use App\cake;
use Auth;
use DB;


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
        return view('/user/index');
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
    //user cart 
    public function add_cart(Request $request,$id,$cake_id,$cake_name,$cake_type,$cake_price,$cake_image)
    {
      
        
       
        if(cart::where('id',$id)->exists()){
            if(cart::where('cake_id',$cake_id)->exists()){
                cart::select('cake_qty')->where('cake_id',$cake_id)->increment('cake_qty',1);
            }
            else{
                
                $post= cart::create([
                    "id"=>$request["id"],
                    "cake_id"=>$request["cake_id"],
                     "cake_name"=>$request["cake_name"],
                     "cake_type"=>$request["cake_type"],
                   "cake_price"=>$request["cake_price"],
                   "cake_image"=>$request["cake_image"],
                   "cake_qty"=>"1",
                  
              ]);
             

            }
            $f=$this->view_cart($id);
            
          
            return redirect('user\shop');
        }
        else{
            $post= cart::create([
                "id"=>$request["id"],
                "cake_id"=>$request["cake_id"],
                 "cake_name"=>$request["cake_name"],
                 "cake_type"=>$request["cake_type"],
               "cake_price"=>$request["cake_price"],
               "cake_image"=>$request["cake_image"],
               "cake_qty"=>"1",
              
          ]);
         // $f=$this->view_cart($id);
          return redirect('user\shop');

        }
       
      
      

    }
    public function view_cart()
    {
         $id= Auth::user()->id ;
        
      
       
         
        $data1['data1'] = cart::select('cart_id','id','cake_id','cake_name','cake_type','cake_price','cake_image','cake_qty')->where('id',$id)->get();
       
        return view('user/cart',$data1);

  
    }
    public function remove_cart_product(Request $request,$cake_id)
    {

        DB::delete('delete from carts where cake_id = ?',[$cake_id]);
        return redirect('user/cart');
    }
  
    public function update_cart(Request $request)
    {
        $name=$request->process;
        $name1=$request->update;
        if($name=="process")
        {
            return redirect('user/checkout');
        }
        if($name1=="update")
        {
            
            
        $cake_id= $request->input('cake_id');
        
        $cake_qty= $request->input('cake_qty');
        $data1=array(
            'cake_qty'=>$request->input('cake_qty')
            
            
            );
          
           
            cart::where('cake_id',$cake_id)->update($data1);
            return redirect('user/cart');
        }

    }
    public function add_contact(Request $request){
       
        $cu =  new contact;
        $id=Auth::user()->id;
        $cu->id = $id;
        $cu->name = $request->input('name');
        $cu->email = $request->input('email');
        $cu->phone = $request->input('phone');
        $cu->message = $request->input('message');
        
        $cu->save();

        return redirect('user/contact');
    }
    //update profile
    public function edit_data(Request $request,$id){
       
       
        
        $data1 = user::select('id','name','admin','email')->where('id',$id)->get();
       
            $id = $data1[0]['id'] ;
            $name = $data1[0]['name'];
            $admin=$data1[0]['admin'];
             $email = $data1[0]['email'];
 
             
         return view('user/myprofile',['id'=>$id,'name'=>$name,'admin'=>$admin,'email'=>$email]);
        
       
    
     }
    
     public function edit_user_data(request $request)
     {
        
            $id =  Auth::user()->id;
        
        
            $data1 = array(
                
                 'name' =>  $request->input('name'),
               
                'email' =>  $request->input('email')
            );
          
    
            user::where('id',$id)->update($data1);
            return view('user/index');
        
        
        
     }
     
     //single product
     public function single_product(Request $request,$name)
     {
        $data1 = cake::select('cake_id','cake_name','cake_type','cake_price','cake_image' )->where('cake_name',$name)->get();
      
           $cake_id = $data1[0]['cake_id'] ;
           $cake_name = $data1[0]['cake_name'];
          $cake_type = $data1[0]['cake_type'];
          $cake_price = $data1[0]['cake_price'];
          $cake_image=$data1[0]['cake_image'];

        return view('user/single_product',['cake_id'=>$cake_id,'cake_name'=>$cake_name,'cake_type'=>$cake_type,'cake_price'=>$cake_price,'cake_image'=>$cake_image]);
     }

     public function ac(Request $request,$id,$cake_id,$cake_name,$cake_type,$cake_price,$cake_image)
     {
       
         
        
         if(cart::where('id',$id)->exists()){
             if(cart::where('cake_id',$cake_id)->exists()){
                 cart::select('cake_qty')->where('cake_id',$cake_id)->increment('cake_qty',1);
             }
             else{
                 
                 $post= cart::create([
                     "id"=>$request["id"],
                     "cake_id"=>$request["cake_id"],
                      "cake_name"=>$request["cake_name"],
                      "cake_type"=>$request["cake_type"],
                    "cake_price"=>$request["cake_price"],
                    "cake_image"=>$request["cake_image"],
                    "cake_qty"=>"1",
                   
               ]);
              
 
             }
             $f=$this->vc($id);
             
           
             return redirect('user\shop');
         }
         else{
             $post= cart::create([
                 "id"=>$request["id"],
                 "cake_id"=>$request["cake_id"],
                  "cake_name"=>$request["cake_name"],
                  "cake_type"=>$request["cake_type"],
                "cake_price"=>$request["cake_price"],
                "cake_image"=>$request["cake_image"],
                "cake_qty"=>"1",
               
           ]);
          // $f=$this->view_cart($id);
           return redirect('user\shop');
 
         }
        
        
       
       
 
     }
     public function vc()
     {
          $id= Auth::user()->id ;
         
       
        
          
         $data1['data1'] = cart::select('cart_id','id','cake_id','cake_name','cake_type','cake_price','cake_image','cake_qty')->where('id',$id)->get();
        
         return view('user/cart',$data1);
 
   
     }
     //add data into order table
     public function process(Request $request)
     {
        
        return view('user/checkout');

     }
     //change password
     public function cp(Request $request)
     {
        
       $id=Auth::user()->id;
       $old_ps=user::select('password')->where('id',$id)->get();
       $check=bcrypt('$old_ps');
       $c1=$request->input('name');
       $m1=Hash::make($c1);
   
       
     }
   
     //pkb change password
     public function change_pass(Request $request)
     {
        $user=Auth::user();
        $op=$request->op;
        $np=$request->np;
        $cnp=$request->cnp;

        if(HASH::check($op,$user->password)){
            if($np==$cnp){
                $data=[
                    'password'=>Hash::make($np)
                ];
                $user=DB::table('users')->where('id','=',Auth::user()->id)->update($data);
            }else{
                dd("Pass Not Same");
            }
        }else{
            dd("Not Changed.");
        }
        return redirect('user\myprofile');
        

     }
     


    
   

   

 }





