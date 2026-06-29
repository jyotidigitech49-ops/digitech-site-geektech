<?php

namespace App\Http\Controllers;

class WarrantyManufacturerInformationController extends Controller
{
    public function index()
    {
        $warrantyPolicy = [
            'title' => 'Warranty and Manufacturer Responsibility Disclaimer',
            'date' => 'June 2026',
            'summary' => 'Warranty coverage, product support, repairs, replacements, and eligibility decisions generally remain the responsibility of the applicable manufacturer.',
            'intro' => [
                'This Warranty and Manufacturer Responsibility Disclaimer explains the relationship between Eagles Repair, product manufacturers, and any warranties that may apply to products referenced on this website.',
                'Eagles Repair operates as a technology, information, and product discovery platform. The website provides information regarding technology products, including printers, scanners, desktops, thin clients, and related technology solutions.',
                'By accessing and using this website, you acknowledge and agree to the terms outlined in this Disclaimer.',
            ],
            'sections' => [
                [
                    'title' => 'Purpose Of This Disclaimer',
                    'body' => ['The purpose of this Disclaimer is to clarify:'],
                    'items' => ['The role of Eagles Repair.', 'The responsibility of product manufacturers.', 'The scope of any manufacturer\'s warranties.', 'The limitations of the information presented on the website.', 'The absence of independent product warranties provided by Eagles Repair unless expressly stated.'],
                    'note' => 'Users should carefully review this Disclaimer before relying on any warranty-related information.',
                ],
                [
                    'title' => 'Independent Website Status',
                    'body' => ['Eagles Repair operates as an independent technology information platform.', 'Unless expressly stated in writing:'],
                    'items' => ['Eagles Repair is not a product manufacturer.', 'Eagles Repair is not a warranty provider.', 'Eagles Repair is not an authorized warranty service center.', 'Eagles Repair is not responsible for administering manufacturer warranties.', 'Eagles Repair does not make warranty decisions on behalf of manufacturers.'],
                    'note' => 'References to products on this website do not create any warranty obligations on the part of Eagles Repair.',
                    'highlight' => true,
                ],
                [
                    'title' => 'Manufacturer Responsibility',
                    'body' => ['Product manufacturers are solely responsible for:'],
                    'items' => ['Product Design', 'Product Development', 'Product Manufacturing', 'Product Quality Control', 'Product Safety', 'Product Documentation', 'Product Specifications', 'Warranty Coverage', 'Warranty Terms', 'Warranty Administration', 'Product Support Programs', 'Product Recalls'],
                    'note' => 'Any warranty associated with a product is generally governed by the policies, terms, and conditions established by the manufacturer. Users should review official manufacturer documentation for complete warranty details.',
                ],
                [
                    'title' => 'No Independent Product Warranty',
                    'body' => ['Unless expressly stated in writing, Eagles Repair does not provide:'],
                    'items' => ['Product Warranties', 'Performance Guarantees', 'Service Guarantees', 'Product Guarantees', 'Manufacturer-Level Coverage', 'Extended Warranties', 'Repair Guarantees', 'Replacement Guarantees'],
                    'note' => 'The website does not create or imply any warranty obligation beyond those that may be provided by the original manufacturer.',
                    'highlight' => true,
                ],
                [
                    'title' => 'Manufacturer Warranty Information',
                    'body' => ['Warranty information displayed on the website may be provided for informational purposes only.', 'Such information may include:'],
                    'items' => ['Warranty Periods', 'Warranty Categories', 'Coverage Descriptions', 'Manufacturer Support Information', 'Product Registration Information'],
                    'note' => 'Eagles Repair does not guarantee that warranty information displayed on the website is complete, current, or unchanged. Manufacturers may revise warranty terms at any time without notice. Users should verify warranty information directly with the manufacturer.',
                ],
                [
                    'title' => 'Warranty Eligibility',
                    'body' => ['Warranty eligibility may depend upon factors including:'],
                    'items' => ['Product Model', 'Product Serial Number', 'Geographic Region', 'Date Of Purchase', 'Registration Status', 'Manufacturer Requirements', 'Product Condition', 'Original Ownership Status'],
                    'note' => 'Eagles Repair does not determine warranty eligibility and cannot guarantee that any particular product qualifies for warranty coverage. Warranty determinations remain solely the responsibility of the manufacturer.',
                ],
                [
                    'title' => 'Warranty Claims',
                    'body' => ['Any warranty claim should generally be directed to the applicable manufacturer or authorized warranty provider.', 'Eagles Repair:'],
                    'items' => ['Does Not Process Warranty Claims.', 'Does Not Approve Warranty Claims.', 'Does Not Deny Warranty Claims.', 'Does Not Determine Warranty Coverage.', 'Does Not Control Manufacturer Decisions.'],
                    'note' => 'Users should consult the manufacturer\'s official warranty documentation for claim procedures.',
                ],
                [
                    'title' => 'Product Repairs And Replacements',
                    'body' => ['Any repairs, replacements, or warranty-related services are generally governed by the manufacturer\'s warranty policies.', 'Eagles Repair does not guarantee:'],
                    'items' => ['Product Repair Services', 'Product Replacement Services', 'Warranty Service Availability', 'Warranty Service Timelines', 'Warranty Service Approval'],
                    'note' => 'All repair and replacement decisions remain subject to the manufacturer\'s policies and procedures.',
                ],
                [
                    'title' => 'Product Information And Warranty Content',
                    'body' => ['Warranty references appearing on the website are provided solely as general information.', 'Eagles Repair does not warrant that:'],
                    'items' => ['Warranty Terms Remain Unchanged.', 'Warranty Coverage Is Universal.', 'Warranty Information Is Error-Free.', 'Warranty Coverage Applies To Every User.', 'Manufacturer Policies Will Remain The Same.'],
                    'note' => 'Users should consult official manufacturer resources before relying upon warranty-related information.',
                ],
                [
                    'title' => 'Limitation Of Responsibility',
                    'body' => ['Eagles Repair shall not be responsible for:'],
                    'items' => ['Manufacturer Warranty Decisions.', 'Warranty Claim Outcomes.', 'Warranty Denials.', 'Product Defects.', 'Manufacturing Defects.', 'Product Failures.', 'Warranty Processing Delays.', 'Repair Delays.', 'Product Recall Decisions.', 'Manufacturer Support Policies.'],
                    'note' => 'Responsibility for these matters rests solely with the applicable manufacturer or warranty provider.',
                ],
                [
                    'title' => 'No Guarantee Of Product Performance',
                    'body' => ['References to products, specifications, features, or capabilities should not be interpreted as guarantees of:'],
                    'items' => ['Product Performance', 'Product Reliability', 'Product Lifespan', 'Product Compatibility', 'Product Suitability', 'Product Results'],
                    'note' => 'Actual product performance may vary depending on usage conditions, configurations, maintenance practices, and other factors.',
                ],
                [
                    'title' => 'Third-Party Products',
                    'body' => [
                        'The website may reference products manufactured by third parties.',
                        'All warranties associated with third-party products remain the responsibility of the applicable manufacturer unless otherwise expressly stated.',
                        'Eagles Repair does not assume responsibility for third-party warranty programs.',
                    ],
                ],
                [
                    'title' => 'Changes To Warranty Information',
                    'body' => [
                        'Manufacturers may update, modify, suspend, or discontinue warranty programs at any time.',
                        'Eagles Repair is not responsible for monitoring or immediately updating all manufacturer warranty changes.',
                        'Users should verify current warranty information through official manufacturer resources.',
                    ],
                ],
                [
                    'title' => 'No Legal Or Professional Advice',
                    'body' => ['Nothing contained in this Disclaimer should be interpreted as:'],
                    'items' => ['Legal Advice', 'Warranty Advice', 'Consumer Rights Advice', 'Professional Advice'],
                    'note' => 'Users should seek appropriate professional guidance regarding warranty rights and obligations when necessary.',
                ],
                [
                    'title' => 'Contact Information',
                    'body' => ['If you have questions regarding this Warranty and Manufacturer Responsibility Disclaimer, please contact us using the information below.'],
                    'contact' => [
                        'Business Name' => 'Eagles Repair',
                        'Business Address' => '196 Tosto RD, Beaufort, NC 28526',
                        'Email Address' => 'info@geektechbuzz.us',
                    ],
                ],
                [
                    'title' => 'Acceptance Of This Disclaimer',
                    'body' => ['By accessing, browsing, or using this website, you acknowledge that you have read, understood, and agreed to the terms outlined in this Warranty and Manufacturer Responsibility Disclaimer.'],
                ],
            ],
        ];

        $bannerImage = asset('assets/images/common-banner/comm-banner.png');

        return view('policy.warranty-manufacturer-information', compact('warrantyPolicy', 'bannerImage'));
    }
}
