(function ($) {
  if (!$ || $.browser) {
    return;
  }

  var ua = (window.navigator && window.navigator.userAgent ? window.navigator.userAgent : "").toLowerCase();
  var match = /(edge|edg|opr|opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*([\d.]+)/.exec(ua) || [];
  var name = match[1] || "";
  var version = match[2] || "0";
  var browser = {};

  if (name === "trident") {
    name = "msie";
    var rv = /rv:([\d.]+)/.exec(ua);
    if (rv && rv[1]) {
      version = rv[1];
    }
  }

  if (name === "edg") {
    name = "edge";
  }

  if (name === "opr") {
    name = "opera";
  }

  if (name) {
    browser[name] = true;
  }

  browser.version = version;
  $.browser = browser;
})(window.jQuery);
