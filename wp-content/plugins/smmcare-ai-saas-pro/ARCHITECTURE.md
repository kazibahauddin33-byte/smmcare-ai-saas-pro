# SMMCare AI SaaS Pro - Architecture Diagram

## System Overview

```
┌─────────────────────────────────────────────────────────────────┐
│                      WordPress Admin Interface                   │
│                                                                   │
│  ┌────────────┐  ┌──────────────┐  ┌──────────────────────┐    │
│  │ Dashboard  │  │ Welcome/     │  │  Documentation /     │    │
│  │            │  │ Onboarding   │  │  Getting Started     │    │
│  └────────────┘  └──────────────┘  └──────────────────────┘    │
└─────────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────────┐
│                      Admin Controller Layer                       │
│                   (SMMCARE_Admin class)                          │
│                                                                   │
│  • Handles menu registration                                     │
│  • Manages page rendering                                        │
│  • Processes AJAX requests                                       │
│  • Enqueues assets (CSS/JS)                                      │
└─────────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────────┐
│                    Business Logic Layer                          │
│                                                                   │
│  ┌───────────────────────────────────────────────────────────┐  │
│  │        Onboarding Manager                                  │  │
│  │        (SMMCARE_Onboarding_Manager)                       │  │
│  │                                                            │  │
│  │  • Define onboarding steps                                │  │
│  │  • Track user progress                                    │  │
│  │  • Complete/skip steps                                    │  │
│  │  • Calculate completion rates                             │  │
│  │  • Track analytics events                                 │  │
│  └───────────────────────────────────────────────────────────┘  │
└─────────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────────┐
│                         Data Layer                               │
│                                                                   │
│  ┌────────────────────────┐  ┌──────────────────────────────┐  │
│  │ wp_smmcare_onboarding  │  │ wp_smmcare_onboarding_       │  │
│  │                        │  │        analytics              │  │
│  │ • user_id              │  │ • user_id                    │  │
│  │ • step                 │  │ • event_type                 │  │
│  │ • status               │  │ • event_data (JSON)          │  │
│  │ • completed_at         │  │ • created_at                 │  │
│  │ • created_at           │  │                              │  │
│  │ • updated_at           │  │                              │  │
│  └────────────────────────┘  └──────────────────────────────┘  │
└─────────────────────────────────────────────────────────────────┘
```

## Onboarding Flow

```
┌─────────────┐
│   Plugin    │
│  Activated  │
└──────┬──────┘
       │
       ▼
┌─────────────────────┐
│  Set Welcome Flag   │
│ (show_welcome_page) │
└──────┬──────────────┘
       │
       ▼
┌──────────────────────┐
│ Redirect to Welcome  │
│    (First Visit)     │
└──────┬───────────────┘
       │
       ▼
┌──────────────────────────────────────┐
│        Onboarding Steps              │
│                                      │
│  ┌─────────────────────────────┐    │
│  │  1. Welcome                 │    │
│  │     - Introduction          │    │
│  │     - Key features          │    │
│  └──────────┬──────────────────┘    │
│             │                       │
│             ▼                       │
│  ┌─────────────────────────────┐    │
│  │  2. Account Setup           │    │
│  │     - Business name         │    │
│  │     - Industry              │    │
│  │     - Timezone              │    │
│  └──────────┬──────────────────┘    │
│             │                       │
│             ▼                       │
│  ┌─────────────────────────────┐    │
│  │  3. Connect Accounts        │    │
│  │     - Facebook              │    │
│  │     - Twitter/X             │    │
│  │     - Instagram             │    │
│  │     - LinkedIn              │    │
│  └──────────┬──────────────────┘    │
│             │                       │
│             ▼                       │
│  ┌─────────────────────────────┐    │
│  │  4. AI Setup                │    │
│  │     - Content tone          │    │
│  │     - AI features           │    │
│  │     - Automation level      │    │
│  └──────────┬──────────────────┘    │
│             │                       │
│             ▼                       │
│  ┌─────────────────────────────┐    │
│  │  5. Complete                │    │
│  │     - Success message       │    │
│  │     - Next steps            │    │
│  │     - Go to Dashboard       │    │
│  └─────────────────────────────┘    │
└──────────────────────────────────────┘
```

## Data Flow

