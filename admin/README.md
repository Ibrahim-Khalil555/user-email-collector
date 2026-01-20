# User Email Collector Plugin

A simple WordPress plugin to **collect email addresses** from users via a form and display them in the admin dashboard.

---

## Features

- Collect emails using a simple **frontend form** with shortcode `[uec_form]`
- Store emails in a **custom database table**
- View all submitted emails in **WordPress Admin → User Emails**
- Clean up database when plugin is deleted using `uninstall.php`

---

## Installation

1. Copy the `user-email-collector` folder into your `wordPress/wp-content/plugins/` directory.
2. Go to **Plugins → Installed Plugins** in WordPress admin.
3. Click **Activate** on **User Email Collector**.
4. Add the shortcode `[uec_form]` to any page or post to show the email collection form.

---

## Usage

- Visit the page containing the form and submit an email.
- Go to WordPress Admin → **User Emails** to see all collected emails.
- Emails are saved in the database table `wp_uec_emails`.

---
