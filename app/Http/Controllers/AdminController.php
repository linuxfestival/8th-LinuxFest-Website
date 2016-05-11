<?php

namespace App\Http\Controllers;

use App\LiveMessage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index(){
        // Only show the messages from this day
//        $messages = LiveMessage::orderBy('published_at', 'desc')->get(1);

        return view('live.admin.index');
    }

//    public function create()
//    {
//        return View::make('admin.create');
//    }
//
    public function store(){
        $message = new LiveMessage;
        $message->published_at = '00:00:00';
        $message->desc = Input::get('desc');
        $this->savePicture($message);
        $message->save();
        return view('live.admin.index', ['msg' => $message]);
    }
//
//    public function submitPhoto() {
//        $user = Auth::user()->username;
//        $dirName = 'files/' . $user;
//        if (Input::hasFile('photo')) {
//
//            $picture = Input::file('photo');
//
//            // Generate random filename
//            $filename = strtolower( $picture->getClientOriginalName());
//
//            // Move picture to file folder
//            $picture->move(public_path($dirName), $filename);
//        }
//        return Redirect::route('admin');
//    }
//
//    public function viewAllPhotos(){
//        $photos = [];
//        $username = Auth::user()->username;
//        $filesInFolder = \File::files('files/'.$username);
//        $num = 0;
//        foreach($filesInFolder as $path) {
//            $details[] = pathinfo($path);
//            $jsonArray = json_encode($details);
//            $fileAttr = json_decode($jsonArray, true);
//            $fileDescrip = $fileAttr[0]['dirname'].'/'. $fileAttr[0]['basename'];
//            $timestamp = File::lastModified($fileDescrip);
//
//            $photoView = new Message;
//            $photoView -> published_at = $timestamp;
//            $photoView -> message = 'published by: '.$username;
//            $photoView -> picture = $fileDescrip;
//
//            $photos[$num] = $photoView;
//            $num++;
//        }
//        return View::make('admin.photoViewer', compact('messages'));
//    }
//
//    public function edit($id)
//    {
//        $message = Message::find($id);
//
//        return View::make('admin.edit', compact('message'));
//    }
//
//    public function update($id)
//    {
//        $message = Message::find($id);
//        $message->published_at = Input::get('published_at');
//        $message->message = Input::get('message');
//
//        if (Input::has('delete_picture')) {
//            $message = $this->deletePicture($message);
//        } else {
//            $message = $this->savePicture($message);
//        }
//
//        $message->save();
//
//        return Redirect::route('admin');
//    }
//
//    public function delete($id)
//    {
//        $message = Message::find($id);
//
//        return View::make('admin.delete', compact('message'));
//    }
//
//    public function destroy($id)
//    {
//        $message = Message::find($id);
//
//        $this->deletePicture($message);
//
//        $message->delete();
//
//        return Redirect::route('admin');
//    }
//
    protected function savePicture(LiveMessage $message)
    {
        // Handle file upload.
        if (Input::hasFile('img')) {
            // Get uploaded picture
            $picture = Input::file('img');

            // Generate random filename
            $filename = strtolower( str_random(20) . '.' . $picture->getClientOriginalExtension());

            // Move picture to file folder
            $picture->move(public_path('liveFeed'), $filename);
            
            $message->img = $filename;
        }
        return $message;
    }
//
//    protected function deletePicture(Message $message)
//    {
//        // If an image is associated, delete it.
//        if ($message->picture) {
//            $file = public_path('files/' . $message->picture);
//
//            if (file_exists($file)) {
//                unlink($file);
//            }
//
//            $message->picture = null;
//        }
//
//        return $message;
//    }
//
//    protected function uploadtoGallery () {
//        $message = new Message;
//        $message->message = Input::get('teamName');
//        $message = $this->savePicture($message);
//
//        $message->save();
//        $renderedMessage = View::make('_message', compact('message'))->render();
//
//        return Redirect::route('admin');
//    }

}
