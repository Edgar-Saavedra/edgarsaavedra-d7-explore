## RTL

Drupal will look for css-loaded-using-#attached-rtl.css to load in addition to (and just after)
the requested css-loaded-using-#attached.css  le. Since our -rtl stylesheet is loaded
in addition to the standard stylesheet, we simply need to include the
rules and properties needed to override the LTR version of our styles.

## Custom theme

### when to use the "render element" in a custom theme

There is only one situation in which you could use the render element key:
if your data could be represented by a single render element or by a single
renderable array containing nested render elements. If that is not the case,
then you must specify the variables key and specify the variables you will be
passed to theme() and their default values.

###  preprocess functions

Since we own this theme hook, we'll need to define our preprocess function with a template_ pre x.

function template_preprocess_THEME(&$variables)

Lastly, the show(), hide(), and render() functions are special themer-convenience
functions that should only be used in template  les; they should never be used
in preprocess functions, theme functions or anywhere else. render() is
basically the same thing as the drupal_render() function we've already learned about.

hide() function can be used on a render array's child element earlier in the template
before the render array calls render(); this will prevent the child element from being
included with the rest of the render array

The  rst part of any template  le should be a large docblock explaining all the
variables available to themers, including convenience variables, not just
the ones printed inside our template