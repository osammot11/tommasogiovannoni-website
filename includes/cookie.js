
document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const modal = document.getElementById("cookie-modal");

    const acceptBtn = document.getElementById("cookie-accept");
    const rejectBtn = document.getElementById("cookie-reject");
    const settingsBtn = document.getElementById("cookie-settings");

    const closeModalBtn = document.getElementById("cookie-close-modal");
    const savePreferencesBtn = document.getElementById("cookie-save-preferences");

    const analyticsCheckbox = document.getElementById("analytics-cookies");
    const marketingCheckbox = document.getElementById("marketing-cookies");

    const consentKey = "site_cookie_consent";

    function setConsent(data) {
        localStorage.setItem(consentKey, JSON.stringify(data));
    }

    function getConsent() {
        const saved = localStorage.getItem(consentKey);
        return saved ? JSON.parse(saved) : null;
    }

    function hideBanner() {
        banner.classList.remove("show");
    }

    function openModal() {
        modal.classList.add("show");
        modal.setAttribute("aria-hidden", "false");
    }

    function closeModal() {
        modal.classList.remove("show");
        modal.setAttribute("aria-hidden", "true");
    }

    function applyConsentScripts(consent) {
        if (!consent) return;

        if (consent.analytics) {
            console.log("Cookie analitici attivati");
            /* Inserisci qui eventuale codice analytics */
        }

        if (consent.marketing) {
            console.log("Cookie marketing attivati");
            /* Inserisci qui eventuale codice marketing/pixel */
        }
    }

    const existingConsent = getConsent();

    if (!existingConsent) {
        setTimeout(() => {
            banner.classList.add("show");
        }, 600);
    } else {
        applyConsentScripts(existingConsent);
    }

    acceptBtn.addEventListener("click", function () {
        const consent = {
            necessary: true,
            analytics: true,
            marketing: true
        };

        setConsent(consent);
        hideBanner();
        closeModal();
        applyConsentScripts(consent);
    });

    rejectBtn.addEventListener("click", function () {
        const consent = {
            necessary: true,
            analytics: false,
            marketing: false
        };

        setConsent(consent);
        hideBanner();
        closeModal();
    });

    settingsBtn.addEventListener("click", function () {
        const saved = getConsent();

        if (saved) {
            analyticsCheckbox.checked = !!saved.analytics;
            marketingCheckbox.checked = !!saved.marketing;
        }

        openModal();
    });

    closeModalBtn.addEventListener("click", closeModal);

    modal.addEventListener("click", function (e) {
        if (e.target.classList.contains("cookie-modal__overlay")) {
            closeModal();
        }
    });

    savePreferencesBtn.addEventListener("click", function () {
        const consent = {
            necessary: true,
            analytics: analyticsCheckbox.checked,
            marketing: marketingCheckbox.checked
        };

        setConsent(consent);
        hideBanner();
        closeModal();
        applyConsentScripts(consent);
    });
});
