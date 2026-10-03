# CLASSS Projects — team demo and WordPress foundation

Prepared by Projiverse from the full 19-page CLASSS development brief.

## What is delivered

1. Live interactive team preview: responsive storefront and mobile web-app experience, dummy catalogue and demo role sign-in, browser-local cart/orders/enquiries/CMS, mock payments and quotations. This is a static interactive prototype, not a WordPress installation.
2. `classs-theme.zip`: installable custom WordPress theme, matching the preview's engineering design direction.
3. `classs-core.zip`: installable custom-content foundation for project CMS, taxonomy, REST-visible project fields, enquiry pipeline, customer requests, sample-content setup and WooCommerce image fallback.

The WordPress theme is named **CLASSS Engineering**: white, deep navy and electric blue; Space Grotesk headings and DM Sans body text. No paid page builder or theme licence is required for these files. WordPress and WooCommerce retain their own licences.

## Team preview credentials

Customer: student@example.com / ClasssDemo123!
Admin: admin@example.com / ClasssAdmin123!

These are deliberately public dummy credentials for the prototype only. The sign-in is a frontend role simulation; it is not secure authentication. Never reuse these passwords on WordPress. Demo state is stored in the browser and is not shared across devices. Uploads record filenames only; no file bytes are uploaded. Notifications, payments, shipping and WhatsApp are simulated. No real customer information should be entered.

## Suggested team walkthrough

1. Home: Build / Buy / Print / Automate, featured projects, products, trending technologies and institution CTA.
2. Projects: search Arduino or ESP32; try branch, difficulty and budget filters; open a project and explore component links.
3. Shop: add components to bag, sign in as customer and complete a demo purchase. Also try a failed payment.
4. Customer account: view the order, project requests, quotations and simulated notifications.
5. 3D printing: attach a dummy model filename, choose options and request a quote. Estimate uses entered weight only; no geometry analysis.
6. Bulk orders: attach a dummy Excel/PDF filename and submit a sample institution requirement.
7. Admin: review that request, enter a quote, change status, edit product stock/price, edit project content and change homepage selections.
8. Sign back in as customer: accept the sample quotation and review notifications.
9. Mobile: use a phone browser. Install app / Add to Home Screen where supported. This is a web app, not an App Store or Play Store native application.

## Install the WordPress foundation on staging

Prerequisites: a supported WordPress/WooCommerce installation, PHP 8.1+, MySQL/MariaDB, HTTPS, backups and a staging site. Owning a domain alone is not a hosting installation.

1. In WordPress, install WooCommerce using its official plugin and complete its setup.
2. Appearance → Themes → Add New → Upload Theme → `classs-theme.zip` → activate.
3. Plugins → Add New → Upload Plugin → `classs-core.zip` → activate.
4. Settings → CLASSS Setup → Import staging sample content.
5. Settings → Permalinks → save. Confirm projects archive `/projects/` and individual `/project/.../` URLs.
6. WooCommerce → Settings: set store country/currency, account pages, cart/checkout pages and sandbox payment rules. Sample INR prices are illustrative.
7. Appearance → Customize → CLASSS homepage: edit headline, description and hero image.
8. Projects: edit content, featured image or image URL, branch, technology, difficulty, indicative budget, explanation, applications, product IDs, video, public document URL and SEO metadata. Projects remain editable through WordPress; no code changes are needed for these fields.
9. Products: use native WooCommerce to manage price, stock, SKU, categories, variations and product photographs. Replace remote illustrative images with approved owned Media Library assets.
10. CLASSS Enquiries: review submissions, set status, record quotations and team notes. Logged-in customers can see their own submissions in My Account → Project requests.
11. Create separate staging customer and staff accounts through WordPress with fresh passwords. Do not create an admin using the prototype credentials.
12. Configure the real WhatsApp number in Settings → CLASSS Setup only when ready. Clicking its enabled link opens WhatsApp; form submissions do not automatically send messages.

## What still requires production implementation

- Deploy and test PHP theme/plugin on connected hosting. PHP and WordPress runtime validation were unavailable in the build workspace.
- Configure server-side authentication and appropriate staff roles; the foundation uses native WordPress/WooCommerce accounts, with enquiries restricted to administrators.
- Configure and sandbox-test Razorpay or the selected payment gateway, shipping provider and WooCommerce tax/shipping settings.
- Connect SMTP/transactional email and WhatsApp/SMS providers. The foundation records requests but does not automatically email quotations.
- Implement private STL/OBJ/STEP/BOM uploads with authenticated storage, file validation, size limits and access controls. Uploads are intentionally disabled in the foundation, rather than stored publicly in the Media Library.
- Add private customer quote acceptance, PO attachment, quote-to-order conversion, enquiry notifications and institution pricing as scoped extensions.
- Add automatic 3D geometry/slicing quotation and real AI-assisted search only when specified; neither is provided by the demo estimate/keyword search.
- Configure advanced catalogue filters, product variations, real galleries/video/PDF assets, related components and real testimonials for the actual catalogue.
- Add analytics, consent handling as needed, CRM and conversion events.
- Approve privacy, refunds, delivery, warranty and academic-project service terms before real checkout.
- Run staging end-to-end QA and a security/accessibility/performance review before launch.

## Verification completed

JavaScript syntax checks and state-based functional checks for prototype routes, catalogue filters, demo credentials, stock caps, failed/successful payment paths, order creation, enquiries, quotations, CMS changes and optional browser-agent tools. No supported visual browser QA or PHP/WordPress runtime was available; these must be completed on staging. Optional WebMCP actions were tested with a simulated registry, not a supported browser implementation.

## Images

All photos are illustrative. `image-credits.json` records source, photographer and licence, also shown on the preview's Demo Information page and the WordPress Image Credits page. Images are displayed from verified Wikimedia original URLs because local asset download was blocked in this environment. They may depend on external availability and should be moved to approved local assets for production. CC BY-SA images retain their applicable licence; cropped/resized display is disclosed.

## Ownership and maintenance

Custom theme and custom plugin source are included. Content lives in WordPress and commerce data in WooCommerce. Plugin/provider renewals, hosting and paid integrations must be itemised in the client agreement. Free first-year maintenance should have defined support hours and distinguish fixes/updates from new features.
