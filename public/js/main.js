let search = document.getElementById('search');
let sport_id = document.getElementById('search');
search.addEventListener('change',function(){
            document.querySelector('.showcoaches').innerHTML='';

let req= new XMLHttpRequest();
req.onreadystatechange=function(){
    if(this.status==200 &&this.readyState==4){
        console.log(this.responseText);
        let result= JSON.parse(this.responseText);
       
        result.forEach(element => {
            console.log(element.name)
             let coachname=document.createElement('p')
        coachname.className='coachname';
        let mytext = document.createTextNode(element.name)
        coachname.append(mytext);
        document.querySelector('.showcoaches').append(coachname);

        });
        
     }
}
req.open('get','http://127.0.0.1:8000/coaches/'+sport_id.value);
req.send();
})