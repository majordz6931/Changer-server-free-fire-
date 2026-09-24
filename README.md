# Changer Server Free Fire — Mobile UX Upgrade

Updated with:
- Mobile-first responsive layout
- 23 translated region choices in Current/Destination selectors
- 5-language interface: English, French, Arabic, Portuguese, Spanish
- Request review step before payment
- Request reference generation after confirmation
- Request tracking on the same browser/device via localStorage
- Dedicated Track Request page (`track.html`)
- Payment page with crypto QR methods and a Track Request link
- Existing rectangular top banner and small header logo
- Admin dashboard and existing request storage retained

Note: Request/payment records in this package are browser-local (`localStorage`); they are not a shared server database. The admin status editor updates those local records. The package does not claim to perform an authorized Free Fire server change automatically. The admin login is a front-end demo credential and must be replaced with real server-side authentication before public production use.


## Verification
- Mobile viewport tested at 393x852 and 360x800 with Chromium.
- Desktop viewport tested at 1440x900.
- No horizontal overflow detected.
- Mobile hero/form widths verified against viewport.
- Banner uses `object-fit: contain` to preserve the full image.
- Stylesheet renamed to `style-v3.css` to avoid stale `style.css` cache.


## Fixes in this build
- Unified support address to `FreeFireLike@support.com`.
- Payment page now respects the `ref` query parameter and loads the matching request when available.
- Payment submission requires an actual payment method.
- Admin session uses `sessionStorage` instead of persistent `localStorage`.
- Admin dashboard can update request status and displays payment method.
- Escaping is retained for user-controlled request fields.
