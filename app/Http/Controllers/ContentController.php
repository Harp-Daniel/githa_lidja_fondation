ll;<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Models\Project;
use App\Models\Event;
use App\Models\Media;
use App\Models\MissionVision;
use App\Services\VideoProcessingService;

class ContentController extends Controller
{
    protected $videoService;

    public function __construct(VideoProcessingService $videoService)
    {
        $this->videoService = $videoService;
    }

    // Generic index method for resource routes
    public function index()
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->indexProjects();
        } elseif (str_contains($routeName, 'news')) {
            return $this->indexNews();
        } elseif (str_contains($routeName, 'events')) {
            return $this->indexEvents();
        } elseif (str_contains($routeName, 'media')) {
            return $this->indexMedia();
        }
    }

    // Generic create method
    public function create()
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->createProject();
        } elseif (str_contains($routeName, 'news')) {
            return $this->createNews();
        } elseif (str_contains($routeName, 'events')) {
            return $this->createEvent();
        } elseif (str_contains($routeName, 'media')) {
            return $this->createMedia();
        }
    }

    // Generic store method
    public function store(Request $request)
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->storeProject($request);
        } elseif (str_contains($routeName, 'news')) {
            return $this->storeNews($request);
        } elseif (str_contains($routeName, 'events')) {
            return $this->storeEvent($request);
        } elseif (str_contains($routeName, 'media')) {
            return $this->storeMedia($request);
        }
    }

    // Generic show method
    public function show($id)
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            $project = Project::findOrFail($id);
            return view('admin.content.projects.show', compact('project'));
        } elseif (str_contains($routeName, 'news')) {
            $news = News::findOrFail($id);
            return view('admin.content.news.show', compact('news'));
        } elseif (str_contains($routeName, 'events')) {
            $event = Event::findOrFail($id);
            return view('admin.content.events.show', compact('event'));
        } elseif (str_contains($routeName, 'media')) {
            $media = Media::findOrFail($id);
            return view('admin.content.media.show', compact('media'));
        }
    }

    // Generic edit method
    public function edit($id)
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->editProject(Project::findOrFail($id));
        } elseif (str_contains($routeName, 'news')) {
            return $this->editNews(News::findOrFail($id));
        } elseif (str_contains($routeName, 'events')) {
            return $this->editEvent(Event::findOrFail($id));
        } elseif (str_contains($routeName, 'media')) {
            return $this->editMedia(Media::findOrFail($id));
        }
    }

    // Generic update method
    public function update(Request $request, $id)
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->updateProject($request, Project::findOrFail($id));
        } elseif (str_contains($routeName, 'news')) {
            return $this->updateNews($request, News::findOrFail($id));
        } elseif (str_contains($routeName, 'events')) {
            return $this->updateEvent($request, Event::findOrFail($id));
        } elseif (str_contains($routeName, 'media')) {
            return $this->updateMedia($request, Media::findOrFail($id));
        }
    }

    // Generic destroy method
    public function destroy($id)
    {
        $routeName = request()->route()->getName();
        if (str_contains($routeName, 'projects')) {
            return $this->destroyProject(Project::findOrFail($id));
        } elseif (str_contains($routeName, 'news')) {
            return $this->destroyNews(News::findOrFail($id));
        } elseif (str_contains($routeName, 'events')) {
            return $this->destroyEvent(Event::findOrFail($id));
        } elseif (str_contains($routeName, 'media')) {
            return $this->destroyMedia(Media::findOrFail($id));
        }
    }

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
        return view('admin.content.projects.content', compact('projects'));
    }

    public function createProject()
    {
        return view('admin.content.projects.create');
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'results' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv,flv,mkv|max:51200',
            'status' => 'required|string|in:planned,in_progress,completed,paused',
            'location' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        // Ensure status has a default value if not provided
        if (!isset($data['status']) || empty($data['status'])) {
            $data['status'] = 'planned';
        }

        // Set project as active by default for real-time publishing
        $data['is_active'] = $data['is_active'] ?? true;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('video')) {
            // Traiter la vidéo avec compression et découpage automatique
            $data['video'] = $this->videoService->processVideo($request->file('video'));
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
            'description' => 'nullable|string',
            'results' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv,flv,mkv|max:51200',
            'status' => 'required|string|in:planned,in_progress,completed,paused',
            'location' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('video')) {
            // Traiter la vidéo avec compression et découpage automatique
            $data['video'] = $this->videoService->processVideo($request->file('video'));
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
