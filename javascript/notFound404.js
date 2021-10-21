var container404 = document.getElementById('container404');
window.onmousemove = function(e){
    var x = - e.clientX/5,
        y = - e.clientY/5;
    container404.style.backgroundPositionX = x + 'px';
    container404.style.backgroundPositionY = y + 'px';

}