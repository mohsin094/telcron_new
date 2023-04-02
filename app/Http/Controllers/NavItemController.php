<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavItemController extends Controller
{
    public function store()
    {
        $title = 'Store';

        return view('site.store', compact('title'));
    }

    // lav Reservation

    public function labReservation()
    {
        $title = 'Lav Reservation';

        return view('site.lab_reservation', compact('title'));
    }
    public function labStepTwo()
    {
        $title = 'Lav Reservation';

        return view('site.lab_reservation', compact('title'));
    }

    //product & include

    public function mobilityServices()
    {
        $title = 'Mobility Services';

        return view('site.product_include.mobility-services', compact('title'));
    }
    public function businessMessaging()
    {
        $title = 'Business Messaging';

        return view('site.product_include.business_messaging', compact('title'));
    }
    public function telcronBusinessMessaging()
    {
        $title = 'TELCRON Business Messaging';

        return view('site.product_include.telcron_business_messaging', compact('title'));
    }

    //services

    public function eSource()
    {
        $title = 'Esource';

        return view('site.services.eSource', compact('title'));
    }

    public function consulting()
    {
        $title = 'Consulting';

        return view('site.services.consulting', compact('title'));
    }
    public function emc()
    {
        $title = 'EMC Overview';

        return view('site.services.product_research', compact('title'));
    }
    public function productSafety()
    {
        $title = 'Product Safety';

        return view('site.services.product-safety', compact('title'));
    }
    public function complianceManagement()
    {
        $title = 'Compliance Management';

        return view('site.services.compliance_management', compact('title'));
    }
    public function rfExposure()
    {
        $title = 'RF Exposure';

        return view('site.services.rf_exposure', compact('title'));
    }
    public function referenceLink()
    {
        $title = 'Reference Links';

        return view('site.services.reference-link', compact('title'));
    }
    public function products()
    {
        $title = 'Products';

        return view('site.services.products', compact('title'));
    }

    //about

    public function ourPartners()
    {
        $title = 'Our Partners';

        return view('site.about.our_partners', compact('title'));
    }

    public function ourCapabilities()
    {
        $title = 'Our Capabilities';

        return view('site.about.our_capabilities', compact('title'));
    }

    public function ourTeam()
    {
        $title = 'Our Team';

        return view('site.about.our_team', compact('title'));
    }

    public function blog()
    {
        $title = 'Blog';

        return view('site.about.blog', compact('title'));
    }

    public function blogSamuelJames()
    {
        $title = 'Samson';

        return view('site.about.blog_samuel_james', compact('title'));
    }


    //lab reservation

    public function scheduleTesting()
    {
        $title = 'Schedule Testing';

        return view('site.lab_reservation.schedule_testing', compact('title'));
    }
}
