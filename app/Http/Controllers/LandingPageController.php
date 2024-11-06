<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('guest.home',compact('title'));
    }

    public function about_us()
    {
        $title = 'About Us';
        return view('guest.about-us', compact('title'));
    }

    public function academic_registry()
    {
        $title = 'Academic Registry';
        return view('guest.academic-registry', compact('title'));
    }

    public function accreditation()
    {
        $title = 'Accreditation';
        return view('guest.accreditation', compact('title'));
    }

    public function admission()
    {
        $title = 'Admission';
        return view('guest.admission', compact('title'));
    }

    public function career()
    {
        $title = 'Career';
        return view('guest.career', compact('title'));
    }

    public function cetl()
    {
        $title = 'Center for excellence in Teaching and Learning';
        return view('guest.cetl', compact('title'));
    }

    public function contact()
    {
        $title = 'Contact';
        return view('guest.contact', compact('title'));
    }

    public function core_curriculum()
    {
        $title = 'Core Curriculum';
        return view('guest.core-curriculum', compact('title'));
    }

    public function faculties()
    {
        $title = 'Faculties';
        return view('guest.faculties', compact('title'));
    }

    public function faq()
    {
        $title = 'FaQ';
        return view('guest.faq', compact('title'));
    }

    public function fas()
    {
        $articles = Article::where('is_published',true)->orderBy('created_at', 'desc')
                   ->limit(3)
                   ->get();
        $title = 'Faculty of Arts & Science';
        return view('guest.fas', compact('title','articles'));
    }

    public function fet()
    {
        $articles = Article::where('is_published',true)->orderBy('created_at', 'desc')
                   ->limit(3)
                   ->get();
        $title = 'Faculty of Engineering & Technology';
        return view('guest.fet', compact('title','articles'));
    }

    public function fob()
    {
        $articles = Article::where('is_published',true)->orderBy('created_at', 'desc')
                   ->limit(3)
                   ->get();
        $title = 'Faculy of Bussiness';
        return view('guest.fob', compact('title','articles'));
    }

    public function foe()
    {
        $articles = Article::where('is_published',true)->orderBy('created_at', 'desc')
                   ->limit(3)
                   ->get();
        $title = 'Faculty of Education';
        return view('guest.foe', compact('title','articles'));
    }

    public function governance()
    {
        $title = 'Governance And Administration';
        return view('guest.governance-and-administration', compact('title'));
    }

    public function news()
    {
        $last_article = Article::orderBy('created_at','DESC')->where('is_published',true)->first();
        $articleCount = Article::count();  // Menghitung jumlah total artikel
        $articles = Article::where('is_published',true)->orderBy('created_at', 'desc')
                   ->limit($articleCount - 1) 
                   ->offset(1) // Ambil semua artikel kecuali yang terakhir
                   ->get();
        $title = 'News';
        return view('guest.news', compact('title','articles','last_article'));
    }

    public function pathway()
    {
        $title = 'Pathway to the World';
        return view('guest.pathway', compact('title'));
    }

    public function qair()
    {
        $title = 'QAIR';
        return view('guest.qair', compact('title'));
    }

    public function requirements()
    {
        $title = 'Requirements';
        return view('guest.requirements', compact('title'));
    }
    public function international_student()
    {
        $title = 'International Student';
        return view('guest.requirements', compact('title'));
    }

    public function sampoerna_difference()
    {
        $title = 'Sampoerna Difference';
        return view('guest.sampoerna-difference', compact('title'));
    }

    public function academics()
    {
        $title = 'Academics';
        return view('guest.academics', compact('title'));
    }
    public function facilities()
    {
        $title = 'Facilities';
        return view('guest.facilities', compact('title'));
    }
    public function spac()
    {
        $title = 'Student & Parent Advisory Center';
        return view('guest.spac', compact('title'));
    }
    public function student_goverment()
    {
        $title = 'Student Goverment';
        return view('guest.student-goverment', compact('title'));
    }
    public function student_rights_and_responsibility()
    {
        $title = 'Student Rights & Responsibility';
        return view('guest.student-rights-and-responsibility', compact('title'));
    }
    public function student_affairs()
    {
        $title = 'Student Affairs';
        return view('guest.student-affairs', compact('title'));
    }
    public function university_admission()
    {
        $title = 'University Admission';
        return view('guest.university-admission', compact('title'));
    }
    public function safety_and_environment()
    {
        $title = 'Safety & Environment';
        return view('guest.safety-and-environment', compact('title'));
    }
    public function library()
    {
        $title = 'Library';
        return view('guest.library', compact('title'));
    }
    public function campus_life()
    {
        $title = 'Campus Life';
        return view('guest.campus-life', compact('title'));
    }
    public function it_department()
    {
        $title = 'IT Department';
        return view('guest.it-department', compact('title'));
    }
    public function news_detail($slug)
    {
        $article = Article::where('slug',$slug)->first();
        $title = 'Detail';
        return view('guest.news-detail', compact('title','article'));
    }

}
