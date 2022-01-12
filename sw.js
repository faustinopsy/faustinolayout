// we'll version our cache (and learn how to delete caches in
// some other post)

// when the browser fetches a url, either response with
// the cached object or go ahead and fetch the actual url
self.addEventListener('fetch', event => {
  // Cache-First Strategy
  event.respondWith(
    caches.match(event.request) // check if the request has already been cached
    .then(cached => cached || fetch(event.request)) // otherwise request network
  );
});

const CACHE_NAME = 'v2';
const STATIC_CACHE_URLS = ['/', 'index.html',
 'sobre.html', 
 'include/content.html',
 'scripts.js',
  'js/funcoes.js',
   '404.html',
    'contato.html',
	 'css/style.css',
	 'img/eu.jpg',
	 '.htaccess',
	 'blog/historia-do-cristianismo.html',
	 'blog/historia-do-budismo.html',
	 'blog/historia-do-hinduismo.html',
	 'blog/historia-do-islamismo.html',
	 'blog/historia-do-judaismo.html',
	 'blog/o-que-e-hipnose.html',
	 'blog/memoria-de-curto-prazo.html',
	 'blog/o-cerebro-muda-com-meditacao.html',
	 'blog/como-a-memoria-funciona.html'
 
 ];

self.addEventListener('install', event => {
  console.log('Service Worker installing.');
  event.waitUntil(
    caches.open(CACHE_NAME)
    .then(cache => cache.addAll(STATIC_CACHE_URLS))  
  )
}); 


self.addEventListener('activate', event => {
  // delete any unexpected caches
  event.waitUntil(
    caches.keys()
    .then(keys => keys.filter(key => key !== CACHE_NAME))
    .then(keys => Promise.all(keys.map(key => {
        console.log(`Deleting cache ${key}`);
        return caches.delete(key)
    })))
  );
});

self.addEventListener("notificationclick", function (event) {
  if (!event.action) {
    // pengguna menyentuh area notifikasi diluar action
    console.log("tidak ada OPSI Notification Click");
    return;
  }
  switch (event.action) {
    case "yes-action":
      console.log("YES");
      clients.openWindow("https://rodrigofaustino.com.br/");
      break;

    case "no-action":
      console.log("NO");
      break;

    default:
      console.log(`Action yang diberikan : ${event.action}`);
      break;
  }
  event.notification.close();
});

self.addEventListener("push", function (event) {
  let body = "";
  if (event.data) {
    body = event.data.text();
  } else {
    body = "Novidades do site";
  }

  let options = {
    body: body,
    icon: "img/eu.jpg",
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: 1,
    },
  };
  event.waitUntil(
    self.registration.showNotification("Push Notification", options),
  );
});