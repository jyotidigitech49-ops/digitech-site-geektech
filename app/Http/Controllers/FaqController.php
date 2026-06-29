<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                'question' => 'What is Eagles Repair?',
                'answer' => 'Eagles Repair is an online platform that provides technology-related information, resources, and product insights.',
            ],
            [
                'question' => 'What kind of information can I find on the website?',
                'answer' => 'Visitors can explore technology-related content, product information, category pages, and educational resources.',
            ],
            [
                'question' => 'Is the information on the website free to access?',
                'answer' => 'Yes. Website content is available for visitors to browse and review for informational purposes.',
            ],
            [
                'question' => 'How often is website content updated?',
                'answer' => 'Content may be updated periodically to improve accuracy, relevance, and user experience.',
            ],
            [
                'question' => 'Can I contact Eagles Repair with questions?',
                'answer' => 'Yes. Visitors may contact us using the contact information available on the website.',
            ],
            [
                'question' => 'Does Eagles Repair guarantee the accuracy of all information?',
                'answer' => 'While reasonable efforts are made to keep content current, users should independently verify important information when necessary.',
            ],
            [
                'question' => 'Who can use this website?',
                'answer' => 'The website is intended for individuals, businesses, and anyone seeking technology-related information and resources.',
            ],
            [
                'question' => 'Does the website collect personal information?',
                'answer' => 'Certain information may be collected when users interact with forms or website features. Please refer to our Privacy Policy for details.',
            ],
            [
                'question' => 'Can content on the website change without notice?',
                'answer' => 'Yes. Information, features, and website content may be updated, modified, or removed at any time.',
            ],
            [
                'question' => "Where can I learn more about the website's policies?",
                'answer' => 'Additional information can be found in our Privacy Policy, Terms and Conditions, Disclaimer, and other policy pages available on the website.',
            ],
        ];

        $bannerImage = asset('assets/images/common-banner/comm-banner.png');

        return view('faq.index', compact('faqs', 'bannerImage'));
    }
}
