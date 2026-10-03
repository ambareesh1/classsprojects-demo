# CLASSS Projects

Client website prototype and WordPress/WooCommerce foundation by Projiverse.

## Repository structure

- `demo/`: latest charcoal/red interactive prototype, responsive PWA shell and WhatsApp enquiry panel.
- `wordpress/classs-theme/`: custom WordPress theme foundation.
- `wordpress/classs-core/`: project CMS and enquiry plugin foundation.
- `docs/WORDPRESS_SETUP.md`: setup instructions and production boundaries.

## Run the demo

From this repository, run:

```sh
python3 -m http.server 8000 --directory demo
```

Open http://localhost:8000. No build step or npm dependency installation is required. Service workers require HTTPS or localhost.

Demo customer: student@example.com / ClasssDemo123!
Demo admin: admin@example.com / ClasssAdmin123!

These are intentionally public frontend mock credentials, not production accounts. Data is stored in the browser. Payments, notifications, shipping and file uploads are simulated.

## WhatsApp

Set `CONTACT_CONFIG.whatsappNumber` in `demo/app.js` to the verified business number including country code. Currently blank: the panel prepares a message but does not open a business conversation. No API credentials are required for click-to-chat; automated business messaging is not implemented.

## WordPress

The WordPress foundation is a separate implementation from the live prototype. Its styling is an earlier design foundation; port the approved final UI before production deployment. Install WooCommerce and the custom theme/plugin on staging. Follow `docs/WORDPRESS_SETUP.md`. PHP/WordPress runtime validation still needs to be completed.

## Images

Image sources, credits and licences are recorded in `demo/assets/image-credits.json` and `wordpress/classs-core/image-credits.json`. Images are illustrative and remotely hosted. Replace them with approved product/project photos for production. Preserve licence requirements and author attribution.

## Deployment

Any static host can serve `demo/`. Hosting infrastructure identifiers and credentials are excluded from this export. Do not commit `.env` files, real credentials, private uploads or customer data. The current live demo remains at https://classs-projects-team-demo.projiverse-4553.chatgpt.site.

## Deploy the demo on Vercel

Import this GitHub repository into Vercel. Keep Root Directory at the repository root, Framework Preset as Other, Output Directory as demo and Build Command empty. The included vercel.json sets these defaults. There are no required environment variables or paid integrations for the static demo. Vercel deployment has not been performed by this export. WordPress PHP files are excluded from the deployed output by outputDirectory.
