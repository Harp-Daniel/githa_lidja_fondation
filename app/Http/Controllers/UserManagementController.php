<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\Donation;
use App\Models\Partner;
use Illuminate\Support\Facades\Mail;

class UserManagementController extends Controller
{
    // Volunteers Management
    public function indexVolunteers()
    {
        $volunteers = Volunteer::orderBy('created_at', 'desc')->get();
        return view('admin.users.volunteers.index', compact('volunteers'));
    }

    public function showVolunteer(Volunteer $volunteer)
    {
        return view('admin.users.volunteers.show', compact('volunteer'));
    }

    public function updateVolunteerStatus(Request $request, Volunteer $volunteer)
    {
        $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
            'admin_response' => 'nullable|string',
        ]);

        $volunteer->update([
            'status' => $request->status,
            'admin_response' => $request->admin_response,
            'responded_at' => now(),
        ]);

        // Send email response if status changed to approved or rejected
        if (in_array($request->status, ['approved', 'rejected'])) {
            $this->sendVolunteerResponseEmail($volunteer);
        }

        return redirect()->route('admin.volunteers.index')->with('success', 'Volunteer status updated successfully.');
    }

    public function destroyVolunteer(Volunteer $volunteer)
    {
        $volunteer->delete();
        return redirect()->route('admin.volunteers.index')->with('success', 'Volunteer deleted successfully.');
    }

    // Donations Management
    public function indexDonations()
    {
        $donations = Donation::orderBy('created_at', 'desc')->get();
        return view('admin.users.donations.index', compact('donations'));
    }

    public function showDonation(Donation $donation)
    {
        return view('admin.users.donations.show', compact('donation'));
    }

    public function updateDonationStatus(Request $request, Donation $donation)
    {
        $request->validate([
            'status' => 'required|string|in:pending,completed,failed',
        ]);

        $donation->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Donation status updated successfully.');
    }

    public function destroyDonation(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index')->with('success', 'Donation deleted successfully.');
    }

    // Partners Management
    public function indexPartners()
    {
        $partners = Partner::orderBy('created_at', 'desc')->get();
        return view('admin.users.partners.index', compact('partners'));
    }

    public function showPartner(Partner $partner)
    {
        return view('admin.users.partners.show', compact('partner'));
    }

    public function updatePartnerStatus(Request $request, Partner $partner)
    {
        $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
            'admin_response' => 'nullable|string',
        ]);

        $partner->update([
            'status' => $request->status,
            'admin_response' => $request->admin_response,
            'responded_at' => now(),
        ]);

        // Send email response if status changed to approved or rejected
        if (in_array($request->status, ['approved', 'rejected'])) {
            $this->sendPartnerResponseEmail($partner);
        }

        return redirect()->route('admin.partners.index')->with('success', 'Partner status updated successfully.');
    }

    public function destroyPartner(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted successfully.');
    }

    // Email sending methods
    private function sendVolunteerResponseEmail(Volunteer $volunteer)
    {
        $subject = $volunteer->status === 'approved'
            ? 'Votre demande de bénévolat a été approuvée - Fondation GITHA LIDJA'
            : 'Mise à jour concernant votre demande de bénévolat - Fondation GITHA LIDJA';

        $message = $volunteer->status === 'approved'
            ? "Félicitations ! Votre demande de bénévolat a été approuvée. Nous vous contacterons bientôt pour les prochaines étapes."
            : "Nous regrettons de vous informer que votre demande de bénévolat n'a pas été retenue pour le moment.";

        if ($volunteer->admin_response) {
            $message .= "\n\nMessage de l'administrateur :\n" . $volunteer->admin_response;
        }

        // For now, we'll just log the email. In production, implement actual email sending
        \Log::info('Volunteer Response Email', [
            'to' => $volunteer->email,
            'subject' => $subject,
            'message' => $message,
        ]);
    }

    private function sendPartnerResponseEmail(Partner $partner)
    {
        $subject = $partner->status === 'approved'
            ? 'Votre demande de partenariat a été approuvée - Fondation GITHA LIDJA'
            : 'Mise à jour concernant votre demande de partenariat - Fondation GITHA LIDJA';

        $message = $partner->status === 'approved'
            ? "Félicitations ! Votre demande de partenariat a été approuvée. Nous vous contacterons bientôt pour discuter des détails."
            : "Nous regrettons de vous informer que votre demande de partenariat n'a pas été retenue pour le moment.";

        if ($partner->admin_response) {
            $message .= "\n\nMessage de l'administrateur :\n" . $partner->admin_response;
        }

        // For now, we'll just log the email. In production, implement actual email sending
        \Log::info('Partner Response Email', [
            'to' => $partner->email,
            'subject' => $subject,
            'message' => $message,
        ]);
    }
}
