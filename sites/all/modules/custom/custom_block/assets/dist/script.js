
(function ($) {
 if(Drupal.ajax)
 {
  Drupal.ajax.prototype.commands.console_log = function(ajax, data, status) {
   console.log(data);
  };
 }
})(jQuery);