```
┌──────────────┐
│  User Action │
│ (Click "Next")│
└──────┬───────┘
       │
       ▼
┌──────────────────┐
│  JavaScript      │
│  (admin.js)      │
│  • Capture event │
│  • Send AJAX     │
└──────┬───────────┘
       │
       ▼
┌────────────────────────────┐
│  WordPress AJAX Handler    │
│  (in SMMCARE_Admin)        │
│  • Verify nonce            │
│  • Check capabilities      │
└──────┬─────────────────────┘
       │
       ▼
┌────────────────────────────────┐
│  Onboarding Manager            │
│  • complete_step()             │
│  • Update database             │
│  • Track analytics event       │
└──────┬─────────────────────────┘
       │
       ▼
┌────────────────────────────────┐
│  Database Updates              │
│  • Insert/Update step record   │
│  • Insert analytics event      │
└──────┬─────────────────────────┘
       │
       ▼
┌────────────────────────────────┐
│  JSON Response                 │
│  • Success status              │
│  • Next step info              │
│  • Completion status           │
└──────┬─────────────────────────┘
       │
       ▼
┌────────────────────────────────┐
│  JavaScript Handler            │
│  • Show success message        │
│  • Reload page                 │
│  • Show next step              │
└────────────────────────────────┘
```

## Component Interaction

```
┌────────────────────────────────────────────────────────────┐
│                    Core Plugin Class                        │
│              (SMMCARE_AI_SaaS_Pro)                         │
│                                                             │
│  • Initializes plugin                                      │
│  • Loads dependencies                                      │
│  • Defines hooks                                           │
└──────────┬──────────────────────────────────┬──────────────┘
           │                                   │
           ▼                                   ▼
┌──────────────────────┐           ┌──────────────────────┐
│   Loader Class       │           │   Admin Class        │
│ (SMMCARE_Loader)     │           │ (SMMCARE_Admin)      │
│                      │           │                      │
│ • Registers hooks    │           │ • Menu pages         │
│ • Manages actions    │           │ • AJAX handlers      │
│ • Manages filters    │           │ • Asset loading      │
└──────────────────────┘           └──────────┬───────────┘
                                              │
                                              ▼
                                   ┌──────────────────────┐
                                   │ Onboarding Manager   │
                                   │ (SMMCARE_Onboarding_ │
                                   │      Manager)        │
                                   │                      │
                                   │ • Business logic     │
                                   │ • Database ops       │
                                   │ • Analytics          │
                                   └──────────────────────┘
```

## Analytics Event Flow

```
┌─────────────────┐
│  User Action    │
│  (Any interaction)
└────────┬────────┘
         │
         ▼
┌─────────────────────────┐
│  JavaScript Tracking    │
│  (Analytics.sendEvent)  │
└────────┬────────────────┘
         │
         ▼
┌─────────────────────────────┐
│  AJAX to track_analytics    │
│  action                     │
└────────┬────────────────────┘
         │
         ▼
┌──────────────────────────────┐
│  Onboarding Manager          │
│  track_event() method        │
└────────┬─────────────────────┘
         │
         ▼
┌──────────────────────────────┐
│  Insert to analytics table   │
│  • event_type                │
│  • event_data (JSON)         │
│  • user_id                   │
│  • timestamp                 │
└──────────────────────────────┘
         │
         ▼
┌──────────────────────────────┐
│  Available for reporting     │
│  • get_analytics()           │
│  • get_completion_rate()     │
│  • Custom queries            │
└──────────────────────────────┘
```

## Template Rendering Flow

```
┌──────────────────────┐
│  User visits page    │
│  (e.g., Welcome)     │
└──────────┬───────────┘
           │
           ▼
┌──────────────────────────────┐
│  Admin Class                 │
│  display_welcome_page()      │
└──────────┬───────────────────┘
           │
           ▼
┌──────────────────────────────┐
│  Gather data                 │
│  • Get current step          │
│  • Get all steps             │
│  • Get user progress         │
└──────────┬───────────────────┘
           │
           ▼
┌──────────────────────────────┐
│  Include template file       │
│  admin-welcome.php           │
└──────────┬───────────────────┘
           │
           ▼
┌──────────────────────────────┐
│  Template includes           │
│  step-specific template      │
│  (e.g., welcome.php)         │
└──────────┬───────────────────┘
           │
           ▼
┌──────────────────────────────┐
│  Render HTML with data       │
│  • Progress bar              │
│  • Step content              │
│  • Navigation                │
└──────────────────────────────┘
```

## Key Design Patterns

1. **MVC-like Pattern**: Separation of concerns between controllers (Admin), models (Onboarding Manager), and views (Templates)

2. **Hook System**: Uses WordPress action/filter hooks for extensibility

3. **AJAX Pattern**: Asynchronous communication for smooth UX

4. **Event Sourcing**: Analytics events stored as they happen

5. **State Machine**: Onboarding steps progress through defined states

6. **Repository Pattern**: Database access abstracted in manager classes
