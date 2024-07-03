window.onload = init

function init(){

    let inpt =  document.querySelector("input");
    generate.onclick = () => {
        if(check()){
            //start fetching
            
            let names = inpt.value.trim().split(' ')
            let url = `/php/process/start.php?first=${names[0][0].toUpperCase()}&second=${names[1][0].toUpperCase()}`
            var req = new Request(url)
            fetch( req ).then(response => response.blob()).then((blob) => {
                    let url = URL.createObjectURL(blob);
                    document.querySelector("#pic").src = url;
                })



        }else{
            alert("sorry some thing may be done mistaken")
        }
        //fetch api
    }


    function check(){
        let val = inpt.value.trim();
        if( val == "" ){
            return false;
        }else{
            if(val.split(" ").length != 2){
                return false
            }

            return true;
        }
    }



}