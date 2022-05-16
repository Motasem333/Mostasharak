document.getElementById("myRange").addEventListener("input",displayDate);
function displayDate()
{
document.getElementById("wnum").innerHTML=document.getElementById("myRange").value;
}


document.getElementById("myRange2").addEventListener("input",displayDate2);
function displayDate2()
{
document.getElementById("hnum").innerHTML=document.getElementById("myRange2").value;
}


document.getElementById("1").addEventListener("click",getVal);
function getVal()
{
var w=document.getElementById('wnum').innerHTML;
var h=document.getElementById('hnum').innerHTML;
var age=document.getElementById('age').innerHTML;
h2=(w/((h/100)**2));
console.log(h2);
h3=h2.toString();
document.getElementById('r').innerHTML = h3.substring(0, 4);
document.getElementById("r").style.color = "black";

function one()
{
document.getElementById('stat2').innerHTML = "تشير كتلة جسمك الى وزن مثالي ولا تحتاج الى تغيير عدد السعرات الحرارية"
}

function tow()
{
document.getElementById('stat2').innerHTML = "تشير كتلة الجسم الى وجود وزن زائد , يجب انقاص عدد السعرات الحرارية اليومية بمقدار 400 سعرة لأنقاص 1 كغ خلال اسبوع"
}

function three()
{
document.getElementById('stat2').innerHTML = "تشير كتلة الجسم الى وجود سمنة متوسطة, يجب انقاص عدد السعرات الحرارية اليومية بمقدار 600 سعرة لأنقاص 1 كغ خلال اسبوع"
}

function four()
{
document.getElementById('stat2').innerHTML = "تشير كتلة الجسم الى وجود سمنة مفرطة, يجب انقاص عدد السعرات الحرارية اليومية بمقدار 800 سعرة لأنقاص 1 كغ خلال اسبوع"
}


if (h2>=18.5 && h2<=25)
{
console.log("1");
document.getElementById("stat2").style.color = "black";
document.getElementById("cal").style.color = "black";
document.getElementById("stat").innerText = 'تشير كتلة الجسم الى وزن مثالي للمحافظة عليه ننصح بممارسة مجموعة التمارين عند التسجيل مع مستشارك' ;
one();
}


if (h2>25 && h2<=30)
{
console.log("2");
document.getElementById("cal").style.color = "black";
document.getElementById("stat2").style.color = "black";
document.getElementById("stat").innerText = 'تشير كلتة الجسم الى وزن زائد , ننصحك بلأطلاع على احدى الحميات الغذائية عند التسجيل مع مستشارك' ;
tow();
}


if (h2>30 && h2<=35)
{
document.getElementById("cal").style.color = "black";
console.log("3");
document.getElementById("stat2").style.color = "black";
document.getElementById("stat").innerHTML = "تشير كتلة الجسم الى سمنة متوسطة , لحل هذه المشكلة ننصحك بلأطلاع على احدى الحميات الغذائية عند التسجيل مع مستشارك";
three();
}


if (h2>35 && h2<=40)
{
document.getElementById("cal").style.color = "black";
console.log("4");
document.getElementById("stat2").style.color = "black";
document.getElementById("stat").innerHTML = "تشير كتلة الجسم الى سمنة مفرطة , لحل هذه المكشلة ننصحك بلأطلاع على الحميات الغذائية والتمارين عند التسجيل مع مستشارك";
four();
}


if (h2>40 || h2<18.5)
{
document.getElementById("stat").innerHTML = " ادخل قيم صحيحة"
document.getElementById('stat2').innerHTML = " تأكد من ادخال جميع القيم ";
document.getElementById("cal").style.color = "white";
document.getElementById("stat2").style.color = "black";
document.getElementById("r").style.color = "white";
}


male =  (w * 10)+(h*6.25)-(age*5)+5;
female = (w * 10)+(h*6.25)-(age*5)-161;
var select = document.getElementById('select').value;
var  gender= document.getElementById('gender').value;


if (gender == 1 && select==1.25)
{
re = (male*1.25).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 1 && select==1.375)
{
re = (male*1.375).toString();
console.log(re.substring(0,5));
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 1 && select==1.55)
{
re = (male*1.55).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 1 && select==1.725)
{
re = (male*1.725).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 0 && select==1.25)
{
re = (female*1.25).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 0 && select==1.375)
{
re = (female*1.375).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 0 && select==1.55)
{
re = (female*1.55).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}


if (gender == 0 && select==1.725)
{
re = (female*1.725).toString();
document.getElementById('cal').innerHTML = re.substring(0,6);
}
}
