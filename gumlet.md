# Gumlet Video Infrastructure & Website Audit Report

> **Workspace:** My Collection (`6553f91b3699cbd2c01ab6a9`)  
> **Root Folder:** `refine` (ID: `6ab8606f3518a22dd8b25c8c`)  
> **Total Folders in Hierarchy:** 37  
> **Total Video Assets in `refine`:** 382  
> **Website Active Slugs Mapped:** 52  
> **Instagram Archive Reels Mapped:** 331  
> **Audit Date:** October 2026  

---

## Table of Contents
1. [Executive Summary](#executive-summary)
2. [Website Video Audit (Pages Where Gumlet Videos Are Used)](#website-video-audit)
   - [Summary of Implementation Types](#summary-of-implementation-types)
   - [Detailed Audit of Every Page](#detailed-audit-of-every-page)
   - [Core Architecture & Shared Video Modules](#core-architecture--shared-video-modules)
3. [Gumlet Folder Structure Hierarchy](#gumlet-folder-structure-hierarchy)
4. [Detailed Gumlet Folder & Video Asset Inventory](#detailed-gumlet-folder--video-asset-inventory)
   - [Part A: Clinic & Treatment Procedure Folders (20 Folders, 51 Videos)](#part-a-clinic--treatment-procedure-folders)
   - [Part B: Instagram Archive Folders (17 Folders, 331 Videos)](#part-b-instagram-archive-folders)

---

## Executive Summary

This document provides a comprehensive audit of the Gumlet video delivery infrastructure for the **Refine Skin & Body Clinic** website (`c:\Users\Veer\Desktop\office\Refine-new`).

- All videos hosted under the root **`refine`** folder on Gumlet were discovered, cataloged, and indexed via the official Gumlet Video API.
- Every single webpage on the website using Gumlet video embeds, interactive modals, treatment bento grids, and the Instagram archive was audited and mapped to its exact Gumlet asset IDs, embed URLs, and thumbnail assets.
- A total of **382 unique video assets** are distributed across **37 folders** under the `refine` root directory on Gumlet:
  - **51 Treatment & Clinic Showcase Videos** across 20 procedure folders (mapped to 52 website slugs powering 20 landing and treatment pages).
  - **331 Instagram Video Reels** across 17 archive subfolders (powering the dynamic Instagram Archive on `/gallery`).

---

## Website Video Audit

### Summary of Implementation Types

| Implementation Type | Pages / Files Involved | Description | Video Delivery Method |
| :--- | :--- | :--- | :--- |
| **Dedicated Video Hub** | `videos.php` | Main video library displaying 23 clinic procedure videos with category tabs. | `gumlet_video_embed()` + iframe modal |
| **Direct Iframe & Media Hub** | `gallery.php` | Hero virtual branch tour + 2 clinic tour cards + 331 Instagram reels archive. | Direct `play.gumlet.io/embed/` + JSON-driven modal |
| **Treatment Bento Grids** | 17 Service & Location Pages | High-conversion video showcase blocks (`#treatment-videos`) with vertical 9:16 aspect ratio cards. | `includes/treatment-videos.php` + Gumlet iframe modal |
| **Blog Articles** | `blog.php` | Embedded player blocks for educational articles (daily routine, skincare insights). | HTML5 `<video>` / Gumlet mapped assets |
| **Mapping & Helper Layer** | `includes/gumlet-video.php`, `gumlet-video-map.json` | Centralized slug-to-Gumlet asset resolution engine with thumbnail fallbacks. | JSON key-value lookup |

---

### Detailed Audit of Every Page

#### 1. `videos.php` (/videos) — Clinic Video Library Hub
- **Page Type:** Dedicated Video Archive Page
- **Integration Pattern:** Full interactive video hub listing 23 clinic procedure videos with category filters, video cards, Gumlet thumbnails, and popup Gumlet player modal via gumlet_video_embed().
- **Mapped Video Slugs Used on Page (22):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `botox-dr-chirag` | `6ab860e23518a22dd8b25e5e` | [https://play.gumlet.io/embed/6ab860e23518a22dd8b25e5e](https://play.gumlet.io/embed/6ab860e23518a22dd8b25e5e) | Botox by Dr. Chirag |
| `botox-treatment-session` | `6ab987a1de5918773f552f50` | [https://play.gumlet.io/embed/6ab987a1de5918773f552f50](https://play.gumlet.io/embed/6ab987a1de5918773f552f50) | DJI_20260717142437_0226_D |
| `fillers-treatment-session` | `6ab98bb93518a22dd8b8c50a` | [https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c50a](https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c50a) | DJI_20260717145219_0252_D |
| `fillers-clip-2` | `6ab98bdc0b72a4c9159ae64e` | [https://play.gumlet.io/embed/6ab98bdc0b72a4c9159ae64e](https://play.gumlet.io/embed/6ab98bdc0b72a4c9159ae64e) | DJI_20260717145413_0253_D |
| `cleopatra-hydrafacial-explained` | `6ab988b70b72a4c9159ad4bc` | [https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc](https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc) | Cleopatra explanation |
| `cleopatra-hydrafacial-treatment` | `6ab988b7de5918773f553427` | [https://play.gumlet.io/embed/6ab988b7de5918773f553427](https://play.gumlet.io/embed/6ab988b7de5918773f553427) | Cleopatra |
| `microneedling-serums-session` | `6ab98c95de5918773f5549f8` | [https://play.gumlet.io/embed/6ab98c95de5918773f5549f8](https://play.gumlet.io/embed/6ab98c95de5918773f5549f8) | DJI_20260730143326_0530_D |
| `psoriasis` | `6ab97b733518a22dd8b873f4` | [https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4](https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4) | Psoriasiss |
| `laser-hair-removal-underarms` | `6ab97b373518a22dd8b87309` | [https://play.gumlet.io/embed/6ab97b373518a22dd8b87309](https://play.gumlet.io/embed/6ab97b373518a22dd8b87309) | Video 19-08-2026, 12 21 51 PM |
| `hair-transplant` | `6ab98d1b0b72a4c9159aeeb1` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb1](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb1) | HAIR TRANSPLANT  |
| `hair-transplant-hair-loss` | `6ab979b0de5918773f54e70a` | [https://play.gumlet.io/embed/6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) | Video 01-09-2026, 3 15 25 PM |
| `alopecia-awareness` | `6ab860a00b72a4c915947979` | [https://play.gumlet.io/embed/6ab860a00b72a4c915947979](https://play.gumlet.io/embed/6ab860a00b72a4c915947979) | Alopecia Awareness Month |
| `hydrafacial-keravive` | `6ab98d1b0b72a4c9159aeeb2` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2) | HYDRAFACIAL KERAVIVE  |
| `fat-freezing-explained` | `6ab861e6de5918773f4ee0d3` | [https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3](https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3) | Treatment Procedures |
| `fat-freezing-procedure` | `6ab861e6de5918773f4ee0d3` | [https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3](https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3) | Treatment Procedures |
| `iv-drip-therapy` | `6ab97a423518a22dd8b86ef1` | [https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1) | Video 19-08-2026, 12 26 59 PM |
| `iv-drips` | `6ab97aaede5918773f54ebc5` | [https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5](https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5) | IV DRIPS |
| `daily-skincare-routine` | `6ab860f3de5918773f4edd83` | [https://play.gumlet.io/embed/6ab860f3de5918773f4edd83](https://play.gumlet.io/embed/6ab860f3de5918773f4edd83) | Video 25-08-2026, 11 32 33 AM |
| `skincare-what-clients-should-know` | `6ab98dee3518a22dd8b8d46a` | [https://play.gumlet.io/embed/6ab98dee3518a22dd8b8d46a](https://play.gumlet.io/embed/6ab98dee3518a22dd8b8d46a) | Video 25-08-2026, 11 48 02 AM |
| `kabalagala-branch-tour` | `6ab97afbde5918773f54ed17` | [https://play.gumlet.io/embed/6ab97afbde5918773f54ed17](https://play.gumlet.io/embed/6ab97afbde5918773f54ed17) | Kabalagala B |
| `bukoto-branch-tour` | `6ab988533518a22dd8b8b486` | [https://play.gumlet.io/embed/6ab988533518a22dd8b8b486](https://play.gumlet.io/embed/6ab988533518a22dd8b8b486) | BUKOTO PREMISES |
| `september-offers-announcement` | `6ab98da03518a22dd8b8d211` | [https://play.gumlet.io/embed/6ab98da03518a22dd8b8d211](https://play.gumlet.io/embed/6ab98da03518a22dd8b8d211) | Announcing the offers |

#### 2. `gallery.php` (/gallery) — Clinic Gallery & Instagram Archive
- **Page Type:** Interactive Visual Media Hub
- **Integration Pattern:** Showcases 3 prominent embedded Gumlet video tours (Kabalagala Virtual Tour, Bukoto Branch Tour, and Refine IV Lounge Tour) and powers the dynamic Instagram Archive featuring 331 Gumlet-hosted reel videos via assets/data/instagram-archive.json.
- **Direct Gumlet Embeds on Page:**
  - **Kabalagala Branch Virtual Tour** (`Hero Virtual Tour player iframe in clinic tour section`)
    - **Gumlet Asset ID:** `6ab97afbde5918773f54ed17`
    - **Embed URL:** [https://play.gumlet.io/embed/6ab97afbde5918773f54ed17](https://play.gumlet.io/embed/6ab97afbde5918773f54ed17)
    - **Thumbnail:** `https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/6ab97afbde5918773f54ed17/thumbnail-1-0.png`
  - **Bukoto @ UMC Victoria Branch Tour** (`Side branch tour card with Gumlet thumbnail & modal`)
    - **Gumlet Asset ID:** `6ab988533518a22dd8b8b486`
    - **Embed URL:** [https://play.gumlet.io/embed/6ab988533518a22dd8b8b486](https://play.gumlet.io/embed/6ab988533518a22dd8b8b486)
    - **Thumbnail:** `https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/6ab988533518a22dd8b8b486/thumbnail-1-0.png`
  - **Inside the Refine IV Lounge** (`Side lounge tour card with Gumlet thumbnail & modal`)
    - **Gumlet Asset ID:** `6ab97a423518a22dd8b86ef1`
    - **Embed URL:** [https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1)
    - **Thumbnail:** `https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/6ab97a423518a22dd8b86ef1/thumbnail-1-0.png`
- **Dynamic Archive Feed:** 331 Gumlet-hosted video reels loaded dynamically from assets/data/instagram-archive.json.
#### 3. `botox.php` (/botox) — Botox Treatment Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Embedded treatment video section with Dr. Chirag video showcase and horizontal clip strip of 7 procedure clips.
- **Mapped Video Slugs Used on Page (9):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `botox-dr-chirag` | `6ab860e23518a22dd8b25e5e` | [https://play.gumlet.io/embed/6ab860e23518a22dd8b25e5e](https://play.gumlet.io/embed/6ab860e23518a22dd8b25e5e) | Botox by Dr. Chirag |
| `botox-treatment-session` | `6ab987a1de5918773f552f50` | [https://play.gumlet.io/embed/6ab987a1de5918773f552f50](https://play.gumlet.io/embed/6ab987a1de5918773f552f50) | DJI_20260717142437_0226_D |
| `botox-clip-1` | `6ab987a13518a22dd8b8b174` | [https://play.gumlet.io/embed/6ab987a13518a22dd8b8b174](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b174) | DJI_20260717142708_0227_D |
| `botox-clip-2` | `6ab987a13518a22dd8b8b175` | [https://play.gumlet.io/embed/6ab987a13518a22dd8b8b175](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b175) | DJI_20260717143206_0231_D |
| `botox-clip-3` | `6ab987a10b72a4c9159acfd8` | [https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd8](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd8) | DJI_20260717143244_0232_D |
| `botox-clip-4` | `6ab987a13518a22dd8b8b173` | [https://play.gumlet.io/embed/6ab987a13518a22dd8b8b173](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b173) | DJI_20260717143614_0242_D |
| `botox-clip-5` | `6ab987a10b72a4c9159acfda` | [https://play.gumlet.io/embed/6ab987a10b72a4c9159acfda](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfda) | DJI_20260717143045_0230_D |
| `botox-clip-6` | `6ab987a10b72a4c9159acfd9` | [https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd9](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd9) | DJI_20260717142858_0229_D |
| `botox-clip-7` | `6ab987a1de5918773f552f51` | [https://play.gumlet.io/embed/6ab987a1de5918773f552f51](https://play.gumlet.io/embed/6ab987a1de5918773f552f51) | DJI_20260717143606_0241_D |

#### 4. `dermal-fillers.php` (/dermal-fillers) — Dermal Fillers Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Featured treatment session video plus horizontal clip strip of 18 filler procedure clips.
- **Mapped Video Slugs Used on Page (19):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `fillers-treatment-session` | `6ab98bb93518a22dd8b8c50a` | [https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c50a](https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c50a) | DJI_20260717145219_0252_D |
| `fillers-clip-1` | `6ab98bb93518a22dd8b8c506` | [https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c506](https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c506) | DJI_20260717145131_0250_D |
| `fillers-clip-2` | `6ab98bdc0b72a4c9159ae64e` | [https://play.gumlet.io/embed/6ab98bdc0b72a4c9159ae64e](https://play.gumlet.io/embed/6ab98bdc0b72a4c9159ae64e) | DJI_20260717145413_0253_D |
| `fillers-clip-3` | `6ab98bdf0b72a4c9159ae662` | [https://play.gumlet.io/embed/6ab98bdf0b72a4c9159ae662](https://play.gumlet.io/embed/6ab98bdf0b72a4c9159ae662) | DJI_20260717145802_0256_D |
| `fillers-clip-4` | `6ab98bfcde5918773f554584` | [https://play.gumlet.io/embed/6ab98bfcde5918773f554584](https://play.gumlet.io/embed/6ab98bfcde5918773f554584) | DJI_20260717151036_0271_D |
| `fillers-clip-5` | `6ab98b71de5918773f5541c0` | [https://play.gumlet.io/embed/6ab98b71de5918773f5541c0](https://play.gumlet.io/embed/6ab98b71de5918773f5541c0) | DJI_20260717151135_0273_D |
| `fillers-clip-6` | `6ab98b710b72a4c9159ae2f6` | [https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2f6](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2f6) | DJI_20260717151408_0276_D |
| `fillers-clip-7` | `6ab98b71de5918773f5541c4` | [https://play.gumlet.io/embed/6ab98b71de5918773f5541c4](https://play.gumlet.io/embed/6ab98b71de5918773f5541c4) | DJI_20260717151713_0280_D |
| `fillers-clip-8` | `6ab98b71de5918773f5541c8` | [https://play.gumlet.io/embed/6ab98b71de5918773f5541c8](https://play.gumlet.io/embed/6ab98b71de5918773f5541c8) | DJI_20260717152052_0283_D |
| `fillers-clip-9` | `6ab98be8de5918773f554507` | [https://play.gumlet.io/embed/6ab98be8de5918773f554507](https://play.gumlet.io/embed/6ab98be8de5918773f554507) | DJI_20260717150638_0269_D |
| `fillers-clip-10` | `6ab98bea0b72a4c9159ae6c5` | [https://play.gumlet.io/embed/6ab98bea0b72a4c9159ae6c5](https://play.gumlet.io/embed/6ab98bea0b72a4c9159ae6c5) | DJI_20260717150706_0270_D |
| `fillers-clip-11` | `6ab98b713518a22dd8b8c2fb` | [https://play.gumlet.io/embed/6ab98b713518a22dd8b8c2fb](https://play.gumlet.io/embed/6ab98b713518a22dd8b8c2fb) | DJI_20260717151104_0272_D |
| `fillers-clip-12` | `6ab98b71de5918773f5541c1` | [https://play.gumlet.io/embed/6ab98b71de5918773f5541c1](https://play.gumlet.io/embed/6ab98b71de5918773f5541c1) | DJI_20260717151217_0274_D |
| `fillers-clip-13` | `6ab98b710b72a4c9159ae2fd` | [https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2fd](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2fd) | DJI_20260717151644_0279_D |
| `fillers-clip-14` | `6ab98b710b72a4c9159ae2ff` | [https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2ff](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2ff) | DJI_20260717151746_0281_D |
| `fillers-clip-15` | `6ab98b723518a22dd8b8c301` | [https://play.gumlet.io/embed/6ab98b723518a22dd8b8c301](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c301) | DJI_20260717152031_0282_D |
| `fillers-clip-16` | `6ab98b723518a22dd8b8c303` | [https://play.gumlet.io/embed/6ab98b723518a22dd8b8c303](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c303) | DJI_20260717152500_0285_D |
| `fillers-clip-17` | `6ab98b723518a22dd8b8c306` | [https://play.gumlet.io/embed/6ab98b723518a22dd8b8c306](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c306) | DJI_20260717152803_0286_D |
| `fillers-clip-18` | `6ab98bb40b72a4c9159ae514` | [https://play.gumlet.io/embed/6ab98bb40b72a4c9159ae514](https://play.gumlet.io/embed/6ab98bb40b72a4c9159ae514) | DJI_20260717152858_0287_D |

#### 5. `hydrafacial.php` (/hydrafacial) — HydraFacial Treatment Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Features Cleopatra treatment explained, live procedure session, and scalp keravive preview.
- **Mapped Video Slugs Used on Page (3):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `cleopatra-hydrafacial-explained` | `6ab988b70b72a4c9159ad4bc` | [https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc](https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc) | Cleopatra explanation |
| `cleopatra-hydrafacial-treatment` | `6ab988b7de5918773f553427` | [https://play.gumlet.io/embed/6ab988b7de5918773f553427](https://play.gumlet.io/embed/6ab988b7de5918773f553427) | Cleopatra |
| `hydrafacial-keravive` | `6ab98d1b0b72a4c9159aeeb2` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2) | HYDRAFACIAL KERAVIVE  |

#### 6. `hydrafacial-keravive.php` (/hydrafacial-keravive) — HydraFacial Keravive Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Features Keravive scalp treatment video, hair transplant relation, and Cleopatra treatment explanation.
- **Mapped Video Slugs Used on Page (3):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `hydrafacial-keravive` | `6ab98d1b0b72a4c9159aeeb2` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2) | HYDRAFACIAL KERAVIVE  |
| `hair-transplant-hair-loss` | `6ab979b0de5918773f54e70a` | [https://play.gumlet.io/embed/6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) | Video 01-09-2026, 3 15 25 PM |
| `cleopatra-hydrafacial-explained` | `6ab988b70b72a4c9159ad4bc` | [https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc](https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc) | Cleopatra explanation |

#### 7. `cryolipolysis.php` (/cryolipolysis) — Cryolipolysis (Fat Freezing) Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Features fat freezing explanation, procedure demonstration, and treatment overview.
- **Mapped Video Slugs Used on Page (3):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `fat-freezing-explained` | `6ab861e6de5918773f4ee0d3` | [https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3](https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3) | Treatment Procedures |
| `fat-freezing-procedure` | `6ab861e6de5918773f4ee0d3` | [https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3](https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3) | Treatment Procedures |
| `fat-freezing-treatment` | `6ab989fa3518a22dd8b8bb45` | [https://play.gumlet.io/embed/6ab989fa3518a22dd8b8bb45](https://play.gumlet.io/embed/6ab989fa3518a22dd8b8bb45) | FAT FREEZING TREATMENT  |

#### 8. `rf-microneedling.php` (/rf-microneedling) — RF Microneedling Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Featured microneedling serums session plus horizontal strip of 4 detailed procedure clips.
- **Mapped Video Slugs Used on Page (5):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `microneedling-serums-session` | `6ab98c95de5918773f5549f8` | [https://play.gumlet.io/embed/6ab98c95de5918773f5549f8](https://play.gumlet.io/embed/6ab98c95de5918773f5549f8) | DJI_20260730143326_0530_D |
| `microneedling-clip-1` | `6ab98c950b72a4c9159aeb2c` | [https://play.gumlet.io/embed/6ab98c950b72a4c9159aeb2c](https://play.gumlet.io/embed/6ab98c950b72a4c9159aeb2c) | DJI_20260730143802_0531_D |
| `microneedling-clip-2` | `6ab98c95de5918773f5549f7` | [https://play.gumlet.io/embed/6ab98c95de5918773f5549f7](https://play.gumlet.io/embed/6ab98c95de5918773f5549f7) | DJI_20260730143840_0532_D |
| `microneedling-clip-3` | `6ab98c953518a22dd8b8caee` | [https://play.gumlet.io/embed/6ab98c953518a22dd8b8caee](https://play.gumlet.io/embed/6ab98c953518a22dd8b8caee) | DJI_20260730143854_0533_D |
| `microneedling-clip-4` | `6ab98c953518a22dd8b8caef` | [https://play.gumlet.io/embed/6ab98c953518a22dd8b8caef](https://play.gumlet.io/embed/6ab98c953518a22dd8b8caef) | DJI_20260730143922_0534_D |

#### 9. `iv-therapy.php` (/iv-therapy) — IV Therapy Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Video section with IV drip therapy overview and IV drips session video.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `iv-drip-therapy` | `6ab97a423518a22dd8b86ef1` | [https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1) | Video 19-08-2026, 12 26 59 PM |
| `iv-drips` | `6ab97aaede5918773f54ebc5` | [https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5](https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5) | IV DRIPS |

#### 10. `refine-iv-lounge.php` (/refine-iv-lounge) — Refine IV Lounge Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Dedicated IV lounge page showcasing patient experience and treatment clips.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `iv-drip-therapy` | `6ab97a423518a22dd8b86ef1` | [https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1) | Video 19-08-2026, 12 26 59 PM |
| `iv-drips` | `6ab97aaede5918773f54ebc5` | [https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5](https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5) | IV DRIPS |

#### 11. `laser-hair-removal.php` (/laser-hair-removal) — Laser Hair Removal Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Live clinic video of underarm laser hair removal procedure.
- **Mapped Video Slugs Used on Page (1):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `laser-hair-removal-underarms` | `6ab97b373518a22dd8b87309` | [https://play.gumlet.io/embed/6ab97b373518a22dd8b87309](https://play.gumlet.io/embed/6ab97b373518a22dd8b87309) | Video 19-08-2026, 12 21 51 PM |

#### 12. `alopecia-areata.php` (/alopecia-areata) — Alopecia Areata Page
- **Page Type:** Medical Dermatology Page
- **Integration Pattern:** Features Dr. Chirag Alopecia Awareness Month video and hair loss restoration overview.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `alopecia-awareness` | `6ab860a00b72a4c915947979` | [https://play.gumlet.io/embed/6ab860a00b72a4c915947979](https://play.gumlet.io/embed/6ab860a00b72a4c915947979) | Alopecia Awareness Month |
| `hair-transplant-hair-loss` | `6ab979b0de5918773f54e70a` | [https://play.gumlet.io/embed/6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) | Video 01-09-2026, 3 15 25 PM |

#### 13. `hair-loss.php` (/hair-loss) — Hair Loss Page
- **Page Type:** Medical Dermatology Page
- **Integration Pattern:** Features hair transplant & loss explanation, alopecia awareness, and scalp hydrafacial keravive video.
- **Mapped Video Slugs Used on Page (3):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `hair-transplant-hair-loss` | `6ab979b0de5918773f54e70a` | [https://play.gumlet.io/embed/6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) | Video 01-09-2026, 3 15 25 PM |
| `alopecia-awareness` | `6ab860a00b72a4c915947979` | [https://play.gumlet.io/embed/6ab860a00b72a4c915947979](https://play.gumlet.io/embed/6ab860a00b72a4c915947979) | Alopecia Awareness Month |
| `hydrafacial-keravive` | `6ab98d1b0b72a4c9159aeeb2` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2) | HYDRAFACIAL KERAVIVE  |

#### 14. `hair-transplant.php` (/hair-transplant) — Hair Transplant Page
- **Page Type:** Treatment Landing Page
- **Integration Pattern:** Hair transplant procedure footage and hair loss consultation video.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `hair-transplant` | `6ab98d1b0b72a4c9159aeeb1` | [https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb1](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb1) | HAIR TRANSPLANT  |
| `hair-transplant-hair-loss` | `6ab979b0de5918773f54e70a` | [https://play.gumlet.io/embed/6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) | Video 01-09-2026, 3 15 25 PM |

#### 15. `psoriasis.php` (/psoriasis) — Psoriasis Treatment Page
- **Page Type:** Medical Dermatology Page
- **Integration Pattern:** Clinical video discussing psoriasis management and skin phototherapy/care.
- **Mapped Video Slugs Used on Page (1):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `psoriasis` | `6ab97b733518a22dd8b873f4` | [https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4](https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4) | Psoriasiss |

#### 16. `skin-clinic-in-bukoto.php` (/skin-clinic-in-bukoto) — Bukoto Branch Page
- **Page Type:** Location Landing Page
- **Integration Pattern:** Virtual tour and video walkthrough of the Bukoto clinic at UMC Victoria Hospital Annex.
- **Mapped Video Slugs Used on Page (1):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `bukoto-branch-tour` | `6ab988533518a22dd8b8b486` | [https://play.gumlet.io/embed/6ab988533518a22dd8b8b486](https://play.gumlet.io/embed/6ab988533518a22dd8b8b486) | BUKOTO PREMISES |

#### 17. `skin-clinic-in-kabalagala.php` (/skin-clinic-in-kabalagala) — Kabalagala Branch Page
- **Page Type:** Location Landing Page
- **Integration Pattern:** Branch tour of Palm Village Mall clinic and IV drip therapy lounge video.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `kabalagala-branch-tour` | `6ab97afbde5918773f54ed17` | [https://play.gumlet.io/embed/6ab97afbde5918773f54ed17](https://play.gumlet.io/embed/6ab97afbde5918773f54ed17) | Kabalagala B |
| `iv-drip-therapy` | `6ab97a423518a22dd8b86ef1` | [https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1) | Video 19-08-2026, 12 26 59 PM |

#### 18. `dermatologist-in-kabalagala.php` (/dermatologist-in-kabalagala) — Dermatologist Kabalagala Page
- **Page Type:** Location Landing Page
- **Integration Pattern:** Kabalagala clinic video tour and clinical psoriasis treatment video.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `kabalagala-branch-tour` | `6ab97afbde5918773f54ed17` | [https://play.gumlet.io/embed/6ab97afbde5918773f54ed17](https://play.gumlet.io/embed/6ab97afbde5918773f54ed17) | Kabalagala B |
| `psoriasis` | `6ab97b733518a22dd8b873f4` | [https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4](https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4) | Psoriasiss |

#### 19. `offers.php` (/offers) — Offers & Specials Page
- **Page Type:** Promotion Landing Page
- **Integration Pattern:** Video announcements detailing clinic promotion packages and specials.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `september-offers-announcement` | `6ab98da03518a22dd8b8d211` | [https://play.gumlet.io/embed/6ab98da03518a22dd8b8d211](https://play.gumlet.io/embed/6ab98da03518a22dd8b8d211) | Announcing the offers |
| `september-offers-details` | `6ab98da0de5918773f55516e` | [https://play.gumlet.io/embed/6ab98da0de5918773f55516e](https://play.gumlet.io/embed/6ab98da0de5918773f55516e) | Offer details  |

#### 20. `blog.php` (/blog) — Clinic Blog & Education Articles
- **Page Type:** Content / Educational Hub
- **Integration Pattern:** Contains video playback blocks referencing skincare education clips (daily-skincare-routine and skincare-what-clients-should-know), which are mapped to Gumlet assets.
- **Mapped Video Slugs Used on Page (2):**

| Slug | Gumlet Asset ID | Gumlet Embed Player URL | Video Title / Topic |
| :--- | :--- | :--- | :--- |
| `daily-skincare-routine` | `6ab860f3de5918773f4edd83` | [https://play.gumlet.io/embed/6ab860f3de5918773f4edd83](https://play.gumlet.io/embed/6ab860f3de5918773f4edd83) | Video 25-08-2026, 11 32 33 AM |
| `skincare-what-clients-should-know` | `6ab98dee3518a22dd8b8d46a` | [https://play.gumlet.io/embed/6ab98dee3518a22dd8b8d46a](https://play.gumlet.io/embed/6ab98dee3518a22dd8b8d46a) | Video 25-08-2026, 11 48 02 AM |

---

### Core Architecture & Shared Video Modules

1. **`includes/gumlet-video.php`**
   - Core resolution functions: `gumlet_video_embed($slug, $fallback)` and `gumlet_video_thumbnail($slug, $fallback)`.
   - Reads `assets/data/gumlet-video-map.json` and dynamically replaces local `.mp4` URLs with fast, adaptive HLS streams served from Gumlet's CDN via `https://play.gumlet.io/embed/{asset_id}`.

2. **`includes/treatment-videos.php`**
   - Reusable frontend component included across 19 website pages.
   - Displays 9:16 vertical treatment video cards with animated play button overlays.
   - Includes the lightweight modal player (`#tv-modal`) that dynamically injects an `<iframe>` with `https://play.gumlet.io/embed/...` to deliver instant streaming with full mobile and responsive support.

3. **`assets/data/gumlet-video-map.json`**
   - Contains 52 active video slug mappings linking site slugs to Gumlet asset IDs, embed URLs, and thumbnail images.

4. **`assets/data/instagram-archive.json`**
   - Contains 623 total items (331 Gumlet-hosted videos and 292 photos) loaded by the gallery page filter system.

---

## Gumlet Folder Structure Hierarchy

The complete hierarchy of all **37 folders** rooted at **`refine`** (`6ab8606f3518a22dd8b25c8c`) inside Gumlet workspace `My Collection` (`6553f91b3699cbd2c01ab6a9`):

```text
refine (ID: 6ab8606f3518a22dd8b25c8c) [382 total videos across hierarchy]
├── Alopecia Awareness Month (ID: 6ab8615c3518a22dd8b2603d) [1 video]
├── Botox by Dr. Chirag (ID: 6ab86180de5918773f4edf5b) [1 video]
├── Daily Skincare routine (ID: 6ab861ab0b72a4c915947d2f) [1 video]
├── Fat Freezing (ID: 6ab861c90b72a4c915947d7e) [1 video]
├── Hair Transplant And Hair Loss (ID: 6ab862433518a22dd8b26384) [1 video]
├── IV Drip Therapy (ID: 6ab97a310b72a4c9159a8bd7) [1 video]
├── IV DRIPS (ID: 6ab97a9c0b72a4c9159a8db2) [1 video]
├── Kabalagala Branch (ID: 6ab97ae7de5918773f54ecae) [1 video]
├── Laser Hair Removal UnderArms (ID: 6ab97b2cde5918773f54edf0) [1 video]
├── Psoriasis (ID: 6ab97b660b72a4c9159a911e) [1 video]
├── Refine posts (ID: 6ab97bba0b72a4c9159a9298) [0 videos]
│   ├── multi_creator_20260601_165321_reel_part01 (ID: 6ab97bcade5918773f54f0e2) [0 videos]
│   │   ├── locheng_jemimah (ID: 6ab97bd9de5918773f54f122) [2 videos]
│   │   ├── mamideb (ID: 6ab97c170b72a4c9159a945d) [7 videos]
│   │   └── refineskinandbodyclinic (ID: 6ab97c80de5918773f54f438) [88 videos]
│   ├── multi_creator_20260601_165321_reel_part02 (ID: 6ab97dc7de5918773f54fbac) [0 videos]
│   │   ├── locheng_jemimah (ID: 6ab97e2e0b72a4c9159a9ef2) [2 videos]
│   │   ├── mamideb (ID: 6ab97e683518a22dd8b88241) [2 videos]
│   │   └── refineskinandbodyclinic (ID: 6ab97f3e0b72a4c9159aa3ca) [82 videos]
│   ├── multi_creator_20260601_165321_reel_part03 (ID: 6ab982a50b72a4c9159ab4dd) [0 videos]
│   │   ├── alma.lasers_eastafrica (ID: 6ab982e60b72a4c9159ab605) [0 videos]
│   │   ├── calabashspaug (ID: 6ab983010b72a4c9159ab6b0) [1 video]
│   │   ├── mamideb (ID: 6ab9839c3518a22dd8b89c40) [7 videos]
│   │   └── refineskinandbodyclinic (ID: 6ab9855e3518a22dd8b8a42c) [97 videos]
│   └── multi_creator_20260601_165321_reel_part04 (ID: 6ab98674de5918773f55297f) [0 videos]
│       ├── mamideb (ID: 6ab98688de5918773f5529d1) [2 videos]
│       └── refineskinandbodyclinic (ID: 6ab986d03518a22dd8b8ad29) [41 videos]
├── Refine Videos-2026 (ID: 6ab987700b72a4c9159aced7) [2 videos]
│   ├── Botox Treatment (ID: 6ab987843518a22dd8b8b0f0) [8 videos]
│   ├── Bukoto branch (ID: 6ab988470b72a4c9159ad2ce) [1 video]
│   ├── CleopatraTreatment(Hydrafacial) (ID: 6ab988ab3518a22dd8b8b5f5) [2 videos]
│   ├── Fat Freezing (ID: 6ab989f13518a22dd8b8bb24) [1 video]
│   ├── Fillers (ID: 6ab98b613518a22dd8b8c27b) [19 videos]
│   └── Microneedling Syrums (ID: 6ab98c5e0b72a4c9159ae9b6) [5 videos]
├── September Offers (ID: 6ab98d92de5918773f5550fd) [2 videos]
└── What Clients should know about Skincare (ID: 6ab98de53518a22dd8b8d40a) [1 video]
```

---

## Detailed Gumlet Folder & Video Asset Inventory

Below is the complete inventory of all 382 video assets grouped by their exact folder location in Gumlet.

### Part A: Clinic & Treatment Procedure Folders
*(20 Folders — 51 Procedure, Tour & Educational Videos)*

#### A1. Folder: `refine`
- **Folder ID:** `6ab8606f3518a22dd8b25c8c`
- **Parent ID:** `None`
- **Depth:** Level 0
- **Sub-directory Count:** 14
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (acts as a parent container).*

#### A2. Folder: `refine / Alopecia Awareness Month`
- **Folder ID:** `6ab8615c3518a22dd8b2603d`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Alopecia Awareness Month** | `6ab860a00b72a4c915947979` | 0:47 (47.5s) | 1080x1920 (9:16) | 14.33 MB | `alopecia-awareness` | [6ab860a00b72a4c915947979](https://play.gumlet.io/embed/6ab860a00b72a4c915947979) |

#### A3. Folder: `refine / Botox by Dr. Chirag`
- **Folder ID:** `6ab86180de5918773f4edf5b`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Botox by Dr. Chirag** | `6ab860e23518a22dd8b25e5e` | 6:09 (369.2s) | 1080x1920 (9:16) | 91.46 MB | `botox-dr-chirag` | [6ab860e23518a22dd8b25e5e](https://play.gumlet.io/embed/6ab860e23518a22dd8b25e5e) |

#### A4. Folder: `refine / Daily Skincare routine`
- **Folder ID:** `6ab861ab0b72a4c915947d2f`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Video 25-08-2026, 11 32 33 AM** | `6ab860f3de5918773f4edd83` | 1:25 (84.9s) | 1080x1920 (9:16) | 20.63 MB | `daily-skincare-routine` | [6ab860f3de5918773f4edd83](https://play.gumlet.io/embed/6ab860f3de5918773f4edd83) |

#### A5. Folder: `refine / Fat Freezing`
- **Folder ID:** `6ab861c90b72a4c915947d7e`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Treatment Procedures** | `6ab861e6de5918773f4ee0d3` | 2:28 (147.5s) | 1080x1920 (9:16) | 55.60 MB | `fat-freezing-explained`, `fat-freezing-procedure` | [6ab861e6de5918773f4ee0d3](https://play.gumlet.io/embed/6ab861e6de5918773f4ee0d3) |

#### A6. Folder: `refine / Hair Transplant And Hair Loss`
- **Folder ID:** `6ab862433518a22dd8b26384`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Video 01-09-2026, 3 15 25 PM** | `6ab979b0de5918773f54e70a` | 8:33 (512.6s) | 1080x1920 (9:16) | 122.87 MB | `hair-transplant-hair-loss` | [6ab979b0de5918773f54e70a](https://play.gumlet.io/embed/6ab979b0de5918773f54e70a) |

#### A7. Folder: `refine / IV DRIPS`
- **Folder ID:** `6ab97a9c0b72a4c9159a8db2`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **IV DRIPS** | `6ab97aaede5918773f54ebc5` | 0:46 (45.7s) | 1080x1920 (9:16) | 10.60 MB | `iv-drips` | [6ab97aaede5918773f54ebc5](https://play.gumlet.io/embed/6ab97aaede5918773f54ebc5) |

#### A8. Folder: `refine / IV Drip Therapy`
- **Folder ID:** `6ab97a310b72a4c9159a8bd7`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Video 19-08-2026, 12 26 59 PM** | `6ab97a423518a22dd8b86ef1` | 2:19 (139.2s) | 1080x1920 (9:16) | 30.43 MB | `iv-drip-therapy` | [6ab97a423518a22dd8b86ef1](https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1) |

#### A9. Folder: `refine / Kabalagala Branch`
- **Folder ID:** `6ab97ae7de5918773f54ecae`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Kabalagala B** | `6ab97afbde5918773f54ed17` | 1:26 (85.5s) | 1080x1920 (9:16) | 26.37 MB | `kabalagala-branch-tour` | [6ab97afbde5918773f54ed17](https://play.gumlet.io/embed/6ab97afbde5918773f54ed17) |

#### A10. Folder: `refine / Laser Hair Removal UnderArms`
- **Folder ID:** `6ab97b2cde5918773f54edf0`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Video 19-08-2026, 12 21 51 PM** | `6ab97b373518a22dd8b87309` | 1:26 (85.7s) | 1080x1920 (9:16) | 26.70 MB | `laser-hair-removal-underarms` | [6ab97b373518a22dd8b87309](https://play.gumlet.io/embed/6ab97b373518a22dd8b87309) |

#### A11. Folder: `refine / Psoriasis`
- **Folder ID:** `6ab97b660b72a4c9159a911e`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Psoriasiss** | `6ab97b733518a22dd8b873f4` | 1:14 (73.6s) | 1080x1920 (9:16) | 17.79 MB | `psoriasis` | [6ab97b733518a22dd8b873f4](https://play.gumlet.io/embed/6ab97b733518a22dd8b873f4) |

#### A12. Folder: `refine / Refine Videos-2026`
- **Folder ID:** `6ab987700b72a4c9159aced7`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 6
- **Video Assets in this folder:** 2

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **HYDRAFACIAL KERAVIVE ** | `6ab98d1b0b72a4c9159aeeb2` | 1:10 (70.1s) | 1080x1920 (9:16) | 31.66 MB | `hydrafacial-keravive` | [6ab98d1b0b72a4c9159aeeb2](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb2) |
| **HAIR TRANSPLANT ** | `6ab98d1b0b72a4c9159aeeb1` | 1:15 (74.8s) | 1080x1920 (9:16) | 48.73 MB | `hair-transplant` | [6ab98d1b0b72a4c9159aeeb1](https://play.gumlet.io/embed/6ab98d1b0b72a4c9159aeeb1) |

#### A13. Folder: `refine / September Offers`
- **Folder ID:** `6ab98d92de5918773f5550fd`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Offer details ** | `6ab98da0de5918773f55516e` | 2:10 (130.3s) | 1080x1920 (9:16) | 24.22 MB | `september-offers-details` | [6ab98da0de5918773f55516e](https://play.gumlet.io/embed/6ab98da0de5918773f55516e) |
| **Announcing the offers** | `6ab98da03518a22dd8b8d211` | 0:41 (40.8s) | 1080x1920 (9:16) | 6.36 MB | `september-offers-announcement` | [6ab98da03518a22dd8b8d211](https://play.gumlet.io/embed/6ab98da03518a22dd8b8d211) |

#### A14. Folder: `refine / What Clients should know about Skincare`
- **Folder ID:** `6ab98de53518a22dd8b8d40a`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Video 25-08-2026, 11 48 02 AM** | `6ab98dee3518a22dd8b8d46a` | 0:52 (51.7s) | 1080x1920 (9:16) | 12.08 MB | `skincare-what-clients-should-know` | [6ab98dee3518a22dd8b8d46a](https://play.gumlet.io/embed/6ab98dee3518a22dd8b8d46a) |

#### A15. Folder: `refine / Refine Videos-2026 / Botox Treatment`
- **Folder ID:** `6ab987843518a22dd8b8b0f0`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 8

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **DJI_20260717143045_0230_D** | `6ab987a10b72a4c9159acfda` | 1:04 (64.2s) | 1080x1920 (9:16) | 45.85 MB | `botox-clip-5` | [6ab987a10b72a4c9159acfda](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfda) |
| **DJI_20260717143606_0241_D** | `6ab987a1de5918773f552f51` | 0:04 (4.1s) | 1080x1920 (9:16) | 2.20 MB | `botox-clip-7` | [6ab987a1de5918773f552f51](https://play.gumlet.io/embed/6ab987a1de5918773f552f51) |
| **DJI_20260717143206_0231_D** | `6ab987a13518a22dd8b8b175` | 0:28 (28.2s) | 1080x1920 (9:16) | 18.35 MB | `botox-clip-2` | [6ab987a13518a22dd8b8b175](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b175) |
| **DJI_20260717143614_0242_D** | `6ab987a13518a22dd8b8b173` | 1:00 (59.5s) | 1080x1920 (9:16) | 26.04 MB | `botox-clip-4` | [6ab987a13518a22dd8b8b173](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b173) |
| **DJI_20260717143244_0232_D** | `6ab987a10b72a4c9159acfd8` | 0:18 (17.5s) | 1080x1920 (9:16) | 11.02 MB | `botox-clip-3` | [6ab987a10b72a4c9159acfd8](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd8) |
| **DJI_20260717142858_0229_D** | `6ab987a10b72a4c9159acfd9` | 1:38 (97.8s) | 1080x1920 (9:16) | 43.95 MB | `botox-clip-6` | [6ab987a10b72a4c9159acfd9](https://play.gumlet.io/embed/6ab987a10b72a4c9159acfd9) |
| **DJI_20260717142708_0227_D** | `6ab987a13518a22dd8b8b174` | 0:26 (25.8s) | 1080x1920 (9:16) | 11.60 MB | `botox-clip-1` | [6ab987a13518a22dd8b8b174](https://play.gumlet.io/embed/6ab987a13518a22dd8b8b174) |
| **DJI_20260717142437_0226_D** | `6ab987a1de5918773f552f50` | 2:28 (148.5s) | 1080x1920 (9:16) | 72.59 MB | `botox-treatment-session` | [6ab987a1de5918773f552f50](https://play.gumlet.io/embed/6ab987a1de5918773f552f50) |

#### A16. Folder: `refine / Refine Videos-2026 / Bukoto branch`
- **Folder ID:** `6ab988470b72a4c9159ad2ce`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **BUKOTO PREMISES** | `6ab988533518a22dd8b8b486` | 0:58 (58.4s) | 1080x1920 (9:16) | 17.54 MB | `bukoto-branch-tour` | [6ab988533518a22dd8b8b486](https://play.gumlet.io/embed/6ab988533518a22dd8b8b486) |

#### A17. Folder: `refine / Refine Videos-2026 / CleopatraTreatment(Hydrafacial)`
- **Folder ID:** `6ab988ab3518a22dd8b8b5f5`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Cleopatra** | `6ab988b7de5918773f553427` | 8:29 (508.5s) | 1080x1920 (9:16) | 167.96 MB | `cleopatra-hydrafacial-treatment` | [6ab988b7de5918773f553427](https://play.gumlet.io/embed/6ab988b7de5918773f553427) |
| **Cleopatra explanation** | `6ab988b70b72a4c9159ad4bc` | 2:40 (160.5s) | 1080x1920 (9:16) | 58.68 MB | `cleopatra-hydrafacial-explained` | [6ab988b70b72a4c9159ad4bc](https://play.gumlet.io/embed/6ab988b70b72a4c9159ad4bc) |

#### A18. Folder: `refine / Refine Videos-2026 / Fat Freezing`
- **Folder ID:** `6ab989f13518a22dd8b8bb24`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **FAT FREEZING TREATMENT ** | `6ab989fa3518a22dd8b8bb45` | 1:14 (74.4s) | 1080x1920 (9:16) | 28.00 MB | `fat-freezing-treatment` | [6ab989fa3518a22dd8b8bb45](https://play.gumlet.io/embed/6ab989fa3518a22dd8b8bb45) |

#### A19. Folder: `refine / Refine Videos-2026 / Fillers`
- **Folder ID:** `6ab98b613518a22dd8b8c27b`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 19

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **DJI_20260717151036_0271_D** | `6ab98bfcde5918773f554584` | 0:24 (23.9s) | 1080x1920 (9:16) | 11.35 MB | `fillers-clip-4` | [6ab98bfcde5918773f554584](https://play.gumlet.io/embed/6ab98bfcde5918773f554584) |
| **DJI_20260717150706_0270_D** | `6ab98bea0b72a4c9159ae6c5` | 0:07 (7.2s) | 1080x1920 (9:16) | 4.24 MB | `fillers-clip-10` | [6ab98bea0b72a4c9159ae6c5](https://play.gumlet.io/embed/6ab98bea0b72a4c9159ae6c5) |
| **DJI_20260717150638_0269_D** | `6ab98be8de5918773f554507` | 0:07 (6.7s) | 1080x1920 (9:16) | 3.22 MB | `fillers-clip-9` | [6ab98be8de5918773f554507](https://play.gumlet.io/embed/6ab98be8de5918773f554507) |
| **DJI_20260717145802_0256_D** | `6ab98bdf0b72a4c9159ae662` | 0:46 (46.3s) | 1080x1920 (9:16) | 18.80 MB | `fillers-clip-3` | [6ab98bdf0b72a4c9159ae662](https://play.gumlet.io/embed/6ab98bdf0b72a4c9159ae662) |
| **DJI_20260717145413_0253_D** | `6ab98bdc0b72a4c9159ae64e` | 0:47 (46.8s) | 1080x1920 (9:16) | 18.45 MB | `fillers-clip-2` | [6ab98bdc0b72a4c9159ae64e](https://play.gumlet.io/embed/6ab98bdc0b72a4c9159ae64e) |
| **DJI_20260717145219_0252_D** | `6ab98bb93518a22dd8b8c50a` | 1:20 (79.8s) | 1080x1920 (9:16) | 30.13 MB | `fillers-treatment-session` | [6ab98bb93518a22dd8b8c50a](https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c50a) |
| **DJI_20260717145131_0250_D** | `6ab98bb93518a22dd8b8c506` | 0:24 (24.3s) | 1080x1920 (9:16) | 12.78 MB | `fillers-clip-1` | [6ab98bb93518a22dd8b8c506](https://play.gumlet.io/embed/6ab98bb93518a22dd8b8c506) |
| **DJI_20260717152858_0287_D** | `6ab98bb40b72a4c9159ae514` | 0:13 (13.1s) | 1080x1920 (9:16) | 6.78 MB | `fillers-clip-18` | [6ab98bb40b72a4c9159ae514](https://play.gumlet.io/embed/6ab98bb40b72a4c9159ae514) |
| **DJI_20260717152803_0286_D** | `6ab98b723518a22dd8b8c306` | 0:24 (24.4s) | 1080x1920 (9:16) | 11.61 MB | `fillers-clip-17` | [6ab98b723518a22dd8b8c306](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c306) |
| **DJI_20260717152500_0285_D** | `6ab98b723518a22dd8b8c303` | 0:20 (19.5s) | 1080x1920 (9:16) | 10.31 MB | `fillers-clip-16` | [6ab98b723518a22dd8b8c303](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c303) |
| **DJI_20260717152031_0282_D** | `6ab98b723518a22dd8b8c301` | 0:15 (15.3s) | 1080x1920 (9:16) | 7.26 MB | `fillers-clip-15` | [6ab98b723518a22dd8b8c301](https://play.gumlet.io/embed/6ab98b723518a22dd8b8c301) |
| **DJI_20260717151746_0281_D** | `6ab98b710b72a4c9159ae2ff` | 0:17 (16.7s) | 1080x1920 (9:16) | 11.89 MB | `fillers-clip-14` | [6ab98b710b72a4c9159ae2ff](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2ff) |
| **DJI_20260717151644_0279_D** | `6ab98b710b72a4c9159ae2fd` | 0:22 (21.9s) | 1080x1920 (9:16) | 11.55 MB | `fillers-clip-13` | [6ab98b710b72a4c9159ae2fd](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2fd) |
| **DJI_20260717152052_0283_D** | `6ab98b71de5918773f5541c8` | 0:23 (23.2s) | 1080x1920 (9:16) | 11.56 MB | `fillers-clip-8` | [6ab98b71de5918773f5541c8](https://play.gumlet.io/embed/6ab98b71de5918773f5541c8) |
| **DJI_20260717151713_0280_D** | `6ab98b71de5918773f5541c4` | 0:26 (26.2s) | 1080x1920 (9:16) | 12.37 MB | `fillers-clip-7` | [6ab98b71de5918773f5541c4](https://play.gumlet.io/embed/6ab98b71de5918773f5541c4) |
| **DJI_20260717151217_0274_D** | `6ab98b71de5918773f5541c1` | 0:19 (19.1s) | 1080x1920 (9:16) | 13.47 MB | `fillers-clip-12` | [6ab98b71de5918773f5541c1](https://play.gumlet.io/embed/6ab98b71de5918773f5541c1) |
| **DJI_20260717151135_0273_D** | `6ab98b71de5918773f5541c0` | 0:28 (28.5s) | 1080x1920 (9:16) | 18.01 MB | `fillers-clip-5` | [6ab98b71de5918773f5541c0](https://play.gumlet.io/embed/6ab98b71de5918773f5541c0) |
| **DJI_20260717151408_0276_D** | `6ab98b710b72a4c9159ae2f6` | 0:22 (21.8s) | 1080x1920 (9:16) | 12.79 MB | `fillers-clip-6` | [6ab98b710b72a4c9159ae2f6](https://play.gumlet.io/embed/6ab98b710b72a4c9159ae2f6) |
| **DJI_20260717151104_0272_D** | `6ab98b713518a22dd8b8c2fb` | 0:26 (26.4s) | 1080x1920 (9:16) | 12.29 MB | `fillers-clip-11` | [6ab98b713518a22dd8b8c2fb](https://play.gumlet.io/embed/6ab98b713518a22dd8b8c2fb) |

#### A20. Folder: `refine / Refine Videos-2026 / Microneedling Syrums`
- **Folder ID:** `6ab98c5e0b72a4c9159ae9b6`
- **Parent ID:** `6ab987700b72a4c9159aced7`
- **Depth:** Level 2
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 5

| Video Title | Asset ID | Duration | Dimensions | File Size | Website Slug Mapped | Embed Player URL |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **DJI_20260730143326_0530_D** | `6ab98c95de5918773f5549f8` | 4:08 (248.3s) | 1080x1920 (9:16) | 142.55 MB | `microneedling-serums-session` | [6ab98c95de5918773f5549f8](https://play.gumlet.io/embed/6ab98c95de5918773f5549f8) |
| **DJI_20260730143840_0532_D** | `6ab98c95de5918773f5549f7` | 0:07 (6.7s) | 1080x1920 (9:16) | 4.18 MB | `microneedling-clip-2` | [6ab98c95de5918773f5549f7](https://play.gumlet.io/embed/6ab98c95de5918773f5549f7) |
| **DJI_20260730143922_0534_D** | `6ab98c953518a22dd8b8caef` | 0:06 (6.4s) | 1080x1920 (9:16) | 2.50 MB | `microneedling-clip-4` | [6ab98c953518a22dd8b8caef](https://play.gumlet.io/embed/6ab98c953518a22dd8b8caef) |
| **DJI_20260730143854_0533_D** | `6ab98c953518a22dd8b8caee` | 0:08 (8.2s) | 1080x1920 (9:16) | 5.86 MB | `microneedling-clip-3` | [6ab98c953518a22dd8b8caee](https://play.gumlet.io/embed/6ab98c953518a22dd8b8caee) |
| **DJI_20260730143802_0531_D** | `6ab98c950b72a4c9159aeb2c` | 0:10 (10.4s) | 1080x1920 (9:16) | 4.92 MB | `microneedling-clip-1` | [6ab98c950b72a4c9159aeb2c](https://play.gumlet.io/embed/6ab98c950b72a4c9159aeb2c) |

---

### Part B: Instagram Archive Folders
*(17 Folders under `refine / Refine posts` — 331 Video Reels)*

#### B1. Folder: `refine / Refine posts`
- **Folder ID:** `6ab97bba0b72a4c9159a9298`
- **Parent ID:** `6ab8606f3518a22dd8b25c8c`
- **Depth:** Level 1
- **Sub-directory Count:** 4
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B2. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part01`
- **Folder ID:** `6ab97bcade5918773f54f0e2`
- **Parent ID:** `6ab97bba0b72a4c9159a9298`
- **Depth:** Level 2
- **Sub-directory Count:** 3
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B3. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part02`
- **Folder ID:** `6ab97dc7de5918773f54fbac`
- **Parent ID:** `6ab97bba0b72a4c9159a9298`
- **Depth:** Level 2
- **Sub-directory Count:** 3
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B4. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part03`
- **Folder ID:** `6ab982a50b72a4c9159ab4dd`
- **Parent ID:** `6ab97bba0b72a4c9159a9298`
- **Depth:** Level 2
- **Sub-directory Count:** 4
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B5. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part04`
- **Folder ID:** `6ab98674de5918773f55297f`
- **Parent ID:** `6ab97bba0b72a4c9159a9298`
- **Depth:** Level 2
- **Sub-directory Count:** 2
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B6. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part03 / alma.lasers_eastafrica`
- **Folder ID:** `6ab982e60b72a4c9159ab605`
- **Parent ID:** `6ab982a50b72a4c9159ab4dd`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 0

*No direct video assets inside this folder (parent folder for creator/reel parts).*

#### B7. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part03 / calabashspaug`
- **Folder ID:** `6ab983010b72a4c9159ab6b0`
- **Parent ID:** `6ab982a50b72a4c9159ab4dd`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 1

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| calabashspaug_2025-05-30_DKRu5y9Nxmi | `6ab983080b72a4c9159ab6d1` | 0:33 (33.0s) | 360x640 | 1.79 MB | [Watch Reel](https://play.gumlet.io/embed/6ab983080b72a4c9159ab6d1) |

#### B8. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part01 / locheng_jemimah`
- **Folder ID:** `6ab97bd9de5918773f54f122`
- **Parent ID:** `6ab97bcade5918773f54f0e2`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| locheng_jemimah_2026-03-08_DVnv2xjiDui | `6ab97be8de5918773f54f178` | 1:21 (81.3s) | 720x1280 | 13.31 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97be8de5918773f54f178) |
| locheng_jemimah_2026-02-20_DU-TqRnCDoS | `6ab97be4de5918773f54f158` | 1:56 (116.2s) | 720x1280 | 15.25 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97be4de5918773f54f158) |

#### B9. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part02 / locheng_jemimah`
- **Folder ID:** `6ab97e2e0b72a4c9159a9ef2`
- **Parent ID:** `6ab97dc7de5918773f54fbac`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| locheng_jemimah_2026-02-12_DUpdtwuCIoE | `6ab97e4a3518a22dd8b8818b` | 1:45 (104.9s) | 720x1280 | 14.75 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97e4a3518a22dd8b8818b) |
| locheng_jemimah_2026-02-03_DUSi2q8CKZw | `6ab97e4a3518a22dd8b8818a` | 1:41 (100.6s) | 720x1280 | 13.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97e4a3518a22dd8b8818a) |

#### B10. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part03 / mamideb`
- **Folder ID:** `6ab9839c3518a22dd8b89c40`
- **Parent ID:** `6ab982a50b72a4c9159ab4dd`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 7

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| mamideb_2025-08-05_DM94HFdi8EB | `6ab98421de5918773f551c89` | 1:22 (82.5s) | 720x1280 | 12.72 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98421de5918773f551c89) |
| mamideb_2025-05-02_DJJQ1fyiOxi | `6ab984200b72a4c9159abd03` | 2:44 (164.2s) | 1080x1920 | 39.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab984200b72a4c9159abd03) |
| mamideb_2025-05-19_DJ08Q5SiVwJ | `6ab984200b72a4c9159abd02` | 1:16 (76.0s) | 720x1280 | 9.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab984200b72a4c9159abd02) |
| mamideb_2025-05-11_DJhKKxdCvBm | `6ab98420de5918773f551c86` | 2:46 (165.8s) | 1080x1920 | 46.64 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98420de5918773f551c86) |
| mamideb_2025-06-22_DLNDxHCiltm | `6ab984200b72a4c9159abcfe` | 3:10 (189.8s) | 720x1280 | 17.49 MB | [Watch Reel](https://play.gumlet.io/embed/6ab984200b72a4c9159abcfe) |
| mamideb_2025-06-15_DK6Y3Iii0h6 | `6ab984203518a22dd8b89f10` | 1:20 (80.0s) | 720x1280 | 16.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab984203518a22dd8b89f10) |
| mamideb_2025-07-20_DMUuTLxCCaZ | `6ab984200b72a4c9159abcfd` | 0:53 (53.5s) | 720x1280 | 8.10 MB | [Watch Reel](https://play.gumlet.io/embed/6ab984200b72a4c9159abcfd) |

#### B11. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part04 / mamideb`
- **Folder ID:** `6ab98688de5918773f5529d1`
- **Parent ID:** `6ab98674de5918773f55297f`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| mamideb_2025-03-16_DHQUAQqCL67 | `6ab986950b72a4c9159aca58` | 3:18 (198.2s) | 1080x1920 | 37.07 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986950b72a4c9159aca58) |
| mamideb_2025-03-14_DHK5f4ZNH7e | `6ab98695de5918773f552a1e` | 4:44 (284.0s) | 1080x1920 | 41.97 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98695de5918773f552a1e) |

#### B12. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part02 / mamideb`
- **Folder ID:** `6ab97e683518a22dd8b88241`
- **Parent ID:** `6ab97dc7de5918773f54fbac`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 2

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| mamideb_2026-01-28_DUC4p9XDGFA | `6ab97e7dde5918773f54ff9c` | 4:45 (285.2s) | 1080x1920 | 71.83 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97e7dde5918773f54ff9c) |
| mamideb_2026-01-24_DT4hXk0DHbO | `6ab97e7d0b72a4c9159aa05c` | 0:44 (44.2s) | 720x1280 | 8.00 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97e7d0b72a4c9159aa05c) |

#### B13. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part01 / mamideb`
- **Folder ID:** `6ab97c170b72a4c9159a945d`
- **Parent ID:** `6ab97bcade5918773f54f0e2`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 7

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| mamideb_2026-05-12_DYOsz4QMUf4 | `6ab97c323518a22dd8b87729` | 0:46 (45.6s) | 720x1280 | 6.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c323518a22dd8b87729) |
| mamideb_2026-04-13_DXEyfNBDK6b | `6ab97c320b72a4c9159a94de` | 1:16 (75.7s) | 720x1280 | 9.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c320b72a4c9159a94de) |
| mamideb_2026-02-22_DVDRhfCDABU | `6ab97c323518a22dd8b87728` | 1:27 (86.8s) | 720x1280 | 15.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c323518a22dd8b87728) |
| mamideb_2026-05-20_DYkCy0VsgQI | `6ab97c32de5918773f54f2a0` | 0:53 (53.0s) | 720x1280 | 7.92 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c32de5918773f54f2a0) |
| mamideb_2026-03-12_DVxqHI_DMuQ | `6ab97c320b72a4c9159a94dc` | 3:58 (237.9s) | 1080x1920 | 54.81 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c320b72a4c9159a94dc) |
| mamideb_2026-04-19_DXTsQtJjGXE | `6ab97c32de5918773f54f29f` | 0:49 (48.6s) | 720x1280 | 7.87 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c32de5918773f54f29f) |
| mamideb_2026-03-26_DWWFDHLjFne | `6ab97c320b72a4c9159a94dd` | 2:05 (125.1s) | 720x960 | 10.92 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97c320b72a4c9159a94dd) |

#### B14. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part01 / refineskinandbodyclinic`
- **Folder ID:** `6ab97c80de5918773f54f438`
- **Parent ID:** `6ab97bcade5918773f54f0e2`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 88

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| refineskinandbodyclinic_2026-05-28_DY303mtIAqo | `6ab97d8a0b72a4c9159a9bc4` | 0:13 (13.3s) | 720x720 | 0.75 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d8a0b72a4c9159a9bc4) |
| refineskinandbodyclinic_2026-05-27_DY1A9soI8ZK | `6ab97d890b72a4c9159a9bb9` | 0:16 (15.8s) | 720x720 | 2.05 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d890b72a4c9159a9bb9) |
| refineskinandbodyclinic_2026-05-26_DYyosLWoNd3 | `6ab97d893518a22dd8b87dd0` | 0:13 (13.0s) | 720x720 | 0.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d893518a22dd8b87dd0) |
| refineskinandbodyclinic_2026-05-25_DYwHXylod5y | `6ab97d82de5918773f54f9fc` | 0:20 (20.0s) | 720x720 | 1.27 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d82de5918773f54f9fc) |
| refineskinandbodyclinic_2026-05-22_DYpMJo9owVU | `6ab97d7f0b72a4c9159a9b76` | 1:21 (81.2s) | 720x1280 | 14.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d7f0b72a4c9159a9b76) |
| refineskinandbodyclinic_2026-05-21_DYlyGUUIB3X | `6ab97d7f3518a22dd8b87da1` | 1:00 (59.9s) | 720x1280 | 7.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d7f3518a22dd8b87da1) |
| refineskinandbodyclinic_2026-05-20_DYjPb42oYkQ | `6ab97d7f0b72a4c9159a9b6f` | 0:12 (12.0s) | 720x720 | 0.84 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d7f0b72a4c9159a9b6f) |
| refineskinandbodyclinic_2026-05-19_DYgpK6kouSs | `6ab97d7fde5918773f54f9d5` | 0:22 (22.0s) | 720x720 | 1.10 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d7fde5918773f54f9d5) |
| refineskinandbodyclinic_2026-05-16_DYZMC1MI7IH | `6ab97d773518a22dd8b87d79` | 1:53 (112.7s) | 720x1280 | 24.30 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d773518a22dd8b87d79) |
| refineskinandbodyclinic_2026-05-15_DYWU_w8IyD- | `6ab97d743518a22dd8b87d71` | 0:15 (15.0s) | 720x720 | 0.68 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d743518a22dd8b87d71) |
| refineskinandbodyclinic_2026-05-14_DYT4bA9IeeX | `6ab97d740b72a4c9159a9b27` | 1:07 (66.9s) | 720x1280 | 10.70 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d740b72a4c9159a9b27) |
| refineskinandbodyclinic_2026-05-11_DYMFPmZobLj | `6ab97d740b72a4c9159a9b25` | 0:22 (22.0s) | 720x720 | 0.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d740b72a4c9159a9b25) |
| refineskinandbodyclinic_2026-05-08_DYEZrxGI0vG | `6ab97d700b72a4c9159a9b15` | 0:22 (22.1s) | 720x720 | 1.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d700b72a4c9159a9b15) |
| refineskinandbodyclinic_2026-05-08_DYEfyyqohPg | `6ab97d6f0b72a4c9159a9b10` | 0:25 (25.0s) | 720x720 | 1.34 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d6f0b72a4c9159a9b10) |
| refineskinandbodyclinic_2026-05-07_DYCzgTuolGL | `6ab97d6ade5918773f54f963` | 1:39 (98.7s) | 720x1280 | 18.31 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d6ade5918773f54f963) |
| refineskinandbodyclinic_2026-05-07_DYCIVbVoQh- | `6ab97d6ade5918773f54f95f` | 0:21 (21.1s) | 720x720 | 0.61 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d6ade5918773f54f95f) |
| refineskinandbodyclinic_2026-05-06_DX_FAQcIQIW | `6ab97d670b72a4c9159a9ae4` | 1:39 (99.2s) | 720x1280 | 12.29 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d670b72a4c9159a9ae4) |
| refineskinandbodyclinic_2026-05-05_DX8mMuYIXlL | `6ab97d643518a22dd8b87d0f` | 0:16 (16.0s) | 720x720 | 0.67 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d643518a22dd8b87d0f) |
| refineskinandbodyclinic_2026-05-02_DX1tPd4IsMb | `6ab97d623518a22dd8b87d07` | 1:04 (63.7s) | 720x1280 | 7.35 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d623518a22dd8b87d07) |
| refineskinandbodyclinic_2026-05-02_DX1k2n8o0rQ | `6ab97d603518a22dd8b87cfb` | 1:07 (66.6s) | 720x1280 | 7.39 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d603518a22dd8b87cfb) |
| refineskinandbodyclinic_2026-05-02_DX1cW3gorEP | `6ab97d5d3518a22dd8b87ce7` | 0:57 (56.8s) | 720x1280 | 5.82 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d5d3518a22dd8b87ce7) |
| refineskinandbodyclinic_2026-05-01_DXzBt5jIR2e | `6ab97d5c0b72a4c9159a9ab2` | 0:57 (56.9s) | 720x1280 | 6.91 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d5c0b72a4c9159a9ab2) |
| refineskinandbodyclinic_2026-04-29_DXtJqWtiE1J | `6ab97d593518a22dd8b87cd7` | 0:22 (22.0s) | 720x720 | 1.21 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d593518a22dd8b87cd7) |
| refineskinandbodyclinic_2026-04-28_DXq8h9gIix8 | `6ab97d550b72a4c9159a9aa0` | 0:48 (48.2s) | 720x1280 | 7.93 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d550b72a4c9159a9aa0) |
| refineskinandbodyclinic_2026-04-27_DXonscfIZtZ | `6ab97d46de5918773f54f8ba` | 0:24 (24.0s) | 720x720 | 0.85 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d46de5918773f54f8ba) |
| refineskinandbodyclinic_2026-04-27_DXoAPq-IQOO | `6ab97d45de5918773f54f8b7` | 0:21 (21.1s) | 720x720 | 1.08 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d45de5918773f54f8b7) |
| refineskinandbodyclinic_2026-04-23_DXdr30qo7iD | `6ab97d440b72a4c9159a9a55` | 0:16 (16.0s) | 720x720 | 0.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d440b72a4c9159a9a55) |
| refineskinandbodyclinic_2026-04-22_DXb2rcwokwv | `6ab97d2b3518a22dd8b87c09` | 2:01 (120.8s) | 720x1280 | 12.21 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b3518a22dd8b87c09) |
| refineskinandbodyclinic_2026-04-15_DXJQbyeoZfG | `6ab97d2b0b72a4c9159a99d1` | 0:25 (25.1s) | 720x720 | 1.15 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b0b72a4c9159a99d1) |
| refineskinandbodyclinic_2026-04-20_DXV-sA2Il-j | `6ab97d2b3518a22dd8b87bfd` | 0:21 (21.0s) | 720x720 | 0.69 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b3518a22dd8b87bfd) |
| refineskinandbodyclinic_2026-05-31_DY_mB08Idmt | `6ab97d2b0b72a4c9159a99d0` | 2:19 (138.6s) | 720x1280 | 14.15 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b0b72a4c9159a99d0) |
| refineskinandbodyclinic_2026-04-14_DXGjNT7oRil | `6ab97d2bde5918773f54f80d` | 1:00 (59.6s) | 720x1280 | 6.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2bde5918773f54f80d) |
| refineskinandbodyclinic_2026-04-21_DXYjcQXoRCR | `6ab97d2b0b72a4c9159a99d2` | 0:19 (19.0s) | 720x720 | 0.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b0b72a4c9159a99d2) |
| refineskinandbodyclinic_2026-05-29_DY6ZIJwIxOm | `6ab97d2b3518a22dd8b87bf9` | 0:49 (49.4s) | 720x1280 | 8.05 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b3518a22dd8b87bf9) |
| refineskinandbodyclinic_2026-04-15_DXJPdWYobQe | `6ab97d2bde5918773f54f80e` | 2:02 (122.4s) | 720x1280 | 20.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2bde5918773f54f80e) |
| refineskinandbodyclinic_2026-04-14_DXGhrtPI0hO | `6ab97d2bde5918773f54f80b` | 0:16 (16.0s) | 720x720 | 0.99 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2bde5918773f54f80b) |
| refineskinandbodyclinic_2026-04-17_DXOK5S9owvl | `6ab97d2b3518a22dd8b87bfe` | 0:30 (30.0s) | 720x720 | 1.34 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b3518a22dd8b87bfe) |
| refineskinandbodyclinic_2026-05-30_DY9T6IjIM_K | `6ab97d2b3518a22dd8b87bfc` | 2:24 (144.0s) | 720x1280 | 13.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d2b3518a22dd8b87bfc) |
| refineskinandbodyclinic_2026-04-07_DW0q0BTiBH7 | `6ab97d153518a22dd8b87ba3` | 0:16 (16.0s) | 720x720 | 0.53 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d153518a22dd8b87ba3) |
| refineskinandbodyclinic_2026-04-06_DWyBdDziKfM | `6ab97d103518a22dd8b87b7d` | 0:25 (25.0s) | 720x720 | 1.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d103518a22dd8b87b7d) |
| refineskinandbodyclinic_2026-04-04_DWtFVjWiK4M | `6ab97d0d0b72a4c9159a992c` | 1:15 (74.9s) | 1276x720 | 7.51 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d0d0b72a4c9159a992c) |
| refineskinandbodyclinic_2026-04-03_DWp83lJCO5B | `6ab97d0dde5918773f54f773` | 0:10 (10.0s) | 720x720 | 0.30 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d0dde5918773f54f773) |
| refineskinandbodyclinic_2026-04-01_DWlQPmZiIMB | `6ab97d0c0b72a4c9159a9915` | 0:14 (14.0s) | 720x720 | 0.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d0c0b72a4c9159a9915) |
| refineskinandbodyclinic_2026-03-31_DWidgrsCCmw | `6ab97d0cde5918773f54f767` | 0:30 (30.0s) | 720x720 | 1.84 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d0cde5918773f54f767) |
| refineskinandbodyclinic_2026-03-30_DWgDXDgCL9f | `6ab97d0ade5918773f54f75d` | 0:12 (12.0s) | 720x720 | 0.60 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d0ade5918773f54f75d) |
| refineskinandbodyclinic_2026-03-29_DWdOHR-iJHP | `6ab97d093518a22dd8b87b4a` | 0:19 (19.0s) | 720x720 | 1.03 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d093518a22dd8b87b4a) |
| refineskinandbodyclinic_2026-03-27_DWYQm5WiDNB | `6ab97d083518a22dd8b87b43` | 1:43 (102.9s) | 720x1280 | 9.01 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d083518a22dd8b87b43) |
| refineskinandbodyclinic_2026-03-25_DWT0URfCHo9 | `6ab97d070b72a4c9159a98f2` | 0:15 (15.4s) | 720x720 | 0.54 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d070b72a4c9159a98f2) |
| refineskinandbodyclinic_2026-03-24_DWQlKfnCJ28 | `6ab97d060b72a4c9159a98e6` | 1:30 (90.2s) | 720x1280 | 15.39 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d060b72a4c9159a98e6) |
| refineskinandbodyclinic_2026-03-24_DWQeNkyiA5v | `6ab97d053518a22dd8b87b2e` | 0:14 (14.0s) | 720x720 | 0.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d053518a22dd8b87b2e) |
| refineskinandbodyclinic_2026-03-23_DWNzsB5iEfl | `6ab97d05de5918773f54f72a` | 0:17 (17.0s) | 720x720 | 0.60 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d05de5918773f54f72a) |
| refineskinandbodyclinic_2026-03-20_DWF6GoECEDs | `6ab97d053518a22dd8b87b29` | 0:26 (26.0s) | 720x720 | 2.03 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d053518a22dd8b87b29) |
| refineskinandbodyclinic_2026-03-20_DWF6BjjiF7s | `6ab97d043518a22dd8b87b24` | 0:28 (28.4s) | 720x720 | 1.16 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d043518a22dd8b87b24) |
| refineskinandbodyclinic_2026-03-19_DWDoWpECMpJ | `6ab97d023518a22dd8b87b1a` | 0:26 (26.0s) | 720x720 | 0.75 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97d023518a22dd8b87b1a) |
| refineskinandbodyclinic_2026-03-18_DWBvT9CiHyP | `6ab97cffde5918773f54f70e` | 0:27 (27.0s) | 720x720 | 1.45 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cffde5918773f54f70e) |
| refineskinandbodyclinic_2026-03-17_DV-adlRiIt9 | `6ab97cfe3518a22dd8b87b05` | 1:34 (94.3s) | 720x1280 | 12.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cfe3518a22dd8b87b05) |
| refineskinandbodyclinic_2026-03-17_DV-0q3nCKLZ | `6ab97cfcde5918773f54f701` | 0:21 (21.0s) | 720x720 | 1.21 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cfcde5918773f54f701) |
| refineskinandbodyclinic_2026-03-14_DV2mJ2uIonJ | `6ab97cfb0b72a4c9159a987e` | 0:15 (15.1s) | 720x720 | 0.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cfb0b72a4c9159a987e) |
| refineskinandbodyclinic_2026-03-13_DV1RkfWo8BF | `6ab97cfa0b72a4c9159a9877` | 0:22 (22.1s) | 720x720 | 0.80 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cfa0b72a4c9159a9877) |
| refineskinandbodyclinic_2026-03-13_DV0SQP_IJSI | `6ab97cf9de5918773f54f6ec` | 0:30 (30.0s) | 720x720 | 1.19 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf9de5918773f54f6ec) |
| refineskinandbodyclinic_2026-03-11_DVvn3mVo_bT | `6ab97cf7de5918773f54f6dc` | 0:20 (20.1s) | 720x720 | 1.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf7de5918773f54f6dc) |
| refineskinandbodyclinic_2026-03-11_DVv18OGIB2q | `6ab97cf70b72a4c9159a985b` | 0:52 (52.5s) | 720x1280 | 7.16 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf70b72a4c9159a985b) |
| refineskinandbodyclinic_2026-03-10_DVse8weoI_4 | `6ab97cf6de5918773f54f6d6` | 0:38 (38.3s) | 720x1280 | 5.12 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf6de5918773f54f6d6) |
| refineskinandbodyclinic_2026-03-10_DVs0rHlIYYb | `6ab97cf5de5918773f54f6d3` | 0:51 (51.2s) | 532x358 | 1.00 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf5de5918773f54f6d3) |
| refineskinandbodyclinic_2026-03-09_DVp1GxJolUN | `6ab97cf40b72a4c9159a984f` | 0:24 (24.2s) | 720x720 | 1.03 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf40b72a4c9159a984f) |
| refineskinandbodyclinic_2026-03-07_DVlLANdIaRA | `6ab97cf10b72a4c9159a9842` | 0:17 (16.6s) | 720x720 | 0.58 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf10b72a4c9159a9842) |
| refineskinandbodyclinic_2026-03-07_DVk4dXDIS6c | `6ab97cf1de5918773f54f6aa` | 0:30 (30.0s) | 720x720 | 1.53 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cf1de5918773f54f6aa) |
| refineskinandbodyclinic_2026-03-06_DViHn6KCKmL | `6ab97ced3518a22dd8b87ab6` | 0:53 (52.7s) | 720x1280 | 5.87 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ced3518a22dd8b87ab6) |
| refineskinandbodyclinic_2026-03-06_DVi4bp6iHYj | `6ab97ce9de5918773f54f664` | 2:00 (119.5s) | 720x1280 | 12.10 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce9de5918773f54f664) |
| refineskinandbodyclinic_2026-03-05_DVfggxriEB1 | `6ab97ce93518a22dd8b87a99` | 0:22 (22.1s) | 720x720 | 1.70 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce93518a22dd8b87a99) |
| refineskinandbodyclinic_2026-03-04_DVdFM7SCHQo | `6ab97ce8de5918773f54f659` | 0:12 (12.1s) | 720x720 | 0.62 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce8de5918773f54f659) |
| refineskinandbodyclinic_2026-03-03_DVaR79biPyw | `6ab97ce8de5918773f54f655` | 0:21 (21.1s) | 720x720 | 1.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce8de5918773f54f655) |
| refineskinandbodyclinic_2026-03-03_DVai21PCFto | `6ab97ce60b72a4c9159a97ff` | 0:15 (15.4s) | 720x720 | 0.53 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce60b72a4c9159a97ff) |
| refineskinandbodyclinic_2026-02-27_DVQCeyUCIIg | `6ab97ce53518a22dd8b87a8a` | 0:19 (19.0s) | 720x720 | 1.12 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97ce53518a22dd8b87a8a) |
| refineskinandbodyclinic_2026-02-27_DVQ_NmhiDia | `6ab97cdcde5918773f54f61e` | 2:02 (122.0s) | 720x1280 | 20.80 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cdcde5918773f54f61e) |
| refineskinandbodyclinic_2026-02-25_DVK4pA3CEuc | `6ab97cdb3518a22dd8b87a3e` | 0:13 (13.2s) | 720x720 | 1.50 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cdb3518a22dd8b87a3e) |
| refineskinandbodyclinic_2026-02-24_DVJLVePCH2u_3 | `6ab97cd83518a22dd8b87a21` | 0:06 (6.1s) | 720x960 | 0.44 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cd83518a22dd8b87a21) |
| refineskinandbodyclinic_2026-02-24_DVJLVePCH2u_2 | `6ab97cc9de5918773f54f5b6` | 0:48 (48.4s) | 720x960 | 3.92 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc9de5918773f54f5b6) |
| refineskinandbodyclinic_2026-02-18_DU5PFLMCCM | `6ab97cc90b72a4c9159a9776` | 0:12 (12.0s) | 720x720 | 0.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc90b72a4c9159a9776) |
| refineskinandbodyclinic_2026-04-10_DW9CQYuIVrG | `6ab97cc9de5918773f54f5b3` | 2:05 (125.4s) | 720x1280 | 19.69 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc9de5918773f54f5b3) |
| refineskinandbodyclinic_2026-02-19_DU71bqdCEYl | `6ab97cc90b72a4c9159a9775` | 0:12 (12.0s) | 720x720 | 1.55 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc90b72a4c9159a9775) |
| refineskinandbodyclinic_2026-04-13_DXE1O0OIxO8 | `6ab97cc8de5918773f54f5a9` | 0:26 (26.0s) | 720x720 | 0.76 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc8de5918773f54f5a9) |
| refineskinandbodyclinic_2026-02-17_DU2vz3kiN4P | `6ab97cc8de5918773f54f5a8` | 1:16 (76.1s) | 720x1280 | 8.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc8de5918773f54f5a8) |
| refineskinandbodyclinic_2026-02-24_DVJLVePCH2u | `6ab97cc83518a22dd8b879d5` | 0:36 (35.5s) | 720x960 | 2.91 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc83518a22dd8b879d5) |
| refineskinandbodyclinic_2026-04-09_DW6eZ2Qoths | `6ab97cc8de5918773f54f5a7` | 1:13 (73.0s) | 720x1280 | 11.63 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc8de5918773f54f5a7) |
| refineskinandbodyclinic_2026-04-09_DW6hF5OIlA5 | `6ab97cc8de5918773f54f5a6` | 1:46 (105.9s) | 720x1280 | 16.44 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc8de5918773f54f5a6) |
| refineskinandbodyclinic_2026-04-10_DW8NPwaI38Q | `6ab97cc80b72a4c9159a9770` | 0:17 (17.0s) | 720x720 | 0.93 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc80b72a4c9159a9770) |
| refineskinandbodyclinic_2026-02-17_DU2gVjYiNUp | `6ab97cc83518a22dd8b879d1` | 0:12 (12.0s) | 720x720 | 0.44 MB | [Watch Reel](https://play.gumlet.io/embed/6ab97cc83518a22dd8b879d1) |

#### B15. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part02 / refineskinandbodyclinic`
- **Folder ID:** `6ab97f3e0b72a4c9159aa3ca`
- **Parent ID:** `6ab97dc7de5918773f54fbac`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 82

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| refineskinandbodyclinic_2026-01-29_DUFY1bYCLNS | `6ab9823ade5918773f5512c1` | 0:22 (22.0s) | 720x720 | 1.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9823ade5918773f5512c1) |
| refineskinandbodyclinic_2026-01-27_DUA4UWBCBLF | `6ab982393518a22dd8b895a8` | 2:14 (133.9s) | 720x1280 | 12.78 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982393518a22dd8b895a8) |
| refineskinandbodyclinic_2026-01-26_DT9jdZ8CJZ- | `6ab982383518a22dd8b89590` | 0:13 (12.6s) | 720x720 | 1.17 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982383518a22dd8b89590) |
| refineskinandbodyclinic_2026-01-24_DT4vtMYCM2K | `6ab982383518a22dd8b89587` | 0:28 (28.0s) | 720x720 | 1.69 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982383518a22dd8b89587) |
| refineskinandbodyclinic_2026-01-22_DTzYRHfiL5O | `6ab982323518a22dd8b89575` | 0:22 (22.1s) | 720x720 | 1.49 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982323518a22dd8b89575) |
| refineskinandbodyclinic_2026-01-21_DTw5Yc2CK0j | `6ab98232de5918773f551299` | 2:14 (133.7s) | 720x1280 | 15.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98232de5918773f551299) |
| refineskinandbodyclinic_2026-01-19_DTst82kiG51 | `6ab982300b72a4c9159ab25f` | 1:29 (89.1s) | 720x1280 | 9.75 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982300b72a4c9159ab25f) |
| refineskinandbodyclinic_2026-01-19_DTrm1ySCMJW | `6ab9822cde5918773f551281` | 0:13 (13.0s) | 720x720 | 0.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9822cde5918773f551281) |
| refineskinandbodyclinic_2026-01-13_DTdEr7fiPgQ | `6ab9822bde5918773f551277` | 0:13 (13.0s) | 720x720 | 0.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9822bde5918773f551277) |
| refineskinandbodyclinic_2026-01-13_DTdBTFdiJpP | `6ab982220b72a4c9159ab1ea` | 0:20 (20.1s) | 720x720 | 1.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982220b72a4c9159ab1ea) |
| refineskinandbodyclinic_2026-01-12_DTZaE1QiLaM | `6ab982160b72a4c9159ab1a1` | 0:17 (16.9s) | 720x720 | 1.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982160b72a4c9159ab1a1) |
| refineskinandbodyclinic_2026-01-09_DTSBZH2iIDz | `6ab982160b72a4c9159ab19e` | 0:34 (34.3s) | 720x720 | 1.54 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982160b72a4c9159ab19e) |
| refineskinandbodyclinic_2026-01-07_DTM4C_pCC9b | `6ab982153518a22dd8b894d5` | 1:13 (72.9s) | 720x1278 | 11.37 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982153518a22dd8b894d5) |
| refineskinandbodyclinic_2026-01-05_DTIRhsACDfW | `6ab9820e0b72a4c9159ab17f` | 0:05 (5.0s) | 720x720 | 0.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9820e0b72a4c9159ab17f) |
| refineskinandbodyclinic_2025-12-30_DS4zhSbiIjH | `6ab982090b72a4c9159ab16c` | 0:06 (6.2s) | 720x1280 | 0.61 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982090b72a4c9159ab16c) |
| refineskinandbodyclinic_2025-12-29_DS11ibhiJGP | `6ab98207de5918773f5511d1` | 0:32 (32.3s) | 720x1280 | 3.98 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98207de5918773f5511d1) |
| refineskinandbodyclinic_2025-12-26_DStqUr8CElY | `6ab98206de5918773f5511c5` | 0:16 (16.0s) | 720x720 | 1.40 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98206de5918773f5511c5) |
| refineskinandbodyclinic_2025-12-25_DSrZOGjiOmu | `6ab982050b72a4c9159ab151` | 0:50 (50.4s) | 720x924 | 8.59 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982050b72a4c9159ab151) |
| refineskinandbodyclinic_2026-02-13_DUsbgOhiJpk | `6ab98204de5918773f5511ae` | 1:28 (88.0s) | 720x1280 | 12.96 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98204de5918773f5511ae) |
| refineskinandbodyclinic_2026-02-13_DUsBbnkCOAx | `6ab982030b72a4c9159ab13e` | 0:18 (18.0s) | 720x720 | 1.30 MB | [Watch Reel](https://play.gumlet.io/embed/6ab982030b72a4c9159ab13e) |
| refineskinandbodyclinic_2026-02-12_DUpbmUDiFIn | `6ab981fe3518a22dd8b89442` | 0:12 (12.0s) | 720x720 | 1.17 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981fe3518a22dd8b89442) |
| refineskinandbodyclinic_2026-02-10_DUk8W5yCN02 | `6ab981e80b72a4c9159ab0e0` | 1:27 (86.8s) | 720x1280 | 9.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e80b72a4c9159ab0e0) |
| refineskinandbodyclinic_2026-02-02_DUQGsZYCGGC | `6ab981e73518a22dd8b893cf` | 0:18 (18.0s) | 720x720 | 0.87 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893cf) |
| refineskinandbodyclinic_2026-02-06_DUZ_05hiKS9 | `6ab981e73518a22dd8b893cd` | 1:01 (61.4s) | 720x1280 | 8.26 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893cd) |
| refineskinandbodyclinic_2026-01-29_DUGTHb_iHHi | `6ab981e73518a22dd8b893ce` | 2:51 (170.9s) | 720x1280 | 18.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893ce) |
| refineskinandbodyclinic_2026-01-30_DUIvH6SCGI5 | `6ab981e73518a22dd8b893cc` | 0:09 (8.7s) | 720x1280 | 0.90 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893cc) |
| refineskinandbodyclinic_2026-01-30_DUH_o1HiB93 | `6ab981e73518a22dd8b893ca` | 0:23 (23.3s) | 720x720 | 1.02 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893ca) |
| refineskinandbodyclinic_2026-02-04_DUU3DKyCHMw | `6ab981e73518a22dd8b893cb` | 0:17 (17.0s) | 720x720 | 0.67 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e73518a22dd8b893cb) |
| refineskinandbodyclinic_2026-02-09_DUi1-6BCEzX | `6ab981e70b72a4c9159ab0d9` | 0:24 (24.0s) | 720x720 | 1.14 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e70b72a4c9159ab0d9) |
| refineskinandbodyclinic_2026-02-05_DUYCLbniCMr | `6ab981e7de5918773f5510f3` | 2:38 (157.9s) | 720x1280 | 16.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e7de5918773f5510f3) |
| refineskinandbodyclinic_2026-02-03_DUTLAewCKlG | `6ab981e70b72a4c9159ab0d7` | 0:24 (23.9s) | 720x720 | 0.93 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e70b72a4c9159ab0d7) |
| refineskinandbodyclinic_2026-02-04_DUVKzWOiFgv | `6ab981e70b72a4c9159ab0d8` | 3:02 (182.4s) | 720x1280 | 19.89 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981e70b72a4c9159ab0d8) |
| refineskinandbodyclinic_2025-12-06_DR6KbuTiIV6 | `6ab981b9de5918773f551003` | 1:37 (97.2s) | 720x1280 | 11.61 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981b9de5918773f551003) |
| refineskinandbodyclinic_2025-12-05_DR3ztL5COIw | `6ab981b40b72a4c9159aaf92` | 0:30 (30.0s) | 720x720 | 1.56 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981b40b72a4c9159aaf92) |
| refineskinandbodyclinic_2025-12-04_DR14zYDiBe4 | `6ab981b00b72a4c9159aaf78` | 0:57 (57.1s) | 720x1280 | 5.29 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981b00b72a4c9159aaf78) |
| refineskinandbodyclinic_2025-12-03_DRzDmWkCCuj | `6ab981ac3518a22dd8b8928b` | 0:23 (23.3s) | 360x640 | 1.07 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981ac3518a22dd8b8928b) |
| refineskinandbodyclinic_2025-12-01_DRttFEFiOy3 | `6ab981ab0b72a4c9159aaf62` | 0:19 (18.6s) | 720x720 | 1.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981ab0b72a4c9159aaf62) |
| refineskinandbodyclinic_2025-11-28_DRmRnLFiF6W | `6ab981a30b72a4c9159aaf49` | 0:16 (16.0s) | 720x720 | 1.06 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981a30b72a4c9159aaf49) |
| refineskinandbodyclinic_2025-11-27_DRjiTMKCI40 | `6ab981a10b72a4c9159aaf3e` | 2:16 (135.5s) | 720x1280 | 16.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981a10b72a4c9159aaf3e) |
| refineskinandbodyclinic_2025-11-26_DRhx1UPCBpw | `6ab9819f3518a22dd8b8923d` | 1:52 (112.4s) | 720x1280 | 12.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9819f3518a22dd8b8923d) |
| refineskinandbodyclinic_2025-11-26_DRgjjLKiOXG | `6ab981920b72a4c9159aaee8` | 3:16 (196.0s) | 720x1280 | 21.62 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981920b72a4c9159aaee8) |
| refineskinandbodyclinic_2025-11-25_DRe6LaqifBM | `6ab98192de5918773f550f24` | 0:14 (14.2s) | 360x360 | 0.40 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98192de5918773f550f24) |
| refineskinandbodyclinic_2025-11-24_DRcDvyXCJj4 | `6ab98191de5918773f550f1d` | 0:28 (28.2s) | 720x720 | 1.64 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98191de5918773f550f1d) |
| refineskinandbodyclinic_2025-11-25_DRd8bdQiHzN | `6ab981913518a22dd8b891dc` | 0:22 (22.1s) | 720x720 | 1.88 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981913518a22dd8b891dc) |
| refineskinandbodyclinic_2025-11-20_DRSXdIkCNc5 | `6ab981870b72a4c9159aaea5` | 2:03 (123.3s) | 720x1280 | 13.98 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981870b72a4c9159aaea5) |
| refineskinandbodyclinic_2025-11-19_DRPZh3XCAQT | `6ab981860b72a4c9159aae9e` | 2:31 (151.0s) | 720x1280 | 16.90 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981860b72a4c9159aae9e) |
| refineskinandbodyclinic_2025-11-20_DRSRCENCNdb | `6ab981863518a22dd8b89193` | 3:01 (180.6s) | 720x1280 | 20.63 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981863518a22dd8b89193) |
| refineskinandbodyclinic_2025-11-19_DRPDLarCM9K | `6ab98182de5918773f550ec1` | 1:38 (98.1s) | 720x1280 | 12.01 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98182de5918773f550ec1) |
| refineskinandbodyclinic_2025-11-18_DRNNjRLiJ5B | `6ab98182de5918773f550ebf` | 0:13 (13.0s) | 720x720 | 0.86 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98182de5918773f550ebf) |
| refineskinandbodyclinic_2025-11-18_DRL4CgciDr3 | `6ab981783518a22dd8b89132` | 0:20 (20.0s) | 720x720 | 1.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981783518a22dd8b89132) |
| refineskinandbodyclinic_2025-11-17_DRJeQzgCBSV | `6ab981733518a22dd8b89114` | 0:19 (19.0s) | 720x720 | 1.25 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981733518a22dd8b89114) |
| refineskinandbodyclinic_2025-11-14_DRCaoSOCABS | `6ab981703518a22dd8b89101` | 0:53 (52.7s) | 720x1280 | 5.77 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981703518a22dd8b89101) |
| refineskinandbodyclinic_2025-11-14_DRBujKhCNk9 | `6ab981703518a22dd8b890ff` | 0:15 (14.6s) | 720x720 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981703518a22dd8b890ff) |
| refineskinandbodyclinic_2025-11-14_DRB6-hJCLi7 | `6ab98170de5918773f550e58` | 0:19 (19.3s) | 720x720 | 0.81 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98170de5918773f550e58) |
| refineskinandbodyclinic_2025-11-12_DQ9S37WCAXq | `6ab9816dde5918773f550e45` | 0:09 (8.7s) | 360x360 | 0.17 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9816dde5918773f550e45) |
| refineskinandbodyclinic_2025-11-12_DQ8w5uXiIC- | `6ab9816b0b72a4c9159aae0d` | 2:37 (156.6s) | 720x1280 | 19.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9816b0b72a4c9159aae0d) |
| refineskinandbodyclinic_2025-11-10_DQ4SfYkCOL9 | `6ab981633518a22dd8b890d0` | 2:56 (176.0s) | 720x1280 | 19.85 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981633518a22dd8b890d0) |
| refineskinandbodyclinic_2025-11-06_DQuN3waiC6E | `6ab981620b72a4c9159aadd1` | 1:28 (88.4s) | 720x1280 | 13.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981620b72a4c9159aadd1) |
| refineskinandbodyclinic_2025-11-10_DQ3_JI2iK-Z | `6ab981620b72a4c9159aadce` | 0:15 (15.0s) | 360x360 | 0.45 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981620b72a4c9159aadce) |
| refineskinandbodyclinic_2025-11-06_DQtbZ44CE2H | `6ab98157de5918773f550dd7` | 0:20 (20.0s) | 360x360 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98157de5918773f550dd7) |
| refineskinandbodyclinic_2025-11-05_DQrDG1kCHzp | `6ab98156de5918773f550dd3` | 1:34 (94.1s) | 720x1280 | 15.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98156de5918773f550dd3) |
| refineskinandbodyclinic_2025-11-04_DQo-HXHiBR3 | `6ab981550b72a4c9159aad7f` | 1:38 (97.7s) | 720x1280 | 14.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981550b72a4c9159aad7f) |
| refineskinandbodyclinic_2025-11-03_DQmO1llCASn | `6ab98153de5918773f550db7` | 0:20 (20.0s) | 360x360 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98153de5918773f550db7) |
| refineskinandbodyclinic_2025-11-01_DQhKICRiEjX | `6ab98152de5918773f550d9f` | 1:37 (97.3s) | 720x720 | 7.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98152de5918773f550d9f) |
| refineskinandbodyclinic_2025-10-30_DQb0tMRCN3Y | `6ab98151de5918773f550d9c` | 0:54 (53.8s) | 720x1280 | 7.64 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98151de5918773f550d9c) |
| refineskinandbodyclinic_2025-10-29_DQYiDgjCOvJ | `6ab981513518a22dd8b89055` | 1:04 (63.9s) | 360x640 | 2.05 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981513518a22dd8b89055) |
| refineskinandbodyclinic_2025-12-24_DSofT_OiLPp | `6ab981503518a22dd8b8904f` | 0:14 (14.0s) | 720x720 | 1.48 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981503518a22dd8b8904f) |
| refineskinandbodyclinic_2025-12-23_DSmGu4TiNqj | `6ab9814d0b72a4c9159aad52` | 0:40 (40.0s) | 360x360 | 0.77 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9814d0b72a4c9159aad52) |
| refineskinandbodyclinic_2025-12-22_DSjjOxGiI8G | `6ab9814c3518a22dd8b89041` | 0:14 (13.6s) | 720x720 | 1.26 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9814c3518a22dd8b89041) |
| refineskinandbodyclinic_2025-12-20_DSfdAZVCBs3 | `6ab98149de5918773f550d7a` | 1:43 (103.0s) | 720x1278 | 9.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98149de5918773f550d7a) |
| refineskinandbodyclinic_2025-12-19_DSbzkrcCKqk | `6ab981483518a22dd8b8900b` | 0:31 (30.9s) | 720x720 | 1.62 MB | [Watch Reel](https://play.gumlet.io/embed/6ab981483518a22dd8b8900b) |
| refineskinandbodyclinic_2025-12-18_DSaR6jgiH-l | `6ab9813c3518a22dd8b88fb4` | 0:34 (34.5s) | 720x1280 | 5.25 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813c3518a22dd8b88fb4) |
| refineskinandbodyclinic_2025-12-16_DSUIi2EiNCJ | `6ab9813c3518a22dd8b88fb2` | 0:12 (12.0s) | 720x720 | 1.10 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813c3518a22dd8b88fb2) |
| refineskinandbodyclinic_2025-12-12_DSJ3FPliCy7 | `6ab9813c3518a22dd8b88fb1` | 0:18 (18.0s) | 360x360 | 0.34 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813c3518a22dd8b88fb1) |
| refineskinandbodyclinic_2025-12-15_DSRowPkCPSw | `6ab9813cde5918773f550d2f` | 0:13 (13.5s) | 360x360 | 0.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813cde5918773f550d2f) |
| refineskinandbodyclinic_2025-12-11_DSHMq3uiNXy | `6ab9813b0b72a4c9159aacf2` | 0:15 (15.1s) | 720x720 | 0.89 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b0b72a4c9159aacf2) |
| refineskinandbodyclinic_2025-12-10_DSEr24CCPj4 | `6ab9813b0b72a4c9159aacf0` | 0:40 (40.0s) | 720x720 | 2.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b0b72a4c9159aacf0) |
| refineskinandbodyclinic_2025-12-09_DSC9Q1BCO_d | `6ab9813b0b72a4c9159aacef` | 2:04 (124.2s) | 720x1280 | 17.68 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b0b72a4c9159aacef) |
| refineskinandbodyclinic_2025-12-08_DR_jO6liIZM | `6ab9813b0b72a4c9159aacee` | 0:20 (20.0s) | 360x360 | 0.40 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b0b72a4c9159aacee) |
| refineskinandbodyclinic_2025-12-11_DSHwz4LCG_C | `6ab9813bde5918773f550d29` | 0:28 (27.6s) | 720x1280 | 4.01 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813bde5918773f550d29) |
| refineskinandbodyclinic_2025-12-10_DSFuiLeiK8i | `6ab9813b3518a22dd8b88fa8` | 1:30 (90.4s) | 480x854 | 4.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b3518a22dd8b88fa8) |
| refineskinandbodyclinic_2025-12-08_DSAKof4iOci | `6ab9813b3518a22dd8b88fa7` | 0:26 (26.5s) | 720x720 | 1.12 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9813b3518a22dd8b88fa7) |

