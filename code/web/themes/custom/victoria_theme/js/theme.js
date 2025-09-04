(function (Drupal) {
  Drupal.behaviors.victoriaThemeHello = {
    attach: function (context) {
      if (!context.__victoriaThemeHello) {
        console.log('Victoria Theme: JS loaded');
        context.__victoriaThemeHello = true;
      }
    }
  };
})(Drupal);