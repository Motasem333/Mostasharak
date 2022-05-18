

/*
                let Buttons = ["Done","Done1","Done2","Done3"]
                function PrGo (arr){
                    for (i=0;i<=3;i++ ){
                        console.log(arr[i]);
                        let Pr = document.getElementById("Done").style.width
                    }
                }
                PrGo(Butt)*/
                let Pr = document.getElementsByClassName("progress-bar");
                Prw = Pr.style.width;
                console.log(Prw);
                function m(str){

                    var match = str.match(/(\d+)/);
                    return match[0]
                }
                console.log(m(Prw));

                Prp = m(Prw)
                document.getElementById("points").innerHTML = Prp
                document.getElementById("Done").addEventListener("click",done);
                function done()
                { 
                    console.log("Ahmed");
                    Prp = parseInt(Prp)
                    Prp+=parseInt(8)
                    document.getElementById("points").innerHTML = Prp
                    console.log(Prp);
                    Pr.style.width = Prp+'px';
                    document.getElementById("Done").setAttribute('disabled', 'disabled')  ;
                }


               

                document.getElementById("Get1").addEventListener("click",code);
                function code()
                {
                    document.getElementById("Get0").style.display = "initial";
                    document.getElementById("cancel").style.display = "initial";
                if (Prp <500){
                    document.getElementById("Get0").innerHTML = "لم يتم الحصول على عدد نقاط كافي"
                    document.getElementById("Get0").style.marginRight = "3vh";   
                }
                if (Prp >500){
                    function getRndInteger(min, max) {
                    return Math.floor(Math.random() * (max - min)) + min;
                    }
                    document.getElementById('Get0').innerHTML = getRndInteger(111111,999999)
                    document.getElementById("Get0").style.marginRight = "3vh";
                    document.getElementById("Get1").setAttribute('disabled', 'disabled')
                }
                }

                document.getElementById("cancel").addEventListener("click",cancel);
                function cancel()
                { 
                    document.getElementById("Get0").style.display = "none";
                    document.getElementById("cancel").style.display = "none";
                    document.getElementById("Get0").style.marginRight = "-40vh";
                }
                