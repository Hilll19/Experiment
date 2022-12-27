//declare id from file index.html
const hourEl = document.getElementById("hour");
const minuteEl = document.getElementById("minutes");
const secondEl = document.getElementById("seconds");
const ampmEl = document.getElementById("ampm");

//this fucntion to declare if h is hours, m is minute, s is second
function updateClock(){
    let h = new Date().getHours();
    let m = new Date().getMinutes();
    let s = new Date().getSeconds();
    let ampm = "AM";
    
    //if h more 12 ampm change to PM
    if(h > 12){
        h = h- 12;
        ampm = "PM";
    }
    
    //if h less then 10 will print 0 on front but if more then 10 not print 0
    h = h < 10 ? "0" + h : h;
    //same like h if less then 10 will print 10  but if more then 10 not print 0
    m = m < 10 ? "0" + m : m;
    //same like h and m
    s = s < 10 ? "0" + s : s;

    //This to call hourEl(from html) so that it can be changed text with function getHours, getMInutes, and getSeconds
    hourEl.innerText = h;
    minuteEl.innerText = m;
    secondEl.innerText = s;
    ampmEl, (innerText = ampm);
    //loop call updateclock every 1000(1second)
    setTimeout(()=>{
        updateClock()
    }, 1000)

}
updateClock();