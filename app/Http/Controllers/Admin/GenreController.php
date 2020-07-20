<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genre;
use DB;
class GenreController extends Controller
{
    public function list_records(Request $request){
    	$getData = $request->all();
    	if(isset($getData['q']) && $getData['q'] != ''){
    		$key = $getData['q'];
    		$records = Genre::Where('name', 'LIKE', $getData['q'].'%')->where('is_deleted', 0)->get();
    	} else {
    		$key = '';
    		$records = Genre::where(['is_deleted' => 0])->get();
    	}
    	
    	return view('admin.genre.list', compact('records', 'key'));
    }

    public function add_form(){
    	return view('admin.genre.add');
    }

    public function create_record(Request $request){
    	DB::beginTransaction();
    	try {
        	$postData = $request->all();
            //dd($postData); 
        	$data = array(
        			'name' => $postData['name'],
        			'description' => $postData['Description'],
        			'created_at' => date('Y-m-d H:i:s')

        	);
            if($request->hasFile('b_image'))
            {
                $allowedfileExtension=['jpg','png'];
                $file = $request->file('b_image');
                //dd($file);
               
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        $fileName = md5($filename).'.'.$extension; 
                        $file->move(public_path('uploads'), $fileName);
                        $data['banner_image'] = $fileName;
                    } else {
                        
                        //$request->session()->put('postedData', $postData);
                        unset($postData['b_simage']);
                        return redirect()->back()->with('status', 'error')->with('message', 'Please select png or jpg images.');
                    }
                
                //die;
            }
            if($request->hasFile('c_image'))
            {
                $allowedfileExtension=['jpg','png'];
                $file = $request->file('c_image');
                //dd($file);
               
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        $fileName = md5($filename).'.'.$extension; 
                        $file->move(public_path('uploads'), $fileName);
                        $data['cover_image'] = $fileName;
                    } else {
                        
                        //$request->session()->put('postedData', $postData);
                        unset($postData['c_simage']);
                        return redirect()->back()->with('status', 'error')->with('message', 'Please select png or jpg images.');
                    }
                
                //die;
            }
        	//dd($data);
			$record = Genre::create($data);
			DB::commit();
        	if($record){
        		return redirect('genre/list')->with('status', 'success')->with('message', 'Genre Created Successfully');
        	}
        } catch ( \Exception $e ) {
            DB::rollback();
            //dd($e);
            return redirect()->back()->with('status', 'error')->with('message', $e->getMessage());
            //return ['status' => 400, 'message' => $e->getMessage()];
        }
    }

    public function edit_form($id){
    	$record = Genre::find($id);
    	return view('admin.genre.edit', compact('record'));
    }

    public function update_record(Request $request){
    	DB::beginTransaction();
    	try {
        	$postData = $request->all();
            //dd($postData);
        	$data = array(
        			'name' => $postData['name'],
        			'description' => $postData['Description'],
        			'created_at' => date('Y-m-d H:i:s')

        	);
            if($request->hasFile('b_image'))
            {
                $allowedfileExtension=['jpg','png'];
                $file = $request->file('b_image');
                //dd($file);
               
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        $fileName = md5($filename).'.'.$extension; 
                        $file->move(public_path('uploads'), $fileName);
                        $data['banner_image'] = $fileName;
                    } else {
                        
                        //$request->session()->put('postedData', $postData);
                        unset($postData['b_simage']);
                        return redirect()->back()->with('status', 'error')->with('message', 'Please select png or jpg images.');
                    }
                
                //die;
            }
            if($request->hasFile('c_image'))
            {
                $allowedfileExtension=['jpg','png'];
                $file = $request->file('c_image');
                //dd($file);
               
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        $fileName = md5($filename).'.'.$extension; 
                        $file->move(public_path('uploads'), $fileName);
                        $data['cover_image'] = $fileName;
                    } else {
                        
                        //$request->session()->put('postedData', $postData);
                        unset($postData['c_simage']);
                        return redirect()->back()->with('status', 'error')->with('message', 'Please select png or jpg images.');
                    }
                
                //die;
            }
        	
			$record = Genre::where('id', $postData['edit_record_id'])->update($data);
			DB::commit();
        	
        	return redirect('genre/list')->with('status', 'success')->with('message', 'Genre Updated Successfully');
        	
        } catch ( \Exception $e ) {
            DB::rollback();
            //dd($e);
            return redirect()->back()->with('status', 'error')->with('message', $e->getMessage());
            //return ['status' => 400, 'message' => $e->getMessage()];
        }
    }

    public function del_record($id){
    	$record = Genre::find($id);
    	$record->is_deleted = 1;
    	$record->save();

    	return redirect()->back()->with('status', 'success')->with('message', 'Genre Deleted Successfully');
    }

    public function change_status(Request $request){
        $getData = $request->all();

        $genre = Genre::find($getData['g']);
        $genre->status = $getData['s'];
        $genre->save();

        return redirect()->back()->with('status', 'success')->with('message', 'Genre Status Changed Successfully');

    }
}
