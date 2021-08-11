const writingEl = document.querySelector('.writing-text');
const text = writingEl.innerHTML
writingEl.innerHTML = '';
let index = 0

const interval = setInterval(function(){
  writingEl.innerHTML = text.substring(0,index++);
  if(index == text.length + 1)
    clearInterval(interval);
}, 100);