const key = "Openheimer"

const decrypted = CryptoJS.AES.encryption(value,key);
console.log(decrypted);
if(value == ""){
  doument.location.href="../index.html"
}
