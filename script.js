function Formdata(data){
if (data.username != null && data.username.value.length < 3 )
{
alert('Заполните поле «Ваше имя»');
return false;}

if(data.email != null && data.email.value.length == 0)
{
alert('поле «E-Mail» пустое');
return false;}

if(data.email != null && data.email.value.length < 6)
{
alert('слишком короткий «E-Mail»');
return false;}

//if(!(/^\w+[-_\.]*\w+@\w+-?\w+\.[a-z]{2,4}$/.test(data.email.value)) )
//{
//alert('Введите правильный E-Mail адрес');
//return false;}
}

//console.log(data.username);
//console.log(data.e-mail);
//console.log(data.message);