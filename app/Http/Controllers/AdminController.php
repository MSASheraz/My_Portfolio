<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin-dashboard.dashboard');
    }
    // projects 
    public function adminProject()
    {
        return view('admin-dashboard.projects.index');
    }
    public function adminProjectCreate()
    {
        return view('admin-dashboard.projects.create');
    }
    public function adminProjectShow()
    {
        return view('admin-dashboard.projects.show');
    }

    // blogs 
    public function adminBlog()
    {
        return view('admin-dashboard.blogs.index');
    }
    public function adminBlogCreate()
    {
        return view('admin-dashboard.blogs.create');    
    }
    public function adminBlogShow()
    {
        return view('admin-dashboard.blogs.show');
    }
    // messages 
    public function adminMessage()
    {
        // Mark unread messages as read when the admin opens the Messages area.
        Message::where('is_read', false)->update(['is_read' => true]);

        $messages = Message::latest()->get();
        return view('admin-dashboard.message.index', compact('messages'));
    }
   

    public function adminMessageShow()
    {
        return view('admin-dashboard.message.show');
    }
}

