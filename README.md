# Calculator Form Plugin

A WordPress plugin that provides a shortcode to embed a visa points calculator form on any page or post.

## Features

- **Easy Integration**: Simply use the `[calculator_form]` shortcode
- **Responsive Design**: Works on all device sizes
- **Real-time Calculations**: Points are calculated automatically as users fill the form
- **Visual Feedback**: Color-coded total points based on score ranges
- **Reset Functionality**: Clean reset button to clear all form data
- **Admin Panel**: Settings page accessible from WordPress admin
- **Optimized Loading**: CSS and JS only load on pages with the shortcode

## Installation

### Method 1: Manual Installation

1. Download the plugin folder `calculator-form-plugin`
2. Upload the entire folder to your WordPress `/wp-content/plugins/` directory
3. Go to WordPress Admin → Plugins → Installed Plugins
4. Find "Calculator Form Plugin" and click "Activate"

### Method 2: ZIP Installation

1. Compress the `calculator-form-plugin` folder into a ZIP file
2. Go to WordPress Admin → Plugins → Add New → Upload Plugin
3. Choose the ZIP file and click "Install Now"
4. Click "Activate Plugin"

## Usage

### Basic Usage

To display the calculator form on any page or post, simply add the shortcode:

```
[calculator_form]
```

### Custom Title and Description

You can customize the form title and description:

```
[calculator_form title="Custom Calculator Title" description="Your custom description here"]
```

### Examples

```html
<!-- Basic form -->
[calculator_form]

<!-- Custom title only -->
[calculator_form title="Australia PR Points Calculator"]

<!-- Custom title and description -->
[calculator_form title="Visa Points Calculator" description="Calculate your eligibility points for Australian immigration"]
```

## How It Works

The calculator evaluates points across multiple criteria:

- **Age**: Up to 30 points based on age bracket
- **English Language**: 0-20 points based on proficiency level
- **Work Experience**: 
  - Overseas: 0-15 points
  - Australian: 0-20 points
- **Education**: 10-20 points based on qualification level
- **Additional Factors**:
  - Australian study requirement: 0-5 points
  - Specialist education: 0-10 points
  - Community language: 0-5 points
  - Regional study: 0-5 points
  - Partner skills: 0-10 points
  - Professional year: 0-5 points
  - State nomination: 0-5 points

## Points Scoring

The total points determine eligibility:
- **0-59 points**: Low (Red indicator)
- **60-74 points**: Medium (Orange indicator)
- **75-89 points**: High (Green indicator)
- **90+ points**: Excellent (Bright green with animation)

## Admin Settings

Access the plugin settings via:
**WordPress Admin → Settings → Calculator Form**

The settings page provides:
- Usage instructions
- Shortcode examples
- Installation verification

## Technical Details

### Files Structure

```
calculator-form-plugin/
├── calculator-form-plugin.php    # Main plugin file
├── README.md                     # Documentation
├── assets/
│   ├── css/
│   │   └── calculator-form.css   # Styling
│   └── js/
│       └── calculator-form.js    # JavaScript functionality
└── templates/
    └── calculator-form.php       # Form HTML template
```

### WordPress Standards

- Follows WordPress coding standards
- Uses proper sanitization and escaping
- Implements WordPress hooks and filters
- Conditional asset loading
- Proper plugin headers

### Browser Compatibility

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Internet Explorer 11+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Customization

### CSS Customization

Add custom CSS to your theme's `style.css` or use the WordPress Customizer:

```css
/* Example: Change form background */
.calculator-form-wrapper {
    background: #f0f0f0;
    border: 2px solid #333;
}

/* Example: Customize button colors */
.calculator-form-wrapper .reset-button {
    background: #your-color;
}
```

### JavaScript Hooks

The plugin provides JavaScript events you can hook into:

```javascript
jQuery(document).on('calculator-form-updated', function(event, totalPoints) {
    // Your custom code here
    console.log('Total points updated:', totalPoints);
});
```

## Troubleshooting

### Form Not Displaying

1. Verify the shortcode is correctly typed: `[calculator_form]`
2. Check if the plugin is activated
3. Clear any caching plugins

### Styling Issues

1. Check for theme conflicts
2. Verify CSS files are loading (check browser developer tools)
3. Add `!important` to custom CSS if needed

### JavaScript Not Working

1. Check for JavaScript errors in browser console
2. Verify jQuery is loaded
3. Check for plugin conflicts

## Support

For support and feature requests, please contact the plugin developer.

## Changelog

### Version 1.0.0
- Initial release
- Basic calculator functionality
- Responsive design
- Admin panel
- Real-time calculations

## License

This plugin is licensed under the GPL v2 or later.

## Credits

Developed based on Australian Department of Immigration visa points calculation system.