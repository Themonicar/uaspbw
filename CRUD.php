<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function video(){
        $video = Video::paginate(5);
        return view('video',['cek' => 'video'], ['video' => $video]);
    }
    public function video_cari(Request $request){
        $cari = $request-> cari;
        $vid = Video::where('username','like','%'.$cari.'%')-> orWhere('nama_video','like','%'.$cari.'%')->paginate();
        return view('video', ['cek' => 'video'],['video' => $vid]);
    }

    //create
    public function formcreatevideo(){
        return view('formvideo',['cek' => 'video']);
    }
    public function createvideo(Request $request){
        Video::create([
            'username' => $request -> username,
            'nama_video' => $request -> nama_video,
            'jum_like' => $request -> jum_like,
            'jum_play' => $request -> jum_play,
            'jum_komentar' => $request -> jum_komentar,
            'jum_share' => $request -> jum_share
        ]);
        return redirect('/datavideo')->with('create', 'Berhasil ditambah');
    }

    //update
    public function formupdatevideo($id){
        $vid = data::find($id);
        return view('formvideoedit',['cek' => 'video'], ['video' => $vid]);
    }
    public function updatevideo($id, Request $request){
        $dat = data::find($id);
        $dat -> username = $request -> username; 
        $dat -> nama = $request -> nama;
    
        $dat -> save();
        return redirect('/data')->with('update', 'Berhasil diubah');
    }

    //delete
    public function delete($id){
        $vid = data::find($id);
        $vid -> delete();
        return redirect('/data')->with('delete', 'Berhasil dihapus');
    }

    //dashboard
    public function dashboard(){
        return view('/dashboard', ['cek' => 'dashboard']);
    }
    
    
}
