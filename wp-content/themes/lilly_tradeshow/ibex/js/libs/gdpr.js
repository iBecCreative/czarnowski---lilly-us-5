try {
  var dismiss = localStorage.getItem('bannerDismiss');
}catch(e){
  //Cookies disabled
}
if (dismiss !== 'true') {
  //Get script attributes
  var script = document.getElementById('gdpr');
  var message = script.getAttribute('data-message') ? script.getAttribute('data-message') : 'We use cookies to analyze site traffic, personalize content and serve targeted advertisements. If you continue to use this site, you consent to our use of cookies.';
  var url = script.getAttribute('data-url') ? script.getAttribute('data-url') : false;
  var bgcolor = script.getAttribute('data-bgcolor') ? script.getAttribute('data-bgcolor') : 'rgba(0,0,0,0.8)';
  var color = script.getAttribute('data-color') ? script.getAttribute('data-color') : '#FFFFFF';
  var btn1 = script.getAttribute('data-btn1') ? script.getAttribute('data-btn1') : 'OK';
  var btn2 = script.getAttribute('data-btn2') ? script.getAttribute('data-btn2') : 'Read More';
  var btnbg = script.getAttribute('data-btnbg') ? script.getAttribute('data-btnbg') : '#FFFFFF';
  var btncolor = script.getAttribute('data-btncolor') ? script.getAttribute('data-btncolor') : '#000000';
  var customStyles = script.getAttribute('data-styles') ? script.getAttribute('data-styles') : '';

  var banner = document.createElement('div');
  banner.className = 'footer-banner';

  var styles = '<style>.footer-banner{';
  styles    += 'background:' + bgcolor + ';color:' + color + ';width:100vw;position:fixed;bottom:0;left:0;padding:15px;';
  styles    += 'display:flex;flex-wrap:wrap;align-items:center;justify-content:center;box-sizing:border-box;z-index:9999;';
  styles    += '}.footer-banner div{';
  styles    += 'max-width:750px;margin:0px 5px 10px;font-size:13px;';
  styles    += '}.footer-banner span a{';
  styles    += 'color:' + color + ';text-decoration:underline;';
  styles    += '}.footer-banner button{';
  styles    += 'padding:10px 15px;margin-left:10px;text-align:center;min-width:100px;flex:0 0 auto;';
  styles    += 'cursor:pointer;-webkit-appearance:none;border:0;background:' + btnbg + ';color:' + btncolor + ';';
  styles    += '}';
  styles    += customStyles + '</style>';

  var contents = styles;
  contents    += '<div><span>' + message + '</span></div>';
  contents    += '<div class="buttons"><button type="button" value="' + btn1 + '" onclick="dsmss()">' + btn1 + '</button>';
  if (url) {
    contents  += '<button type="button" value="' + btn2 + '" onclick="more()">' + btn2 + '</button></div>';
  }

  banner.innerHTML = contents;
  document.body.appendChild(banner);
}

function dsmss(){
  try{
    localStorage.setItem('bannerDismiss', 'true');
  }catch(e){
    //Cookies disabled
  }
  banner.remove();
}

function more(){
  dsmss();
  window.location.href = url;
}
//IE 11 support for .remove()
Element.prototype.remove = function() {
  this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
  for(var i = this.length - 1; i >= 0; i--) {
    if(this[i] && this[i].parentElement) {
      this[i].parentElement.removeChild(this[i]);
    }
  }
}