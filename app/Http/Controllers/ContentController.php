<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Models\Project;
use App\Models\Event;
use App\Models\Media;
use App\Models\MissionVision;

class ContentController extends Controller
{
    // News CRUD
    public function indexNews()
    {
        $news = News::all();
        return view('admin.content.news.index', compact('news'));
    }

    public function createNews()
    {
        return view('admin.content.news.create');
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'published_date' => 'required|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    public function editNews(News $news)
    {
        return view('admin.content.news.edit', compact('news'));
    }

    public function updateNews(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'published_date' => 'required|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    public function destroyNews(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }

    // Projects CRUD
    public function indexProjects()
    {
        $projects = Project::all();
        return view('admin.content.projects.index', compact('projects'));
    }

    public function createProject()
    {
        return view('admin.content.projects.create');
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'status' => 'required|string',
            'location' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function editProject(Project $project)
    {
        return view('admin.content.projects.edit', compact('project'));
    }

    public function updateProject(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'status' => 'required|string',
            'location' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroyProject(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }

    // Events CRUD
    public function indexEvents()
    {
        $events = Event::all();
        return view('admin.content.events.index', compact('events'));
    }

    public function createEvent()
    {
        return view('admin.content.events.create');
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        Event::create($data);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function editEvent(Event $event)
    {
        return view('admin.content.events.edit', compact('event'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroyEvent(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

    // Media CRUD
    public function indexMedia()
    {
        $media = Media::all();
        return view('admin.content.media.index', compact('media'));
    }

    public function createMedia()
    {
        return view('admin.content.media.create');
    }

    public function storeMedia(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:10240',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('media', 'public');
        }

        Media::create($data);

        return redirect()->route('admin.media.index')->with('success', 'Media created successfully.');
    }

    public function editMedia(Media $media)
    {
        return view('admin.content.media.edit', compact('media'));
    }

    public function updateMedia(Request $request, Media $media)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:10240',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('media', 'public');
        }

        $media->update($data);

        return redirect()->route('admin.media.index')->with('success', 'Media updated successfully.');
    }

    public function destroyMedia(Media $media)
    {
        $media->delete();
        return redirect()->route('admin.media.index')->with('success', 'Media deleted successfully.');
    }

    // Mission/Vision CRUD
    public function editMissionVision()
    {
        $missionVision = MissionVision::first();
        return view('admin.content.mission-vision.edit', compact('missionVision'));
    }

    public function updateMissionVision(Request $request)
    {
        $request->validate([
            'mission' => 'required|string',
            'vision' => 'required|string',
            'history' => 'required|string',
            'team' => 'nullable|array',
        ]);

        $missionVision = MissionVision::first();

        if ($missionVision) {
            $missionVision->update($request->all());
        } else {
            MissionVision::create($request->all());
        }

        return redirect()->route('admin.mission-vision.edit')->with('success', 'Mission/Vision updated successfully.');
    }

    // Individual Mission/Vision/Equipe/Histoire edit methods
    public function editMission()
    {
        $missionVision = MissionVision::first();
        return view('admin.content.mission-vision.mission', compact('missionVision'));
    }

    public function updateMission(Request $request)
    {
        $request->validate([
            'mission' => 'required|string',
        ]);

        $missionVision = MissionVision::first();

        if ($missionVision) {
            $missionVision->update(['mission' => $request->mission]);
        } else {
            MissionVision::create(['mission' => $request->mission]);
        }

        return redirect()->route('admin.mission.edit')->with('success', 'Mission updated successfully.');
    }

    public function editVision()
    {
        $missionVision = MissionVision::first();
        return view('admin.content.mission-vision.vision', compact('missionVision'));
    }

    public function updateVision(Request $request)
    {
        $request->validate([
            'vision' => 'required|string',
        ]);

        $missionVision = MissionVision::first();

        if ($missionVision) {
            $missionVision->update(['vision' => $request->vision]);
        } else {
            MissionVision::create(['vision' => $request->vision]);
        }

        return redirect()->route('admin.vision.edit')->with('success', 'Vision updated successfully.');
    }

    public function editEquipe()
    {
        $missionVision = MissionVision::first();
        return view('admin.content.mission-vision.equipe', compact('missionVision'));
    }

    public function updateEquipe(Request $request)
    {
        $request->validate([
            'team' => 'nullable|array',
            'team.*.name' => 'required|string|max:255',
            'team.*.position' => 'nullable|string|max:255',
            'team.*.email' => 'nullable|email|max:255',
            'team.*.phone' => 'nullable|string|max:20',
            'team.*.photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $missionVision = MissionVision::first();
        $teamData = $request->team ?? [];

        // Handle photo uploads
        foreach ($teamData as $index => &$member) {
            if ($request->hasFile("team.{$index}.photo")) {
                $file = $request->file("team.{$index}.photo");

                // Delete old photo if exists
                if (isset($missionVision->team[$index]['photo']) && $missionVision->team[$index]['photo']) {
                    $oldPath = public_path($missionVision->team[$index]['photo']);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                // Store the file using Laravel's Storage facade
                $path = $file->store('team', 'public');
                $member['photo'] = $path;
            } elseif (isset($missionVision->team[$index]['photo'])) {
                $member['photo'] = $missionVision->team[$index]['photo'];
            } else {
                $member['photo'] = null;
            }
        }

        if ($missionVision) {
            $missionVision->update(['team' => $teamData]);
        } else {
            MissionVision::create(['team' => $teamData]);
        }

        return redirect()->route('admin.equipe.edit')->with('success', 'Équipe updated successfully.');
    }

    public function editHistoire()
    {
        $missionVision = MissionVision::first();
        return view('admin.content.mission-vision.histoire', compact('missionVision'));
    }

    public function updateHistoire(Request $request)
    {
        $request->validate([
            'history' => 'required|string',
        ]);

        $missionVision = MissionVision::first();

        if ($missionVision) {
            $missionVision->update(['history' => $request->history]);
        } else {
            MissionVision::create(['history' => $request->history]);
        }

        return redirect()->route('admin.histoire.edit')->with('success', 'Histoire updated successfully.');
    }
}
