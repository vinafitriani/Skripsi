<?php

namespace App\Http\Controllers;

use App\User;
use App\PictModel;
use App\Pict;
use App\UserModel;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->category == "model"){
            $userList = User::whereIn('category', ['fashion', 'photographer', 'makeup'])->pluck('id');

            return view('index-model')->with([
                'users' => User::whereIn('category', ['fashion', 'photographer', 'makeup'])->get(),
                'picts' => PictModel::where('category'),
            ]);
        }
        else {
            $userList = User::where('category', 'model')->pluck('id');
            /*$picture = PictModel::whereIn('user_id', $userList)->get();*/

            return view('index-plk')->with([
                'users' => User::where('category', 'model')->get(),
                'picts' => PictModel::where('category'),
            ]);
        }
    }

    public function showInbox($inbox_id)
    {
        $sender = Inbox::find($inbox_id)->sender;

        Inbox::create([
            'sender' => auth()->id(),
            'receiver' => $sender->id,
            'content' => "Saya menerima tawaran anda. Silahkan hubungi saya melalui nomor telepon ini " . auth()->user()->phone . ". Terima kasih!"
        ]);
        return view('inbox');
    }

    /*public function showProfile()
    {
        if (Auth::user()->category == "model"){
            return view('profile-model');
        }
        else {
            return view('profile-plk');
        }
    }*/

    public function profile_model(User $user)
    {
        $userModel = UserModel::where('username', $user->username)->first();
        $picts = Pict::where('upload_by', $user->id)->get();
        return view('profile-model')->with([
            'user' => $user,
            'usermodel' =>$userModel,
            'picts' => $picts,
        ]);
    }

    public function profile_plk($id)
    {
            $user = User::findOrFail($id);
            $picts = Pict::where('upload_by', $user->id)->get();
            // $picts = PictModel::where("id", $id)->get();
        
            return view('profile-plk')->with([
                'user' => $user,
                'picts' => $picts,
            ]);
    }

    public function upload_portfolio_plk(Request $request){
        // dd($request->all());
        $pict = Pict::store($request->file('file'), 'portofolio');
        return redirect()->route('profile-plk', [$pict->upload_by]);
    }

    public function upload_portfolio_model(Request $request){
        // dd($request->all());
        $pict = Pict::store($request->file('file'), 'portofolio');
        return redirect()->route('profile-model', [$pict->upload_by]);
    }

    public function showReview($id)
    {
        $user = User::find($id);
        $reviews = Review::where('user_id', $user->id)->get();

        return view('review', compact('reviews'))->with([
            'user' => $user,
            'reviews' => $reviews,
        ]);
    }

    public function submit_review(Request $request)
    {
        $review = Review::create([
            'user_id' => auth()->id(), 
            'review_user' => $request->review_user,
        ]);
        return redirect()->route('review', [$review->user_id]);
    }

    public function searching_model(Request $request)
    {
        $users = User::when($request->keyword, function ($user) use ($request) {
            $users->where('location', 'like', "%{$request->keyword}%");
        })->get();

        $users = UserModel::when($request->keyword, function ($user) use ($request) {
            $users->orWhere('gender', 'like', "%{$request->keyword}%")
                ->orWhere('height', 'like', "%{$request->keyword}%");
        })->get();

        return view('searching-model', compact('users'));
    }

    public function searching_recruiter(Request $request)
    {
        $users = User::when($request->keyword, function ($user) use ($request) {
            $users->where('location', 'like', "%{$request->keyword}%");
        })->get();

        return view('searching-recruiter', compact('users'));
    }
}
