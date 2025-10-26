# Reorganize Views into Admin and Public Folders - COMPLETED

## Information Gathered
- Current structure has mixed admin and public views in resources/views/
- Admin views: dashboard.blade.php, auth/ folder
- Public views: home.blade.php, about.blade.php, contact.blade.php, news.blade.php, projects.blade.php, partners.blade.php, volunteer.blade.php, donate.blade.php, welcome.blade.php
- Layouts already separated: layouts/app.blade.php (admin), layouts/public.blade.php (public)
- Partials already separated: layouts/partials/ (admin), layouts/public/partials/ (public)

## Plan
1. ✅ Create admin/ and public/ directories under resources/views/
2. ✅ Move admin views to resources/views/admin/
3. ✅ Move public views to resources/views/public/
4. ✅ Update layout extends in moved files
5. ✅ Update any references in controllers or routes if needed

## Dependent Files to Edit
- ✅ All view files that extend layouts
- ✅ Controllers that return views (PublicController, DashboardController)
- ✅ Routes that reference views

## Followup Steps
- ✅ Test that all views load correctly after reorganization
- ✅ Update any hardcoded view paths in controllers
- ✅ Verify routes still work
