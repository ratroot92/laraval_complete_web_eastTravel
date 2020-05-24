<?php

namespace App\Http\Controllers\ahmed;

use App\Gallery_photo;
use App\Http\Controllers\Controller;
use App\Video;
use DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')->get();
        return view('gallery/index', compact('videos'));
    }
    public function add()
    {
        return view('gallery/add');
    }
    public function add_url(Request $request)
    {
        $url             = $request->get('url');
        $name            = $request->get('name');
        $new_video       = new Video;
        $new_video->name = $name;
        $new_video->url  = $url;
        $new_video->save();
        if ($new_video) {
            return redirect()->route('gallery.add')->with('success', 'Video   added successfully ');
        } else {
            return redirect()->route('gallery.add')->with('error', 'Current operation failed ');
        }

    }

    public function all_videos()
    {
        $videos = DB::table('videos')->get();
        return view('gallery/all_videos', compact('videos'));
    }
    public function delete_video($id)
    {
        $status = DB::table('videos')
            ->where('id', $id)
            ->delete();
        if ($status) {
            return redirect()->route('gallery..videos.all')->with('success', 'Video   Deleted successfully ');
        } else {
            return redirect()->route('gallery..videos.all')->with('error', '   Current operation failed ');
        }

    }

    public function edit_video($id)
    {
        $video = DB::table('videos')->where('id', $id)->first();
        if ($video) {
            return view('gallery/update_video')->with(['video' => $video]);
        } else {
            return redirect()->route('gallery..videos.all')->with('error', '   Current operation failed ');
        }
    }

    public function edit_video_update(Request $request)
    {
        $id   = $request->get('id');
        $name = $request->get('name');
        $url  = $request->get('url');
        $find = DB::table('videos')->where('id', $id)->update(['name' => $name, 'url' => $url]);
        if ($find) {
            return redirect()->route('gallery.videos.all')->with('success', 'Video   updated successfully ');
        } else {
            return redirect()->route('gallery.videos.all')->with('error', '   Current operation failed ');
        }
    }

    public function addphotos()
    {
        return view('gallery/addphotos');
    }

    public function insert_photos(Request $request)
    {
        //  $this->validate($request, [
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $title       = $request->get('title');
        $description = $request->get('desc');

        if ($request->hasFile('img')) {
            $photo = $request->file('img');

            $extension  = $photo->getClientOriginalExtension();
            $image_name = time() . rand(1000, 9999) . "_." . $extension;
            $path       = public_path('/storage/Gallery_Photos/');
            $photo->move($path, $image_name);
            $photo_path           = 'https://www.dvenza.com/public/storage/Gallery_Photos/' . $image_name;
            $Gallery_photo        = new Gallery_photo;
            $Gallery_photo->title = $title;
            $Gallery_photo->url   = $photo_path;
            $Gallery_photo->desc  = $description;
            $Gallery_photo->save();

            if ($Gallery_photo) {
                return redirect()->route('gallery.addphotos')->with('success', 'Photo   inserted successfully ');
            } else {
                return redirect()->route('gallery.addphotos')->with('error', '   Current operation failed ');
            }

        } else {
            return redirect()->route('gallery.addphotos')->with('error', '   Current operation failed ');
        }

    }

    public function all_photos()
    {
        $photos = DB::table('gallery_photos')->get();
        return view('gallery/all_photos', compact('photos'));
    }

    public function delete_photo($id)
    {

        $photo = DB::table('gallery_photos')->where('id', $id)->first();
        if ($photo) {

            $dB_path  = $photo->url;
            $len      = strlen("https://www.dvenza.com/");
            $new_path = substr($dB_path, $len, strlen($dB_path) - $len);
            unlink($new_path);

            $status = DB::table('gallery_photos')
                ->where('id', $id)
                ->delete();
        }

        if ($status) {
            return redirect()->route('gallery.all_photos')->with('success', 'Photo   Deleted successfully ');
        } else {
            return redirect()->route('gallery.all_photos')->with('error', '   Current operation failed ');
        }

    }

    public function editview_photo($id)
    {
        $photo = DB::table('gallery_photos')->where('id', $id)->first();
        if ($photo) {
            return view('gallery/edit_photo')->with(['photo' => $photo]);
        } else {
            return redirect()->route('gallery.all_photos')->with('error', '   Current operation failed ');
        }

    }

    public function edit_photo(Request $request)
    {
        $id    = $request->get('id');
        $title = $request->get('title');
        $desc  = $request->get('desc');

//if pic is uplaoded with form

        if ($request->hasFile('img')) {

//delete last picture first

            $photo = DB::table('gallery_photos')->where('id', $id)->first();
            if ($photo) {

                $dB_path  = $photo->url;
                $len      = strlen("https://www.dvenza.com/");
                $new_path = substr($dB_path, $len, strlen($dB_path) - $len);
                unlink($new_path);

                
//deleted last pictures

//upload new picture

                $photo = $request->file('img');

                $extension  = $photo->getClientOriginalExtension();
                $image_name = time() . rand(1000, 9999) . "_." . $extension;
                $path       = public_path('/storage/Gallery_Photos/');
                $photo->move($path, $image_name);
                $photo_path = 'https://www.dvenza.com/public/storage/Gallery_Photos/' . $image_name;

                $find_update = DB::table('gallery_photos')->where('id', $id)->update([
                    'title' => $title,
                    'desc'  => $desc,
                    'url'   => $photo_path,
                ]);


                if ($find_update) {
                    return redirect()->route('gallery.all_photos')->with('success', 'Photo   updated successfully ');
                } else {
                    return redirect()->route('gallery.all_photos')->with('error', '   Current operation failed ');
                }

            }
        } else {
            return redirect()->route('gallery.all_photos')->with('error', '   Current operation failed ');
        }

    }

    public function photo_index(){
        $photos=DB::table('gallery_photos')->get();
        return view ('gallery/gallery_photos_index',compact('photos'));
    }


}