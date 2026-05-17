import IMask from "imask";

document.addEventListener("DOMContentLoaded", () => {
    const phoneInput = document.getElementById("phone-input");
    const form = document.getElementById("form");

    if (phoneInput && form) {
        IMask(phoneInput, {
            mask: "+{7} (000) 000-00-00",
            lazy: false,
        });
    }

    form.addEventListener("submit", (e) => {
        const digits = phoneInput.value.replace(/\D/g, "");

        if (digits.length !== 11) {
            e.preventDefault();

            alert("Введите полный номер!");

            phoneInput.focus();
        }
    });
});
