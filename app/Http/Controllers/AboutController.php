<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $intro = [
            'eyebrow' => 'About Us',
            'title' => 'Introducing Eagles Repair',
            'description' => 'Our platform is dedicated to offering a carefully organized collection of all-in-one, laser, inkjet, LED, and large format printers designed for different printing environments and requirements. We aim to help customers explore, compare, and select printing solutions that align with their workspace needs, document demands, and everyday productivity goals.',
        ];

        $features = [
            [
                'icon' => 'icon-docs',
                'title' => 'Product Information',
                'description' => 'Detailed product specifications.',
            ],
            [
                'icon' => 'icon-envelope',
                'title' => 'Quote Requests',
                'description' => 'Submit your enquiry.',
            ],
            [
                'icon' => 'icon-briefcase',
                'title' => 'Business Solutions',
                'description' => 'Built for workplaces.',
            ],
            [
                'icon' => 'icon-grid',
                'title' => 'Printer Categories',
                'description' => 'Explore printer categories.',
            ],
        ];

        $banners = [
            [
                'label' => '',
                'title' => 'Thoughtfully Organized For Easier Selection',
                'description' => 'Browse printer collections arranged to help simplify product discovery and comparison.',
                'button' => 'Browse Range',
                'url' => url('/products'),
                'image' => asset('assets/images/banner/banner-about3.png'),
            ],
            [
                'label' => '',
                'title' => 'Different Technologies, One Collection',
                'description' => 'Explore a range of printing options designed for varying environments, workflows, and output preferences.',
                'button' => 'View Products',
                'url' => url('/products'),
                'image' => asset('assets/images/banner/banner-about4.png'),
            ],
        ];

        $collection = [
            'title' => 'About Our Collection',
            'description' => 'Our platform is dedicated to providing a diverse range of printing solutions designed for different environments, workflows, and document requirements. Through carefully organized categories that include all-in-one, laser, inkjet, LED, and large format printers, we help customers explore products, compare specifications, and identify options that align with their printing needs.',
        ];

        $whyChoose = [
            'title' => 'Why Choose Us',
            'description' => 'Choosing the right printer involves more than simply selecting a model. Our goal is to provide a straightforward shopping experience supported by clear product information, organized categories, and transparent policies that help customers make informed purchasing decisions.',
            'points' => [
                [
                    'title' => 'Curated Printer Collection',
                    'description' => 'Explore all-in-one, laser, inkjet, LED, and large format printers organized to support different printing requirements and environments.',
                ],
                [
                    'title' => 'Detailed Product Information',
                    'description' => 'Access specifications, features, and product details that help simplify product comparison and selection.',
                ],
                [
                    'title' => 'Secure & Transparent Shopping',
                    'description' => 'Shop with confidence through protected checkout systems and clearly presented shipping, return, and purchase policies.',
                ],
            ],
        ];

        $cta = [
            'title' => 'Ready To Explore Our Printer Collection?',
            'description' => 'Access a carefully organized range of printing<br>technologies and discover products suited to your workflow.',
            'button' => 'Browse Products',
            'url' => url('/products'),
        ];

        $bannerImage = asset('assets/images/common-banner/comm-banner.png');
        $heroImage = asset('assets/images/banner/about-pic.png');

        return view('about.aboutus', compact(
            'intro',
            'features',
            'banners',
            'collection',
            'whyChoose',
            'cta',
            'bannerImage',
            'heroImage'
        ));
    }
}
