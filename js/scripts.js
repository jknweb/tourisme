const observer = new IntersectionObserver(function (entries) {
    // entries est un tableau contenant des IntersectionObserverEntry
  }, {
    threshold: 0.5 // permet d'indiquer la zone à partir de laquelle l'élément devient 'visible'
  });

  