// https://stackoverflow.com/questions/105034/how-to-create-guid-uuid

function generateGuid() {
  var result, i, j;
  result = '';
  for(j=0; j<32; j++) {
    if( j == 8 || j == 12 || j == 16 || j == 20) 
      result = result + '-';
    i = Math.floor(Math.random()*16).toString(16).toUpperCase();
    result = result + i;
  }
  return result;
}

var guid = generateGuid();
var src = document.getElementById("guid").getAttribute("src");
console.log(src, guid);
document.getElementById("guid").setAttribute('src', src + guid);