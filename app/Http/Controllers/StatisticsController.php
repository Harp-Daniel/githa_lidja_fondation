<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Partner;
use App\Models\Visitor;
use App\Models\News;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
        // Donations Statistics
        $totalDonations = Donation::sum('amount');
        $donationsByStatus = Donation::select('status', DB::raw('count(*) as count'), DB::raw('sum(amount) as total'))
            ->groupBy('status')
            ->get();

        // Monthly donations for the last 12 months
        $monthlyDonations = Donation::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('sum(amount) as total')
            )
            ->where('created_at', '>=', Carbon::now()->subMonths(12))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();

        // User Management Statistics
        $volunteersByStatus = Volunteer::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get();

        $partnersByStatus = Partner::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get();

        // Visitor Statistics
        $totalVisitors = Visitor::count();
        $uniqueVisitors = Visitor::distinct('ip_address')->count('ip_address');

        // Daily visitors for the last 30 days
        $dailyVisitors = Visitor::select(
                DB::raw('DATE(visit_date) as date'),
                DB::raw('count(*) as visits'),
                DB::raw('count(distinct ip_address) as unique_visitors')
            )
            ->where('visit_date', '>=', Carbon::now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        // Content Statistics
        $totalNews = News::count();
        $activeNews = News::where('is_active', true)->count();

        $totalProjects = Project::count();
        $activeProjects = Project::where('is_active', true)->count();

        // Top pages visited
        $topPages = Visitor::select('page_visited', DB::raw('count(*) as visits'))
            ->groupBy('page_visited')
            ->orderBy('visits', 'desc')
            ->limit(10)
            ->get();

        return view('admin.statistics.index', compact(
            'totalDonations',
            'donationsByStatus',
            'monthlyDonations',
            'volunteersByStatus',
            'partnersByStatus',
            'totalVisitors',
            'uniqueVisitors',
            'dailyVisitors',
            'totalNews',
            'activeNews',
            'totalProjects',
            'activeProjects',
            'topPages'
        ));
    }

    public function archive(Request $request)
    {
        $request->validate([
            'entity' => 'required|string|in:donations,volunteers,partners,visitors',
            'months_old' => 'required|integer|min:1|max:120',
        ]);

        $cutoffDate = Carbon::now()->subMonths($request->months_old);

        $archivedCount = 0;

        switch ($request->entity) {
            case 'donations':
                $archivedCount = Donation::where('created_at', '<', $cutoffDate)->delete();
                break;
            case 'volunteers':
                $archivedCount = Volunteer::where('created_at', '<', $cutoffDate)->delete();
                break;
            case 'partners':
                $archivedCount = Partner::where('created_at', '<', $cutoffDate)->delete();
                break;
            case 'visitors':
                $archivedCount = Visitor::where('visit_date', '<', $cutoffDate)->delete();
                break;
        }

        return redirect()->route('admin.statistics.index')->with('success', "Archived {$archivedCount} {$request->entity} records older than {$request->months_old} months.");
    }

    public function export(Request $request)
    {
        $request->validate([
            'entity' => 'required|string|in:donations,volunteers,partners,visitors',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $query = null;

        switch ($request->entity) {
            case 'donations':
                $query = Donation::query();
                break;
            case 'volunteers':
                $query = Volunteer::query();
                break;
            case 'partners':
                $query = Partner::query();
                break;
            case 'visitors':
                $query = Visitor::query();
                break;
        }

        if ($request->start_date) {
            $query->where('created_at', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $query->where('created_at', '<=', $request->end_date);
        }

        $data = $query->get();

        // For now, return JSON. In production, implement CSV/PDF export
        return response()->json($data);
    }
}
