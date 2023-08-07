<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminController extends Controller
{

    use SoftDeletes;
    public function index()
    {
        $latestImages = Image::latest()->take(5)->get();
        return view('welcome', compact('latestImages'));
    }

    function login(){
        return view('login');
    }

    function log(Request $req){
    	$credentials = $req->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/admin');
        } else {
            // Authentication failed
            return redirect('/login')->withErrors(['login' => 'Invalid credentials']);
        }
    }

    public function admin()
    {
        $images = Image::all()->reverse();
        return view('admin.image', compact('images'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        Image::create(['path' => $imagePath]);

        return redirect()->route('admin')->with('success', 'Image uploaded successfully.');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->route('admin')->with('success', 'Image deleted successfully.');
    }

    public function trash()
    {
        $deletedImages = Image::onlyTrashed()->get();

        return view('admin.trash', compact('deletedImages'));
    }

    public function restoreImage($id)
    {
        $restoredImage = Image::onlyTrashed()->findOrFail($id);
        $restoredImage->restore();

        return redirect()->route('image.trash')->with('success', 'Image restored successfully.');
    }
    
    public function deletePermanently($id)
    {
        $permanentlyDeletedImage = Image::onlyTrashed()->findOrFail($id);
        $permanentlyDeletedImage->forceDelete();

        return redirect()->route('image.trash')->with('success', 'Image deleted permanently.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }

    public function showGallery()
    {
        $images = Image::all(); // Fetch images from the database
        return view('gallery', ['images' => $images]);
    }


}