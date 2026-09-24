(() => {
const activityNames=["liam","noah","oliver","james","elijah","william","henry","lucas","benjamin","theodore","mateo","levi","sebastian","daniel","jack","michael","alexander","owen","asher","ethan","leo","jackson","mason","ezra","john","hudson","luca","aiden","joseph","david","jacob","logan","luke","julian","gabriel","grayson","wyatt","matthew","maverick","dylan","isaac","elias","anthony","thomas","charles","christopher","jaxon","josiah","andrew","lincoln","joshua","nathan","caleb","ryan","adrian","christian","colton","hunter","cameron","aaron","eli","nolan","jonathan","connor","jeremiah","ezekiel","landon","miles","robert","jameson","nicholas","greyson","cooper","ian","carter","wesley","kai","dominic","austin","adam","xavier","jace","everett","brooks","declan","micah","rowan","axel","beau","roman","silas","bennett","weston","parker","emmett","waylon","chase","zion","easton","ryder","jason","blake","gavin","kingston","evan","giovanni","jonah","vincent","harrison","august","bryson","cole","justin","maxwell","malachi","amir","tyler","jude","bentley","ashton","diego","arthur","enzo","leonardo","finn","theo","george","edward","louis","archie","oscar","felix","alfred","hugo","albert","samuel","simon","patrick","francis","tristan","damian","marcus","victor","eric","derek","brandon","jordan","kevin","steven","brian","sean","kyle","nathaniel","spencer","preston","garrett","grant","trevor","joel","zachary","timothy","jeffrey","andre","emmanuel","rafael","miguel","luis","carlos","javier","alejandro","antonio","marco","matteo","lorenzo","bruno","valentino","stefan","ivan","viktor","alex","max","charlie","frankie","tommy","benny","joey","johnny","danny","sammy","bobby","billy","teddy","freddie","alfie","ollie","jamie","harry","toby","louie","reggie","harvey","rory","callum","kieran","cian","aidan","alexis","bryce","dalton","ellis","finley","graham","hayden","jasper","maddox","quinn","reid","sawyer","shane","tanner","zane","zach","brody","cody","dawson"];
const box=document.createElement('div');
box.id='recentActivityToast';
box.setAttribute('role','status');
box.setAttribute('aria-live','polite');
box.innerHTML='<span class="activity-text"></span>';
document.body.appendChild(box);
let activityOrder=[],i=0,audio;
function shuffleNames(){
  activityOrder=[...activityNames];
  for(let j=activityOrder.length-1;j>0;j--){
    const k=Math.floor(Math.random()*(j+1));
    [activityOrder[j],activityOrder[k]]=[activityOrder[k],activityOrder[j]];
  }
}
shuffleNames();
function unlock(){try{audio=audio||new(window.AudioContext||window.webkitAudioContext)();if(audio.state==='suspended')audio.resume()}catch(e){}}
['pointerdown','keydown','touchstart'].forEach(e=>document.addEventListener(e,unlock,{once:true,passive:true}));
function ring(){try{unlock();if(!audio)return;const t=audio.currentTime;[[880,0,.10],[660,.14,.08]].forEach(([freq,delay,vol])=>{const o=audio.createOscillator(),g=audio.createGain(),s=t+delay;o.type='sine';o.frequency.setValueAtTime(freq,s);g.gain.setValueAtTime(.0001,s);g.gain.exponentialRampToValueAtTime(vol,s+.015);g.gain.exponentialRampToValueAtTime(.0001,s+.11);o.connect(g);g.connect(audio.destination);o.start(s);o.stop(s+.12)})}catch(e){}}
function show(){if(i>=activityOrder.length){shuffleNames();i=0}
const n=activityOrder[i++];box.querySelector('.activity-text').textContent='🟢 '+n.charAt(0).toUpperCase()+n.slice(1)+' changed his Free Fire server';box.classList.remove('show');void box.offsetWidth;box.classList.add('show');ring();setTimeout(()=>box.classList.remove('show'),4300)}
setTimeout(show,1200);setInterval(show,15000);
})();