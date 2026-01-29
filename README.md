# 📞 Laravel CRM & Twilio Cloud Dialer

A modern, high-performance Lead Management System integrated with Twilio Voice services. This CRM allows teams to import leads, manage outreach, and place calls directly from a "fancy" browser-based dialer.

![Main Dashboard](public/assets/screenshots/t0.jpg)

## ✨ Features

* **Smart Authentication:** Secure login and registration with immediate dashboard redirection.
* **Lead Management:**
    * **Bulk Import:** Upload leads via **Excel (.xlsx, .csv)** or **VCF** files.
    * **Manual Entry:** Quickly add individual leads via a clean UI.
    * **Full CRUD:** View, search, and edit lead information effortlessly.
* **Cloud Dialer:** Integrated Twilio-powered dialer with a premium light-themed interface.
* **Event Calendar:** A dedicated page to schedule follow-ups and track appointments.
* **Future Ready:** The SMS engine is currently open for development—feel free to contribute!

## 📸 Screenshots

| Dashboard Overview | Lead Management | Integrated Dialer | Event Calendar |
| :---: | :---: | :---: | :---: |
| ![Dash](public/assets/screenshots/t0.jpg) | ![Leads](public/assets/screenshots/t1.jpg) | ![Dialer](public/assets/screenshots/t2.jpg) | ![Calendar](public/assets/screenshots/t3.jpg) |

---
# CRM Laravel Twilio Integration 🚀

A Laravel-based CRM with Twilio-powered SMS and voice features. Built with Laravel 10+, Tailwind CSS, and Bootstrap 5.

---

## Table of Contents

* [Installation & Setup](#installation--setup)
* [Environment Configuration](#environment-configuration)
* [Twilio Integration](#twilio-integration-required)
* [Database Setup](#database-setup)
* [Running the Project](#running-the-project)
* [Tech Stack](#tech-stack)
* [Contributing](#contributing)
* [Support](#support)

---

## Installation & Setup

Follow these steps to get the project running locally:

### 1. Clone & Install Dependencies

```bash
git clone https://github.com/johnsoncrystalkalu/CRM-laravel-twilio.git
cd CRM-laravel-twilio
composer install
npm install
npm run dev
```

---

## ⚙️ Environment Configuration

Before running the application, configure your environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file with your database and application settings.

---

## Twilio Integration (Required)

1. Create a [Twilio Account](https://www.twilio.com/try-twilio)
2. Set up a voice-capable phone number
3. Create a TwiML App in the Twilio Console
4. Add the following credentials to your `.env` file:

```env
TWILIO_SID=your_account_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_PHONE=your_twilio_phone_number
TWILIO_TWIML_APP_SID=your_twiml_app_sid
TWILIO_API_KEY=your_api_key
TWILIO_API_SECRET=your_api_secret
```

---

## Database Setup

Ensure your database credentials are set in `.env`, then run:

```bash
php artisan migrate
php artisan db:seed
```

---

## Running the Project

Start the Laravel development server:

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) to access the application.

---

## 🛠 Tech Stack

* **Framework:** Laravel 10+
* **UI:** Tailwind CSS & Bootstrap 5
* **Telephony:** Twilio SDK
* **Icons:** FontAwesome 6
* **Excel Processing:** Maatwebsite/Laravel-Excel

---

## 🤝 Contributing

We welcome contributions! The SMS feature is currently open for development.

1. Fork the project
2. Create your feature branch:

```bash
git checkout -b feature/AmazingFeature
```

3. Commit your changes:

```bash
git commit -m "Add some AmazingFeature"
```

4. Push to your branch:

```bash
git push origin feature/AmazingFeature
```

5. Open a Pull Request

---

## Support

Need help?

* Check the [Twilio Documentation](https://www.twilio.com/docs)
* Open an issue in this repository