#### B16. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part03 / refineskinandbodyclinic`
- **Folder ID:** `6ab9855e3518a22dd8b8a42c`
- **Parent ID:** `6ab982a50b72a4c9159ab4dd`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 97

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| refineskinandbodyclinic_2025-10-10_DPoi3_7CFD5 | `6ab986430b72a4c9159ac847` | 0:20 (19.7s) | 720x720 | 0.35 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986430b72a4c9159ac847) |
| refineskinandbodyclinic_2025-10-10_DPnlNJGiAJ6 | `6ab986430b72a4c9159ac844` | 0:28 (28.4s) | 720x720 | 1.02 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986430b72a4c9159ac844) |
| refineskinandbodyclinic_2025-10-08_DPijQIHCBYG | `6ab9863cde5918773f5527cd` | 2:47 (167.1s) | 720x1280 | 15.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9863cde5918773f5527cd) |
| refineskinandbodyclinic_2025-10-08_DPi_yO2iPgy | `6ab9863b3518a22dd8b8a994` | 1:28 (88.5s) | 720x1280 | 10.77 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9863b3518a22dd8b8a994) |
| refineskinandbodyclinic_2025-10-06_DPePO2NiKPa | `6ab986350b72a4c9159ac7c8` | 0:10 (10.3s) | 360x360 | 0.19 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986350b72a4c9159ac7c8) |
| refineskinandbodyclinic_2025-10-06_DPdSmTACNvJ | `6ab98635de5918773f55277c` | 0:15 (15.2s) | 720x720 | 0.48 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98635de5918773f55277c) |
| refineskinandbodyclinic_2025-10-03_DPWDu9OiMY6 | `6ab986300b72a4c9159ac798` | 1:08 (67.5s) | 720x1280 | 6.26 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986300b72a4c9159ac798) |
| refineskinandbodyclinic_2025-10-02_DPTwOsQCCPF | `6ab9862cde5918773f552724` | 0:18 (17.6s) | 720x720 | 0.51 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9862cde5918773f552724) |
| refineskinandbodyclinic_2025-10-01_DPRVCmIiBV | `6ab9862b3518a22dd8b8a905` | 2:25 (145.1s) | 720x1280 | 17.96 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9862b3518a22dd8b8a905) |
| refineskinandbodyclinic_2025-10-01_DPQX0OUCAUc | `6ab986283518a22dd8b8a8f6` | 0:36 (36.3s) | 720x720 | 1.82 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986283518a22dd8b8a8f6) |
| refineskinandbodyclinic_2025-09-29_DPLRUTmiFPL | `6ab986240b72a4c9159ac757` | 0:04 (3.5s) | 634x360 | 0.06 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986240b72a4c9159ac757) |
| refineskinandbodyclinic_2025-09-27_DPGLH-zCA4L | `6ab9861f0b72a4c9159ac73c` | 2:20 (139.8s) | 720x1280 | 23.54 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9861f0b72a4c9159ac73c) |
| refineskinandbodyclinic_2025-09-25_DPA-R_gCKit | `6ab986170b72a4c9159ac703` | 0:21 (21.0s) | 360x360 | 0.50 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986170b72a4c9159ac703) |
| refineskinandbodyclinic_2025-09-23_DO8tyqYiEn0 | `6ab986163518a22dd8b8a883` | 3:22 (202.1s) | 1080x1920 | 52.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986163518a22dd8b8a883) |
| refineskinandbodyclinic_2025-09-24_DO-eiF2jr0l | `6ab986163518a22dd8b8a882` | 1:04 (64.0s) | 638x360 | 2.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986163518a22dd8b8a882) |
| refineskinandbodyclinic_2025-09-23_DO7zNNxiBMO | `6ab986160b72a4c9159ac6f7` | 1:17 (76.9s) | 720x720 | 3.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986160b72a4c9159ac6f7) |
| refineskinandbodyclinic_2025-09-19_DOxd69XCIL1 | `6ab986150b72a4c9159ac6e9` | 0:40 (40.1s) | 720x720 | 2.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986150b72a4c9159ac6e9) |
| refineskinandbodyclinic_2025-09-18_DOvyypUiPfG | `6ab98614de5918773f55266e` | 0:46 (45.8s) | 720x1280 | 4.28 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98614de5918773f55266e) |
| refineskinandbodyclinic_2025-09-15_DOoU_t-CJ7m | `6ab986143518a22dd8b8a871` | 0:31 (30.8s) | 360x360 | 0.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986143518a22dd8b8a871) |
| refineskinandbodyclinic_2025-09-13_DOij5t_iBq6 | `6ab986133518a22dd8b8a86b` | 0:20 (19.7s) | 360x360 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986133518a22dd8b8a86b) |
| refineskinandbodyclinic_2025-09-11_DOdr6XOCK_T | `6ab986120b72a4c9159ac6d4` | 1:18 (77.9s) | 360x640 | 3.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986120b72a4c9159ac6d4) |
| refineskinandbodyclinic_2025-09-10_DObEuvLiGiW | `6ab986113518a22dd8b8a859` | 0:09 (9.3s) | 720x720 | 0.26 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986113518a22dd8b8a859) |
| refineskinandbodyclinic_2025-09-09_DOYk3SmCKi- | `6ab9860f0b72a4c9159ac6bf` | 0:21 (21.2s) | 360x640 | 0.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9860f0b72a4c9159ac6bf) |
| refineskinandbodyclinic_2025-09-08_DOWGHCAiM3U | `6ab9860dde5918773f552633` | 0:11 (11.0s) | 360x360 | 0.19 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9860dde5918773f552633) |
| refineskinandbodyclinic_2025-09-05_DONf3kECH7m | `6ab9860c3518a22dd8b8a840` | 1:17 (76.9s) | 720x720 | 3.32 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9860c3518a22dd8b8a840) |
| refineskinandbodyclinic_2025-09-04_DOK6CS-iIee | `6ab9860cde5918773f55262d` | 1:41 (101.3s) | 360x640 | 4.04 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9860cde5918773f55262d) |
| refineskinandbodyclinic_2025-09-03_DOITa0NiKgB | `6ab9860a0b72a4c9159ac68f` | 0:23 (22.7s) | 360x360 | 0.51 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9860a0b72a4c9159ac68f) |
| refineskinandbodyclinic_2025-09-01_DODLmi_iBRw | `6ab986063518a22dd8b8a81f` | 0:32 (32.2s) | 360x360 | 0.73 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986063518a22dd8b8a81f) |
| refineskinandbodyclinic_2025-08-29_DN7ehskCPsi | `6ab986040b72a4c9159ac66f` | 0:40 (40.0s) | 720x720 | 2.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986040b72a4c9159ac66f) |
| refineskinandbodyclinic_2025-08-28_DN40AYgCCce | `6ab986040b72a4c9159ac66b` | 0:09 (8.8s) | 360x360 | 0.25 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986040b72a4c9159ac66b) |
| refineskinandbodyclinic_2025-08-26_DN0yjFyUEyC | `6ab986033518a22dd8b8a811` | 1:20 (80.0s) | 360x640 | 2.42 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986033518a22dd8b8a811) |
| refineskinandbodyclinic_2025-08-23_DNsIUY1UAuu | `6ab986023518a22dd8b8a805` | 0:29 (29.1s) | 360x640 | 1.15 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986023518a22dd8b8a805) |
| refineskinandbodyclinic_2025-08-23_DNshRCL0GnX | `6ab986010b72a4c9159ac645` | 0:56 (55.7s) | 720x1280 | 6.44 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986010b72a4c9159ac645) |
| refineskinandbodyclinic_2025-08-22_DNqHwf9I9MA | `6ab986003518a22dd8b8a7f6` | 0:09 (9.4s) | 360x360 | 0.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986003518a22dd8b8a7f6) |
| refineskinandbodyclinic_2025-08-22_DNpZXCUo5ba | `6ab985f83518a22dd8b8a7cf` | 2:12 (132.3s) | 720x1280 | 12.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985f83518a22dd8b8a7cf) |
| refineskinandbodyclinic_2025-08-20_DNkCGBxIRHF | `6ab985f70b72a4c9159ac604` | 0:23 (22.9s) | 360x360 | 0.49 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985f70b72a4c9159ac604) |
| refineskinandbodyclinic_2025-08-18_DNfGSv6s9fY | `6ab985ee0b72a4c9159ac5ca` | 0:37 (36.9s) | 360x360 | 1.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ee0b72a4c9159ac5ca) |
| refineskinandbodyclinic_2025-10-24_DQMmBALCEWm | `6ab985edde5918773f55257f` | 2:34 (154.2s) | 720x1280 | 24.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985edde5918773f55257f) |
| refineskinandbodyclinic_2025-10-21_DQD5RDwiFil | `6ab985ed0b72a4c9159ac5ba` | 0:21 (20.7s) | 720x720 | 1.04 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5ba) |
| refineskinandbodyclinic_2025-10-28_DQWGQc3COD7 | `6ab985ed0b72a4c9159ac5be` | 0:13 (12.8s) | 720x720 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5be) |
| refineskinandbodyclinic_2025-10-23_DQJRSjpiAaR | `6ab985ed0b72a4c9159ac5b9` | 1:10 (70.1s) | 720x1280 | 8.96 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5b9) |
| refineskinandbodyclinic_2025-10-27_DQTKXHrCObo | `6ab985ed0b72a4c9159ac5bc` | 0:30 (30.1s) | 720x720 | 1.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5bc) |
| refineskinandbodyclinic_2025-10-21_DQDmuEZiKYJ | `6ab985ed0b72a4c9159ac5b8` | 0:22 (21.7s) | 360x360 | 0.41 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5b8) |
| refineskinandbodyclinic_2025-10-16_DP4BGlvCKkM | `6ab985ed0b72a4c9159ac5b4` | 1:05 (64.7s) | 360x640 | 1.74 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5b4) |
| refineskinandbodyclinic_2025-10-14_DPyWFoNiJxT | `6ab985ed0b72a4c9159ac5b5` | 0:15 (14.9s) | 360x360 | 0.12 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5b5) |
| refineskinandbodyclinic_2025-10-13_DPweLJsCKOq | `6ab985ed0b72a4c9159ac5b3` | 0:22 (21.7s) | 360x360 | 0.42 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed0b72a4c9159ac5b3) |
| refineskinandbodyclinic_2025-10-16_DP4HCsuCKrB | `6ab985ed3518a22dd8b8a779` | 1:03 (63.2s) | 720x1280 | 5.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985ed3518a22dd8b8a779) |
| refineskinandbodyclinic_2025-08-01_DM0cEATtoVk | `6ab985b53518a22dd8b8a62c` | 0:09 (9.4s) | 360x360 | 0.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985b53518a22dd8b8a62c) |
| refineskinandbodyclinic_2025-07-28_DMqC-0gt0W9 | `6ab985b20b72a4c9159ac47f` | 0:37 (37.2s) | 720x960 | 8.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985b20b72a4c9159ac47f) |
| refineskinandbodyclinic_2025-07-28_DMpS1kDNSLt | `6ab985b00b72a4c9159ac477` | 2:28 (148.2s) | 720x1280 | 22.97 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985b00b72a4c9159ac477) |
| refineskinandbodyclinic_2025-07-26_DMkABIJNH2v | `6ab985acde5918773f552414` | 0:11 (11.1s) | 720x1280 | 2.04 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985acde5918773f552414) |
| refineskinandbodyclinic_2025-07-25_DMiLSe5N3vC | `6ab985a90b72a4c9159ac44c` | 4:32 (271.7s) | 360x640 | 11.60 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a90b72a4c9159ac44c) |
| refineskinandbodyclinic_2025-07-23_DMcNfYzN44- | `6ab985a8de5918773f5523e5` | 3:27 (206.8s) | 360x640 | 6.10 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a8de5918773f5523e5) |
| refineskinandbodyclinic_2025-07-22_DMaeuoQNLth | `6ab985a60b72a4c9159ac43c` | 0:16 (16.2s) | 360x360 | 0.47 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a60b72a4c9159ac43c) |
| refineskinandbodyclinic_2025-07-19_DMR_2T3tXRR | `6ab985a63518a22dd8b8a5be` | 0:10 (9.6s) | 360x640 | 0.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a63518a22dd8b8a5be) |
| refineskinandbodyclinic_2025-07-15_DMHrib3tfkO | `6ab985a33518a22dd8b8a5af` | 2:39 (159.4s) | 360x640 | 5.87 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a33518a22dd8b8a5af) |
| refineskinandbodyclinic_2025-07-12_DMAB8n0tliY | `6ab985a20b72a4c9159ac421` | 0:12 (12.0s) | 360x640 | 0.47 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985a20b72a4c9159ac421) |
| refineskinandbodyclinic_2025-07-11_DL9Wd7Dt6vF | `6ab9859d3518a22dd8b8a595` | 1:19 (78.8s) | 360x640 | 2.04 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9859d3518a22dd8b8a595) |
| refineskinandbodyclinic_2025-07-09_DL4NEfjtm2d | `6ab9859c3518a22dd8b8a58d` | 0:16 (16.5s) | 360x360 | 0.44 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9859c3518a22dd8b8a58d) |
| refineskinandbodyclinic_2025-07-07_DLzlkYQtKj | `6ab985940b72a4c9159ac3da` | 3:43 (223.1s) | 720x1280 | 19.69 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985940b72a4c9159ac3da) |
| refineskinandbodyclinic_2025-07-04_DLsEHfBoU5K | `6ab985930b72a4c9159ac3d3` | 0:34 (33.8s) | 720x1280 | 3.98 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985930b72a4c9159ac3d3) |
| refineskinandbodyclinic_2025-07-01_DLjqKFsvm0f | `6ab98592de5918773f552355` | 2:23 (142.6s) | 360x640 | 5.32 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98592de5918773f552355) |
| refineskinandbodyclinic_2025-06-30_DLg5J4OoCVt | `6ab98591de5918773f55234e` | 5:56 (356.4s) | 360x640 | 9.91 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98591de5918773f55234e) |
| refineskinandbodyclinic_2025-06-25_DLUC3k6pzq6 | `6ab9858e0b72a4c9159ac3b5` | 0:10 (10.0s) | 360x360 | 0.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858e0b72a4c9159ac3b5) |
| refineskinandbodyclinic_2025-06-24_DLR7ihPIi9U | `6ab9858ede5918773f552336` | 2:04 (123.7s) | 360x486 | 3.01 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858ede5918773f552336) |
| refineskinandbodyclinic_2025-06-20_DLHxp01B3eD | `6ab9858dde5918773f552330` | 2:27 (146.8s) | 720x1280 | 18.35 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858dde5918773f552330) |
| refineskinandbodyclinic_2025-06-18_DLCEai5NyFW | `6ab9858cde5918773f552327` | 0:10 (10.4s) | 360x360 | 0.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858cde5918773f552327) |
| refineskinandbodyclinic_2025-06-17_DLAfcp7CVNw | `6ab9858cde5918773f552325` | 1:24 (84.2s) | 360x640 | 2.45 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858cde5918773f552325) |
| refineskinandbodyclinic_2025-06-12_DKzIiqxhpv6 | `6ab9858b0b72a4c9159ac3a3` | 1:44 (104.0s) | 360x640 | 3.70 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858b0b72a4c9159ac3a3) |
| refineskinandbodyclinic_2025-05-30_DKRLxDSoMUg | `6ab9858a0b72a4c9159ac395` | 0:10 (10.0s) | 360x360 | 0.20 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9858a0b72a4c9159ac395) |
| refineskinandbodyclinic_2025-05-27_DKJaia1iWcg | `6ab98589de5918773f55230f` | 0:20 (20.0s) | 360x360 | 0.43 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98589de5918773f55230f) |
| refineskinandbodyclinic_2025-05-28_DKNAcrKISuB | `6ab985893518a22dd8b8a50c` | 1:51 (111.4s) | 360x638 | 4.02 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985893518a22dd8b8a50c) |
| refineskinandbodyclinic_2025-05-23_DKAKHPMhdkK | `6ab985883518a22dd8b8a504` | 2:42 (161.7s) | 360x634 | 6.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985883518a22dd8b8a504) |
| refineskinandbodyclinic_2025-05-23_DJ_0DzooyGl_3 | `6ab985873518a22dd8b8a4fc` | 0:03 (3.1s) | 720x900 | 0.52 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985873518a22dd8b8a4fc) |
| refineskinandbodyclinic_2025-05-23_DJ_0DzooyGl_2 | `6ab985860b72a4c9159ac36b` | 0:26 (26.2s) | 720x900 | 2.05 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985860b72a4c9159ac36b) |
| refineskinandbodyclinic_2025-05-23_DJ_0DzooyGl | `6ab985840b72a4c9159ac35c` | 0:20 (19.5s) | 720x900 | 1.95 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985840b72a4c9159ac35c) |
| refineskinandbodyclinic_2025-05-22_DJ8okNspHk0 | `6ab98584de5918773f5522f3` | 0:10 (10.0s) | 360x360 | 0.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98584de5918773f5522f3) |
| refineskinandbodyclinic_2025-05-21_DJ57mcnvFSg | `6ab98583de5918773f5522ec` | 0:37 (37.1s) | 360x636 | 1.31 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98583de5918773f5522ec) |
| refineskinandbodyclinic_2025-05-19_DJ0xnpDo-hs | `6ab98583de5918773f5522ea` | 0:10 (10.1s) | 360x360 | 0.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98583de5918773f5522ea) |
| refineskinandbodyclinic_2025-05-15_DJralDboCnZ | `6ab985833518a22dd8b8a4dc` | 1:56 (116.4s) | 360x640 | 3.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985833518a22dd8b8a4dc) |
| refineskinandbodyclinic_2025-05-14_DJmnUhJo8GK | `6ab985810b72a4c9159ac347` | 0:50 (50.1s) | 360x640 | 1.48 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985810b72a4c9159ac347) |
| refineskinandbodyclinic_2025-05-09_DJbGmdWiUmc | `6ab985810b72a4c9159ac346` | 0:14 (13.8s) | 360x360 | 0.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985810b72a4c9159ac346) |
| refineskinandbodyclinic_2025-05-08_DJZQXqxiU3V | `6ab985813518a22dd8b8a4cb` | 1:23 (83.1s) | 360x636 | 2.65 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985813518a22dd8b8a4cb) |
| refineskinandbodyclinic_2025-05-07_DJWJaYUOiKE | `6ab985810b72a4c9159ac33f` | 2:55 (174.9s) | 250x436 | 4.39 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985810b72a4c9159ac33f) |
| refineskinandbodyclinic_2025-05-05_DJQwliYonc8 | `6ab985803518a22dd8b8a4c4` | 0:10 (10.0s) | 360x360 | 0.19 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985803518a22dd8b8a4c4) |
| refineskinandbodyclinic_2025-05-01_DJGWg17IT3y | `6ab9857fde5918773f5522ce` | 0:10 (10.1s) | 360x360 | 0.22 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9857fde5918773f5522ce) |
| refineskinandbodyclinic_2025-08-15_DNYGfQLsnfJ | `6ab985790b72a4c9159ac303` | 0:20 (20.0s) | 360x640 | 0.53 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985790b72a4c9159ac303) |
| refineskinandbodyclinic_2025-08-14_DNVwecysVJL | `6ab985793518a22dd8b8a4a0` | 1:21 (80.9s) | 720x1280 | 9.01 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985793518a22dd8b8a4a0) |
| refineskinandbodyclinic_2025-08-12_DNPrDq5soS- | `6ab985790b72a4c9159ac302` | 1:14 (74.4s) | 360x640 | 2.78 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985790b72a4c9159ac302) |
| refineskinandbodyclinic_2025-08-12_DNQP0zxs5tX | `6ab98579de5918773f5522b1` | 0:16 (16.1s) | 360x360 | 0.40 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98579de5918773f5522b1) |
| refineskinandbodyclinic_2025-08-14_DNUxPtXCW8k | `6ab985790b72a4c9159ac2ff` | 0:15 (15.0s) | 1276x718 | 0.91 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985790b72a4c9159ac2ff) |
| refineskinandbodyclinic_2025-08-02_DM2WH87Nvay | `6ab985783518a22dd8b8a49b` | 0:13 (12.7s) | 720x1280 | 2.27 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985783518a22dd8b8a49b) |
| refineskinandbodyclinic_2025-08-04_DM8OVP-NU-G | `6ab98578de5918773f5522a0` | 0:25 (25.3s) | 360x640 | 0.70 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98578de5918773f5522a0) |
| refineskinandbodyclinic_2025-08-06_DNAANoGIJ4k | `6ab98578de5918773f5522a1` | 0:21 (21.1s) | 360x640 | 0.61 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98578de5918773f5522a1) |
| refineskinandbodyclinic_2025-08-09_DNHy1u_o2eH | `6ab985780b72a4c9159ac2f8` | 0:18 (18.2s) | 720x1280 | 2.94 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985780b72a4c9159ac2f8) |
| refineskinandbodyclinic_2025-08-08_DNFYGntN6Mp | `6ab985780b72a4c9159ac2f7` | 0:12 (12.0s) | 360x360 | 0.32 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985780b72a4c9159ac2f7) |
| refineskinandbodyclinic_2025-08-06_DNAOvElN8_v | `6ab985783518a22dd8b8a499` | 0:10 (10.0s) | 360x360 | 0.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab985783518a22dd8b8a499) |

