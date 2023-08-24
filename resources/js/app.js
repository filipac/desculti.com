

$(document).on("click", "#aboutTheEvent", function() {
    // scroll to #about smooth
    const el = document.querySelector("#about");
    el.scrollIntoView({ behavior: "smooth" });
})
