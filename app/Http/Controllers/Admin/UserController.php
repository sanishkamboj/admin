<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function list_users(){
        $users = User::where('role_id', 2)->get();
        return view('admin.user.list', compact('users'));
    }

    public function list_artists(){
        $users = User::where('role_id', 1)->get();
        return view('admin.user.artist-list', compact('users'));
    }

    public function del_user($id){
    	$record = User::find($id);
    	$record->is_deleted = 1;
    	$record->save();

    	return redirect()->back()->with('status', 'succcess')->with('message', 'User Deleted Successfully');
    }

    public function del_artist($id){
    	$record = User::find($id);
    	$record->is_deleted = 1;
    	$record->save();

    	return redirect()->back()->with('status', 'succcess')->with('message', 'Artist Deleted Successfully');
    }

    public function change_status(Request $request){
        $getData = $request->all();

        $genre = User::find($getData['g']);
        $genre->status = $getData['s'];
        $genre->save();

        return redirect()->back()->with('status', 'success')->with('message', 'Status Updated Successfully');

    }

    public function edit_form($id){
    	$record = User::find($id);
    	$country = Country::get();
    	return view('admin.user.edit', compact('record', 'country'));
    }

    public function update_record(Request $request, $id){
    	DB::beginTransaction();
    	try {
        	$postData = $request->all();
            //dd($postData);
        	$data = array(
        			'first_name' => $postData['firstname'],
        			'last_name' => $postData['lastname'],
        			'email' => $postData['email'],
        			'phone' => $postData['phone'],
        			'mobile' => $postData['mobile'],
        			'street' => $postData['street'],
        			'city' => $postData['city'],
        			'country_id' => $postData['country_id'],
        			'postcode' => $postData['postcode']
        	);
            
			$record = User::where('id', $id)->update($data);
			DB::commit();
        	$record = User::find($id);
        	if($record->role_id == 1){
        		$path = 'artist/list';
        		$u = 'Artist';
        	} else {
        		$path = 'user/list';
        		$u = 'User';
        	}
        	return redirect($path)->with('status', 'success')->with('message', $u.' Updated Successfully');
        	
        } catch ( \Exception $e ) {
            DB::rollback();
            //dd($e);
            return redirect()->back()->with('status', 'error')->with('message', $e->getMessage());
            //return ['status' => 400, 'message' => $e->getMessage()];
        }
    }
    
}
