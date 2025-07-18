# Custom WordPress Theme

This repository contains a custom-built WordPress theme developed using the Block Editor (Gutenberg) with no pre-built page builders. The theme is responsive, performance-optimized, and includes custom post types for Testimonials.

## 🔧 Installation Steps

1. Download or clone the repository:
   ```bash
   git clone https://github.com/yourusername/custom-wordpress-theme.git
   ```

2. Navigate to your local WordPress installation directory:
   ```bash
   cd path/to/your/local-site/wp-content/themes/
   ```

3. Copy the theme folder into the `themes` directory:
   ```bash
   cp -r /path/to/custom-wordpress-theme ./custom-theme
   ```

4. Log in to your WordPress admin dashboard.
5. Go to **Appearance → Themes** and activate the theme named **Custom Theme**.

---

## 🧩 Custom Post Types (CPTs)

### 1. Testimonials
- **Slug**: `testimonial`
- **Purpose**: To manage user or client testimonials that can be displayed in a slider or grid on the homepage or a dedicated page.
- **Integration**: The CPT is registered using `register_post_type()` in `functions.php`.
- **Custom Fields**: Added using `add_meta_box()` for client name, designation, and testimonial text.

Example usage in the theme:
```php
$args = array('post_type' => 'testimonial', 'posts_per_page' => 5);
$query = new WP_Query($args);
```

---

## 🚀 Performance Optimizations

- **Lazy Loading**: Images include `loading="lazy"` to defer off-screen loading.
- **Image Compression**: All theme images are compressed using [TinyPNG](https://tinypng.com/) or [Squoosh](https://squoosh.app/).
- **Minimal Dependencies**: Only essential scripts and styles are enqueued.
- **Code Splitting**: Separate files for header, footer, and sections using `get_template_part()`.
- **No jQuery**: Pure vanilla JavaScript is used where possible to reduce bloat.
- **Font Optimization**: Only required font weights/styles are loaded from Google Fonts with `display=swap` for better rendering.

---

## 📁 Folder Structure

```
custom-theme/
│
├── assets/
│   ├── css/
│   └── js/
├── template-parts/
│   ├── header.php
│   └── testimonial.php
├── functions.php
├── index.php
├── style.css
└── README.md
```

---

## 🧑‍💻 Developed By

Madhav Vemula  
[LinkedIn](https://www.linkedin.com/in/madhav-vemula-1b4337261/) | [GitHub](https://github.com/madhavvemula)

---