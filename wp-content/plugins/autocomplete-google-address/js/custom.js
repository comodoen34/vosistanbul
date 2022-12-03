function autocomplet_set_google_autocomplete() {
  jQuery(input_fields).each(function () {
    var southWest = new google.maps.LatLng(40.015137, 28.07953);
    var northWest = new google.maps.LatLng(42.015137, 30.07953);
    var bangaloreBounds = new google.maps.LatLngBounds(southWest, northWest);

    var options = {
      bounds: bangaloreBounds,
      strictBounds: true,
      types: ["geocode"],
      // componentRestrictions: { country: "tr" },
    };

    let autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */ this,
      options
    );

    autocomplete.addListener("place_changed", fillInAddress);

    function fillInAddress() {
      const place = autocomplete.getPlace();
      jQuery(input_fields).trigger("change");
    }
  });
}
jQuery(window).on("load", function () {
  autocomplet_set_google_autocomplete();
});
