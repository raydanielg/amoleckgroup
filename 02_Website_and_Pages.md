# AMOLECK GROUP — WEBSITE STRUCTURE & PAGES

This document describes the complete website: the landing (home) page and every sub-page, what each page must contain, and how visitors move through the site. It is written so a designer or developer can build directly from it.

---

## Site Map (All Pages)

```
Home (Landing Page)
├── About Us
├── Divisions
│   ├── AMES — Medical Equipment
│   ├── APHAMKO — Pharmaceuticals
│   ├── ASCA — Natural Skin Care
│   ├── Physiotherapy Services
│   └── AMOTECH — Technology
├── Book Appointment
├── Shop / Products        (optional phase 2)
├── Dashboard (client + admin, login required)
├── Blog / Health Tips     (optional phase 2)
└── Contact
```

Global elements present on every page:
- **Header / navigation bar:** logo, links (Home, About, Divisions dropdown, Appointment, Contact), and a prominent "Book Appointment" button. A "Login" link leads to the Dashboard.
- **Footer:** short company statement, quick links, division list, contact details (phone, Instagram), delivery-area note ("We deliver everywhere in Tanzania"), and copyright line.
- Consistent green brand identity, clear typography, and a visible focus state for keyboard users on every interactive element.

---

## 1. Home (Landing Page)

The landing page is the company's first impression. It must communicate, within seconds, that Amoleck Group is one trusted group solving many problems.

**Sections, in order:**

1. **Hero.** A bold headline ("One Group. Many Solutions.") with a one-line subheading explaining the breadth of the company, and two buttons: "Book Appointment" (primary) and "Explore Divisions" (secondary). Background uses the signature green identity.
2. **Trust strip.** A single line of proof points: nationwide delivery, multi-sector expertise, personalized service. Kept short and confident.
3. **Divisions directory.** The heart of the page. A clean grid of the five divisions (AMES, APHAMKO, ASCA, Physiotherapy, AMOTECH), each shown with its code, name, one-line description, and a link to its full page. This directory is the site's signature element — it presents the company as a coded group of specialist units.
4. **Why Choose Us.** Four to six short reasons (multi-sector strength, nationwide reach, personalized service, trusted expertise), each a heading plus one sentence.
5. **Appointment call-to-action.** A focused band inviting visitors to book physiotherapy or a consultation, with the "Book Appointment" button repeated.
6. **Contact / footer.** Phone, Instagram, and delivery note.

**Goal of the page:** get the visitor to either explore a division or book an appointment.

---

## 2. About Us

Tells the full story and builds trust.

**Contents:**
- Who we are (expanded company narrative).
- Vision, Mission, and Core Values.
- What "a group" means — why one company runs many divisions.
- Optional: leadership note or founder message.
- A closing call-to-action linking to Divisions and Appointment.

---

## 3. Divisions (Overview Page)

A single page listing all five divisions with short summaries, each linking to its own detailed page below.

### 3a. AMES — Medical Equipment
- What AMES supplies (equipment for hospitals, clinics, health centers, individuals).
- Training and guidance on correct usage.
- Local and international supply / export.
- Call-to-action: "Request equipment" or "Contact AMES" (form or phone).

### 3b. APHAMKO — Pharmaceuticals
- Wholesale supply of drugs and pharmaceuticals.
- Supplying small businesses, pharmacies, and retailers.
- Nationwide delivery.
- Call-to-action: "Become a stockist" or "Place a wholesale order" (form or phone).

### 3c. ASCA — Natural Skin Care
- Natural, customized skincare products.
- Product list: body jelly, soap, lotion, shower jelly, shampoo, and more.
- Customization by skin type or concern.
- Nationwide delivery.
- Call-to-action: "Order products" or "Request a custom product."

### 3d. Physiotherapy Services
- Conditions treated: back pain, neck pain, joint pain, paralysis, recovering patients.
- Two care modes: mobile physiotherapy (home visits) and clinic-based care.
- Free counselling.
- Call-to-action: "Book Appointment" (links directly to the appointment page).

### 3e. AMOTECH — Technology
- Design, print, and branding.
- Website design, hosting, and SEO.
- Social media management and counselling.
- Call-to-action: "Start a project" or "Request a quote."

Each division page follows the same layout: a banner with the division code and name, a description, a bullet list of services, and a clear call-to-action.

---

## 4. Book Appointment

The most important conversion page. Full specification is in `03_Appointment_System.md`. In summary, it lets a visitor:
- Choose a service (physiotherapy, consultation, or a division enquiry).
- Choose home visit or clinic-based care.
- Pick a date and time.
- Enter their details (name, phone, location, short note).
- Submit and receive a confirmation.

---

## 5. Shop / Products (Optional, Phase 2)

For ASCA skincare and possibly AMES equipment. Product cards with image, name, short description, and price; a simple cart; and checkout that captures delivery location and contact details. Can launch later once the core site is live.

---

## 6. Dashboard (Login Required)

Private area for clients and administrators. Full specification is in `04_Dashboard.md`. Reached through the "Login" link in the header.

---

## 7. Blog / Health Tips (Optional, Phase 2)

Short articles on health, physiotherapy, skincare, and business branding. Supports SEO (a strength of AMOTECH) and positions Amoleck as an expert. Can launch later.

---

## 8. Contact

- Phone: +255 626 371 854
- Instagram: amoleck_group
- A short contact form (name, phone, message, and which division the enquiry is about).
- Delivery-area note.
- Optional map or service-area description.

---

## Notes for the Builder

- **Mobile first.** Most Tanzanian visitors will arrive on a phone; every page must work cleanly on small screens.
- **Fast and light.** Optimize images and keep the site quick even on slower connections.
- **Clear calls-to-action.** Every page should point to either "Book Appointment" or "Contact."
- **Consistent brand.** Green identity, the logo, and the division-code system used throughout.
- **Accessible.** Readable contrast, visible focus states, and alt text on all images.
