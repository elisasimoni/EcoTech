var botui = new BotUI('ecobot');

function init() {
    botui.message
        .bot({
            content: "Hi there! I'm EcoBot",
            loading: true,
            delay: 1000,
        }).then(function () {
        return botui.message.bot({
            loading: true,
            delay: 1000,
            content: "I can help you with your shopping",
        });
    }).then(function () {
        return botui.message.bot({
            loading: true,
            delay: 1000,
            content: "Do you need help?",
        });
    }).then(function () {
        return botui.action.button({
            delay: 1000,
            loading: true,
            addMessage: true,
            action: [{
                text: 'Yes!',
                value: 'yes'
            }, {
                text: 'No.',
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
                content: "See you later then!!",
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
            text: 'I want to track my order',
            value: 'track'
        }, {
            text: 'I have problem with payment',
            value: 'pay'
        },{
            text: 'The item I want to buy is out of stock',
            value: 'outof'
        },{
            text: 'My problem is not in the list',
            value: 'no'
        }]
    }).then(function (res) {
        if (res.value == 'track') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "You can go to the current section of your profile",
            });

        } else if(res.value == 'pay') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "I just want to remind you that we accept payment of the follow system: ",

            });
        }else if(res.value == 'outof') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "We ask you to kindly wait for the restock, we will send you a notification when the product will return in stock  ",
            });
        }else if(res.value == 'no') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Let's contact us! One of our specialist will reply you",
            })
        }
    }).then(function (res) {
        if(res.value != 'no') {
            return botui.message.bot({
                loading: true,
                delay: 1000,
                content: "Do you have any other question?",
            });}
    }).then(function () {
        return botui.action.button({
            delay: 1000,
            loading: true,
            addMessage: true,
            action: [{
                text: 'Yes!',
                value: 'yes'
            }, {
                text: 'No.',
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
                content: "See you later then!!",
            });
        }
    });
}


init();