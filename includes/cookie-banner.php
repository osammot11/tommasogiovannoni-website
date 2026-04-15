<div id="cookie-banner" class="cookie-banner" aria-label="Banner consenso cookie">
    <div class="cookie-banner__content">
        <div class="cookie-banner__text">
            <p class="cookie-banner__title">Questo sito utilizza i cookie</p>
            <p class="cookie-banner__description top-margin-xs">
                Utilizziamo cookie tecnici per il corretto funzionamento del sito e, previo consenso,
                eventuali cookie di analisi o marketing. Puoi accettare, rifiutare o gestire le preferenze.
            </p>
        </div>

        <div class="cookie-banner__actions">
            <button id="cookie-reject" class="cookie-btn cookie-btn-secondary" type="button">
                Rifiuta
            </button>
            <button id="cookie-settings" class="cookie-btn cookie-btn-light" type="button">
                Preferenze
            </button>
            <button id="cookie-accept" class="cookie-btn cookie-btn-primary" type="button">
                Accetta
            </button>
        </div>
    </div>
</div>

<div id="cookie-modal" class="cookie-modal" aria-hidden="true">
    <div class="cookie-modal__overlay"></div>

    <div class="cookie-modal__box" role="dialog" aria-modal="true" aria-labelledby="cookie-modal-title">
        <div class="cookie-modal__header">
            <h3 id="cookie-modal-title">Preferenze cookie</h3>
            <button id="cookie-close-modal" class="cookie-modal__close" type="button" aria-label="Chiudi">
                ×
            </button>
        </div>

        <p class="cookie-modal__intro top-margin-s">
            Scegli quali categorie di cookie autorizzare. I cookie tecnici sono sempre attivi
            perché necessari al funzionamento del sito.
        </p>

        <div class="cookie-option top-margin-2">
            <div>
                <p class="cookie-option__title">Cookie tecnici</p>
                <p class="cookie-option__text top-margin-xs">
                    Necessari per il corretto funzionamento del sito.
                </p>
            </div>
            <div class="cookie-switch cookie-switch--active">
                Sempre attivi
            </div>
        </div>

        <div class="cookie-option top-margin">
            <div>
                <p class="cookie-option__title">Cookie analitici</p>
                <p class="cookie-option__text top-margin-xs">
                    Ci aiutano a capire come viene utilizzato il sito, in forma aggregata.
                </p>
            </div>
            <label class="switch">
                <input type="checkbox" id="analytics-cookies">
                <span class="slider"></span>
            </label>
        </div>

        <div class="cookie-option top-margin">
            <div>
                <p class="cookie-option__title">Cookie marketing</p>
                <p class="cookie-option__text top-margin-xs">
                    Utilizzati per campagne pubblicitarie e tracciamenti di terze parti.
                </p>
            </div>
            <label class="switch">
                <input type="checkbox" id="marketing-cookies">
                <span class="slider"></span>
            </label>
        </div>

        <div class="cookie-modal__actions top-margin-2">
            <button id="cookie-save-preferences" class="cookie-btn cookie-btn-primary" type="button">
                Salva preferenze
            </button>
        </div>
    </div>
</div>