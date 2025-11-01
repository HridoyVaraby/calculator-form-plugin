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

### Elementor Integration

This plugin is optimized for use with Elementor:

1. **Add to any page**: Insert the shortcode using Elementor's Shortcode widget
2. **Full-width ready**: The form adapts to container width automatically  
3. **No default spacing**: Clean design allows you to control all margins and padding through Elementor
4. **Custom CSS support**: Use Elementor's Advanced → Custom CSS panel for styling
5. **Responsive design**: Works perfectly in Elementor's responsive preview modes

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

You can customize the calculator form appearance using custom CSS in several ways:

#### Method 1: WordPress Customizer
1. Go to **WordPress Admin → Appearance → Customize → Additional CSS**
2. Add your custom CSS code
3. Click "Publish" to save changes

#### Method 2: Elementor Custom CSS
1. Edit your page with Elementor
2. Go to the widget/section containing the calculator form
3. Navigate to **Advanced → Custom CSS**
4. Add your CSS code targeting the form elements

#### Method 3: Child Theme
Add custom CSS to your child theme's `style.css` file.

### CSS Selectors Reference

Here are the main CSS selectors you can use to customize the form:

#### Form Container & Layout
```css
/* Main form wrapper */
.calculator-form-wrapper {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Form sections */
.calculator-form-wrapper .fields {
    margin-bottom: 25px;
}
```

#### Typography & Colors
```css
/* Form title */
.calculator-form-wrapper h2.cff-form-title {
    color: #2c3e50;
    font-size: 24px;
    font-weight: 700;
}

/* Form description */
.calculator-form-wrapper .cff-form-description {
    color: #7f8c8d;
    font-size: 14px;
}

/* Section headings */
.calculator-form-wrapper h4 {
    color: #34495e;
    font-size: 18px;
    border-bottom: 2px solid #3498db;
    padding-bottom: 8px;
}

/* Field labels */
.calculator-form-wrapper .fields label {
    color: #2c3e50;
    font-weight: 500;
}

/* Required field indicator */
.calculator-form-wrapper .r {
    color: #e74c3c;
}
```

#### Form Fields
```css
/* Input fields and dropdowns */
.calculator-form-wrapper select.field,
.calculator-form-wrapper input.field {
    border: 2px solid #bdc3c7;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 16px;
    background-color: #ffffff;
    transition: all 0.3s ease;
}

/* Focus state */
.calculator-form-wrapper select.field:focus,
.calculator-form-wrapper input.field:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    outline: none;
}

/* Radio button containers */
.calculator-form-wrapper .one_column {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 4px;
    margin-right: 15px;
}

/* Radio button labels */
.calculator-form-wrapper .one_column label {
    cursor: pointer;
    font-weight: normal;
}
```

#### Points Summary Section
```css
/* Points summary container */
.calculator-form-wrapper .points-summary {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 20px;
}

/* Individual points rows */
.calculator-form-wrapper .points-row {
    padding: 12px 0;
    border-bottom: 1px solid #e9ecef;
}

/* Points input fields */
.calculator-form-wrapper .points-row input {
    background: #ffffff;
    border: 1px solid #ced4da;
    color: #495057;
    font-weight: 500;
    text-align: center;
}

/* Total points row */
.calculator-form-wrapper .total-points {
    background: #e8f4fd;
    border-top: 3px solid #3498db;
    font-weight: 700;
}

/* Total points input */
.calculator-form-wrapper .total-points-input {
    background: #3498db !important;
    color: #ffffff !important;
    font-weight: 700 !important;
    border: none !important;
}
```

#### Reset Button
```css
/* Reset button */
.calculator-form-wrapper .reset-button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #ffffff;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Reset button hover effect */
.calculator-form-wrapper .reset-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}
```

### Color Scheme Examples

#### Modern Blue Theme
```css
.calculator-form-wrapper {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #ffffff;
    padding: 30px;
    border-radius: 15px;
}

.calculator-form-wrapper h2.cff-form-title,
.calculator-form-wrapper h4,
.calculator-form-wrapper .fields label {
    color: #ffffff;
}

.calculator-form-wrapper select.field,
.calculator-form-wrapper input.field {
    background: rgba(255, 255, 255, 0.9);
    border: none;
}
```

#### Corporate Green Theme
```css
.calculator-form-wrapper {
    background: #ffffff;
    border: 3px solid #27ae60;
}

.calculator-form-wrapper h2.cff-form-title {
    color: #27ae60;
    border-bottom: 3px solid #27ae60;
}

.calculator-form-wrapper h4 {
    color: #2c3e50;
    background: #ecf0f1;
    padding: 10px;
}

.calculator-form-wrapper .reset-button {
    background: #27ae60;
}

.calculator-form-wrapper select.field:focus,
.calculator-form-wrapper input.field:focus {
    border-color: #27ae60;
}
```

#### Dark Theme
```css
.calculator-form-wrapper {
    background: #2c3e50;
    color: #ecf0f1;
}

.calculator-form-wrapper h2.cff-form-title,
.calculator-form-wrapper h4,
.calculator-form-wrapper .fields label {
    color: #ecf0f1;
}

.calculator-form-wrapper select.field,
.calculator-form-wrapper input.field {
    background: #34495e;
    color: #ecf0f1;
    border: 1px solid #7f8c8d;
}

.calculator-form-wrapper .points-summary {
    background: #34495e;
}

.calculator-form-wrapper .points-row input {
    background: #2c3e50;
    color: #ecf0f1;
}
```

### Responsive Customization

Add mobile-specific styles:

```css
@media (max-width: 768px) {
    .calculator-form-wrapper {
        padding: 20px 15px;
    }
    
    .calculator-form-wrapper h2.cff-form-title {
        font-size: 20px;
    }
    
    .calculator-form-wrapper select.field,
    .calculator-form-wrapper input.field {
        font-size: 16px; /* Prevents zoom on iOS */
    }
}
```

### Advanced Customization Tips

1. **Use `!important` if styles don't apply**: Some themes have very specific CSS that might override your styles.

2. **Test on different devices**: Always check your customizations on mobile devices.

3. **Use browser developer tools**: Right-click on form elements and "Inspect" to see current CSS classes.

4. **Elementor-specific**: When using in Elementor, you can also use Elementor's built-in styling options for spacing, backgrounds, and typography.

### Quick Reference - Most Used Selectors

```css
/* Form container */
.calculator-form-wrapper { }

/* Title and headings */
.calculator-form-wrapper h2.cff-form-title { }
.calculator-form-wrapper h4 { }

/* All form fields */
.calculator-form-wrapper select.field,
.calculator-form-wrapper input.field { }

/* Labels */
.calculator-form-wrapper .fields label { }

/* Reset button */
.calculator-form-wrapper .reset-button { }

/* Points summary */
.calculator-form-wrapper .points-summary { }
.calculator-form-wrapper .total-points-input { }
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

### Version 1.0.1
- Removed default padding and margins for better Elementor integration
- Made form full-width and left-aligned
- Added comprehensive CSS customization documentation
- Improved responsive design
- Added multiple color scheme examples

### Version 1.0.0
- Initial release
- Basic calculator functionality
- Responsive design
- Admin panel
- Real-time calculations

## License

This plugin is licensed under the GPL v2 or later.

## Credits

**Author:** Hridoy Varaby | Varabit  
**Website:** [https://varabit.com](https://varabit.com)  
**Plugin URI:** [https://varabit.com/calculator-form-plugin](https://varabit.com/calculator-form-plugin)

Developed based on Australian Department of Immigration visa points calculation system.