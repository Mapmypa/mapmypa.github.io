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

console.log(data.username.value);
console.log(data.e-mail.value);
console.log(data.message.value);

}
