importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

var firebaseConfig = {
    apiKey: "AIzaSyCEIm-nmNlb2cPnddedWVBWM4Y_J5gDMVg",
        authDomain: "e-commercenestjs.firebaseapp.com",
        databaseURL: "https://e-commercenestjs-default-rtdb.firebaseio.com",
        projectId: "e-commercenestjs",
        storageBucket: "e-commercenestjs.appspot.com",
        messagingSenderId: "985471497447",
        appId: "1:985471497447:web:900be1342929e4f07c1e42",
        measurementId: "G-TGSZKSM2YS"
};

firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
    const notificationOption={
        body:notification.body,
        icon:notification.icon
    };
    return self.registration.showNotification(payload.notification.title,notificationOption);
});