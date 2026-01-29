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

## 🚀 Installation & Setup

Follow these steps to get your local environment running.

### 1. Clone & Install
```bash
git clone [https://github.com/johnsoncrystalkalu/CRM-laravel-twilio.git](https://github.com/johnsoncrystalkalu/CRM-laravel-twilio.git)
cd your-repo-name
composer install
npm install && npm run dev

## ⚙️ Environment Configuration

Before running the application, you must configure your environment variables. Rename `.env.example` to `.env` and update the database and application settings.

```bash
cp .env.example .env
php artisan key:generate



3. Twilio Integration (Required)

Create a Twilio Account
Set up a Voice-capable phone number
Create a TwiML App in the Twilio Console
Add the following credentials to your .env file:

envTWILIO_SID=your_account_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_PHONE=your_twilio_phone_number
TWILIO_TWIML_APP_SID=your_twiml_app_sid
TWILIO_API_KEY=your_api_key
TWILIO_API_SECRET=your_api_secret

4. Database Setup
Ensure your database credentials are set in your .env file, then run:
bashphp artisan migrate
php artisan db:seed

5. Start the Project
bashphp artisan serve
Your application will be available at http://localhost:8000

🛠 Tech Stack

Framework: Laravel 10+
UI: Tailwind CSS & Bootstrap 5
Telephony: Twilio SDK
Icons: FontAwesome 6
Excel Processing: Maatwebsite/Laravel-Excel


🤝 Contributing
The SMS feature is currently open for development! We welcome contributions.
How to Contribute

Fork the project
Create your feature branch (git checkout -b feature/AmazingFeature)
Commit your changes (git commit -m 'Add some AmazingFeature')
Push to the branch (git push origin feature/AmazingFeature)
Open a Pull Request

Need help? Check the Twilio documentation or open an issue in this repository.