## Mapping Drupal functions to menu items using hook_menu()
  - At its core, the menu system is responsible for mapping Drupal paths to the functions that generate the contents of the requested page.
  - The menu system is also responsible for controlling access to Drupal pages, acting as one of the central gatekeepers of Drupal security.
  - Drupal module developers can map paths to Drupal functions by implementing hook_menu()

## Creating basic forms with the Form API
  - drupal_get_form() takes a form ID as a parameter. This form ID can be whatever you want, but it must be unique within Drupal. Typically it will be <module_name>_<description>_form.
  - When an HTML form built with Form API is submitted, Drupal looks for two speci cally named functions—a validate function and a submit function. These functions are named by taking the form ID and appending either _validate() or _submit() depending on which function you are writing.
  - system_settings_form() uses its own custom submit handler system_settings_form_submit(), which automatically saves all form elements into persistent variables of the same name
  -  confirm_form() function allows developers to easily create con rmation forms associated with speci c actions.
## Managing Drupal settings using variable_set() and variable_get()
  - Persistent variables are saved using variable_set(), and retrieved using variable_get(). These variables can be any type of data that a developer needs, be it a simple string, an associative array, or a PHP object. The Drupal API for setting/ getting them takes care of all the serialization/unserialization that is necessary behind the scenes.
  - variable_get() can also provide a default value, which is useful for situations where you need a variable which has not already been set, for instance, after a module is installed for the  rst time.

## Sending mail using drupal_mail() and hook_mail()

## Using Drupal 7's new token system
  - A token is a small piece of text that can be placed into a piece of text via the use of a placeholder.
  - When the text is passed through the function token_replace(), then the tokens are replaced with the appropriate information.
  - Tokens can also be 'chained'—a token can refer to another token which can refer to yet another one. As an example, the token [node:author] contains the name of a node's author, and the token [user:e-mail] contains the e-mail address of a given user. To retrieve the e-mail address of a node's author, you can chain the two together with the token [node:author:e-mail].
  - Module developers can also expose their own tokens for other module developers to take advantage of. For more information on how to expose tokens in your module
     http://api.drupal.org/api/function/hook_token_info/7
     http://api.drupal.org/api/function/hook_tokens/7
  - How do we know what tokens are available?
    - Drupal 7 does not include a user interface for browsing available tokens, however the contributed Token module implements a very nice JavaScript tree-like browser for them
    - http://drupal.org/project/token
    - Additionally module developers can use the function token_info() to get a structured array containing all the tokens in the system.
  - in order for tokens to work : In order to make this work, we have to implement token_replace()
  - token_replace(). This function is pretty simple, it only takes two arguments:
    - The text with tokens in place.
    - An array of keyed objects to be used in the token replacement process.
    - If you need other replacements (like for a node) you would add additional objects into this array.