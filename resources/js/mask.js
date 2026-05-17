import IMask from "imask";

document.addEventListener("DOMContentLoaded", () => {
    const phoneInput = document.getElementById("phone-input");

    if (phoneInput) {
        IMask(phoneInput, {
            mask: "+{7} (000) 000-00-00",
            lazy: false,
        });
    }
});
