<?php

namespace App\Http\Controllers;

use App\Models\PaginasEstaticas;
use App\Models\Post;
use App\Models\RedesSociales;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $noticias = Post::latest()->take(2)->get();
        // $redes = RedesSociales::all();
        return view('web.web');
    }
    public function residential_home()
    {
        return view('web.redhomenternament');
    }
    public function residential_smarthome()
    {
        return view('web.redsmarthome');
    }
    public function residential_lighting()
    {
        return view('web.redlighting');
    }
    public function residential_security()
    {
        return view('web.redsecurity');
    }

    public function comercial_security()
    {
        return view('web.comercialsecurity');
    }
    public function comercial_professional()
    {
        return view('web.comercialprofessional');
    }
    public function comercial_it()
    {
        return view('web.comercialit');
    }


    public function marine_start()
    {
        return view('web.marinestart');
    }
    public function marine_kvh()
    {
        return view('web.marinestart');
    }
    public function marine_system()
    {
        return view('web.redlighting');
    }
    public function marine_video()
    {
        return view('web.redsecurity');
    }

    public function about()
    {
        return view('web.about');
    }
    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('web.blog', compact('posts'));
    }
    public function blog_details($id)
    {
        $post = Post::find($id);
        $data = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('web.article', compact('post', 'data'));
    }

    public function contact()
    {
        return view('web.contact');
    }




    public function noticiasweb()
    {
        // $noticias
        $noticias = Post::all();
        $count = Post::count();
        $redes = RedesSociales::all();
        return view('web.noticias', compact('noticias', 'redes', 'count'));
    }

    // public function articulo($id)
    // {
    //     // $noticias
    //     $articulo = Post::where('id', $id)->first();
    //     return view('', compact('articulo'));
    // }

    public function politicasPrivacidad()
    {
        // $noticias
        $redes = RedesSociales::all();
        $politicasP = PaginasEstaticas::where('nombre', 'politica-privacidad')->first();
        return view('web.politicas-privacidad', compact('politicasP', 'redes'));
    }

    public function PoliticasReembolso()
    {
        // $noticias
        $redes = RedesSociales::all();
        $politicasR = PaginasEstaticas::where('nombre', 'politica-reembolso')->first();
        return view('web.politicas-reembolso', compact('politicasR', 'redes'));
    }

}
