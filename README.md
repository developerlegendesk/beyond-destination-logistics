# Beyond Destination Logistics - PHP Website

A simple, responsive PHP-based website for Beyond Destination Logistics company. This website showcases logistics and transport services with multiple pages and features.

## 📋 Features

- **Home Page**: Hero section, services overview, solutions, portfolio, clients, and news
- **About Page**: Company mission, vision, and why choose us
- **Services Page**: Detailed information about all services (Air, Ship, Cargo, Warehousing)
- **Contact Page**: Contact form with validation and contact information
- **Responsive Design**: Mobile-friendly layout
- **Easy to Customize**: Simple PHP structure with included CSS

## 📁 Project Structure

```
beyond-destination-logistics/
├── index.php              # Home page
├── about.php              # About page
├── services.php           # Services page
├── contact.php            # Contact page with form handling
├── includes/
│   ├── header.php         # Header and navigation
│   └── footer.php         # Footer
├── css/
│   └── style.css          # Main stylesheet
├── images/                # Image folder (add your images here)
└── README.md              # This file
```

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/developerlegendesk/beyond-destination-logistics.git
   cd beyond-destination-logistics
   ```

2. **Set up a local server**
   - Using PHP built-in server:
     ```bash
     php -S localhost:8000
     ```
   - Or use XAMPP, WAMP, or LAMP

3. **Access the website**
   - Open your browser and go to `http://localhost:8000`

## 🎨 Customization

### Update Company Information
Edit `includes/footer.php` to update:
- Company address
- Phone number
- Email address
- Social media links

### Update Contact Email
Edit `contact.php` and change the `$to` variable:
```php
$to = 'your-email@example.com';
```

### Add Images
Place your images in the `images/` folder and update image paths in:
- `index.php` - Solutions section
- `index.php` - Portfolio section
- `index.php` - News section

### Customize Colors
Edit `css/style.css` and change the color variables:
- Primary color: `#0052cc` (blue)
- Dark color: `#1a1a1a` (dark)
- Light color: `#f8f9fa` (light gray)

## 📞 Contact Form

The contact form on `contact.php` includes:
- Form validation (server-side)
- Email validation
- Success/error messages
- Responsive design

To enable email sending, configure your PHP mail settings or use a service like PHPMailer.

## 📱 Pages Overview

### Home (`index.php`)
- Hero banner
- Service cards
- Solutions section
- Cost calculator
- Portfolio gallery
- Client testimonials
- News/blog section

### About (`about.php`)
- Company mission
- Company vision
- Why choose us section

### Services (`services.php`)
- Detailed service descriptions
- Features for each service type

### Contact (`contact.php`)
- Contact form
- Contact information
- Business hours
- Email and phone details

## 🛠 Technology Stack

- **Backend**: PHP (no database required)
- **Frontend**: HTML5, CSS3
- **Responsive**: Mobile-first approach

## 📄 License

This project is open source and available under the MIT License.

## 👨‍💻 Author

Developer Legend Desk

## 🤝 Support

For questions or support, please contact:
- Email: info@beyond-logistics.com
- Phone: 897 876 765 87

---

Made with ❤️ for Beyond Destination Logistics