window.addEventListener('DOMContentLoaded', function(){
  let height = document.getElementsByTagName('html')[0].scrollHeight;
  window.parent.postMessage(['setHeight',height], '*');
  console.log(height);
});
