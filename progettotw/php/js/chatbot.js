var botui = new BotUI('ecobot');

function init() {
    botui.message
        .bot({
            content: "Ciao! Sono EcoBot",
            loading: true,
            delay: 1000,
        }).then(function () {
        return botui.message.bot({
            loading: true,
            delay: 1000,
            content: "Sono qui per aiutarti con i tuoi acqusiti.",
        });
    }).then(function () {
        return botui.message.bot({
            loading: true,
            delay: 1000,
            content: "Hai bisogno d'aiuto ?",
        });
    }).then(function () {
        return botui.action.button({
            delay: 1000,
            loading: true,
            addMessage: true,
            action: [{
                text: 'Si',
                value: 'yes'
            }, {
                text: 'No',
                value: 'no'
            }]
        });
    }).then(function (res) {
        if(res.value == 'yes') {
            question();
        } else {
            botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Arrivederci e Buono Shopping !",
            });
        }
    });
}

var question = function () {
    return botui.action.button({
        delay: 1000,
        loading: true,
        addMessage: true,
        action: [{
            text: 'Vorrei tracciare il mio ordine',
            value: 'track'
        }, {
            text: 'Ho problemi con il pagamento',
            value: 'pay'
        },{
            text: 'Il prodotto che vorrei comprare non è disponibile',
            value: 'outof'
        },{
            text: 'Il mio problema non è nella lista',
            value: 'no'
        }]
    }).then(function (res) {
        if (res.value == 'track') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Per tracciare il tuo ordine visita questa sezione del sito : <a href='tracking.php' target='_blank'>Tracking</a>",
            });

        } else if(res.value == 'pay') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Il sistema accetta solo i seguenti metodi di pagamento : PayPal, Carta di Credito ( Visa , Mastercard, American Express ) , Bonifico Bancario. </br> In caso di pagamento tramite bonifico il suo ordine verrà processato solo alla ricezione di quest'ultimo.",

            });
        }else if(res.value == 'outof') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Ti chiediamo gentilmente di attendere il riassortimento, ti invieremo una notifica quando il prodotto tornerà in stock.",
            });
        }else if(res.value == 'no') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Contattaci! Uno dei nostri responsabili ti aiuterà il prima possibile.",
            })
        }
    }).then(function (res) {
        if(res.value != 'no') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Hai altre domande ?",
            });}
    }).then(function () {
        return botui.action.button({
            delay: 1000,
            loading: true,
            addMessage: true,
            action: [{
                text: 'Si',
                value: 'yes'
            }, {
                text: 'No',
                value: 'no'
            }]
        });


    }).then(function (res) {
        if(res.value == 'yes') {
            question();
        } else {
            botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Speriamo di aver risolto tutti i tuoi problemi. Buona giornata e buono shopping !",
            });
        }
    });
}


init();
