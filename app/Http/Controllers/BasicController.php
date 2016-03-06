<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use Hash;
use DB;

use App\Model\User;

class BasicController extends Controller {

	//
	public function index(){

		return view('pages.index');
	}

	public function about_us(){

		return view('pages.about');
	}

	public function service(){

		return view('pages.service');
	}

	public function portfolio(){

		return view('pages.portfolio');
	}

	public function blog(){

		return view('pages.blog');
	}

	public function contact(){

		return view('pages.contact');
	}

	public function register(){

		return view('pages.register');
	}

	public function register_submit(){

		//receive value from Form
		//echo Request::input('first_name');

		//receive value "ALL" from Form by array
		//echo '<pre>';
		//echo print_r(Request::all());
		//echo '</pre>';
		$messages = [
		'required' => 'ข้อมูล :attribute ยังไม่ได้กรอกข้อมูล',
		'numeric' => 'ข้อมูล :attribute ต้องเป็นตัวเขลเท่านั้น ',
		'digits' => 'ข้อมูล :attribute ต้อง :digits หลัก',
		'unique' => 'มีอีเมลล์นี้ในระบบแล้ว'
		];

		$rules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|unique:users',
		'phone' => 'required|numeric|digits_between:2,10',
		'password' => 'required',
		'password_confirm' => 'required',
		];

		$validator = Validator::make(Request::all(),$rules,$messages); //compaire between Request(all) and $rules

		if($validator->fails())
		{ //fails() is a internal function
			//echo "Validate fail";
			return redirect()->back()->withErrors($validator)->withInput();  //return back to register page if fails
		}
		else
		{
			//echo "OK Pass";
			//User::create(Request::all()); //in case field name and input name as same name
			$data_user = array(
				'firstname' => Request::input('first_name'),
				'lasttname' => Request::input('last_name'),
				'email' => Request::input('email'),
				'tel' => Request::input('phone'),
				'password' => Hash::make(Request::input('password')),
			);
			$insert_user = User::create($data_user);

			if($insert_user->exists())
			{
				return redirect('register')->with('status','<div class="alert alert-success msgbox text-center">Insert Success</div>');
			}
			else
			{
				return redirect('register')->with('status','<div class="alert alert-danger msgbox text-center">Insert Fail!!</div>');
			}
		}
	}


	public function customers_list(){
		//echo '<pre>';
		//print_r(DB::table('customers')->get(['customerName','postalCode']));
		//$data = DB::table('customers')->where('postalCode', '44000')->first();
		//print_r($data);
		//echo '</pre>';

		//$data = DB::table('customers')->get(); //get all
		
		//return view('page.customers_list')->with(array('data_customer'=>$data, 'data_member'=>$data_member));
		$data = DB::table('customers')->paginate(20);
		$data_all = DB::table('customers')->count();
		//return view('pages.customers_list')->with('data_customer',$data);
		return view('pages.customers_list')->with(array('data_customer'=>$data, 'data_count'=>$data_all));
	}

	public function products_list()
	{
		//$data_products = DB::table('product')->get();
		
		
		$data = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.category_id')
            ->join('manufacturer', 'product.menufac_id', '=', 'manufacturer.menufac_id')
            ->select('*')
            ->get();
        
        $data_all = count($data);/*
        echo '<pre>';
		print_r($data_products);
		echo '</pre>';
		*/
		return view('pages.products_list')->with(array('data_products'=>$data, 'data_count'=>$data_all));
	}
}
