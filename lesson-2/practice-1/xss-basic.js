(function () {
  // Lo primero es vaciar la página web y ponerle un fondo
  document.body.innerHTML = '';
  document.body.style.background =
    'url(https://cdn.wallpapersafari.com/82/76/PlbVW3.gif)';

  // Cuando el ratón se mueva llamamos a la función handleMouseMove
  document.onmousemove = handleMouseMove;

  // Lo siguiente es recoger el Sistema operativo
  var OSName = "Unknown OS";
  if (navigator.appVersion.indexOf("Win") !== -1) {
    OSName = "Windows";
  }
  if (navigator.appVersion.indexOf("Mac") !== -1) {
    OSName = "MacOS";
  }
  if (navigator.appVersion.indexOf("X11") !== -1) {
    OSName = "UNIX";
  }
  if (navigator.appVersion.indexOf("Linux") !== -1) {
    OSName = "Linux";
  }

  // Lo siguiente es mostrar un mensaje amenazante y la posición del ratón
  const div = document.createElement("div");
  const div2 = document.createElement("div");
  const div3 = document.createElement("div");
  div3.innerHTML =
    "<h1 style='color:red; text-align:center;'>You have been hacked, you are on " +
    OSName + " and your mouse position is:</h1>"
  document.body.appendChild(div3)
  document.body.appendChild(div);
  document.body.appendChild(div2);

  function handleMouseMove(event) {
    let eventDoc, doc, body;

    // Recogemos los eventos del navegador
    event = event || window.event;

    // Detectamos la posición del ratón
    if (event.pageX == null && event.clientX != null) {
      eventDoc = (event.target && event.target.ownerDocument) || document;
      doc = eventDoc.documentElement;
      body = eventDoc.body;

      event.pageX = event.clientX +
        (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
        (doc && doc.clientLeft || body && body.clientLeft || 0);
      event.pageY =
        event.clientY + (doc && doc.scrollTop || body && body.scrollTop || 0) -
        (doc && doc.clientTop || body && body.clientTop || 0);
    }

    // Escribimos la posición del ratón
    div.innerHTML =
      "<h2 style='color:red; text-align:center;'>Y: " + event.pageY + "</h2>";
    div2.innerHTML =
      "<h2 style='color:red; text-align:center;'>X: " + event.pageX + "</h2>";
  }
})();
