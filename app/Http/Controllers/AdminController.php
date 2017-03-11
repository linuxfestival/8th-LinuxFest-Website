<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveMessage;

use App\Sponsor;
use App\Submission;
use App\User;
use Carbon\Carbon;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public static function routes() {
        Route::group(['middleware' => 'auth', 'before' => 'auth', 'prefix' => 'admin'], function () {
            //Admin page index
            Route::get('/', 'AdminController@showIndexPage')->name('admin::index');

            //Submissions
            Route::get('/submissions', 'AdminController@viewSubmissions')->name('admin::submissions');
            Route::get('/submissions/sponsors', 'AdminController@viewSponsors')->name('admin::submissions.sponsors');
            Route::get('/submissions/sponsors/{sponsor}', 'AdminController@editSponsorRequest')->name('admin::submissions.sponsor.edit');
            Route::post('/submissions/sponsors/{sponsor}', 'AdminController@updateSponsorRequest')->name('admin::submissions.sponsor.save');
            Route::get('/submissions/{submission}', 'AdminController@editSubmission')->name('admin::submissions.edit');
            Route::post('/submissions/{submission}', 'AdminController@updateSubmission')->name('admin::submission.save');

            //Users section
            Route::get('/users', 'AdminController@listUsers')->name('admin::users');

            // Live Blog Admin Panel
            Route::get('/live','AdminController@liveIndex')->name('admin::live.index');

            //POST on live
            Route::post('message', ['as' => 'message.store', 'uses' => 'AdminController@store']);

            //Sending mail
            Route::post('/email', 'AdminController@viewMailForm')->name('admin::mail.compose');
            Route::post('/email/submit', 'AdminController@sendMail')->name('admin::mail.send');
        });
    }

    /**
     * Administration dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showIndexPage(){
        //TODO ADMIN DASHBOARD
        return view('admin.home');
    }

    /**
     * Live-blog feed administration
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function liveIndex(){
        // Only show the messages from this day
//        $messages = LiveMessage::orderBy('published_at', 'desc')->get(1);

        return view('admin.live.index');
    }

    /**
     * View all the submissions
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewSubmissions(){
        $subs = Submission::all();
        return view('admin.submissions.list', ['subs' => $subs]);
    }

    public function viewSponsors(){
        $sponsors = Sponsor::all();
        return view('admin.submissions.sponsors.list', ['sponsors' => $sponsors]);
    }

    /**
     * Listing all the registered users
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listUsers(){
        $users = User::all();
        return view('admin.users.list', ['users' => $users]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewMailForm(Request $request){
        $_to = $request->get('to');
//        if (!is_array($_to))
//            $_to = [$_to];
        return view('admin.outgoing.compose', ['to' => $_to]);
    }

    public function sendMail(Request $request){
        $to = $request->get('to');
        $subject = $request->get('subject');
        \Mail::send('emails.default', ['body' => $request->get('body')], function($message) use ($to, $subject){
            /** @var Message $message */
            $message->from(env('MAIL_SENDER', 'info@linuxfest.ir'), 'Amirkabir LinuxFest');
            $message->to($to);
            $message->subject($subject);
        });
        return redirect()->route('admin::index');
    }

    /**
     * @param Submission $submission
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editSubmission(Submission $submission){
        return view('admin.submissions.edit', ['data' => $submission]);
    }

    /**
     * @param Submission $submission
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSubmission(Submission $submission, Request $request){
        $submission->update($request->all());
        $submission->save();
        return redirect()->route('admin::submissions');
    }

    public function editSponsorRequest(Sponsor $sponsor){
        return view('admin.submissions.sponsors.edit', ['data' => $sponsor]);
    }

    public function updateSponsorRequest(Sponsor $sponsor, Request $request){
        $sponsor->update($request->all());
        $sponsor->save();
        return redirect()->route('admin::submissions.sponsors');
    }

//    public function create()
//    {
//        return View::make('admin.create');
//    }
//
    public function store(){
        $message = new LiveMessage;
        $message->published_at = Carbon::now()->timestamp;
        $message->desc = Input::get('desc');
        $this->savePicture($message);
        $message->save();
        return view('admin.live.index', ['msg' => $message]);
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
