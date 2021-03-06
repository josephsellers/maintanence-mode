// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1>Sorry, this site is down for maintanence</h1>
    <div>
        <p>You can get in touch with us if you need to at admin@rokesmith.com but if you can see this page then we are already aware that the site is down and we are working on it.</p>
        <p>We will get the site back up as soon as we can.</p>
        <p>Thanks for your patience!</p>
    </div>
</article>');
    }
}
add_action('get_header', 'wp_maintenance_mode');
