# Portfolio Website

A responsive portfolio website built using HTML, Tailwind CSS, JavaScript, and PHP with a component-based structure. The website features a dark theme with green accents and functions seamlessly on both mobile and desktop devices.

## Features

- Fully responsive design
- Dark theme with green accents
- Component-based PHP structure
- Interactive elements with Alpine.js
- Mobile-friendly navigation with hamburger menu

## Technology Stack

- HTML5
- Tailwind CSS
- JavaScript
- PHP
- Alpine.js

## File Structure

```
portfolio/
│
├── assets/
│   ├── css/
│   │   └── custom.css       # Additional custom styles
│   ├── js/
│   │   └── main.js          # Custom JavaScript
│   └── images/              # All project images
│
├── components/              # PHP components
│   ├── header.php
│   ├── navigation.php
│   ├── sidebar.php
│   ├── main-content.php
│   └── footer.php
│
├── pages/                   # Additional pages
│   ├── projects.php
│   ├── contact.php
│   └── about.php
│
├── index.php                # Main entry point
├── .htaccess                # For URL rewriting (optional)
├── README.md                # Project documentation
└── tailwind.config.js       # Tailwind CSS configuration
```

## Setup

1. Clone this repository to your local web server directory (e.g., `htdocs` for XAMPP)
2. Make sure your web server (Apache) is running
3. Navigate to `http://localhost/project` in your web browser

## Customization

- Edit the content in the PHP components to update the website text
- Modify the Tailwind classes to adjust the styling
- Add additional pages in the `pages` directory as needed

## License

MIT
