function setConsent(value) {
    document.cookie = "cookieConsent=" + value + "; path=/; max-age=" + (30*24*60*60);
    document.getElementById("cookieBanner").style.display = "none";
  }


  window.onload = function() {
    if (!document.cookie.includes("cookieConsent")) {
      document.getElementById("cookieBanner").style.display = "block";
    }
  };