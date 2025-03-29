<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutStatics;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\PartnerItem;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Setting;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $settings = Setting::first();
        $about_statics = AboutStatics::latest()->get();
        $about = About::first();
        $service = Service::first();
        $service_items = ServiceItem::latest()->get();
        $partner = Partner::first();
        $partner_items = PartnerItem::latest()->get();
        return view('welcome', compact('settings', 'about_statics', 'about', 'service', 'service_items', 'partner', 'partner_items'));
    }

    public function contactStore(Request $data)
    {
        Contact::create([
            'name' => $data->name,
            'phone_number' => $data->intro_phone . $data->phone_number,
            'email' => $data->email,
            'subject' => $data->subject,
            'message' => $data->message,
        ]);
        return response()->json(__('dashboard.operation accomplished successfully'));
    }
}
