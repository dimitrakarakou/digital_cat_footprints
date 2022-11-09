# digital_cat_footprints

A Wordpress blog that has the FamilyM theme (child) with Omega parent theme displays on its Home, archive and search pages shorten blog post entries and a 'Read more...’  link

When the user’s mouse mouses over a ‘Read more’ link,
an animated cat’s footprints gif  will be appeared next to the hovered  text.
When the user’s mouse moves out from a ‘Read more’ text no image is displayed.
When the user’s mouse hovers again a  ‘Read more' link,
the cat’s footprints will be animated next to the current hovered text.
The gif file is animated only once.

<strong>About hooks.php</strong>

The more text is built on hooks.php file in omega_excerpt_more( $more ) function. inside the Omega theme (parent)

Two class attributes <a and <img to apply the jQuery script on these elements.

The class names attributes of <a and <img must be different and unique for every blog post entry. The GIF must be displayed in the right position next to the current hovered text thus these names would be built dynamically inside the omega_excerpt_more( $more ) function.

<strong>About functions.php of Omega theme</strong>

The moreTexr.js is placed inside js folder of the Omega theme.

The get_template_directory_uri function is used instead of the get_stylesheet_directory_uri, that is use for child themes :

Passing Variables between PHP and jQuery

The post id value of a hovered ‘Read more’ link text must be passed to the script to run the gif in the appropriate position, next to the hovered ‘Read more’ link

The wp_localize_script() is used to pass data from php file to js.

wp_localize_script() passes the $post array that holds the post ids to ‘blogs_post_ids’ object

and the ‘blogs_post_ids’ is available in the moreText.js script.

More detail description click <a target="_blank" href="https://dimitrakarakou.gr/digitalmedia/digital-cat-footprints"> here </a>
