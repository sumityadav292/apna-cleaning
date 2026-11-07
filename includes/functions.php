<?php
function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }
function site_url(string $p=''): string { global $config; return rtrim($config['base_url'],'/').($p!==''?'/'.ltrim($p,'/'):'/'); }
function asset(string $p): string { return site_url('assets/'.ltrim($p,'/')); }
function page_url(string $p): string { return site_url($p); }
function current_path(): string { $p=parse_url($_SERVER['REQUEST_URI']??'/',PHP_URL_PATH)?:'/'; return rtrim($p,'/')?:'/'; }
function is_active(string $p): string { $c=current_path(); $t=rtrim(parse_url(site_url($p),PHP_URL_PATH)?:'/','/')?:'/'; return ($c===$t||($t!=='/'&&str_starts_with($c,$t.'/')))?' is-active':''; }
function start_site_session(): void { if(session_status()===PHP_SESSION_ACTIVE)return; $secure=!empty($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off'; session_set_cookie_params(['lifetime'=>0,'path'=>'/','secure'=>$secure,'httponly'=>true,'samesite'=>'Lax']); session_start(); }
function csrf_token(): string { start_site_session(); if(empty($_SESSION['csrf_token']))$_SESSION['csrf_token']=bin2hex(random_bytes(32)); return $_SESSION['csrf_token']; }
function set_flash(string $type,string $msg): void { start_site_session(); $_SESSION['flash']=['type'=>$type,'message'=>$msg]; }
function get_flash(): ?array { start_site_session(); if(empty($_SESSION['flash']))return null; $f=$_SESSION['flash']; unset($_SESSION['flash']); return $f; }
function contact_is_public(): bool { global $config; return !empty($config['contact_details_confirmed']); }
function approved_services(): array { global $config; return is_array($config['approved_services']??null)?$config['approved_services']:[]; }

function blog_posts(): array {
    return [

        // 1. DEEP CLEANING PLANNING
        'a-better-way-to-plan-a-deep-clean' => [
            'title' => 'A Better Way to Plan a Deep Clean',
            'category' => 'Planning',
            'date' => '2026-10-31',
            'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'A clear brief helps you compare scope, timing and expectations before a cleaning visit is arranged.',
            'read_time' => '5 min read',
            'body' => [
                'A useful cleaning plan starts with the space, not a generic checklist. Room count, surface types, access, current condition and any areas that need special attention all affect the work involved.',
                'Before requesting a quotation, make a short list of the spaces you want assessed. Note delicate finishes, difficult-to-reach areas, parking or access restrictions, and any timing constraints. Photos can also help explain the requirement clearly.',
                'Ask the service provider to confirm what is included, what is excluded, whether materials or equipment are part of the quotation, and how changes to the scope will be handled.',
                'For a smoother cleaning visit, put away personal belongings, secure valuables and make sure the cleaning team can access the agreed areas.',
                'The exact services, availability and process should always be confirmed directly with the business before making a booking.'
            ]
        ],

        // 2. BOOKING A CLEANING SERVICE
        'questions-to-ask-before-booking-cleaning' => [
            'title' => 'Questions to Ask Before Booking a Cleaning Service',
            'category' => 'Home Guide',
            'date' => '2026-10-24',
        'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Use these practical questions to understand the scope, preparation and quotation before you commit.',
            'read_time' => '5 min read',
            'body' => [
                'A short conversation before booking can prevent confusion later. Start by describing the property and the result you would like to achieve. Be specific about rooms, surfaces and any areas that should not be touched.',
                'Ask which tasks are included in the proposed scope, what preparation is expected from you, whether the team needs water or power access, and how long the work is expected to take.',
                'Clarify the quotation, payment terms, cancellation process and how the business handles fragile or unusual materials. If something matters to you, ask to have it recorded in the written scope.',
                'It is also useful to discuss furniture movement, appliance cleaning, parking arrangements and any access restrictions before the scheduled visit.',
                'Do not rely on a generic service name alone. Confirm the exact work and current availability with the provider.'
            ]
        ],

        // 3. EVERYDAY CLEANING HABITS
        'simple-habits-for-a-fresher-space' => [
            'title' => 'Simple Habits for a Fresher Everyday Space',
            'category' => 'Everyday Care',
            'date' => '2026-10-17',
            'image' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Small, repeatable routines can make everyday upkeep feel more manageable between deeper cleans.',
            'read_time' => '4 min read',
            'body' => [
                'An easier-to-maintain space usually comes from simple routines rather than one large effort. Put frequently used items back in a consistent place, clear small surfaces regularly and deal with spills promptly using products suitable for the material.',
                'Make your bed, organise frequently used items and wipe suitable kitchen surfaces after everyday use. Small tasks can help prevent dirt and clutter from building up.',
                'Ventilate rooms when conditions allow, follow product labels and avoid mixing household chemicals. Use separate cloths for different areas and wash reusable cleaning materials according to their care instructions.',
                'For delicate stone, wood, fabric or coated surfaces, check manufacturer guidance before using a new cleaner. A small inconspicuous test area is a sensible precaution when compatibility is uncertain.',
                'These habits support day-to-day upkeep but are not a substitute for specialist advice where a surface or material needs particular care.'
            ]
        ],

        // 4. SOFA CLEANING
        'sofa-cleaning-and-maintenance-guide' => [
            'title' => 'Sofa Cleaning and Maintenance: A Practical Guide',
            'category' => 'Upholstery Care',
            'date' => '2026-10-14',
            'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Learn how regular sofa care, fabric checks and suitable cleaning methods can help maintain your furniture.',
            'read_time' => '5 min read',
            'body' => [
                'Sofas are used regularly by family members and guests. Dust, food particles and everyday contact can gradually affect the appearance of upholstery. Regular care helps keep furniture looking presentable.',
                'Start by checking the manufacturer care label. Different materials such as cotton, polyester, velvet and leather can require different cleaning approaches.',
                'Vacuum accessible sofa surfaces using a suitable upholstery attachment. Pay attention to removable cushions, seams and corners where dust may collect.',
                'For spills, avoid aggressive rubbing. Follow the fabric care instructions and use a suitable cleaning product only after checking its compatibility on an inconspicuous area.',
                'Deep stains, delicate fabrics and large sofas may require professional assessment. Share the fabric type and condition when enquiring about sofa cleaning.',
                'The right cleaning approach depends on the sofa material, stain type and condition. Always confirm the method before proceeding.'
            ]
        ],

        // 5. KITCHEN DEEP CLEANING
        'kitchen-deep-cleaning-areas-to-focus-on' => [
            'title' => 'Kitchen Deep Cleaning: Areas You Should Never Ignore',
            'category' => 'Kitchen Care',
            'date' => '2026-10-11',
            'image' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Explore important kitchen surfaces and frequently used areas that deserve regular cleaning attention.',
            'read_time' => '6 min read',
            'body' => [
                'The kitchen is one of the busiest areas in a home. Cooking, food preparation and regular use can leave grease, food residue and dirt on frequently used surfaces.',
                'Kitchen countertops should be cleaned using products suitable for their material. Natural stone, laminate and other finishes may have different care requirements.',
                'Pay attention to the sink, taps, backsplash and accessible cabinet exteriors. These areas can collect water marks, grease and everyday residue.',
                'Appliance handles, refrigerator exteriors and frequently touched surfaces also deserve regular attention. Always follow the manufacturer instructions when cleaning appliances.',
                'Keep food preparation surfaces separate from cleaning equipment. Use appropriate cloths and avoid mixing cleaning chemicals.',
                'For a detailed kitchen deep clean, discuss cabinet interiors, appliance interiors, difficult grease buildup and other specific requirements with the cleaning provider before booking.'
            ]
        ],

        // 6. BATHROOM CLEANING
        'bathroom-cleaning-and-maintenance-tips' => [
            'title' => 'Bathroom Cleaning and Maintenance: Essential Tips',
            'category' => 'Bathroom Care',
            'date' => '2026-10-08',
            'image' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Understand how to maintain bathroom floors, tiles, fixtures and frequently used surfaces.',
            'read_time' => '5 min read',
            'body' => [
                'Bathrooms experience regular moisture, water contact and everyday use. Without consistent maintenance, soap residue, water marks and dirt can accumulate on different surfaces.',
                'Clean washbasins, taps and frequently touched surfaces regularly using products appropriate for their material. Follow product instructions and avoid abrasive tools on delicate finishes.',
                'Bathroom floors and tiles need attention too. Use a suitable cleaning method for the tile material and grout. Avoid mixing different cleaning chemicals.',
                'Keep the bathroom ventilated when possible and address standing water to help maintain a more manageable environment.',
                'Hard water deposits and stubborn stains may need a different approach depending on the surface. Do not use strong chemicals without confirming compatibility.',
                'For bathroom deep cleaning, discuss the tiles, fixtures, shower area and specific stains you want addressed before confirming the service.'
            ]
        ],

        // 7. WATER TANK CLEANING
        'water-tank-cleaning-and-maintenance-guide' => [
            'title' => 'Water Tank Cleaning: A Complete Maintenance Guide',
            'category' => 'Water Tank Care',
            'date' => '2026-10-05',
            'image' => 'https://www.pluspoint.ae/uploads/Blogs/blog_1304724368.webp',
            'excerpt' => 'Understand water tank maintenance, sediment buildup, tank inspection and important cleaning considerations.',
            'read_time' => '6 min read',
            'body' => [
                'Water storage tanks are an important part of many residential and commercial properties. Over time, dirt and sediment may accumulate depending on the tank condition, water supply and usage.',
                'Periodic inspection can help identify visible dirt, sediment buildup, damaged covers and other maintenance concerns. Check the tank access point and surrounding area as part of routine property maintenance.',
                'The cleaning requirement depends on the tank type, capacity, accessibility and current condition. Overhead and underground tanks may require different arrangements.',
                'Water tanks should be cleaned using an appropriate method. Work inside a tank can involve confined-space and other safety risks, so it should be handled by appropriately equipped and qualified personnel.',
                'After cleaning, discuss any additional maintenance or disinfection requirements with the service provider. The suitability of any treatment should be confirmed for the tank and water-use requirements.',
                'When enquiring about water tank cleaning, share the approximate capacity, tank location, access details and any visible concerns. Confirm the complete scope and quotation before booking.'
            ]
        ],

        // 8. OFFICE DEEP CLEANING
        'office-deep-cleaning-for-a-better-workplace' => [
            'title' => 'Office Deep Cleaning for a Cleaner Workplace',
            'category' => 'Office Cleaning',
            'date' => '2026-10-02',
            'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85',
            'excerpt' => 'Explore practical ways to plan office cleaning for workstations, meeting rooms and shared spaces.',
            'read_time' => '5 min read',
            'body' => [
                'Offices contain workstations, meeting rooms, reception areas and shared facilities that experience regular daily use. A planned cleaning routine can help maintain a more organised working environment.',
                'Start by identifying the main areas that need attention. Workstations, floors, meeting tables, reception spaces and washrooms may have different cleaning requirements.',
                'Electronic equipment needs particular care. Avoid spraying liquids directly onto screens, keyboards or electrical devices. Follow the manufacturer cleaning instructions.',
                'Shared surfaces such as door handles, switches and meeting room tables should be included in an appropriate cleaning routine.',
                'Office size, employee activity, floor layout and operating hours all influence the cleaning plan. Discuss access arrangements and preferred cleaning timings before scheduling work.',
                'For office deep cleaning, share the approximate area, number of floors and specific requirements so the service scope and quotation can be discussed.'
            ]
        ]

    ];
}


function json_ld(): string
{
    global $config;

    $services = [];
    foreach (approved_services() as $service) {
        $services[] = [
            '@type' => 'Offer',
            'itemOffered' => [
                '@type' => 'Service',
                'name' => $service['title'] ?? 'Cleaning Service',
                'serviceType' => $service['category'] ?? $config['business_category'],
            ],
        ];
    }

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'CleaningService',
        'name' => $config['business_name'],
        'url' => $config['base_url'],
        'description' => $config['business_category'] . ' in ' . $config['location'] . '.',
        'telephone' => $config['phone'],
        'email' => $config['email'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $config['address'],
            'addressLocality' => 'Mumbai',
            'addressRegion' => 'Maharashtra',
            'postalCode' => '400102',
            'addressCountry' => 'IN',
        ],
        'areaServed' => array_map(static function ($area) {
            return ['@type' => 'Place', 'name' => $area . ', Mumbai, Maharashtra'];
        }, $config['service_areas']),
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Apna Cleaning Services',
            'itemListElement' => $services,
        ],
    ];

    if (!empty($config['opening_hours_schema'])) {
        $data['openingHours'] = $config['opening_hours_schema'];
    }

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}
