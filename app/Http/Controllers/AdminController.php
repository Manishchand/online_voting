<?php

namespace App\Http\Controllers;

use App\Admin;
use App\VoterRequest;
use App\ApprovedVoter;
use App\Title;
use App\Post;
use App\Candidate;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;

class AdminController extends BaseController {
	public function signup() {
		return view('admin.signup2');
	}

	public function signin(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');
		$checklogin = DB::table('admins')->where(['userid' => $username, 'password' => $password])->get();
		if (count($checklogin) > 0) {
			//
			return redirect('/adminafter_signin');
		} else {
			return view('pages.home_page');

		}
//		if(Admin::attempt(['userid'=>$username,'password'=>$password])){
//			return redirect()->route('admin_after_signin');
//
//		} else {
//
//			return redirect()->route('/');
//		}
//    return view('admin.signin');
	}

	public function logout(Request $request) {
		$request->session()->flush();
		return redirect('/');

	}

	public function aftersignin() {
		$jjpt = Title::all();
		return view('admin.after_signin')->with('jjpt', $jjpt);
	}

	public function edit_title($id) {
//   	dd($id);
		$update = Title::find($id);
		return view('admin.edit_title')->with('update', $update);
	}

	public function save_edit_title(Request $request, $id) {

		$jpt = Title::find($id);
//		$jpt->userid=$request->input('userid');
		$jpt->title = $request->input('title');
		$jpt->start_date = $request->input('startdate');
		$jpt->end_date = $request->input('enddate');
		$jpt->save();
		return redirect('/adminafter_signin');
//		return view('admin.after_signin')->with('jjpt',$jpt);
	}

	public function delete_title($id) {
		$delete = Title::find($id);
		$delete->delete();
		return redirect('/adminafter_signin');

	}

	public function create_ballot() {
		$post = Post::all();
		$candidate = Candidate::all();
		return view('admin.createballot')->with('post', $post)->with('candidate', $candidate);
	}

	public function edit_election() {

		// $update = Title::find($id);
		return view('admin.edittitle');
	}



	public function myaccount() {
		return view('admin.my_account');
	}

	public function new_title() {

		return view('jpt');
	}

	public function add_position() {
		return view('admin.add_position');
	}

	public function add_voter() {
		return view('admin.add_voter2');
	}

	public function edit_voter() {
		$voters = VoterRequest::all();
		$approvedvoter = Approvedvoter::all();
		return view('admin.voter')->with('voters', $voters)->with('approvedvoter', $approvedvoter);
	}

	public function approve_voter() {
		return view('admin.approve_voter');
	}

//Method to store the signup information of an Admin into database
	public function store(Request $request) {

		$admin = new Admin;
		$admin->userid = $request->input('userid');
		$admin->password = $request->input('password');
		$admin->name = $request->input('name');
		$admin->email = $request->input('email');
		$admin->organization = $request->input('organization');
		$admin->phone_no = $request->input('phone');
		$admin->address = $request->input('address');
		$admin->save();
		return view('admin.signin');
	}

	//Method  to store information of the voter registration
	public function voters(Request $request) {

		$voter = new VoterRequest;
		$voter->title = $request->input('title');
		$voter->userid = $request->input('userid');
		$voter->password = $request->input('password');
		$voter->voter_name = $request->input('name');
		$voter->email = $request->input('email');
		$voter->phone_no = $request->input('phone');
		$voter->save();
		return redirect('/admin_editvoter');

	}


// public function admin_voters(Request $request){
//   $admin_voters = new ApprovedVoter;
//   $admin_voters->title= $request->input('title');
// $admin_voters->userid=$request->input('userid');
// $admin_voters->password= $request->input('password');
// $admin_voters->voter_name= $request->input('name');
// $admin_voters->email= $request->input('email');
// $admin_voters->phone_no= $request->input('phone');
// $admin_voters->save();
// $approve_voters = ApprovedVoter::all();
// return $approve_voters;
// // return view('admin.voter')->with('approvevoters',$approve_voters);
// }
	/*

	public functino asdlfkj() {
	  return $admin_voters2

	}

	public function main() {
	  $aar = admin_voters();
	  $a2 =

	  return view()->with('approvevoeters',$a2,$arr);
	}
	*/
	public function save_candidate(Request $request) {
		return 'save candidate';
	}

	public function jpt(Request $request) {
		$jpt = new Title;
		$jpt->userid = $request->input('userid');
		$jpt->title = $request->input('title');
		$jpt->start_date = $request->input('startdate');
		$jpt->end_date = $request->input('enddate');
		$jpt->save();
		$jjpt = Title::all();
		return view('admin.after_signin')->with('jjpt', $jjpt);
	}

	public function add_post(Request $request) {

		if ($request->has('form1')) {
			//handle form1
			$posts = new Post;
			$posts->title = $request->input('title');
			$posts->post = $request->input('newpost');
			$posts->save();
			return redirect('/createballot');
		} elseif ($request->has('form2')) {
			//handle form1
			$candidates = new Candidate;
			$candidates->post = $request->input('choosePost');
			$candidates->candidate_name = $request->input('candidateName');
			$candidates->save();
			return redirect('/createballot');
		}
	}
	public function delete_post($id){
		$delete = Post::find($id);
		$delete->delete();
		return redirect('/createballot');

	}
	public function edit_post($id){
		$update = Post::find($id);
		return view('admin.edit_post')->with('update', $update);
	}

	public function save_edit_post(Request $request,$id){
		$jpt = Post::find($id);
//		$jpt->userid=$request->input('userid');
		$jpt->title = $request->input('title');
		$jpt->post = $request->input('post');

		$jpt->save();
		return redirect('/createballot');
	}

	public function edit_candidate($id){
		$update = Candidate::find($id);
//		dd($id);
		return view('admin.edit_candidate')->with('update', $update);
	}
	public function save_edit_candidate(Request $request,$id){
		$jpt = Candidate::find($id);
//		$jpt->userid=$request->input('userid');

		$jpt->post = $request->input('post');
		$jpt->candidate_name = $request->input('candidate_name');


		$jpt->save();
		return redirect('/createballot');
	}
	public function delete_candidate($id){
		$delete = Candidate::find($id);
		$delete->delete();
		return redirect('/createballot');
	}

	public function delete_selfReg_voter($id){
		$delete = VoterRequest::find($id);
		$delete->delete();
		return redirect('/admin_editvoter');
	}

   public function approving_voter($id,$email){

		$take = VoterRequest::find($id);
		dd($take);
		foreach ($take as $takes){
			DB::table('approvedvoters')->insert([
				'id'=>$takes->id,
				'title'=>$takes->title,
				'voter_name'=>$takes->voter_name,
				'email'=>$takes->email,
				'phone_no'=>$takes->phone_no,
				'userid'=>$takes->userid,
				'password'=>$takes->password
			]);

		}

//		$takes = VoterRequest::find($email);
//		dd($take);
//		dd($takes);

	}
}



