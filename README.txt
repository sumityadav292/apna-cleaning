APNA CLEANING WEBSITE
=====================

Business
--------
Name: Apna Cleaning
Category: Professional Upholstery & Home Cleaning Services
Location: Andheri, Mumbai, Maharashtra
Service areas: Andheri West, Andheri East and nearby Mumbai locations
Phone / WhatsApp: +91 9918136319
Email: Apnacleaning@gmail.com
Address: Shop No. 5, Philip Ticksera Chawl, Link Road, Opposite Leo Tower, Adarsh Nagar, Jogeshwari West, Mumbai, Maharashtra 400102

Technology
----------
- Core PHP, HTML5, CSS3 and JavaScript
- No database is required for the current site
- Existing visual design and main stylesheet are retained
- Contact enquiry form prepares a WhatsApp message in the visitor's browser

Main files
----------
- config/config.php: business information, contact details and service catalogue
- includes/header.php: shared navigation and SEO metadata
- includes/footer.php: shared footer and floating contact buttons
- includes/functions.php: common helpers and structured business data
- includes/service-content.php: unique content for each service detail page
- index.php: homepage
- services.php: complete service catalogue
- services/detail.php: individual service detail template
- contact.php: contact details and WhatsApp enquiry form
- sitemap.xml: public pages and all 26 service URLs

Service catalogue
-----------------
There are 26 individual service pages across sofa and upholstery care, carpet and rug care, mattress care, curtain care, window cleaning and home cleaning. Service slugs are configured in config/config.php and their dedicated copy is in includes/service-content.php.

Deployment notes
----------------
1. Upload the contents of this folder to the intended PHP hosting document root or configured subfolder.
2. Confirm the live domain, then update config/config.php base_url, sitemap.xml and robots.txt to that domain.
3. Ensure PHP sessions are enabled if enquiry status messages are used.
4. The contact form opens WhatsApp with a pre-filled message. Confirm that the WhatsApp number is correct before launch.
5. Confirm current operating hours and service availability with the business before publishing any hours or promises.
6. Test all service links, phone, email, WhatsApp and the map on the live domain after deployment.

The original inner ZIP backup is retained as supplied in the source folder.
