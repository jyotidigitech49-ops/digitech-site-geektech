<?php

namespace App\Http\Controllers;

class TrademarkDisclaimerController extends Controller
{
    public function index()
    {
        $disclaimer = [
            'title' => 'Trademark Disclaimer',
            'date' => 'June 2026',
            'intro' => [
                'This Trademark Disclaimer explains the use of trademarks, service marks, trade names, logos, brand names, product names, and other intellectual property references that may appear on the Eagles Repair website.',
                'By accessing and using this website, you acknowledge and agree to the terms outlined in this Trademark Disclaimer.',
                'Eagles Repair operates as an independent technology, information, and product discovery platform. References to products, manufacturers, brands, trademarks, and related intellectual property are made solely for informational, identification, descriptive, and reference purposes.',
            ],
            'sections' => [
                [
                    'title' => 'Ownership Of Trademarks',
                    'body' => [
                        'All trademarks, service marks, logos, trade names, product names, company names, and brand identifiers appearing on this website remain the exclusive property of their respective owners.',
                        'Nothing contained on this website shall be interpreted as granting any license, ownership right, authorization, or permission to use any trademark displayed on the website without the prior written consent of the respective trademark owner.',
                        'The inclusion of trademarks on this website does not transfer any intellectual property rights to Eagles Repair or to website users.',
                    ],
                ],
                [
                    'title' => 'Informational Use Of Trademarks',
                    'body' => ['References to trademarks and branded products may be used throughout the website for purposes including:', 'Such references are used only to help users identify products and understand the information presented on the website.'],
                    'items' => ['Product Identification', 'Product Reference', 'Product Comparison', 'Product Categorization', 'Informational Content', 'Educational Content', 'Compatibility References', 'Technical Documentation References', 'Industry Discussions', 'Product Descriptions'],
                ],
                [
                    'title' => 'No Affiliation Or Endorsement',
                    'body' => ['Unless expressly stated in writing, Eagles Repair:'],
                    'items' => ['Is Not Owned By Any Product Manufacturer', 'Is Not Operated By Any Product Manufacturer', 'Is Not Sponsored By Any Product Manufacturer', 'Is Not Endorsed By Any Product Manufacturer', 'Is Not Officially Affiliated With Any Product Manufacturer', 'Does Not Represent Any Product Manufacturer'],
                    'note' => 'The appearance of a trademark, logo, product name, or company name on this website should not be interpreted as evidence of partnership, sponsorship, endorsement, authorization, certification, agency relationship, joint venture, or official relationship with the respective trademark owner.',
                ],
                [
                    'title' => 'Product References',
                    'body' => ['The website may reference various technology products, brands, manufacturers, and solutions.', 'Such references are provided solely to:'],
                    'items' => ['Identify Products', 'Describe Product Features', 'Present Product Information', 'Discuss Product Categories', 'Facilitate Product Research', 'Support Informational Content'],
                    'note' => 'All product names remain the property of their respective trademark owners. Eagles Repair does not claim ownership of any third-party product names or trademarks displayed on the website.',
                ],
                [
                    'title' => 'Logos And Brand Assets',
                    'body' => [
                        'Third-party logos, brand identifiers, trademarks, and related visual assets may occasionally appear on the website for identification and informational purposes.',
                        'All rights associated with such materials remain with their respective owners.',
                        'Any use of third-party logos should not be interpreted as endorsement, sponsorship, authorization, official partnership, or certification unless expressly stated in writing.',
                    ],
                ],
                [
                    'title' => 'Fair Use And Nominative Reference',
                    'body' => [
                        'Certain trademarks may be referenced for nominative, descriptive, editorial, informational, or comparative purposes where permitted by applicable law.',
                        'References are intended solely to identify products, services, or companies and not to imply ownership, sponsorship, endorsement, or affiliation.',
                        'Eagles Repair makes reasonable efforts to use trademark references lawfully and appropriately.',
                    ],
                ],
                [
                    'title' => 'Intellectual Property Rights',
                    'body' => ['All third-party intellectual property rights remain fully reserved by their respective owners.', 'Nothing contained on this website shall be interpreted as granting users:'],
                    'items' => ['Trademark Rights', 'Copyright Rights', 'Licensing Rights', 'Distribution Rights', 'Commercial Rights', 'Reproduction Rights'],
                    'note' => 'Users remain responsible for ensuring compliance with applicable intellectual property laws.',
                ],
                [
                    'title' => 'Requests From Trademark Owners',
                    'body' => ['Eagles Repair respects the intellectual property rights of trademark owners.', 'If a trademark owner believes that any content appearing on the website:'],
                    'items' => ['Infringes Trademark Rights', 'Creates Marketplace Confusion', 'Misrepresents Ownership', 'Improperly Uses Brand Assets', 'Violates Intellectual Property Rights'],
                    'note' => 'They may contact us using the information provided below. Reasonable efforts will be made to review and address legitimate concerns in accordance with applicable laws and regulations.',
                ],
                [
                    'title' => 'No Warranty Regarding Third-Party Rights',
                    'body' => ['Eagles Repair makes no representation or warranty regarding:'],
                    'items' => ['Ownership Of Third-Party Trademarks', 'Validity Of Third-Party Intellectual Property Rights', 'Accuracy Of Third-Party Intellectual Property Claims', 'Scope Of Trademark Protection'],
                    'note' => 'Users are encouraged to consult official sources for information regarding trademark ownership and intellectual property rights.',
                ],
                [
                    'title' => 'Limitation Of Liability',
                    'body' => ['Eagles Repair shall not be liable for any claims, losses, damages, or disputes arising from:'],
                    'items' => ['User Reliance On Trademark Information', 'Third-Party Trademark Claims', 'Intellectual Property Disputes', 'Product Identification Errors', 'Misinterpretation Of Brand References'],
                    'note' => 'Users assume responsibility for their own use and interpretation of information presented on the website.',
                ],
                [
                    'title' => 'Changes To This Trademark Disclaimer',
                    'body' => [
                        'Eagles Repair reserves the right to modify, update, or replace this Trademark Disclaimer at any time without prior notice.',
                        'Changes become effective immediately upon publication on the website.',
                        'Continued use of the website following any changes constitutes acceptance of the revised Trademark Disclaimer.',
                    ],
                ],
                [
                    'title' => 'Contact Information',
                    'body' => ['If you have questions regarding this Trademark Disclaimer or wish to report a trademark-related concern, please contact us using the details below.'],
                    'contact' => [
                        'Business Name' => 'Eagles Repair',
                        'Business Address' => '196 Tosto RD, Beaufort, NC 28526',
                        'Email Address' => 'info@geektechbuzz.us',
                    ],
                ],
                [
                    'title' => 'Acceptance Of This Disclaimer',
                    'body' => ['By accessing, browsing, or using this website, you acknowledge that you have read, understood, and agreed to the terms outlined in this Trademark Disclaimer.'],
                ],
            ],
        ];

        return view('policy.trademark_disclaimer', compact('disclaimer'));
    }
}