#### B17. Folder: `refine / Refine posts / multi_creator_20260601_165321_reel_part04 / refineskinandbodyclinic`
- **Folder ID:** `6ab986d03518a22dd8b8ad29`
- **Parent ID:** `6ab98674de5918773f55297f`
- **Depth:** Level 3
- **Sub-directory Count:** 0
- **Video Assets in this folder:** 41

| Video Title / Reel Code | Asset ID | Duration | Dimensions | File Size | Embed Player Link |
| :--- | :--- | :--- | :--- | :--- | :--- |
| refineskinandbodyclinic_2025-03-18_DHVxD_vxFj3 | `6ab987153518a22dd8b8aebf` | 0:20 (20.5s) | 640x360 | 0.58 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987153518a22dd8b8aebf) |
| refineskinandbodyclinic_2025-03-14_DHLM31CJOPz | `6ab987153518a22dd8b8aeb9` | 3:45 (224.6s) | 304x540 | 5.91 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987153518a22dd8b8aeb9) |
| refineskinandbodyclinic_2025-03-12_DHFrslGKlxD | `6ab987143518a22dd8b8aeb2` | 0:08 (8.0s) | 360x360 | 0.19 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987143518a22dd8b8aeb2) |
| refineskinandbodyclinic_2025-03-10_DHA5Y5jKBGZ | `6ab98713de5918773f552cca` | 2:04 (123.8s) | 360x636 | 4.84 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98713de5918773f552cca) |
| refineskinandbodyclinic_2025-03-07_DG5yIWnqaEK | `6ab987130b72a4c9159acd13` | 0:11 (10.7s) | 360x360 | 0.25 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987130b72a4c9159acd13) |
| refineskinandbodyclinic_2025-03-06_DG2Qv2xKdt1 | `6ab98713de5918773f552cc7` | 3:15 (195.2s) | 360x640 | 6.78 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98713de5918773f552cc7) |
| refineskinandbodyclinic_2025-03-04_DGxUvxFPG6e | `6ab987110b72a4c9159acd01` | 1:00 (60.0s) | 560x960 | 3.71 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987110b72a4c9159acd01) |
| refineskinandbodyclinic_2025-03-03_DGuq9wwS_Kk | `6ab987100b72a4c9159accfd` | 0:08 (8.0s) | 720x720 | 0.64 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987100b72a4c9159accfd) |
| refineskinandbodyclinic_2025-03-01_DGpTQwLpGYu | `6ab9870d3518a22dd8b8ae7f` | 0:50 (49.6s) | 608x1080 | 4.50 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870d3518a22dd8b8ae7f) |
| refineskinandbodyclinic_2025-02-28_DGm9p32JNOK | `6ab9870d3518a22dd8b8ae7b` | 1:23 (82.8s) | 360x640 | 2.95 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870d3518a22dd8b8ae7b) |
| refineskinandbodyclinic_2025-02-25_DGfM32gIDnL | `6ab9870cde5918773f552c96` | 0:58 (58.0s) | 358x640 | 2.02 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870cde5918773f552c96) |
| refineskinandbodyclinic_2025-02-26_DGhpGuRxtwJ | `6ab9870c3518a22dd8b8ae75` | 0:08 (8.0s) | 360x360 | 0.21 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870c3518a22dd8b8ae75) |
| refineskinandbodyclinic_2025-02-21_DGUyZM7NOAx | `6ab9870c0b72a4c9159acce3` | 0:18 (18.5s) | 720x720 | 0.55 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870c0b72a4c9159acce3) |
| refineskinandbodyclinic_2025-02-20_DGSUPOWIHRL | `6ab9870bde5918773f552c82` | 1:54 (114.3s) | 720x1280 | 8.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870bde5918773f552c82) |
| refineskinandbodyclinic_2025-02-18_DGNlo7DMY-o | `6ab9870b0b72a4c9159accd3` | 1:07 (66.8s) | 640x360 | 1.74 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870b0b72a4c9159accd3) |
| refineskinandbodyclinic_2025-02-18_DGNCPnZuw_g | `6ab9870b0b72a4c9159accd2` | 0:18 (18.3s) | 720x720 | 0.80 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870b0b72a4c9159accd2) |
| refineskinandbodyclinic_2025-02-17_DGKcF4Mswv0 | `6ab9870b3518a22dd8b8ae67` | 0:16 (16.4s) | 360x360 | 0.38 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870b3518a22dd8b8ae67) |
| refineskinandbodyclinic_2025-02-14_DGDwhMZIO_r | `6ab9870a3518a22dd8b8ae5e` | 0:52 (52.4s) | 540x360 | 2.23 MB | [Watch Reel](https://play.gumlet.io/embed/6ab9870a3518a22dd8b8ae5e) |
| refineskinandbodyclinic_2025-02-14_DGCvU37I4o8 | `6ab98708de5918773f552c5e` | 0:14 (13.5s) | 360x360 | 0.36 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98708de5918773f552c5e) |
| refineskinandbodyclinic_2025-02-13_DGAJ-rtMIl | `6ab987080b72a4c9159accbb` | 1:07 (66.8s) | 640x360 | 1.74 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987080b72a4c9159accbb) |
| refineskinandbodyclinic_2025-02-11_DF6_uppiVBB | `6ab987043518a22dd8b8ae40` | 0:22 (22.0s) | 360x360 | 0.57 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987043518a22dd8b8ae40) |
| refineskinandbodyclinic_2025-02-10_DF5IBsmqE- | `6ab98703de5918773f552c49` | 1:03 (62.5s) | 362x640 | 2.43 MB | [Watch Reel](https://play.gumlet.io/embed/6ab98703de5918773f552c49) |
| refineskinandbodyclinic_2025-02-10_DF4eE1svv5I | `6ab987010b72a4c9159acc8e` | 0:17 (17.4s) | 360x360 | 0.47 MB | [Watch Reel](https://play.gumlet.io/embed/6ab987010b72a4c9159acc8e) |
| refineskinandbodyclinic_2025-01-28_DFXOFK5M2Di | `6ab986fd0b72a4c9159acc7c` | 0:27 (27.0s) | 360x640 | 0.82 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986fd0b72a4c9159acc7c) |
| refineskinandbodyclinic_2025-01-24_DFNglaABf3Y | `6ab986fc0b72a4c9159acc75` | 1:00 (60.0s) | 720x1280 | 7.66 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986fc0b72a4c9159acc75) |
| refineskinandbodyclinic_2025-01-18_DE99oi9xPvA | `6ab986fa3518a22dd8b8adfb` | 1:00 (59.7s) | 360x640 | 2.88 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986fa3518a22dd8b8adfb) |
| refineskinandbodyclinic_2025-01-13_DExB0ZMBDyC | `6ab986fa3518a22dd8b8adf9` | 1:22 (81.6s) | 360x640 | 3.90 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986fa3518a22dd8b8adf9) |
| refineskinandbodyclinic_2025-01-08_DEkSaviirqa | `6ab986fa0b72a4c9159acc68` | 0:24 (23.8s) | 360x640 | 0.90 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986fa0b72a4c9159acc68) |
| refineskinandbodyclinic_2025-01-03_DEXYUa8s1IH | `6ab986f8de5918773f552c14` | 0:38 (38.3s) | 716x1280 | 5.62 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f8de5918773f552c14) |
| refineskinandbodyclinic_2025-04-24_DI1ixKBIXpz | `6ab986f83518a22dd8b8adef` | 1:28 (88.5s) | 358x640 | 2.55 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f83518a22dd8b8adef) |
| refineskinandbodyclinic_2025-04-22_DIvnYzPoeGw | `6ab986f03518a22dd8b8adc9` | 0:10 (9.9s) | 360x360 | 0.27 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f03518a22dd8b8adc9) |
| refineskinandbodyclinic_2025-04-02_DH7z2LRInSv | `6ab986f00b72a4c9159acc11` | 0:24 (24.4s) | 360x360 | 0.47 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f00b72a4c9159acc11) |
| refineskinandbodyclinic_2025-04-11_DITV2aoN3RN | `6ab986f00b72a4c9159acc0f` | 0:10 (10.0s) | 360x360 | 0.24 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f00b72a4c9159acc0f) |
| refineskinandbodyclinic_2025-04-14_DIbHZ7EpAd4 | `6ab986f03518a22dd8b8adc2` | 0:10 (10.0s) | 360x360 | 0.35 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f03518a22dd8b8adc2) |
| refineskinandbodyclinic_2025-03-28_DHvYun8or4r | `6ab986f0de5918773f552bdf` | 3:56 (235.9s) | 608x1080 | 18.46 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f0de5918773f552bdf) |
| refineskinandbodyclinic_2025-03-20_DHaV99ZoCGO | `6ab986f00b72a4c9159acc0d` | 0:05 (5.0s) | 360x640 | 0.09 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f00b72a4c9159acc0d) |
| refineskinandbodyclinic_2025-04-03_DH-ZMoHoR8L | `6ab986f0de5918773f552be2` | 0:17 (16.6s) | 360x360 | 0.33 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f0de5918773f552be2) |
| refineskinandbodyclinic_2025-04-08_DIMTySECFcf | `6ab986f00b72a4c9159acc0e` | 2:29 (149.4s) | 360x640 | 5.76 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f00b72a4c9159acc0e) |
| refineskinandbodyclinic_2025-04-16_DIgYMyWJDtP | `6ab986f0de5918773f552be1` | 4:05 (245.2s) | 362x640 | 9.35 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f0de5918773f552be1) |
| refineskinandbodyclinic_2025-04-07_DIJg2C4ozec | `6ab986f03518a22dd8b8adc1` | 0:10 (10.0s) | 360x360 | 0.21 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f03518a22dd8b8adc1) |
| refineskinandbodyclinic_2025-03-31_DH3Ii_YojS- | `6ab986f0de5918773f552bde` | 0:31 (31.3s) | 640x334 | 0.97 MB | [Watch Reel](https://play.gumlet.io/embed/6ab986f0de5918773f552bde) |

---

## Verification Summary

- **Total Folders:** 37 (1 root `refine` + 14 direct child folders + 10 level-2 folders + 12 level-3 folders)
- **Total Unique Video Assets:** 382
- **Direct Gumlet API Verification Status:** 100% Verified against live Gumlet Video API
- **Active Website Slugs:** 52 slugs mapped in `gumlet-video-map.json` (all 52 match active Gumlet assets)
- **Instagram Archive Reels:** 331 videos mapped in `instagram-archive.json` (all 331 match active Gumlet assets)
